<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
class Config
{
    static $defined = NULL;
    static function getConnection()
    {
        if(self::$defined == NULL)
        {
            define('DB_SERVER', 'localhost');
            define('DB_USER', 'root');
            define('DB_PASS', '');
            define('DB_NAME', 'freelance_db');  
            self::$defined = true;
        }
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        return $conn;
        // Check connection
        if (mysqli_connect_errno()) {
            die("Failed to connect to MySQL: " . mysqli_connect_error()) ;
        }
    }

    
}





