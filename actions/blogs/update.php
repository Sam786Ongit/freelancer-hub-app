<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
if(isset($_POST)){
   // print_r($_POST); exit;
    $user = new FreelancerApp();
    $blog_id = $_POST['blog_id'];
   
    //remove user id from post data
    unset($_POST['blog_id']);

    $result = $user->db_operation->updateTable('blogs',$_POST,"id = $blog_id");
    if($result == 1){
        $note_array = array(array("message"=>"Blog Updated Successfully","status"=>"Success"));
        Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/dashboard/viewblog.php');
        exit;
    }
    else{
        $note_array = array(array("message"=>"Ooops!! an error occured..please retry","status"=>"Error"));
        Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/dashboard/viewblog.php');
        exit;
    }
}

?>