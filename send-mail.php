<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $message = $_POST['Form_message'];
        $arr = $_POST['arr'];
        $size = sizeof($arr);
        
        for($iter=0; $iter<$size; $iter++){
            
            $to = $arr[$iter];
            $subject = "Sports Committee";
            $headers = "From: dummy@gmail.com";
            
            if($iter==0){
                echo '<hr class="my-1">';
                echo '<h4 class="mt-3 text-center">Status of email sent to the Students is: </h4>';
            }

            // if(mail($to, $subject, $message, $headers)){
            if(@mail($to, $subject, $message, $headers)){
                //  '@' was added to supress all the warnings, since smtp is not configured.
                echo '<div class="alert alert-success" role="alert">';
                echo 'Email sent to '.$to;
                echo '</div>';
            }else{
                echo '<div class="alert alert-danger" role="alert">';
                echo 'Email was not sent to <b>'.$to.'</b>';
                echo '</div>';
            }    
        }
            
    }
?>