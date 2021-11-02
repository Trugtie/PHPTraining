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
            <?php 
            $arrSoThich = array("bd"=>"Bóng đá","cl"=>"Cầu lông","bc"=>"Bóng chuyền");
            foreach($arrSoThich as $key => $value):
            ?>
            <option value="<?php echo $value ?>"><?php echo $value ?></option>
            <?php endforeach; ?>
        </select>\
        <br>
        <input type="checkbox" name="chk_confirm"> Tôi đã đọc và chấp nhận điều khoản
        <br>
        <button type="submit">Đăng ký</button>
    </form>
</body>

</html>