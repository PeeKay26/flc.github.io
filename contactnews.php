<?php 
if(isset($_POST['submit'])){
    $to = "parthkotwa07@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Form submission";

    $headers = "From:" . $from;
    mail($to,$headers);
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>