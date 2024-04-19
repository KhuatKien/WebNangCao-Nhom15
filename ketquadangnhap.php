<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $_REQUEST["txtName"];
        $password = $_REQUEST["txtPassword"];
    ?>

    <h2 style="color: blue;">Kết quả đăng nhập</h2>
    Tên đăng nhập là : <span style="color: red;"><?php echo $name ?></span><br><br>
    Mật khẩu là : <span style="color: red;"><?php echo $password ?></span>
</body>
</html>