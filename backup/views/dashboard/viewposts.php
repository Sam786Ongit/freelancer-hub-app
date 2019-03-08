<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
Authenticate::checkAuth();
Authenticate::checkBlocked();
if(isset($_SESSION["authenticated"])){
    $user_id = $_SESSION['authUser']['id'];
    $posts =  $my_app->db_operation->getDataFromTable('posts',['user_id'],[$user_id]);
    $posts = $posts['data'];
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
                            <?php foreach($posts as $post){ ?>
                            <div class="col-lg-4">
                                <div class="card card-profile services-card">
                                    <div class="card-avatar">
                                        <a href="">
                                            <img class="img" src="<?php echo ROOT_PATH_FOR_ASSETS?>/uploads/images/posts/<?php echo $post['image'] ?>" />
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-category text-gray">
                                        </h6>
                                        <h4 class="card-title">
                                            <?php echo $post['title'] ?>
                                        </h4>
                                        <p class="card-description">
                                            <?php echo $post['description'] ;?>
                                        </p>
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="btn btn-primary btn-round" data-toggle="modal"
                                            data-target="#myModal<?php echo $post['id']?>">
                                            View Quote Requests
                                        </button>
                                        <a href="<?php echo ROOT_PATH_FOR_ACTIONS?>/posts/delete.php?id=<?php echo $post['id']?>"
                                            class="badge badge-danger" style="position:relative;left:-90%;">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <!--  Modal start -->
                            <div class="modal" id="myModal<?php echo $post['id'] ; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">
                                                <?php echo $post['title'] ; ?>
                                            </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <!-- Modal body -->
                                        <?php $quote_requests = $my_app->db_operation->getDataFromTable("quote_requests",['post_id'],[$post['id']],"","");
                                                    $quote_requests = $quote_requests['data'];
                                            ?>
                                        <div class="modal-body">
                                            <?php foreach($quote_requests as $quote_request) {?>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row p-1">
                                                        <div class="col-md-6 p-1">
                                                            Requester Phone:
                                                            <div class="badge badge-success p-1">
                                                                <?php echo $quote_request['requester_phone'] ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 p-1">
                                                            Requester email:
                                                            <div class="badge badge-success p-1">
                                                                <?php echo $quote_request['requester_email'] ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p class="text-center">
                                                            <?php echo $quote_request['requester_message'] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Request</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <!-- modal end -->
                            <?php }?>

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