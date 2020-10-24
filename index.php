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
    $dbname = 'testdb2';
    $tablename = 'money_management_list';

    $link = mysqli_connect($hostname,$username,$password);
    if(! $link){
        exit("Connect error!");
    }

    $result = mysqli_query($link,"CREATE DATABASE $dbname CHARACTER SET utf8");
    if(!$result) {
        echo "Create database $dbname failed!\n";
    }

    $result = mysqli_query($link,"USE $dbname");
    if(!$result) {
        exit("USE failed!");
    }

    $result = mysqli_query($link,"CREATE TABLE $tablename (id INT NOT NULL AUTO_INCREMENT, today DATE, inprice INT, outprice INT, memo VARCHAR(30) BINARY, PRIMARY KEY(id)) CHARACETR SET utf8");
    if(!$result) {
        exit("Create table $tablename failed!\n");
    }

    $result = mysqli_query($link,"INSERT INTO $tablename SET id=0, today='2020-10-25', inPrice=20000, outPrice=0, memo='work'");
    if(! $result){
        exit("INSERT error!");
    }

    echo "Create db and table and update succeeded!\n";

    mysqli_close($link);
?>
    </body>
</html>

