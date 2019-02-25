<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
class PathProvider{
    static $defined = NULL;
    static function defineDirectoryPaths(){
        if(self::$defined == NULL){
            $workspace_name = "freelancer";
            define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT'].'/'.$workspace_name);
            define('ROOT_PATH_FOR_ASSETS',"/$workspace_name/assets");
            define('ROOT_PATH_FOR_VIEWS',"/$workspace_name/views");
            define('ROOT_PATH_FOR_ACTIONS',"/$workspace_name/actions");
            self::$defined = true;
        }
    }
    
}

?>