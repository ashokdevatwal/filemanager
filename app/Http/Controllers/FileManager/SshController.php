<?php

namespace App\Http\Controllers\FileManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use InvalidArgumentException;
use phpseclib\Crypt\RSA;
use phpseclib\Net\SCP;
use phpseclib\Net\SSH2;
use RuntimeException;

// $connection = (new SSHConnection())
//             ->to('test.rebex.net')
//             ->onPort(22)
//             ->as('demo')
//             ->withPassword('password')
//          // ->withPrivateKey($privateKeyPath)
//          // ->timeout(0)
//             ->connect();

// $command = $connection->run('echo "Hello world!"');

// $command->getOutput();  // 'Hello World'
// $command->getError();   // ''

// $connection->upload($localPath, $remotePath);
// $connection->download($remotePath, $localPath);


// $fingerprint = $connection->fingerprint();

// if ($newConnection->fingerprint() != $fingerprint) {
//     throw new Exception('Fingerprint does not match!');
// }

// $md5Fingerprint  = $connection->fingerprint(SSHConnection::FINGERPRINT_MD5); // default
// $sha1Fingerprint = $connection->fingerprint(SSHConnection::FINGERPRINT_SHA1);



class SshController extends Controller
{
    const EXECUTION_TIMEOUT_SECONDS = 30;
    const STREAM_BYTES_PER_READ = 4096;

    const FINGERPRINT_MD5 = 'md5';
    const FINGERPRINT_SHA1 = 'sha1';

     private $hostname;
    private $port = 22;
    private $username;
    private $password;
    private $privateKeyPath;
    private $timeout;
    private $connected = false;
    
    private $ssh;
    private $command;
    private $output;
    private $error;

    public function __construct(SSH2 $ssh, string $command)
    {
        $this->ssh = $ssh;
        $this->command = $command;

        $this->execute();
    }

    // Connection 

    public function to(string $hostname): self
    {
        $this->hostname = $hostname;
        return $this;
    }

    public function onPort(int $port): self
    {
        $this->port = $port;
        return $this;
    }

    public function as(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    public function withPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function withPrivateKey(string $privateKeyPath): self
    {
        $this->privateKeyPath = $privateKeyPath;
        return $this;
    }

    public function timeout(int $timeout): self
    {
        $this->timeout = $timeout;
        return $this;
    }

    private function sanityCheck()
    {
        if (!$this->hostname) {
            throw new InvalidArgumentException('Hostname not specified.');
        }

        if (!$this->username) {
            throw new InvalidArgumentException('Username not specified.');
        }

        if (!$this->password && (!$this->privateKeyPath)) {
            throw new InvalidArgumentException('No password or private key path specified.');
        }
    }

    public function connect(): self
    {
        $this->sanityCheck();

        $this->ssh = new SSH2($this->hostname, $this->port);

        if (!$this->ssh) {
            throw new RuntimeException('Error connecting to server.');
        }

        if ($this->privateKeyPath) {
            $key = new RSA();
            $key->loadKey(file_get_contents($this->privateKeyPath));
            $authenticated = $this->ssh->login($this->username, $key);
            if (!$authenticated) {
                throw new RuntimeException('Error authenticating with public-private key pair.');
            }
        }

        if ($this->password) {
            $authenticated = $this->ssh->login($this->username, $this->password);
            if (!$authenticated) {
                throw new RuntimeException('Error authenticating with password.');
            }
        }

        if ($this->timeout) {
            $this->ssh->setTimeout($this->timeout);
        }

        $this->connected = true;

        return $this;
    }

    public function disconnect(): void
    {
        if (!$this->connected) {
            throw new RuntimeException('Unable to disconnect. Not yet connected.');
        }

        $this->ssh->disconnect();
    }

    public function run(string $command): SSHCommand
    {
        if (!$this->connected) {
            throw new RuntimeException('Unable to run commands when not connected.');
        }

        return new SSHCommand($this->ssh, $command);
    }

    public function fingerprint(string $type = self::FINGERPRINT_MD5)
    {
        if (!$this->connected) {
            throw new RuntimeException('Unable to get fingerprint when not connected.');
        }

        $hostKey = substr($this->ssh->getServerPublicHostKey(), 8);

        switch ($type) {
            case 'md5':
                return strtoupper(md5($hostKey));

            case 'sha1':
                return strtoupper(sha1($hostKey));
        }

        throw new InvalidArgumentException('Invalid fingerprint type specified.');
    }

    public function upload(string $localPath, string $remotePath): bool
    {
        if (!$this->connected) {
            throw new RuntimeException('Unable to upload file when not connected.');
        }

        if (!file_exists($localPath)) {
            throw new InvalidArgumentException('The local file does not exist.');
        }

        return (new SCP($this->ssh))->put($remotePath, $localPath, SCP::SOURCE_LOCAL_FILE);
    }

    public function download(string $remotePath, string $localPath): bool
    {
        if (!$this->connected) {
            throw new RuntimeException('Unable to download file when not connected.');
        }

        return (new SCP($this->ssh))->get($remotePath, $localPath);
    }

    public function isConnected(): bool
    {
        return $this->connected;
    }

    //  Command 
    private function execute()
    {
        $this->ssh->enableQuietMode();
        $this->output = $this->ssh->exec($this->command);
        $this->error = $this->ssh->getStdError();
    }

    public function getRawOutput(): string
    {
        return $this->output;
    }

    public function getRawError(): string
    {
        return $this->error;
    }

    public function getOutput(): string
    {
        return trim($this->getRawOutput());
    }

    public function getError(): string
    {
        return trim($this->getRawError());
    }
}

