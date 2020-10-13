<!DOCTYPE html>
<html>
<?php
$price['apple'] = 150;
$price['orange'] = 120;
$price['pinapple'] = 300;
?>
    <head>
        <meta charset="UTF-8" />
        <title>ページタイトル</title>
    </head>
    <body>
    <table>
        <?php
        foreach ($price as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
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
    
