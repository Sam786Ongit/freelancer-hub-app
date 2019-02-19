<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
if(isset($_POST)){
    $user = new FreelancerApp();
    $user_id = $_POST['user_id'];

    //manipulate data
    if(isset($_POST['email_public']))
    $_POST['email_public'] = 1;
    if(isset($_POST['phone_public']))
    $_POST['phone_public'] = 1;
   
    //remove user id from post data
    unset($_POST['user_id']);

    $result = $user->db_operation->updateTable('users',$_POST,"id = $user_id");
    if($result == 1){
        $note_array = array(array("message"=>"Profile Updated Successfully","status"=>"Success"));
        Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/dashboard/index.php');
        exit;
    }
    else{
        $note_array = array(array("message"=>"Ooops!! an error occured..please retry","status"=>"Error"));
        Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/dashboard/index.php');
        exit;
    }
}

?>