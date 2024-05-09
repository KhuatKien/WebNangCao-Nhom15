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

        $check_password = sha1($password); 
        echo $check_password;
        $query = "SELECT * FROM tbllogin WHERE username='$username' AND password='$check_password'";
        $result = mysqli_query($con, $query);

        // Kiểm tra kết quả trả về
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result); // Lấy dữ liệu từ kết quả truy vấn
            $_SESSION["IsLogin"] = true;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $row['role'];
            $_SESSION['password'] = $password;
            

            if($_SESSION['role'] == 'admin') {
                header("Location: admin.php");
            } elseif ($_SESSION['role'] == 'user') {
                header("Location: home.php");
            } else {
                echo "<script>alert('Vai trò không hợp lệ!'); window.location.href = 'login.php';</script>";
            }
        } else {
            echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng!'); window.location.href = 'login.php';</script>";
        }
    }


?>