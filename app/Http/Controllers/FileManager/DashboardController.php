<?php

namespace App\Http\Controllers\FileManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Storage;


use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;


class DashboardController extends Controller
{
    public function dashboard(){


        return [$this->checkDiskSpace()];
        $path = base_path().'/vendor/bin/envoy';   
        // $process = new Process(['php','-envoy']);
        // $process->run();

        // if (!$process->isSuccessful()) {
        //     throw new \RuntimeException($process->getErrorOutput());
        // }

        // return response()->json(['output' => $process->getOutput()]);

        $output = [];
        // exec('pwd', $output);

        exec(" cd ../ && php $path run --password restart-queues", $output);

        // $process = new Process(['pwd']);
        // $process->run();

        // // executes after the command finishes
        // if (!$process->isSuccessful()) {
        //     throw new ProcessFailedException($process);
        // }

        // echo $process->getOutput();

        return $output;
        // return view('filemanager.dashboard.index');
    }


    public function checkDiskSpace()
    {
        $host = '192.46.212.165';
        $username = 'root';
        $password = 'Tractor@12345';

        // Example command to check disk space
        // $command = "ssh -p '{$password}' ssh {$username}@{$host} df -h";

        $process = new Process(['ssh','root@192.46.212.165','df -h']);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new \RuntimeException($process->getErrorOutput());
        }

        return $output = $process->getOutput();

        // return view('server-monitor.check-disk-space', ['output' => $output]);
    }

    public function disk_occupied()
    {
        $disktotal = disk_total_space('/'); //DISK usage
        $disktotalsize = $disktotal / 1073741824;

        $diskfree  = disk_free_space('/');
        $used = $disktotal - $diskfree;

        $diskusedize = $used / 1073741824;
        $diskuse1   = round(100 - (($diskusedize / $disktotalsize) * 100));
        $diskuse = round(100 - ($diskuse1)) . '%';
            
        return view('home',compact('diskuse','disktotalsize','diskusedize'));
    }
}
