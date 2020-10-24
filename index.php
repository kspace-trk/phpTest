<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <!-- vim: set sts sw=4 expandtab : -->
        <title>ページタイトル</title>
    </head>
    <body>
        <form action="confirm.php" method="post" class="contents">
                id<input type="text" name="id"></input>
                date<input type="text" name="date"></input>
                inPrice<input type="text" name="inPrice"></input>
                outPrice<input type="text" name="outPrice"></input>
                contents<input type="text" name="contents"></input>
                <button onclick="location.href='articlePost.php'">レコード追加</button>
        </form>
    </body>
</html>

