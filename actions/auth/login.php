<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
if(isset($_POST)){
    if(isset($_POST['email']) && isset($_POST['password'])){
       $status =  Authenticate::loginUser($_POST['email'],$_POST['password']);
       if($status === true){
           Helper::redirect(ROOT_PATH_FOR_VIEWS.'/index.php');
       }
       else{
           $note_array[] = ["message"=>"Login failed !! .. please verify credentials", "status" => "error"];
           Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/login.php');
       }
    }
}

?>