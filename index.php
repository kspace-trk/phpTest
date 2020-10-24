<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <!-- vim: set sts sw=4 expandtab : -->
        <title>ページタイトル</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="title">
            <p>課題8-2</p>
        </div>
        <form action="addRecord.php" method="post" class="contents">
        <div class="input-form">
            <p>today</p>
            <input type="text" name="today"></input>
        </div>
        <div class="input-form">
            <p>inPrice</p>
            <input type="text" name="inPrice"></input>
        </div>
        <div class="input-form">
            <p>outPrice</p>
            <input type="text" name="outPrice"></input>
        </div>
        <div class="input-form">
            <p>contents</p>
            <input type="text" name="contents"></input>
        </div>
            <button type="submit">レコード追加</button>
        </form>
    </body>
</html>
