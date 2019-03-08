<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
Authenticate::checkAuth();
Authenticate::isAdmin();
if(isset($_SESSION["authenticated"])){
    // $user_id = $_SESSION['authUser']['id'];
    // $users =  $my_app->db_operation->getDataFromTable('users',['id'],[$user_id]);
    // $users = $users['data'][0];
}
?>
<?php
//page data
$users =  $my_app->db_operation->getDataFromTable('users',[],[],'and',"WHERE is_admin != 1 ");
$query = $users['query'];
$users = $users['data'];

 
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
                                       <p>All users</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table" id="dataTable">
                                                <thead class=" text-primary">
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone Number</th>
                                                    <th>City</th>
                                                    <th>Actions</th>
                                                </thead>
                                               <tbody>
                                               <?php
                                               for($i = 0; $i<1 ;$i++)
                                               {
                                               foreach($users as $user):
                                               ?>
                                               <tr>
                                               <td><?php echo $user['name'] ?></td>
                                               <td><?php echo $user['email'] ?></td>
                                               <td><?php echo $user['phone'] ?></td>
                                               <td><?php echo $user['city'] ?></td>
                                               <td>
                                               <?php if($user['is_blocked'] == 0): ?>
                                                <form class="btn-form" method="post" action="<?php echo ROOT_PATH_FOR_ACTIONS?>/users/block.php"> 
                                                <input type="hidden" name="block_user_id" value="<?php echo $user['id'] ?>">
                                                <input class="btn btn-sm btn-danger" type="submit" value="Block">
                                                </form>  
                                               <?php endif; ?>

                                               <?php if($user['is_blocked'] == 1): ?>
                                                <form class="btn-form" method="post" action="<?php echo ROOT_PATH_FOR_ACTIONS?>/users/block.php"> 
                                                <input type="hidden" name="unblock_user_id" value="<?php echo $user['id'] ?>">
                                                <input class="btn btn-sm btn-success" type="submit" value="Un-Block">
                                                </form> 
                                                <?php endif; ?>
                                                <a href="<?php echo ROOT_PATH_FOR_VIEWS ?>/admin/viewblog.php?user=<?php echo $user['id'] ?>" class="btn btn-sm btn-info">View Blogs</a>
                                               </td>
                                               <td></td>
                                               </tr>
                                               <?php endforeach; }?>
                                               
                                               </tbody>
                                            </table>
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