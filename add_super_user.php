<?php

include('database/include.php');

// cheak form is submited  or not
if (isset($_POST['register-submit'])) {
    $email = $_POST['email'];
    $pname = $_POST['portalName'];
    $purl = $_POST['portalURL'];
    $password = $_POST['password'];
    $cpwd = $_POST['confirm-password'];
    $status = 1;
    if($password == $cpwd){
    $searchUser = "SELECT * FROM `special_user` WHERE `email` = ? AND `status` != 0 AND `portal_url` != ?";
    $queryForUser = $conn->prepare($searchUser);
    $queryForUser->bind_param("ss", $email,$purl);
    $queryForUser->execute();
    $userFound = $queryForUser->get_result();

    if ($userFound->num_rows < 1) {

            $sql = $conn->prepare("INSERT INTO `special_user`(`email`, `portal_name`, `portal_url`,`password`,`status`) VALUES (?,?,?,?,?)");
            $password = md5($password);
            $sql->bind_param("ssssi", $email, $pname, $purl, $password, $status);
            if ($sql->execute()) {
                echo "<script>alert(`Registered and details added successfully.After Admin approve account you will be able to login.`)</script>";
                echo "<script>window.open('./login_regi.php','_self')</script>";
            } else {
                echo "<script>alert('Error in adding details')</script>";
                echo "<script>window.open('./login_regi.php','_self')</script>";
            }
        }
    } else {
        echo "<script>alert(`User already exits Or Portal already have account.`)</script>";
        echo "<script>window.open('./login_regi.php','_self')</script>";
    }
}
else{
    echo "<script>alert(`Password not matched`)</script>";
        echo "<script>window.open('./login_regi.php','_self')</script>";
}
