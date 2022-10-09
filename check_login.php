<?php
include('database/include.php');
if (isset($_POST['login-submit'])) {
    $email = $_POST['username'];
    $pwd = $_POST['password'];
    if(isset($_POST['role'])){
        $type = $_POST['role'];
        $pwd = md5($pwd);
        if($type === 'admin') {
            
            $searchUser = "SELECT * FROM `admin_panel` WHERE `username` = ?";
            $findUser = $conn->prepare($searchUser);
            $findUser->bind_param("s", $email);
            $findUser->execute();
            $res = $findUser->get_result();
            $userDetails = $res->fetch_assoc();
            if ($res->num_rows) {
                $databasePWD = $userDetails['password'];
                if ($pwd === $databasePWD) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['useremail'] = $email;
                    $_SESSION['userId'] = $userDetails['id'];
                    echo "<script>alert('Successfully Login !!')</script>";
                    echo "<script>window.open('./admin_panel1.php','_self')</script>";
                } else {
                    echo "<script>alert('Password is not coorect !!')</script>";
                    echo "<script>window.open('./login_regi.php','_self')</script>";
                }
            } else {
                echo "<script>alert('Admin Does not Exist !!')</script>";
                echo "<script>window.open('./login_regi.php','_self')</script>";
            }
        }
        if($type === 'user'){
            $searchUser = "SELECT * FROM `special_user` WHERE `email` = ?";
            $findUser = $conn->prepare($searchUser);
            $findUser->bind_param("s", $email);
            $findUser->execute();
            $res = $findUser->get_result();
            $userDetails = $res->fetch_assoc();
        
            if ($res->num_rows) {
                if($userDetails['status'] == 1){
                    echo "<script>alert('Your request is in pannding mode so wait for approval. !!')</script>";
                    echo "<script>window.open('./login_regi.php','_self')</script>";
                } else if($userDetails['status'] == 2){
                    $databasePWD = $userDetails['password'];
                    if ($pwd === $databasePWD) {
                        // $_SESSION['userId'] = $userDetails['id'];
                        echo "<script>alert('Successfully Login !!')</script>";
                        echo "<script>window.open('./special_user.php','_self')</script>";
                    } else {
                        echo "<script>alert('Password is not coorect !!')</script>";
                        echo "<script>window.open('./login_regi.php','_self')</script>";
                    } 
                }else {
                    echo "<script>alert('Special user deleted account. !!')</script>";
                    echo "<script>window.open('./login_regi.php','_self')</script>";
                }
            } else {
                echo "<script>alert('Special User Does not Exist !!')</script>";
                echo "<script>window.open('./login_regi.php','_self')</script>";
            }
        }
    } else {
        echo "<script>alert('Select role properly !!')</script>";
        echo "<script>window.open('./login_regi.php','_self')</script>";
    }
}
