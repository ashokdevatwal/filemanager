<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

use App\Http\Library\SSHConnection;
use App\Http\Library\ParseConsoleOutput;

class Server extends Model
{
    use HasFactory;

    protected $connection = null;


    // find . -type d | sed -e "s/[^-][^\/]*\//  |/g" -e "s/|\([^ ]\)/| - \1/"


    public function connect() {
        $this->connection = (new SSHConnection())
            ->to($this->host)
            ->onPort(22)
            ->as($this->username)
            ->withPassword($this->getPassword())
         // ->withPrivateKey($privateKeyPath)
         // ->timeout(0)
            ->connect();

    }

    public function getPassword() {
        try {
          return  $decrypted = Crypt::decryptString($this->password);
        } catch (DecryptException $e) {
            //
        }
    }
 
    public function getDiskTotalSpace() {
        $command = $this->connection->run('df -h --total');

        return ParseConsoleOutput::totalDiskSpace( $command->getOutput() );
    }

    public function storage_tree() {
        $command = $this->connection->run("ls -l $this->storage_root");

        return ParseConsoleOutput::directoryTree( $command->getOutput() );
    }

    public function getDirectoryTree( $path ) {
        $command = $this->connection->run("ls -l $path");

        return ParseConsoleOutput::directoryTree( $command->getOutput() );
    }

    public function createDirectory($path) {
        $command = $this->connection->run("mkdir $path");
        return true;
    }

    public function getDirectory( $path ) {
        $directory_array = explode("/", $path );
        $directory_array = array_filter( $directory_array , function($value) {
            return ($value !== null && $value !== false && $value !== ''); 
        });

        return end( $directory_array );
    }

    public function parentDirectory( $path ) {
        
        $directory_array = explode("/", $path );
        $directory_array = array_filter( $directory_array , function($value) {
            return ($value !== null && $value !== false && $value !== ''); 
        });

        array_pop( $directory_array );
        
        return "/".implode('/', $directory_array );
    }

    public function createFile($path) {
        $command = $this->connection->run("touch $path");
        return true;
    }
 
}
