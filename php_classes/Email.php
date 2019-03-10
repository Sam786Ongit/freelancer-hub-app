<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
class Email{
    public static function getWebsiteEmailId(){
        return 'info@skillsquares.com'; //skill squares
         //return 'samjara786@gmail.com'; //skill squares
    }

    public static function getWebsiteUserName(){
        return 'SkillSquares';
    }

    public static function getSengridApiKey(){
        //return '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';//skill squares
        return "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"; ///ved prakash
    }
       
}


?>