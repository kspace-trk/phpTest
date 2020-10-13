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
        <?php
        foreach ($price as $key => $value) {
            echo "<p>$value</p>";
        }
        ?>
    </body>
</html>
<style>
body{
    display: grid;
    place-items: center;
}
</style>
    
