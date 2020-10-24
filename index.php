<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <!-- vim: set sts sw=4 expandtab : -->
        <title>ページタイトル</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
        $dbname = 'testdb2';
        $tablename = 'table1';

        $link = mysqli_connect('127.0.0.1','root','dbpass',$dbname);
        if(! $link){ exit("Connect error!"); }

        $result = mysqli_query($link,"SELECT * FROM $tablename");
        if(!$result){ exit("Select error on table ($tablename)!"); } 

        while($row = mysqli_fetch_row($result))
        {
            echo "<hr>";
            foreach($row as $key => $value)
            {
                echo htmlspecialchars($key) . "  : ";
                echo htmlspecialchars($value) . "<br>";
            }
        }
        echo "<hr>";

        mysqli_free_result($result);

        mysqli_close($link);
    ?>
    </body>
</html>
