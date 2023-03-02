<?php

namespace App\Http\Controllers\FileManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Server;
use Illuminate\Support\Facades\Crypt;
use App\Http\Library\SSHConnection;

use Redirect;

class ServerController extends Controller
{

    // ext-libsodium 
    // ext-libsodium 
    // ext-mcrypt
    // ext-gmp 

    public function dashboard(Request $request, Server $server) {


        $server->connect();

        $total_disk_space = $server->getDiskTotalSpace();
        $init_tree        = $server->storage_tree();

        if( $request->has('current_dir') ) {
            $current_directory =  $request->current_dir;
        }else{
            $current_directory =  $server->storage_root;
        }

        $init_dir_tree    = $server->getDirectoryTree( $current_directory );
 
        // $password = "eyJpdiI6IitIQ0VlLzB0dEsvd3VsTFRZOXlqTXc9PSIsInZhbHVlIjoibUZYVktLMWVFSTAzM2lldTdza0FHUT09IiwibWFjIjoiNzE4ZTc1ZWIyNzliNzhmYzRmMDkwYzM5NDAwNjNlY2I4MTJkNzY4MjVlNjQ2YmE5M2Q4NzUxZjA1MDI2ODIyNSIsInRhZyI6IiJ9";

        // $total = (int)filter_var( $total_disk_space['total'], FILTER_SANITIZE_NUMBER_INT);
        // $used  = (int)filter_var( $total_disk_space['used'], FILTER_SANITIZE_NUMBER_INT);

        // return $percentage = ( $used / $total ) * 100;
        
        return view('filemanager.server.dashboard')->with([
            'server'            => $server,
            'total_disk_space'  => $total_disk_space,
            'init_tree'         => $init_tree,
            'init_dir_tree'     => $init_dir_tree,
            'current_directory' => $current_directory
        ]);
    }

    public function addServer(Request $request) {

        $server  = new Server;
        $server->title = $request->title;
        $server->host = $request->host;
        $server->username = $request->username;
        $server->password =  Crypt::encryptString( $request->password );
        $server->public_key = $request->public_key;
        $server->private_key = $request->private_key;
        $server->storage_root = $request->storage_root;
        $server->save();

        return Redirect::back();
    }

    public function addFolder( Request $request ) {
        $server  =  Server::where('id', $request->server_id)->first();

        if( $request->has('current_dir') ) {
            $current_directory =  $request->current_dir;
        }else{
            $current_directory =  $server->storage_root;
        }

        if( substr($current_directory, -1) == '/' )
            $new_dir_path = $current_directory.$request->path;
        else 
            $new_dir_path = $current_directory.'/'.$request->path;

        $server->connect();
        $server->createDirectory( $new_dir_path );

        return Redirect::back();
    }

    public function addFile( Request $request ) {
        $server  =  Server::where('id', $request->server_id)->first();

        if( $request->has('current_dir') ) {
            $current_directory =  $request->current_dir;
        }else{
            $current_directory =  $server->storage_root;
        }

        if( substr($current_directory, -1) == '/' )
            $new_file_path = $current_directory.$request->name;
        else 
            $new_file_path = $current_directory.'/'.$request->name;

        $server->connect();
        $server->createFile( $new_file_path );

        return Redirect::back();
    }
}
