<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
if(isset($_POST)){
//step 1: check if all required data is set
$user = new FreelancerApp();
//step2 : check if user already exists
$ignore=[''];
foreach($_POST as $key => $value){
    if(in_array($key,$ignore))
    continue;
    $column_names[] = $key;
    $column_values[] = $value; 
}
$result = $user->db_operation->insertIntoTable('quote_requests',$column_names,$column_values);
if($result == 1){
        $note_array = array(array("message"=>"Request Sucessfull !","status"=>"success"));
        Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/index.php');
        exit;
}
else{
    $note_array = array(array("message"=>"Ooops!! an error occured..please retry","status"=>"error"));
    Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/index.php');
    exit;
}
}

?>