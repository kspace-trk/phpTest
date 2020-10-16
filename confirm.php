<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>ページタイトル</title>
    </head>
    <body>
        <div class="container">
            <p>以下の内容でよろしいですか？</p>
            <div class="confirm-contents"></div>
            <button onclick="location.href='index.php'">投稿</button>
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
}
button:hover {
    background-color: #2C80F3;
    color: #FFFFFF;
}
</style>
    
