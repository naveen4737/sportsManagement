<?php

$showError = "false";
if($_SERVER['REQUEST_METHOD']=='POST'){
    include '_dbconnect.php';
    $name = $_POST['studentName'];
    $id = $_POST['studentId'];
    $email = $_POST['studentEmail'];
    $phone_number = $_POST['studentPhoneNumber'];
    $stream = $_POST['studentStream'];
    $year_of_study = $_POST['studentYear'];
    $football = 0;
    $cricket = 0;
    $volleyball = 0;
    $running = 0;
    $badminton = 0;
    $javelin_throw = 0;
    $kabaddi = 0;
    $dodge_ball = 0;
    $basketball = 0;

    if(strlen($name) <= 2 or empty($name)){
        $showError = "Invalid Name(Name should contain atleast three characters)";
        header("Location: ../register.php?signupsuccess=false&error=$showError");
        exit();
    }

    if(strlen($id)!=5 or empty($id)){
        echo "Incorrect college id";
        $showError = "Invalid college id(college id contains 5 digits)";
        header("Location: ../register.php?signupsuccess=false&error=$showError");
        exit();
    }
    if(strlen($phone_number) != 10 or empty($phone_number)){
        $showError = "Invalid phone number";
        header("Location: ../register.php?signupsuccess=false&error=$showError");
        exit();
    }
    if(empty($stream)){
        $showError = "Stream not selected";
        header("Location: ../register.php?signupsuccess=false&error=$showError");
        exit();
    }
    if(empty($year_of_study)){
        $showError = "year not selected";
        header("Location: ../register.php?signupsuccess=false&error=$showError");
        exit();
    }
    
    if (isset($_POST["footballsports1"])) {
        $football = 1;
    }
    if (isset($_POST["cricketsports2"])) {
        $cricket = 1;
    }
    if (isset($_POST["cricketsports2"])) {
        $cricket = 1;
    }
    if (isset($_POST["volleyballsports3"])) {
        $volleyball = 1;
    }
    if (isset($_POST["runningsports4"])) {
        $running = 1;
    }
    if (isset($_POST["badmintonsports5"])) {
        $badminton = 1;
    }
    if (isset($_POST["javelin_throwsports6"])) {
        $javelin_throw = 1;
    }
    if (isset($_POST["kabaddisports7"])) {
        $kabaddi = 1;
    }
    if (isset($_POST["dodge_ballsports8"])) {
        $dodge_ball = 1;
    }
    if (isset($_POST["basketballsports9"])) {
        $basketball = 1;
    }
    if($football OR $cricket OR $volleyball OR $running OR $badminton OR $javelin_throw OR $kabaddi OR $dodge_ball OR $basketball){

    }else{
        $showError = "Select atleast 1 sport";
        header("Location: ../register.php?signupsuccess=false&error=$showError");
        exit();
    }

    // Check Whether this id exists
    $existSql = "SELECT * FROM `students` WHERE student_id = '$id'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);    

    if($numRows > 0){
        $showError = "You are already registered";
        header("Location: ../register.php?signupsuccess=false&error=$showError");
        exit();
    }
    else{
        $sql = "INSERT INTO `students` (`name`, `email`, `student_id`, `mobile_number`, `stream`, `year_of_study`, `football`, `cricket`, `volleyball`, `running`, `badminton`, `javelin_throw`, `kabaddi`, `dodge_ball`, `basketball`) VALUES ('$name', '$email', '$id', '$phone_number', '$stream', '$year_of_study', '$football', '$cricket', '$volleyball', '$running', '$badminton', '$javelin_throw', '$kabaddi', '$dodge_ball', '$basketball')";
        $result = mysqli_query($conn, $sql);

        if($result){
            $showAlert = true;
            header("Location: ../register.php?signupsuccess=true");
            exit();
        }else{
            $showError = "Something Went Wrong";
            header("Location: ../register.php?signupsuccess=false&error=$showError");
            exit();
        }
    }
    $showError = "Something Went Wrong, Please try again later.";
    header("Location: ../register.php?signupsuccess=falsex&error=$showError");
}


?>