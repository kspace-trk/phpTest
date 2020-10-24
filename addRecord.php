<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <!-- vim: set sts sw=4 expandtab : -->
        <title>ページタイトル</title>
    </head>
    <body>
<?php
    $today=$_POST['today'];
    $inPrice=$_POST['inPrice'];
    $outPrice=$_POST['outPrice'];
    $contents=$_POST['contents'];
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

    $result = mysqli_query($link,"INSERT INTO $tablename SET today='$today', inPrice=$inPrice, outPrice=$outPrice, contents='$contents'");
    echo "id:$id, today:$today, inPrice:$inPrice, outPrice:$outPrice, contents:$contents";
    if(!$result){
        exit("INSERT error!");
    }

    echo "Create db and table and update succeeded!\n";

    mysqli_close($link);
?>
    </body>
</html>

