<?php
include('database/include.php');
if (isset($_POST['approve'])) {
    $id = $_POST['id'];
    
 
        
        $searchUser = "SELECT * FROM `special_user` WHERE `id` = ?";
        $findUser = $conn->prepare($searchUser);
        $findUser->bind_param("s", $id);
        $findUser->execute();
        $res = $findUser->get_result();
        $userDetails = $res->fetch_assoc();
        if ($res->num_rows) {
           $sql = "UPDATE `special_user` SET `status` = '2' WHERE `special_user`.`id` = $id";
           mysqli_query($conn,$sql);
           echo "<script>alert('Successfully approved !!')</script>";
                echo "<script>window.open('./admin_panel1.php','_self')</script>";
        } else {
            echo "<script>alert('Special user does not exist !!')</script>";
            echo "<script>window.open('./admin_panel1.php','_self')</script>";
        }
    }
?>