<?php

namespace App\Http\Controllers\FileManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Server;
use App\Http\Library\SSHConnection;

class ServerController extends Controller
{

    // ext-libsodium 
    // ext-libsodium 
    // ext-mcrypt
    // ext-gmp 

    public function dashboard(Server $server) {

        $connection = (new SSHConnection())
            ->to($server->host)
            ->onPort(22)
            ->as($server->username)
            ->withPassword('Tractor@12345')
         // ->withPrivateKey($privateKeyPath)
         // ->timeout(0)
            ->connect();

        $command = $connection->run('df -h');

        return $command->getOutput();  // 'Hello World'


        // $path = base_path().'/vendor/bin/envoy';

        // $process = new Process(['php', $path,'run', 'disk-space']);
        // $process->setWorkingDirectory( base_path() );
        // $process->run();

        // // executes after the command finishes
        // if (!$process->isSuccessful()) {
        //     throw new ProcessFailedException($process);
        // }

        // $output = explode("[root@192.46.212.165]: ", $process->getOutput());
        // $output = array_values( array_filter(  $output ) );
        // $output = end($output);

        // $output = array_values( array_filter( explode( ' ', $output) ) ); 
        // return $output;

        return $server;
    }
}
