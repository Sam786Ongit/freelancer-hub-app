<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
class SessionEngine{
      static function sessionStart(){
          session_start();
      }
}

?>