<!DOCTYPE html>
<html>
<?php
$a[0]['date']='2010/4/1';
$a[0]['temperature']=20.3;
$a[0]['pressure']=980;
$a[0]['humidity']=60;

$a[1]['date']='2010/4/2';
$a[1]['temperature']=22.3;
$a[1]['pressure']=970;
$a[1]['humidity']=50;

$a[2]['date']='2010/4/4';
$a[2]['temperature']=18.3;
$a[2]['pressure']=950;
$a[2]['humidity']=70;
?>
    <head>
        <meta charset="UTF-8" />
        <title>ページタイトル</title>
    </head>
    <body>
    <table>
        <?php
        foreach ($a as $key => $value) {
            foreach ($a[$key] as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
            }
        }
        ?>
        </table>
    </body>
</html>
<style>
body{
    display: grid;
    place-items: center;
}
table {
    border: 1px solid #404040;
}
td {
    border: 1px solid #404040;
}
</style>
    
