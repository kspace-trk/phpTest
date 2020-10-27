<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>なんちゃって掲示板システム</title>
    </head>
    <body>
        <div class="container">
        <p>なんちゃって掲示板システム</p>
            <button onclick="location.href='articlePost.php'">新規投稿</button>
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
    height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
}
button {
    width: 400px;
    height: 75px;
    background-color: #FFFFFF;
    border: 4px solid #2C80F3;
}
button:hover {
    background-color: #2C80F3;
    color: #FFFFFF;
}
</style>
    
