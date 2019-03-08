<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
$abouts_active = true;
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
                <div class="d-flex h-30 text-center align-items-center">
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
            <div class="container">
                <div class="row my-5">
                    
                    <div class="col-md-12 col-offset-2">
                        <div class="card card-profile0">
                            <div class="card-body">
                            <h3>About Becho</h3>
                            <p>
                            BECHO – a hindi word which means “sell”, is a web based platform designed exclusively for a closed community, mainly college/ campus in our instance. The main agenda for the development of this project is to provide paid services to the students. So, the students basically “sell” their services to those who need it for a reasonable amount. The services include:
a.	Gadgets for rent – Cameras, laptops, tablets, tripods, speakers, etc
b.	Paid assistance – graphic design, video editing, coding, photography, etc.
When the need for a particular gadget or device arises in the last moment, we often struggle to find it. When we need to get something done and we do not have the resources or the skills to accomplish it, we wish we had someone to help us. Becho, is a platform aimed at solving that very problem. 
Here at BECHO we rent gadgets, devices and intelligent manpower to those who need assistance. Since it is a closed community of students all linked to the college, it will be easier and students can trust each other with the guaranty and safety of their services and belongings. It will create a platform for students to advertise their services and act as a mediator on behalf of the students who need the services.

                            
                            
                            
                            </p>
                                
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