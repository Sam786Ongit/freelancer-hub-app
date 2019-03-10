<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
if(isset($_POST) && $_POST['phone'] && $_POST['message'] && $_POST['message_from']){
    $phone = $_POST['phone'];
    $mes = $_POST['message']."__(This message is sent by ".$_POST['message_from'].", through Becho.com ) . ";
    Message::msg91send($phone,$mes);
    $note_array = array(array("message"=>"Message Sent","status"=>"success"));
    Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/dashboard/sendsms.php');
    exit;
}
?>