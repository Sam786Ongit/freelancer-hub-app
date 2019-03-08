<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
class FreelancerApp{
    public function __construct(){
        SessionEngine::sessionStart();
        PathProvider::defineDirectoryPaths();
        $this->db_operation = new DatabaseOperations();
    }
}


?>