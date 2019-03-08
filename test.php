<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");

$uri = $_SERVER['REQUEST_URI'];
$filename = __FILE__;
echo $uri ."_______".$filename; // Outputs: URI
$note_array = array(array("message"=>"hello","status"=>"success"));
NotificationEngine::setPageNotifications("page_notification",$note_array);
Helper::redirect("index.php");
?>