<?php
$login = false;
$showError = "false";
if($_SERVER['REQUEST_METHOD']=='POST'){
    include '_dbconnect.php';
    $id = $_POST['teacherId'];
    $pass = $_POST['teacherPassword'];

    $sql = "SELECT * FROM `teachers` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows == 1){
        $row = mysqli_fetch_assoc($result);
        if($pass == $row['password']){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $id;
            echo "loggedin";
            header("Location: ../teacherPanel.php?loggedin=true");
            exit();
        }
        else{
            $showError = "Invalid Credentials";
            header("Location: ../index.php?signupsuccess=false&error=$showError");
            exit();
        }
    }
    $showError = "We wasn't able to verify you";
    header("Location: ../index.php?signupsuccess=false&error=$showError");
    exit();
}