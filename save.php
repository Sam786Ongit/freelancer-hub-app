<?php

require 'vendor/autoload.php';

if ($_POST && $_POST['name'] && $_POST['customer_email'] && $_POST['message'])
{
    $name = $_POST["name"];
    $customer_email = $_POST["customer_email"];
    $message = $_POST["message"];

    $email = new \SendGrid\Mail\Mail(); 
    $email->setFrom($customer_email, $name);
    $email->setSubject($name ." made an enquiry");
    $email->addTo( $B_Hive_EMAIL_ID , $B_Hive_UserName ); //Enter B-hive Email ID
    $email->addContent("text/plain", $message);
    // $email->addContent(
    //     "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
    // );
    $sendgrid = new \SendGrid($API_KEY);

    try {
        // $response = $sendgrid->send($email);

        if ($sendgrid->send($email)) 
        {
            echo "<script type='text/javascript'>alert('Sent mail successfully.')</script>";
        }
        // alert("Sent");
        // echo "<script> alert('sent'); </script>";
        // print $response->statusCode() . "\n";
        // print_r($response->headers());
        // print $response->body() . "\n";
    } 

    catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
    }
  
}
?>