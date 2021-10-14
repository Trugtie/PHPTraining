<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP practice">
    <meta name="author" content="Trugtie">
    <meta name="keywords" content="PHP, PHPPractice">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section>
        <div class="container">
            <div class="input">
            <h1 class="title">Giải phương trình bậc 2</h1>
            <form action="./giaiphuongtrinh.php">
            <h2 class="subtitle">Số a: </h2>
            </div>
            <div class="input">
            <input type="text" class="number" name="numberA">
            <h2 class="subtitle">Số b: </h2>
            <input type="text" class="number" name="numberB">
            </div>
            <button type="submit" class="btn">Tính</button>
        </form>
            <div class="result"></div>
        </div>
    </section>
</body>
</html>