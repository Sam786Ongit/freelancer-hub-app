<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
$blog_active = true;
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
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary mb-3">
                                <h4 class="card-title">Latest Blog Posts</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                                <?php $res = $my_app->db_operation->getDataFromTable("blogs",['status'],[1],"","ORDER BY id DESC");?>
                                <?php 
                                   $blogs = $res['data'];
                                ?>
                                <?php foreach($blogs as $blog){ ?>
                                <?php $posted_by = $my_app->db_operation->getDataFromTable("users",['id'],[$blog['user_id']],"","");
                                            $posted_by = $posted_by['data'][0];
                                ?> 
                                <div class="col-lg-12 jumbotron py-2">
                                    <div class="card card-profile">
                                       <div class="card-header">
                                       <?php echo $blog['title'] ?> <div class="badge badge-success"> Post By : <?php echo $posted_by['name'] ?></div>
                                        </div>
                                        <div class="card-body">
                                            <?php echo $blog['content'] ?>
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
    </body>

    <footer>
        <?php require_once(ROOT_PATH.'/includes/footer_script.php')?>
    </footer>

</html>