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
            <?php require_once(ROOT_PATH.'/includes/dashboard.sidebar.php') ?>
            <!--  -->
            <div class="main-panel ps-container ps-theme-default" data-ps-id="f4c649d0-7e95-3ef2-75c1-2cd6f60ea049">
                <!-- Navbar -->
                <?php require_once(ROOT_PATH.'/includes/dashboard.navbartoggle.php') ?>

                <!-- End Navbar -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-tabs card-header-primary">
                                        Create Your Post
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form method="post" action="<?php echo ROOT_PATH_FOR_ACTIONS?>/posts/create.php" enctype="multipart/form-data">
                                                        <div class="row my-3">
                                                            <input type="hidden" class="form-control" name="user_id"
                                                                value="<?php echo $user['id']?>">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Title</label>
                                                                    <input type="text" class="form-control" name="title"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="bmd-label-floating">Type</label>
                                                                    <select class="form-control" id="exampleSelect1"
                                                                        name="type" required>
                                                                        <option value="service" selected>service</option>
                                                                        <option value="requirement" selected>requirement</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row my-3">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Description</label>
                                                                    <input type="text" class="form-control" name="description"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row my-3">
                                                            <div class="col-md-4">
                                                                <div class="upload-btn-wrapper">
                                                                <label class="bmd-label-floating mx-2">Image</label>
                                                                    <button class="btn-custom">Upload a file</button>
                                                                    <input type="file" name="image" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="submit" class="btn btn-primary pull-right" value="Create
                                                            Post">
                                                        <div class="clearfix"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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