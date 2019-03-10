<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
Authenticate::dontAllowAuthenticatedUser();
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
        <div class="container my-3">
            <div class="row my-5">
                <div class="col-6 offset-3">
                    <div class="card bg-light mb-3" style="min-width: 100%;">
                        <div class="card-header"></div>
                        <form action="<?php echo ROOT_PATH_FOR_ACTIONS ?>/auth/login.php" method="post" >
                        <div class="card-body">
                            <fieldset>
                                <!-- <legend>Logo Here</legend> -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="" name= "email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder=""
                                        name="password" required>
                                </div>
                            </fieldset>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                            <a href="<?php echo ROOT_PATH_FOR_VIEWS ?>/register.php" class="btn btn-secondary" data-dismiss="modal">Register</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </body>

    <footer>
        <?php require_once(ROOT_PATH.'/includes/footer_script.php')?>
    </footer>

</html>