<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
$home_active = true;
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- navbar -->
        <?php require_once(ROOT_PATH.'/includes/head_script.php') ?>
        <!-- navbar -->
    </head>

    <body>
        <!-- navbar -->
        <?php require_once(ROOT_PATH.'/includes/navbar.php') ?>
        <!-- navbar -->
        <!-- video -->
        <header>
            <div class="overlay"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="<?php echo ROOT_PATH_FOR_ASSETS?>/video/park1.mp4" type="video/mp4">
            </video>
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3">Becho</h1>
                        <p class="lead mb-0">Share Skills and Services</p>
                        <div>
                            <!-- <a href="" class="btn btn-lg btn-primary">Post Service</a>
                            <a href="" class="btn btn-lg btn-primary">Hire Service</a> -->
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <!-- video -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary mb-3">
                                <h4 class="card-title">Latest Posts</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                                <?php $res = $my_app->db_operation->getDataFromTable("posts",[],[],"","ORDER BY id ASC");?>
                                <?php 
                                   $posts = $res['data'];
                                ?>
                                <?php foreach($posts as $post){ ?>
                                <div class="col-lg-4">
                                    <div class="card card-profile">
                                        <div class="card-avatar">
                                            <a href="">
                                                <img class="img" src="<?php echo ROOT_PATH_FOR_ASSETS?>/uploads/images/posts/<?php echo $post['image'] ?>" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-category text-gray">
                                                <?php $post['title'] ?>
                                            </h6>
                                            <h4 class="card-title">
                                                <?php echo $post['title'] ?>
                                            </h4>
                                            <p class="card-description">
                                                <?php echo substr($post['description'],0,30) ;?> 
                                            </p>
                                            <!-- Button to Open the Modal -->
                                            <button type="button" class="btn btn-primary btn-round" data-toggle="modal"
                                                data-target="#myModal<?php echo $post['id']?>">
                                                Request Quote
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->

                                <!-- The Modal -->
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
                                            <?php $posted_by = $my_app->db_operation->getDataFromTable("users",['id'],[$post['user_id']],"","");
                                            $posted_by = $posted_by['data'][0];
                                            ?>
                                            <form class="form" method="post" action="<?php echo ROOT_PATH_FOR_ACTIONS?>/posts/requestqoute.php">
                                                <div class="modal-body">
                                                    <div class="well">
                                                        <img class="img" style="width:200px" src="<?php echo ROOT_PATH_FOR_ASSETS?>/uploads/images/posts/<?php echo $post['image'] ?>" />
                                                    </div>
                                                    <p class="badge badge-success">Posted by,
                                                        <?php echo $posted_by['name'] ?>
                                                    </p>
                                                    <p>
                                                        <?php echo $post['description'] ?>
                                                    </p>
                                                    <div class="form-group">
                                                    <!-- hidden field -->
                                                    <input type="hidden" name="post_id" value="<?php echo $post['id'] ?>">
                                                        <label for="exampleInputEmail1">Your Email</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="" name="requester_email"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Your Phone</label>
                                                        <input type="number" class="form-control" id="number"
                                                            placeholder="" name="requester_phone" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Message</label>
                                                        <input type="text" class="form-control" id="message"
                                                            placeholder="" name="requester_message" required>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Request</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <?php }?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php require_once(ROOT_PATH.'/includes/dashboard.footer.php') ?>
    <footer>
        <?php require_once(ROOT_PATH.'/includes/footer_script.php')?>
    </footer>

</html>