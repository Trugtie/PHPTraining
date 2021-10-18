<?php
$a = "";
$b = "";
$c = "";
$render = "";
$resultRender = "";
$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float)$_POST['numberA'];
    if ($a == 0) {
        $error = "Số a không được bằng 0";
    } else {
        $b = (float)$_POST['numberB'];
        $c = (float)$_POST['numberC'];

        $render = "$a" . "x<sup>2</sup> + $b" . "x + $c = 0";
        $resultRender = giaiPhuongTrinhBac2($a, $b, $c);
    }
}

function giaiPhuongTrinhBac2($a, $b, $c)
{
    $result = "";
    if ($a + $b + $c == 0) {
        $x2 = $c / $a;
        $result = "Phương trình có 2 nghiệm phân biệt: 
                x1 =  1 , x2 = $x2";
    } else if ($a - $b + $c == 0) {
        $x2 = -$c / $a;
        $result = "Phương trình có 2 nghiệm phân biệt: 
                x1 =  -1 , x2 = $x2";
    } else {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            $result = "Phương trình vô nghiệm";
        } else if ($delta == 0) {
            $x = -$b / (2 * $a);
            $result = "Phương trình có nghiệm kép x1 = x2 = $x";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            $result = "Phương trình có 2 nghiệm phân biệt: 
                                    x1 =  $x1 , x2 = $x2";
        }
    }
    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP practice">
    <meta name="author" content="Trugtie">
    <meta name="keywords" content="PHP, PHPPractice">
    <title>PTB2</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <section>
        <div class="container">
            <h1 class="title">Giải phương trình bậc 2</h1>
            <?php if (!empty($error))
                echo "<h3 class='title-check'>$error</h3>";
            ?>
            <form action="./index.php" method="post">
                <div class="input">
                    <h2 class="subtitle">Số a: </h2>
                    <input type="text" class="number" name="numberA" value="<?php echo $a ?>">
                </div>
                <div class="input">
                    <h2 class="subtitle">Số b: </h2>
                    <input type="text" class="number" name="numberB" value="<?php echo $b ?>">
                </div>
                <div class="input">
                    <h2 class="subtitle">Số c: </h2>
                    <input type="text" class="number" name="numberC" value="<?php echo $c ?>">
                </div>
                <button type="submit" class="btn">Tính</button>
            </form>
            <?php if (empty($render)) : ?>
                <h2 class="title title-result">ax<sup>2</sup>+bx+c=0 (a ≠ 0) </h2>
            <?php endif; ?>
            <?php if (!empty($render)) : ?>
                <h2 class="title title-result"><?php echo $render; ?></h2>
            <?php endif; ?>
            <h2 class="title title-result">Kết quả</h2>
            <?php if (!empty($resultRender)) : ?>
                <h2 class="title title-result"><?php echo $resultRender; ?></h2>
            <?php endif; ?>
            <h3 class="title title-result">Author: <a href="https://github.com/Trugtie">Trugtie</a> </h3>
        </div>
    </section>
</body>

</html>