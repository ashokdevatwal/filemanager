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

    public function connect(){
        $this->connection = (new SSHConnection())
            ->to($this->host)
            ->onPort(22)
            ->as($this->username)
            ->withPassword($this->getPassword())
         // ->withPrivateKey($privateKeyPath)
         // ->timeout(0)
            ->connect();

    }

    public function getPassword(){
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

    public function storage_tree(){
        $command = $this->connection->run("ls -l $this->storage_root");

        return ParseConsoleOutput::directoryTree( $command->getOutput() );
    }

    public function getDirectoryTree( $path ){
        $command = $this->connection->run("ls -l $path");

        return ParseConsoleOutput::directoryTree( $command->getOutput() );
    }


    


}
