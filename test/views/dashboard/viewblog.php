<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
Authenticate::checkAuth();
if(isset($_SESSION["authenticated"])){
    $user_id = $_SESSION['authUser']['id'];
    $blogs =  $my_app->db_operation->getDataFromTable('blogs',['user_id'],[$user_id]);
    $blogs = $blogs['data'];
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
                                        <h4 class="card-title">My Posts</h4>
                                        <p class="card-category"></p>
                                    </div>
                                    <div class="card-body">
                                        <?php foreach($blogs as $blog){?>
                                        <div class="jumbotron">
                                        
                                        <div class="col-lg-12">
                                            <div class="card card-profile">

                                                <div class="card-body">
                                                 <?php if($blog['status'] != 1) { ?>
                                                      <div class="badge badge-danger p-2"> Post not active</div>
                                                 <?php } else{?>
                                                    <div class="badge badge-success p-2"> Post Active</div>
                                                 <?php }?>
                                                    <form method="post" action="<?php echo ROOT_PATH_FOR_ACTIONS?>/blogs/update.php">
                                                        <div class="row my-2">
                                                            <div class="col-md-12 my-2">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Title</label>
                                                                    <input type="text" class="form-control" name="title"
                                                                        value="<?php echo $blog['title']?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 my-2">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Description</label>
                                                                    <input type="text" class="form-control" name="description"
                                                                        value="<?php echo $blog['description']?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 my-2">
                                                                <div class="form-group">
                                                                    <label for="bmd-label-floating">Status</label>
                                                                    <select class="form-control" id="exampleSelect1"
                                                                        name="status" required>
                                                                        <option value="1" <?php if($blog['status']==1){
                                                                            echo "selected" ;} ?>>Activate</option>
                                                                        <option value="0" <?php if($blog['status']==0){
                                                                            echo "selected" ;} ?>>Deactivate</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="blog_id" value="<?php echo $blog['id'] ?>">
                                                        <input type="submit" class="btn btn-primary pull-right" value="<?php if($blog['status']==0){
                                                                            echo "Publish Blog";} else echo "Update";?>">
                                                        <div class="clearfix"></div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card card-profile">
                                                <div class="card-body" style="max-height:400px;overflow-y:scroll">
                                                      <?php echo $blog['content']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <?php } ?>
                                        <!--  -->
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