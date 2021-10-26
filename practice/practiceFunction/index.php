<?php include "./function.php"  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr2 = array("a" => [3, 5], "b" => 3, "c" => 5, "d" => 8, "e" => 6);
    var_dump($arr2);
    xuatKeyValue($arr2);
    xuatKeyValue2($arr2);
    echo "<br/>";
    xuat3($arr2);
    ?>
    <form action="./login.php" method="post">
        <h3>Login:</h3>
        <input type="text" name="username">
        <h3>Password:</h3>
        <input type="password" name="password" placeholder="Enter your...">
        <button type="submit">Submit</button>
    </form>
</body>

</html>