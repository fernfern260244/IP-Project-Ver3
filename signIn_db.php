<?php 
    session_start();
    include('server.php'); 

    $errors = array();

    if (isset($_POST['signin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // บังคับให้กรอกข้อมูล
        if (empty($username)) {
            array_push($errors, "Email is requird");
        }
        if (empty($password)) {
            array_push($errors, "Password is requird");
        }
        // if (strlen($_POST['password']) < 8) {
        //     $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวอย่างน้อย 8 ตัวอักษร';
        //     header('location: signIn.php');
        // }
        
        // ดึงรหัสผ่านกับชื่อผู้ใช้มาเปรียบเทียบ
        $user_check_query = "SELECT * FROM member WHERE member_name = '$username' AND member_password = '$password' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) {

            // เช็คว่าชื่อผู้ใช้กับรหัสผ่านตรงกับในฐานข้อมูลไหม
            if ($result['member_name'] === $username) { // 
                if ($result['member_password'] === $password) {


                    // login เข้ามาเป็น user หรือ admin

                    //admin
                    if ($result['urole'] === 'admin') {  
                        $_SESSION['admin_login'] = $result['member_id'];
                        require_once 'server.php';
                        $row = $result;
                        $_SESSION['id'] = $row['member_id'];
                        $_SESSION['username'] = $row['member_name'];
                        $_SESSION['img'] = $row['member_image'];
                        header("location: AdminHomepage.php");


                    } 
                    // user
                    else if ($result['urole'] === 'user') {
                        $_SESSION['user_login'] = $result['member_id'];
                        require_once 'server.php';
                        $row = $result;
                        $_SESSION['id'] = $row['member_id'];
                        $_SESSION['username'] = $row['member_name'];
                        $_SESSION['img'] = $row['member_image'];
                        header("location: index.php");
                    }
                }
                else {
                    $_SESSION['error'] = 'รหัสผ่านไม่ถูกต้อง';
                    header("location: signIn.php");
                }
            }
            else {
                $_SESSION['error'] = 'ชื่อไม่ถูกต้อง';
                header("location: signIn.php");
            }
        }
        else {
            $_SESSION['error'] = "มีข้อผิดพลาด";
            header('location: signIn.php');
        }

    }
?>
