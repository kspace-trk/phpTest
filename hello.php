<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
<h1>2つの画面</h1>
    <?php
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        echo $user;
        echo "<br>";
        echo $pass;
    ?>
    <form method="POST" action="result.php">
        <input type="hidden" name="user" value="<?php echo $user ?>">
        <input type="hidden" name="pass" value="<?php echo $pass ?>">
        <button type="submit" name="login" value="login">次へ</button>
    </form>
</body>
</html>