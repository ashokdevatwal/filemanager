<!-- $ssh = [
    'key' => '/development/ashok/.ssh/id_rsa',
]; -->

@servers(['localhost' => 'root@192.46.212.165' ])
@server('localhost',['password' => 'Tractor@123'])
 
@task('restart-queues', ['on' => 'localhost'])
    df -h
    pwd
@endtask

