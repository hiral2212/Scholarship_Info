<?php

include('database/include.php');
$_SESSION['userId'] = 1;
$_SESSION['portalName'] = 'MacD';

if (isset($_POST['addScholarshipToPortal'])) {
    $name = $_POST['name'];
    $income = $_POST['income'];
    $type = $_POST['type'];
    $category = $_POST['category'];
    $eligibal = $_POST['eligible'];
    $s_date = date('Y-m-d', strtotime($_POST['s_date']));
    $e_date = date('Y-m-d', strtotime($_POST['e_date']));
    $hostelar = $_POST['hostelar'];
    $goverment = $_POST['govOrPri'];
    $amount = $_POST['amount'];
    $about = $_POST['aboutScholarship'];
    $link = $_POST['link'];
    $matric = $_POST['matric'];
    $target_dir = "Scholarships/" . $_SESSION['portalName'];
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $target_dir .= "/";
    $guidence_file = $target_dir . basename($_FILES["guidence"]["name"]);
    $uploadOk = 1;
    $guidenceFileType = strtolower(pathinfo($guidence_file,PATHINFO_EXTENSION));
    $faq_file = $target_dir . basename($_FILES["faq"]["name"]);
    $uploadOkForFAQ = 1;
    $guidenceFileType = strtolower(pathinfo($faq_file,PATHINFO_EXTENSION));

    if ($_FILES["guidence"]["size"] > 5000000) {
        echo "<script>alert('Sorry, your guidence file is too large.')</script>";
        echo "<script>window.open('./special_user.php','_self')</script>";
    }
    if ($_FILES["faq"]["size"] > 5000000) {
        echo "<script>alert('Sorry, your FAQ file is too large.')</script>";
        echo "<script>window.open('./special_user.php','_self')</script>";
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your file was not uploaded.')</script>";
        echo "<script>window.open('./special_user.php','_self')</script>";
    } else {
        if (move_uploaded_file($_FILES["guidence"]["tmp_name"], $guidence_file)) {
            if ($uploadOkForFAQ == 0) {
                echo "<script>alert('Sorry, your file was not uploaded.')</script>";
                echo "<script>window.open('./special_user.php','_self')</script>";
            } else {
                if (move_uploaded_file($_FILES["faq"]["tmp_name"], $faq_file)) {
                    $scholarshipStatus = 1;
                    $addScholar = "INSERT INTO `scholarship_details`(`name`, `income`, `type`, `category_type`, `academic eligibility`, `s_date`, `e_date`, `h_status`, `s_type`, `s_amount`, `about`, `link`, `s_category`, `guidence`, `faq`, `auth_id`, `scholarship_status`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $addScholarshipQuery = $conn->prepare($addScholar);
                    $addScholarshipQuery->bind_param("sisssssssisssssii", $name, $income, $type, $category, $eligibal, $s_date, $e_date, $hostelar, $goverment, $amount, $about, $link, $matric, $guidence_file, $faq_file, $_SESSION['userId'], $scholarshipStatus);
                    
                    if ($addScholarshipQuery->execute()) {
                        echo "<script>alert(`Successfully added scholarship for approval.`)</script>";
                        echo "<script>window.open('./s_dashboard.php','_self')</script>";           
                    } else {
                        echo "<script>alert('Error in adding details !!!')</script>";
                        echo "<script>window.open('./special_user.php','_self')</script>";
                    }
                } else {
                    echo "<script>alert('Sorry, there was an error uploading your FAQ file.')</script>";
                    echo "<script>window.open('./special_user.php','_self')</script>";
                }
            }
        } else {
            echo "<script>alert('Sorry, there was an error uploading your guidence file.')</script>";
            echo "<script>window.open('./special_user.php','_self')</script>";
        }
    }
}
?>