<?php

namespace App\Http\Controllers\FileManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Server;

class ServerController extends Controller
{
    public function dashboard(Server $server) {


        $path = base_path().'/vendor/bin/envoy';

        $process = new Process(['php', $path,'run', 'disk-space']);
        $process->setWorkingDirectory( base_path() );
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $output = explode("[root@192.46.212.165]: ", $process->getOutput());
        $output = array_values( array_filter(  $output ) );
        $output = end($output);

        $output = array_values( array_filter( explode( ' ', $output) ) ); 
        return $output;

        return $server;
    }
}
