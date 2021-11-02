<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./index.php" method="post">
        <h1>Register Page</h1>
        <input type="text" name="txt_name" placeholder="Name">
        <br>
        <input type="radio" name="rad_gender" value="Nam"> Nam
        <input type="radio" name="rad_gender" value="Nữ"> Nữ
        <br>
        <select name="cbo_hoppies">
            <option value="Ăn uống">Ăn uống</option>
            <option value="Du lịch">Du lịch</option>
            <option value="Chơi game">Chơi game</option>
        </select>\
        <br>
        <input type="checkbox" name="chk_confirm"> Tôi đã đọc và chấp nhận điều khoản
        <br>
        <button type="submit">Đăng ký</button>
    </form>
</body>

</html>