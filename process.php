<?php ob_start();
    
    
    if (isset($_POST['submit'])) {



        $to = "azalyange19@gmail.com";
        $subject = "Work position from my portfolio";
        $message = $_POST['message'];
        $email = $_POST['email'];
        //$headers = "From: " .$email  . "\r\n" .
        //"CC: wobinwoange@yahoo.com";
        
        mail($to,$subject,$message);
        
        header("Location: mon_portfolio_2.0.html");

    }

?>