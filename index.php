<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <!-- vim: set sts sw=4 expandtab : -->
        <title>ページタイトル</title>
    </head>
    <body>
<?php
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = 'dbpass';
    $dbname = 'testDB';
    $tablename = 'table1';

    $link = mysqli_connect($hostname,$username,$password);
    if(!$link){
        exit("Connect error!");
    }

    $result = mysqli_query($link,"USE $dbname");
    if(!$result) {
        exit("USE failed!");
    }

    $result = mysqli_query($link,"INSERT INTO $tablename SET id=0, date='2020-10-25', inPrice=20000, outPrice=0, contents='work'");
    if(! $result){
        exit("INSERT error!");
    }

    echo "Create db and table and update succeeded!\n";

    mysqli_close($link);
?>
    </body>
</html>

