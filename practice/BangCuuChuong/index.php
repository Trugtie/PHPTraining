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
    <section>
        <!-- Cho một mảng một chiều  : Hãy tìm số lớn nhât, số nhỏ nhât và sắp xếp  các số theo thứ tự tăng dần. -->
        <header>
            <h1>MẢNG MỘT CHIỀU</h1>
        </header>
        <div class="container" style="display:flex; justify-content:center;">
            <div class='cuuchuong-container' style="max-width: 100rem;width:100%;">
                <?php
                $array = [2, 5, 6, 8, 1];
                $arrayStr = implode(",", $array);
                echo "Mảng một chiều: $arrayStr";
                echo $max = max($array) . "<br>";
                echo $min = min($array) . "<br>";
                $array = explode(",", $arrayStr);
                sort($array);
                $arrayStr = implode(",", $array);
                echo "Mảng một chiều theo thứ tự tăng dần: $arrayStr";
                ?>
            </div>
        </div>
    </section>
    <footer>
        Author: Trugtie
    </footer>
</body>

</html>