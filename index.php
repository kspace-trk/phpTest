<!DOCTYPE html>
 <html>
    <head>
        <meta charset="UTF-8" />
        <title>ページタイトル</title>
    </head>
    <body>
        <?php 
            for($i = 1; $i <= 500 ; $i++){
                echo '<p>'.$i.'行目：Lorem ipsum</p>';
            }
        ?>
    </body>
</html>