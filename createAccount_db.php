<?php 
    session_start();
    require_once('server.php');

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $urole = 'user';

        if (empty($username)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อ';
            header('location: createAccount.php');
        }
        else if (empty($email)) {
            $_SESSION['error'] = 'กรุณากรอกอีเมล';
            header('location: createAccount.php');
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
            header('location: createAccount.php');
        }
        else if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header('location: createAccount.php');
        }
        else if (strlen($_POST['password']) < 8) {
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวอย่างน้อย 8 ตัวอักษร';
            header('location: createAccount.php');
        }
        else if (empty($c_password)) {
            $_SESSION['error'] = 'กรุณายืนยันรหัสผ่าน';
            header('location: createAccount.php');
        }
        else if ($password != $c_password) {
            $_SESSION['error'] = 'รหัสผ่านไม่ตรงกัน';
            header('location: createAccount.php');
        } else {
            try {

                $user_check_query = "SELECT * FROM member WHERE member_name = '$username' OR member_email = '$email'";
                $query = mysqli_query($conn, $user_check_query);
                $result = mysqli_fetch_assoc($query);

                if ($result) {
                    if ($result['member_name'] === $username) {
                        $_SESSION['error'] = "ชื่อนี้ถูกใช้งานไปแล้ว";
                        header('location: createAccount.php');
                    }
                    if ($result['member_email'] === $email) {
                        $_SESSION['error'] = "อีเมลนี้ถูกใช้งานไปแล้ว";
                        header('location: createAccount.php');
                    }
                }

                if (!isset($_SESSION['error'])) {

                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['urole'] = $urole;

                    $_SESSION['createAccount'] = 1;

                    header('location: infomation.php');
                    // $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                    // $sql = "INSERT INTO member (member_name, member_email, member_password, urole) VALUES ('$username', '$email', '$password', '$urole')";
                    // mysqli_query($conn, $sql);
        
                    // $_SESSION['user_login'] = $username;
                    // $_SESSION['success'] = "สมัครสมาชิกเรียบร้อย";
                    // header('location: user.php');
                } 
            }
            catch(Exception  $e) {
                echo $e->getMessage();
            }
        }
    }
?>