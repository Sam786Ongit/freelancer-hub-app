<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
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
                        <h1 class="display-3">FreeLance Hub</h1>
                        <p class="lead mb-0">Share Skills and Services</p>
                        <div>
                            <a href="" class="btn btn-lg btn-primary">Post Service</a>
                            <a href="" class="btn btn-lg btn-primary">Hire Service</a>
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

                    </div>
                </div>
            </div>
        </div>
    </body>

    <footer>
        <?php require_once(ROOT_PATH.'/includes/footer_script.php')?>
    </footer>

</html>