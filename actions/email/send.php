<?php
require '../../vendor/autoload.php';
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
$API_KEY = "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";
$BECHO_EMAIL_ID="16cs1h129@kristujayanti.com"; //jobinkjc123 //jobinkjc
$BECHO_USERNAME="BECHO";
if ($_POST && $_POST['name'] && $_POST['customer_email'] && $_POST['message'])
{
    $name = $_POST["name"];
    $customer_email = $_POST["customer_email"];
    $message = $_POST["message"];

    $email = new \SendGrid\Mail\Mail(); 
    $email->setFrom($customer_email, $name);
    $email->setSubject($name ." made an enquiry");
    $email->addTo( $BECHO_EMAIL_ID , $BECHO_USERNAME ); //Enter B-hive Email ID
    $email->addContent("text/plain", $message);
    // $email->addContent(
    //     "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
    // );
    $sendgrid = new \SendGrid($API_KEY);

    try {
        // $response = $sendgrid->send($email);
        if ($res =$sendgrid->send($email)) 
        {
            $note_array = array(array("message"=>"We have recieved your email. We will get back to you soon","status"=>"success"));
            Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/contactus.php');
            exit;
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