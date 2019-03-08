<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
if(isset($_GET['id'])){
    $user = new FreelancerApp();

    $result = $user->db_operation->deleteFromTable('posts',"id = ".$_GET['id']);
if($result == 1){
        $note_array = array(array("message"=>"Post Deleted Sucessfully","status"=>"success"));
        Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/dashboard/viewposts.php');
        exit;
}
else{
    
    $note_array = array(array("message"=>"Ooops!! an error occured..please retry","status"=>"error"));
    Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/dashboard/viewposts.php');
    exit;
}

}
?>