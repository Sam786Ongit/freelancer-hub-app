<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
Authenticate::checkAuth();
if(isset($_SESSION["authenticated"])){
    $user_id = $_SESSION['authUser']['id'];
    $user =  $my_app->db_operation->getDataFromTable('users',['id'],[$user_id]);
    $user = $user['data'][0];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- navbar -->
        <?php require_once(ROOT_PATH.'/includes/head_script.php') ?>
        <!-- navbar -->
    </head>
    <body>
        <div class="wrapper ">
            <?php //require_once(ROOT_PATH.'/includes/dashboard.sidebar.php') ?>
            <!--  -->
            <div class="main-panel ps-container ps-theme-default" data-ps-id="f4c649d0-7e95-3ef2-75c1-2cd6f60ea049">
                <!-- Navbar -->
                <?php //require_once(ROOT_PATH.'/includes/dashboard.navbartoggle.php') ?>

                <!-- End Navbar -->
                <div class="content">
                    <div class="container-fluid">
                        <h3> Your Account has been blocked. Please Contact our support team for further Details </h3> 
                    </div>
                </div>
                <?php require_once(ROOT_PATH.'/includes/dashboard.footer.php') ?>
            </div>
        </div>

        <!--  -->
    </body>

    <footer>
        <?php require_once(ROOT_PATH.'/includes/footer_script.php')?>
    </footer>

</html>