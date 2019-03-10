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
                                        <h4 class="card-title">Send Message</h4>
                                        <p class="card-category"></p>
                                    </div>
                                    <form method="post" action="<?php echo ROOT_PATH_FOR_ACTIONS?>/message/send.php">
                                        <div class="card-body">
                                            <fieldset>
                                                <!-- <legend>Logo Here</legend> -->
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Phone Number</label>
                                                    <input type="number" class="form-control" id=""
                                                        aria-describedby="" placeholder="" name="phone"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Message</label>
                                                    <textarea type="text" class="form-control" id=""
                                                        placeholder="" name="message" required> </textarea>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="card-footer">
                                            <input type="hidden" name="message_from" value="<?php echo $_SESSION['authUser']['name'];?>">
                                            <input type="submit" class="btn btn-primary pull-right" value="Send">
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