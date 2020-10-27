<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>なんちゃって掲示板システム</title>
    </head>
    <body>
        <?php
            if(isset($_POST['article'])){
                $article=$_POST['article'];
                echo $article;
            }
            $hostname = '127.0.0.1';
            $username = 'root';
            $password = 'dbpass';
            $dbname = 'article_post';
            $tablename = 'article_list';

            $link = mysqli_connect($hostname,$username,$password);
            if(!$link){
                exit("Connect error!");
            }
            $result = mysqli_query($link,"USE $dbname");
            //ここからないとき
            if(!$result) {
                $result = mysqli_query($link,"CREATE DATABASE $dbname CHARACTER SET utf8");
                if(!$result) {
                    echo "Create database $dbname failed!\n";
                }
                $result = mysqli_query($link,"USE $dbname");
                if(!$result) {
                        echo "USE failed!";
                }
                $result = mysqli_query($link,"CREATE TABLE $tablename (id INT NOT NULL AUTO_INCREMENT, article VARCHAR(840)BINARY, PRIMARY KEY(id)) CHARACTER SET utf8");
                if(!$result) {
                    exit("Create table $tablename failed!\n");
                } 
            }
            //ここまでないとき

            if(isset($_POST['article'])){
                $result = mysqli_query($link,"INSERT INTO $tablename SET article='$article'");
                if(! $result){
                    exit("INSERT error!");
                }
                echo "Create db and table and update succeeded!\n";
            }

            mysqli_close($link);
        ?>
        <div class="container">
        <p>なんちゃって掲示板システム</p>
        1   <?php
                if(isset($_POST['article'])){
                    echo $article;
                }
            ?>
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
    
