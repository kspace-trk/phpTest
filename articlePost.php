<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>なんちゃって掲示板システム</title>
    </head>
    <body>
        <div class="container">
            <p>記事入力画面</p>
            <form action="confirm.php" method="post" class="contents">
                <textarea name="article"><?php if(isset($_POST['article'])){ $article=$_POST['article']; echo $article; } ?></textarea>
                <button type="submit">新規投稿</button>
            </form>
                <button type="submit" onclick="location.href='index.php'">取り消し</button>
            
        </div>
    </body>
</html>
<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 80vh;
}
.container {
    width: 80%;
    max-width: 1000px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 75px;
}
.contents {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    margin-top: 40px;
}
textarea {
    max-width: 100%;
    width: 600px;
    height: 400px;
}
button {
    width: 400px;
    height: 75px;
    background-color: #FFFFFF;
    border: 4px solid #2C80F3;
    margin-top: 40px;
}
button:hover {
    background-color: #2C80F3;
    color: #FFFFFF;
}
</style>
    
