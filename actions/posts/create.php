<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
if(isset($_POST)){
//step 1: check if all required data is set
$user = new FreelancerApp();
//step2 : check if user already exists

if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be less than or equal to 2 MB';
    }
    
    if(empty($errors)==true){
        $name_of_image = time()."_".$_POST['user_id']."_".$file_name;
        $path = ROOT_PATH."/assets/uploads/images/posts/".$name_of_image;
        if(move_uploaded_file($file_tmp,$path))
        {
            $_POST['image'] =  $name_of_image;
        } 
        else{
            $note_array = array(array("message"=>"Error in uploaded file","status"=>"error"));
            Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/dashboard/posts.php');
            exit;
        }
      
    }else{
        $note_array = array(array("message"=>"Error in uploaded file","status"=>"error"));
        Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/dashboard/posts.php');
        exit;
    }
 }
$ignore=[''];
foreach($_POST as $key => $value){
    if(in_array($key,$ignore))
    continue;
    $column_names[] = $key;
    $column_values[] = $value; 
   
}
$result = $user->db_operation->insertIntoTable('posts',$column_names,$column_values);
if($result == 1){
        $note_array = array(array("message"=>"Post Created Sucessfully","status"=>"success"));
        Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/dashboard/posts.php');
        exit;
}
else{
    $note_array = array(array("message"=>"Ooops!! an error occured..please retry","status"=>"error"));
    Helper::sendNotification($note_array,ROOT_PATH_FOR_VIEWS.'/dashboard/posts.php');
    exit;
}
}

?>