<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>なんちゃって掲示板システム</title>
    </head>
    <body>
        <div class="container">
            <p>以下の内容でよろしいですか？</p>
            <div class="confirm-contents" name="article">
                <?php
                    $article=$_POST['article'];
                    echo  $article;
                ?>
            </div>
            <form method="post" class="contents">
                <input type="hidden" name="article" value="<?php echo $article; ?>">
                <button formaction="index.php">投稿</button>
            <input type="hidden" name="article" value="<?php echo $article; ?>">
                <button formaction="articlePost.php">修正</button>
            </form>
        </div>
    </body>
</html>
<style>
body{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 80vh;
}
.container {
    width: 80%;
    max-width: 1000px;
    height: 80vh;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
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
.confirm-contents {
    max-width: 100%;
    width: 600px;
    height: 300px;
    border: 3px solid #404040;
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
    
