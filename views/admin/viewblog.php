<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
Authenticate::checkAuth();
Authenticate::isAdmin();
if(isset($_GET["user"])){
    $user_id = $_GET['user'];
    $blogs =  $my_app->db_operation->getDataFromTable('blogs',['user_id'],[$user_id]);
    $blogs = $blogs['data'];
}else{
    Helper::redirectBack();
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
                                        <div class="table-responsive">
                                            <table class="table" id="dataTable">
                                                <thead class=" text-primary">
                                                    <th>Sl</th>
                                                    <th>Title</th>
                                                    <th>Posted By</th>
                                                    <th>Actions</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                            
                                               foreach($blogs as $blog):
                                               ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo substr($blog['title'],0,30); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo substr($blog['description'],0,30); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $my_app->db_operation->getDataFromTable('users',['id'],[$blog['user_id']])['data'][0]['name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php if($blog['is_blocked'] == 0): ?>
                                                            <form class="btn-form" method="post" action="<?php echo ROOT_PATH_FOR_ACTIONS?>/blogs/block.php">
                                                                <input type="hidden" name="block_blog_id" value="<?php echo $blog['id'] ?>">
                                                                <input type="hidden" name="blog_user_id" value="<?php echo $blog['user_id'] ?>">
                                                                <input class="btn btn-sm btn-danger" type="submit"
                                                                    value="Block">
                                                            </form>
                                                            <?php endif; ?>

                                                            <?php if($blog['is_blocked'] == 1): ?>
                                                            <form class="btn-form" method="post" action="<?php echo ROOT_PATH_FOR_ACTIONS?>/blogs/block.php">
                                                                <input type="hidden" name="unblock_blog_id" value="<?php echo $blog['id'] ?>">
                                                                <input type="hidden" name="blog_user_id" value="<?php echo $blog['user_id'] ?>">
                                                                <input class="btn btn-sm btn-success" type="submit"
                                                                    value="Un-Block">
                                                            </form>
                                                            <?php endif; ?>
                                                            <button class="btn btn-sm btn-info" data-toggle="modal"
                                                                data-target="#myModal<?php echo $blog['id']?>" type="submit">View
                                                                Blog</button>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <?php 
                                                    $bloginfos[]=['id'=>$blog['id'], 'content'=>$blog['content'],'title' =>$blog['title']];
                                                     endforeach; 
                                                     ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                                <!-- Modal start -->

                                <?php
                                if(isset($bloginfos)):
                                foreach($bloginfos as $bloginfo):  ?>
                                <div class="modal" id="myModal<?php echo $bloginfo['id'] ; ?>">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">
                                                    <?php echo $bloginfo['title'] ; ?>
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body" style="position:relative;overflow-x:scroll">
                                                <?php echo $bloginfo['content']?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;
                                endif;
                                ?>
                                <!-- Modal end-->

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