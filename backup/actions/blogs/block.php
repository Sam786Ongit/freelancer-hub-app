<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$user = new FreelancerApp();
if(isset($_POST['block_blog_id'])){
    $id = $_POST['block_blog_id'];
    $result = $user->db_operation->updateTable('blogs',['is_blocked'=>1],"id = $id");
    if($result == 1){
        $note_array = array(array("message"=>"Blog Blocked Successfully","status"=>"Success"));
        Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/admin/viewblog.php?user='.$_POST['blog_user_id']);
        exit;
    }
    else{
        $note_array = array(array("message"=>"Ooops!! an error occured..please retry","status"=>"Error"));
        Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS."/admin/viewblog.php?user={$_POST['blog_user_id']}");
        exit;
    }

}
if(isset($_POST['unblock_blog_id'])){
    $id = $_POST['unblock_blog_id'];
    $result = $user->db_operation->updateTable('blogs',['is_blocked'=>0],"id = $id");
    if($result == 1){
        $note_array = array(array("message"=>"Blog Un-Blocked Successfully","status"=>"Success"));
        Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/admin/viewblog.php?user='.$_POST['blog_user_id']);
        exit;
    }
    else{
        $note_array = array(array("message"=>"Ooops!! an error occured..please retry","status"=>"Error"));
        Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/admin/viewblog.php?user='.$_POST['blog_user_id']);
        exit;
    }

}

?>