<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
class Message{
       //msg 91 auth key and ender id
       public static function getMsg91AuthKey(){
          return "252921AkUWXUiXxwF5c8510a1";  // Auth key
       }       
         
       public static function getMsg91SenderId(){
            return "BECSMS"; // Sender Id
       } 
        
       public static function msg91Send($phone, $msg, $debug = false) {
           $authKey = self::getMsg91AuthKey(); // Skill Square AuthKey
           $senderId = self::getMsg91SenderId();       //Skill Square SENDER ID
           //Multiple mobiles numbers separated by comma
           $numbers = $phone;
           $message = $msg;
           // $message = urlencode($message);
       
           //Prepare you post parameters
           $postData1 = array(
               'authkey' => $authKey,
               'mobiles' => $numbers,
               'message' => $message,
               'sender' => $senderId,
           );
       
         //API URL for Sending Message
         $url="http://api.msg91.com/api/sendhttp.php";
       
         $ch = curl_init($url);
         curl_setopt_array($ch, array(
             CURLOPT_URL => $url,
             CURLOPT_RETURNTRANSFER => true,
             CURLOPT_POST => true,
             CURLOPT_POSTFIELDS => $postData1
             //,CURLOPT_FOLLOWLOCATION => true
         ));
       
         //Ignore SSL certificate verification
         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
       
           //get response
           $response = curl_exec($ch);
       
           //Print error if any
           if(curl_errno($ch))
           {
               return 'error:' . curl_error($ch);
           }
           curl_close($ch);
           if ($debug) {
               return true;
           }
           return $response;
          
       }
       
}

?>