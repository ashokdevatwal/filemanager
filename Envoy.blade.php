@servers(['localhost' => 'root@192.46.212.165' ])

@task('disk-space', ['on' => 'localhost'])
    df -h --total
@endtask

