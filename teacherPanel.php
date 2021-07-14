<?php

session_start();

if( !isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){

  // Redirecting to login.php, since user tried to 
  header("location: index.php");
  exit();
}else{
  
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/ResStyle.css">

    <title>Admin Panel</title>


</head>

<body>
    <div>

        <?php include "partials/_dbconnect.php"; ?>
        <?php include "partials/_header.php"; ?>

        <div class="container mt-5">
            <div class="greet d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Welcome <b><?php echo $_SESSION['user_name']; ?></b></h5>
                <button class="logout btn btn-info"><a href="logout.php">Logout</a></button>
            </div>
            <hr>

            <div class="font-weight-bold">Select on the basis of which sports you want to grab the list the students:
            </div>

            <form action="teacherPanel.php" method="get">
                <div class="form-group mt-4">
                    <div class="p-4 row border m-1">
                        <div class="col-md-4">
                            <input type="checkbox" id="footballsports1" name="footballsports1" value="yes">
                            <label for="footballsports1">Football</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" id="cricketsports2" name="cricketsports2" value="yes">
                            <label for="cricketsports2">Cricket</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" id="volleyballsports3" name="volleyballsports3" value="yes">
                            <label for="volleyballsports3">Volleyball</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" id="runnningsports4" name="runnningsports4" value="yes">
                            <label for="runnningsports4">Runnning</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" id="badmintonsports5" name="badmintonsports5" value="yes">
                            <label for="badmintonsports5">Badminton</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" id="javelin_throwsports6" name="javelin_throwsports6" value="yes">
                            <label for="javelin_throwsports6">Javelin Throw</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" id="kabaddisports7" name="kabaddisports7" value="yes">
                            <label for="kabaddisports7">Kabaddi</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" id="dodge_ballsports8" name="dodge_ballsports8" value="yes">
                            <label for="dodge_ballsports8">Dodge Ball</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" id="basketballsports9" name="basketballsports9" value="yes">
                            <label for="basketballsports9">Basketball</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>

            <!-- ---This code is not in use, but it is useful when not using AJAX for sending mail--- -->
            <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                
                $message = $_POST['Form_message'];
                $size = sizeof($_SESSION['emails']);
                $emails_not_sent = array();
                $not_sent_count = 0;
                
                for($iter=0; $iter<$size; $iter++){
                    
                    $to = $_SESSION['emails'][$iter];
                    $subject = "Sports Committee";
                    $headers = "From: naveendongre4737@gmail.com";
                    
                    if(mail($to, $subject, $message, $headers)){
                        echo '<div class="alert alert-success" role="alert">';
                        echo 'Email sent to '.$to;
                        echo '</div>';
                    }else{
                        // $emails_not_sent[$not_sent_count] = $arr[$iter];
                        echo '<div class="alert alert-danger" role="alert">';
                        echo 'Email was not sent to <b>'.$to.'</b>';
                        echo '</div>';

                    }    
                }
                    
            }
            ?>
            <!-- -x-This code is not in use, but it is useful when not using AJAX for sending mail-x- -->

            <?php

                $showError = "false";
                if($_SERVER['REQUEST_METHOD']=='GET' && !isset($_GET['loggedin'])){

                    $football = 0;
                    $cricket = 0;
                    $volleyball = 0;
                    $running = 0;
                    $badminton = 0;
                    $javelin_throw = 0;
                    $kabaddi = 0;
                    $dodge_ball = 0;
                    $basketball = 0;
                    
                    if (isset($_GET["footballsports1"])) {
                        $football = 1;
                        $sql1 = "SELECT * FROM students WHERE football = '$football'";
                    }
                    if (isset($_GET["cricketsports2"])) {
                        $cricket = 1;
                        $sql2 = "SELECT * FROM students WHERE cricket = '$cricket'";
                    }
                    if (isset($_GET["volleyballsports3"])) {
                        $volleyball = 1;
                        $sql3 = "SELECT * FROM students WHERE volleyball = '$volleyball'";
                    }
                    if (isset($_GET["runningsports4"])) {
                        $running = 1;
                        $sql4 = "SELECT * FROM students WHERE running = '$running'";
                    }
                    if (isset($_GET["badmintonsports5"])) {
                        $badminton = 1;
                        $sql5 = "SELECT * FROM students WHERE badminton = '$badminton'";
                    }
                    if (isset($_GET["javelin_throwsports6"])) {
                        $javelin_throw = 1;
                        $sql6 = "SELECT * FROM students WHERE javelin_throw = '$javelin_throw'";
                    }
                    if (isset($_GET["kabaddisports7"])) {
                        $kabaddi = 1;
                        $sql7 = "SELECT * FROM students WHERE kabaddi = '$kabaddi'";
                    }
                    if (isset($_GET["dodge_ballsports8"])) {
                        $dodge_ball = 1;
                        $sql8 = "SELECT * FROM students WHERE dodge_ball = '$dodge_ball'";
                    }
                    if (isset($_GET["basketballsports9"])) {
                        $basketball = 1;
                        $sql9 = "SELECT * FROM students WHERE basketball = '$basketball'";
                    }
                    if($football OR $cricket OR $volleyball OR $running OR $badminton OR $javelin_throw OR $kabaddi OR $dodge_ball OR $basketball){

                    }else{
                        echo "entered in incorrect sport event";
                        $showError = "Select atleast 1 sport, to grab the list of students";
                        header("Location: /Student_sports/teacherPanel.php?signupsuccess=false&error=$showError");
                        exit();
                    }

                    $existSql = "SELECT * FROM students";
                    $result = mysqli_query($conn, $existSql);
                    // echo 'Error: '.mysqli_error($conn);
                    $numRows = mysqli_num_rows($result);

                    $no_result = false;
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile_number = $row['mobile_number'];
                        $stream = $row['stream'];
                        $year_of_study = $row['year_of_study'];
                        $football1 = $row['football'];
                        $cricket1 = $row['cricket'];
                        $volleyball1 = $row['volleyball'];
                        $running1 = $row['running'];
                        $badminton1 = $row['badminton'];
                        $javelin1_throw = $row['javelin_throw'];
                        $kabaddi1 = $row['kabaddi'];
                        $dodge1_ball = $row['dodge_ball'];
                        $basketball1 = $row['basketball'];
                        $id = $row['student_id'];

                        if(($row['football']==1&&$football==1) OR ($row['cricket']==1&&$cricket==1) OR ($row['volleyball']==1&&$volleyball==1) OR ($row['running']==1&&$running==1) OR ($row['badminton']==1&&$badminton==1) OR ($row['javelin_throw']==1&&$javelin_throw==1) OR ($row['kabaddi']==1&&$kabaddi==1) OR ($row['dodge_ball']==1&&$dodge_ball==1) OR ($row['basketball']==1&&$basketball==1)){
                            $no_result = true;
                            if($i == 0){
                                echo '<h4 class="mt-5 text-center">List of all the Students are:</h4>';
                                echo '<table class="my-2">
                                    <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Stream</th>
                                    <th>Sports</th>
                                    </tr>';
                            }
                            echo '<tr>
                                    <td>'.$name.'</td>
                                    <td class="all-email">'.$email.'</td>
                                    <td>'.$mobile_number.'</td>
                                    <td>'.$stream.'<br>'.$year_of_study.' year</td>
                                    <td>';
                                if($football==1){echo'football<br>';};
                                if($cricket==1){echo'cricket<br>';};
                                if($volleyball==1){echo'volleyball<br>';};
                                if($running==1){echo'running<br>';};
                                if($badminton==1){echo'badminton<br>';};
                                if($javelin_throw==1){echo'javelin_throw<br>';};
                                if($kabaddi==1){echo'kabaddi<br>';};
                                if($basketball==1){echo'basketball<br>';};
                            echo '</td>
                            </tr>';
                            if($i == 0){
                                $_SESSION['emails']=array();
                            }
                            array_push($_SESSION['emails'],$email);
                            $i++;

                        }
                    }
                    if($i!=0){
                        echo '</table>';
                    }
                    if($no_result == false){
                        echo '<h3 class="p-5 m-auto text-black-50 text-center">No Results Found!!!</h3>';
                    }else{

                        // This code should be used when using AJAX
                        echo '<form id="message_form" class="mt-5 mb-3">
                        <div class="form-group">
                        <label for="Form_message">Enter the common message to send to all the above students: </label>
                                <textarea class="form-control" id="Form_message" name="Form_message" rows="3"></textarea>
                                <button type="button" id="post-button" class="btn btn-primary mt-3">Submit</button>
                            </div>
                            </form>';
                    }
                }


                ?>

                <div id="confirmation-message" class="mb-5 pb-5"></div>

            <?php include "partials/_footer.php"; ?>

            <script src="vendor/jQuery/jquery-3.5.1.min.js"></script>

            <script src="vendor/bootstrap/bootstrap.min.js"></script>

            <script src="js/script.js"></script>
        </div>
</body>

</html>