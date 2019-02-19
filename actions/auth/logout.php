<?php  
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
new FreelancerApp();
Authenticate::logout();
Helper::redirect(ROOT_PATH_FOR_VIEWS.'/index.php');
?>