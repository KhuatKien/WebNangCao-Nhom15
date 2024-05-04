<?php
    $host = "localhost";
    $user = "root";
    $password = "123456789";
    $con = mysqli_connect($host, $user, $password);

    mysqli_select_db($con, "login");
    session_start();

    if (!isset($_SESSION["IsLogin"])) {
        $_SESSION["IsLogin"] = false;
    }
    // Kiểm tra xem nút Đăng nhập đã được bấm chưa
    if(isset($_POST['login_submit'])) {
        // Lấy dữ liệu từ form
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM tbllogin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $query);

        // Kiểm tra kết quả trả về
        if(mysqli_num_rows($result) == 1) {
            // $content="/BT_login/logout.php";
            // echo ("<script>location.href='$content'</script>");
            $_SESSION["IsLogin"] = true;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: home.php");
        } else {
            echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng!'); window.location.href = 'login.php';</script>";
        }
    }


?>