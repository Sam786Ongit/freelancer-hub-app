<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
class Authenticate{
    static function loginUser($email,$password){
        $user = new FreelancerApp();
        $user = $user->db_operation->getDataFromTable('users',['email'],[$email]);
        $user = $user['data'];
        if(count($user) == 1){
            if(password_verify($password,$user[0]['password'])){
                echo "password verify true";
                self::prepareLogin($user); 
                return true;
            }
            else{
                return false;
            }
        }
        else
        {
            return false;
        }
    }
     static function prepareLogin($user){
        $_SESSION["authUser"] = $user[0];
        $_SESSION["authUserId"]= $_SESSION["authUser"]['id'];
        $_SESSION["authUserEmail"] = $_SESSION["authUser"]['email'];
        $_SESSION["authenticated"] = true;
     }

     static function checkAuth(){
         if( !isset($_SESSION["authenticated"])){
             Helper::redirect(ROOT_PATH_FOR_VIEWS.'/login.php');
         } 
     }

     static function checkBlocked(){
        if(isset($_SESSION["authenticated"])){
            if($_SESSION['authUser']['is_blocked'] == 1){
               Helper::redirect(ROOT_PATH_FOR_VIEWS.'/dashboard/accountblocked.php');
               exit;
            }
        }
     }
     static function isAdmin(){
         if(isset($_SESSION['authUser']) && $_SESSION['authUser']['is_admin'] != 1){
            Helper::redirect(ROOT_PATH_FOR_VIEWS.'/index.php');
            return;
         }
     }
     static function dontAllowAuthenticatedUser(){
        if(isset($_SESSION["authenticated"])){
             if($_SESSION["authenticated"] == true)
                Helper::redirect(ROOT_PATH_FOR_VIEWS.'/index.php');
                return;
        }
    }
     static function logout(){
        if(isset($_SESSION["authenticated"]))
        {
            unset($_SESSION["authUser"]);
            unset($_SESSION["authUserId"]);
            unset($_SESSION["authUserEmail"]);
            unset($_SESSION["authenticated"]);
        }
     
     }
}
?>