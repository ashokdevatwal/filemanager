<?php

namespace App\Http\Controllers\FileManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Storage;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('filemanager.dashboard.index');
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
