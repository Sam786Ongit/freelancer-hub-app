<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
class NotificationEngine{
   
      static function setPageNotifications($notifications_name,$notifications){
        SessionEngine::sessionStart();
        foreach($notifications as $notification){
            $message = $notification['message'];
            $status = $notification['status'];
            $_SESSION[$notifications_name] []=['message'=>$message,'status'=>$status]; 
        }
      }
      static function unsetPageNotifications($notifications_name){
         unset($_SESSION[$notifications_name]);
      }
}
?>