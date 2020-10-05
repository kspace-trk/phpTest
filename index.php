<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>ページタイトル</title>
    </head>
    <body>
        <table>
                <!---------一番上の行-------->
                <tr class="color-cell">
                <td>x</td>
                <?php
                    for($i = 1; $i <10; $i++){
                        $x = "<td>$i</td>";
                        echo $x;
                    }
                ?>
                </tr>
                <!---------一番上の行-------->
                    <?php
                        $trStart = "<tr>";
                        $trEnd = "</tr>";
                        $i = 1;
                        
                        for($n = 1; $n < 10; $n++){
                            echo $trStart;
                            $x = "<td class='color-cell'>$i</td>";
                            $i++;
                            echo $x;
                            for($m = 1; $m < 10; $m++){
                                $x = $n * $m;
                                echo "<td>$x</td>";
                            }
                            echo $trEnd;
                        }
                        

                    ?>
        </table>
    </body>
</html>
<style>
body{
    display: grid;
    place-items: center;
}
table{
    border: 1px solid #707070;
}
td{
    width: 3rem;
    height: 2rem;
    text-align: center;
    border: 1px solid #707070;
}
.color-cell{
    background-color: #707070;
    color: #ffffff;
}
</style>
    
