<?php
function randomColor()
{
    $colors = ["#50cbf7", "#00b298", "#8ec545", "#fcad2c", "#ef3564"];
    $color = "";
    $color = $colors[rand(0, count($colors) - 1)];
    return $color;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bang cuu chuong">
    <meta name="author" content="Trugtie">
    <meta name="keywords" content="Bang cuu chuong, PHP, Traning">
    <title>BangCuuChuong</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h1>BẢNG CỬU CHƯƠNG</h1>
    </header>
    <section>
        <div class="container">
            <?php
            $i = 1;
            $j = 0;
            while ($i <= 10) {
                $colorRandom = randomColor();
                echo "<div class='cuuchuong-container' style='background-color: $colorRandom '>";
                while ($j < 10) {
                    $result = $i * $j;
                    echo "$i x $j = $result <br>";
                    $j++;
                }
                echo "</div>";
                $i++;
                $j = 0;
            }
            ?>
        </div>
    </section>
    <footer>
        Author: Trugtie
    </footer>
</body>

</html>