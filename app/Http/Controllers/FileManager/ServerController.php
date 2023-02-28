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

    public function dashboard(Server $server) {

        $server->connect();

        $total_disk_space = $server->getDiskTotalSpace();
        $init_tree        = $server -> storage_tree();
        $init_dir_tree    = $server->getDirectoryTree( "$server->storage_root{$init_tree[0]['name']}" );

        // $password = "eyJpdiI6IitIQ0VlLzB0dEsvd3VsTFRZOXlqTXc9PSIsInZhbHVlIjoibUZYVktLMWVFSTAzM2lldTdza0FHUT09IiwibWFjIjoiNzE4ZTc1ZWIyNzliNzhmYzRmMDkwYzM5NDAwNjNlY2I4MTJkNzY4MjVlNjQ2YmE5M2Q4NzUxZjA1MDI2ODIyNSIsInRhZyI6IiJ9";

        // $total = (int)filter_var( $total_disk_space['total'], FILTER_SANITIZE_NUMBER_INT);
        // $used  = (int)filter_var( $total_disk_space['used'], FILTER_SANITIZE_NUMBER_INT);

        // return $percentage = ( $used / $total ) * 100;
        
        return view('filemanager.server.dashboard')->with([
            'server'            => $server,
            'total_disk_space'  => $total_disk_space,
            'init_tree'         => $init_tree,
            'init_dir_tree'     => $init_dir_tree
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
}
