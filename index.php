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
        $tablename = 'money_management_list';

        $link = mysqli_connect('127.0.0.1','root','dbpass',$dbname);
        if(! $link){ exit("Connect error!"); }

        $result = mysqli_query($link,"SELECT * FROM $tablename");
        if(!$result){ exit("Select error on table ($tablename)!"); } 
        echo "<table>";
            echo "<tr>";
                echo "<td>";
                    echo "id";
                echo "</td>";
                echo "<td>";
                    echo "日付";
                echo "</td>";
                echo "<td>";
                    echo "収入";
                echo "</td>";
                echo "<td>";
                    echo "支出";
                echo "</td>";
                echo "<td>";
                    echo "メモ";
                echo "</td>";
            echo "</tr>";
            while($row = mysqli_fetch_row($result))
            {
                
                echo "<tr>";
                foreach($row as $key => $value)
                {
                    echo "<td>";
                        echo htmlspecialchars($value);
                    echo "</td>";
                }
            }
            echo "</tr>";
        echo "</table>";

        mysqli_free_result($result);

        mysqli_close($link);
    ?>
    </body>
</html>