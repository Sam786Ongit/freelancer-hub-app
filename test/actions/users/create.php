<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
if(isset($_POST)){
//step 1: check if all required data is set
$user = new FreelancerApp();
//step2 : check if user already exists

$result = $user->db_operation->getDataFromTable('users',['email'],[$_POST['email']]);
if(count($result['data']) > 0){
    $note_array = array(array("message"=>"User Exists","status"=>"error"));
    Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/register.php');
    exit;
}

//step 3 check if password and confirm password are same
if($_POST['password'] !== $_POST['confirm_password'])
{
    $note_array = array(array("message"=>"password and confirm password are not same","status"=>"error"));
    Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/register.php');
    exit;
}

//do manipulation to post data
$_POST['password']=password_hash($_POST["password"],PASSWORD_DEFAULT);
if(isset($_POST['email_public']))
$_POST['email_public'] = 1;
if(isset($_POST['phone_public']))
$_POST['phone_public'] = 1;

//manipulation end


$ignore=['confirm_password'];
foreach($_POST as $key => $value){
    if(in_array($key,$ignore))
    continue;
    $column_names[] = $key;
    $column_values[] = $value; 
   
}

$result = $user->db_operation->insertIntoTable('users',$column_names,$column_values);
if($result == 1){
        $note_array = array(array("message"=>"Login with your credentials","status"=>"Success"));
        Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/login.php');
        exit;
}
else{
    $note_array = array(array("message"=>"Ooops!! an error occured..please retry","status"=>"Error"));
    Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/register.php');
    exit;
}
}

?>