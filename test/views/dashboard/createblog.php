<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
Authenticate::checkAuth();
if(isset($_SESSION["authenticated"])){
    $user_id = $_SESSION['authUser']['id'];
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
            <?php require_once(ROOT_PATH.'/includes/dashboard.sidebar.php') ?>
            <!--  -->
            <div class="main-panel ps-container ps-theme-default" data-ps-id="f4c649d0-7e95-3ef2-75c1-2cd6f60ea049">
                <!-- Navbar -->
                <?php require_once(ROOT_PATH.'/includes/dashboard.navbartoggle.php') ?>

                <!-- End Navbar -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary mb-3">
                                        <h4 class="card-title">Create Blog</h4>
                                        <p class="card-category"></p>
                                    </div>
                                    <form method="post" action="<?php echo ROOT_PATH_FOR_ACTIONS?>/blogs/create.php">
                                        <div class="card-body">
                                    
                                            <div class="row">
                                                <div class="col-md-12">
                                                <textarea class="summernote" id="summernote" name="content"></textarea>
                                                </div>
                                            </div>
                                            <!-- <div id="summernote"></div> -->
                                        </div>
                                        <div class="card-footer">
                                        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                                        <input type="submit" class="btn btn-primary pull-right" value="Save
                                                            Blog">
                                        <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
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