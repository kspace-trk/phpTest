<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>ページタイトル</title>
    </head>
    <body>
        <div class="container">
            <?php
                        echo '<div class="items-wrapper">';
                        if(isset($_GET['apple'])){
                            $apple = $_GET['apple'];
                            echo "<p>リンゴの個数が $apple 個</p>";
                        }else{
                            $apple = 0;
                            echo "<p>リンゴの個数が 0 個</p>";
                        }

                        if(isset($_GET['banana'])){
                            $banana = $_GET['banana'];
                            echo "<p>バナナの個数が $banana 個</p>";
                        }else{
                            $banana = 0;
                            echo "<p>バナナの個数が 0 個</p>";
                        }
                        

                        if(isset($_GET['pine'])){
                            $pine = $_GET['pine'];
                            echo "<p>パイナップルの個数が $pine 個</p>";
                        }else{
                            $pine = 0;
                            echo "<p>パイナップルの個数が 0 個</p>";
                        }
                        echo '</div>';
                        
                        echo '<div class="items-wrapper">';
                            echo "<a href='http://127.0.0.1:10800/~sspuser?apple=".($apple+1)."&banana=".$banana."&pine=".$pine."'>リンゴを1個追加</a>";
                            echo "<a href='http://127.0.0.1:10800/~sspuser?apple=".$apple."&banana=".($banana+1)."&pine=".$pine."'>バナナを1個追加</a>";
                            echo "<a href='http://127.0.0.1:10800/~sspuser?apple=".$apple."&banana=".$banana."&pine=".($pine+1)."'>パイナップルを1個追加</a>";
                        echo '</div>';              
                    
            ?>
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
table {
    border: 1px solid #404040;
}
td {
    border: 1px solid #404040;
}
p {
    font-size: 1.5rem;
    color: #404040;
}
a {
    height: 1rem;
    margin: 1rem;
}
.container {
    width: 80%;
    max-width: 1000px;
}
.items-wrapper {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
</style>
    
