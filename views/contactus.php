<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
$contact_active = true;
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
        <section class="container">

            <!--Contact heading-->
            <h2 class="h1 m-0">Contact us</h2>
            <!--Contact description-->
            <p class="pb-4">BECHO – a hindi word which means “sell”, is a web based platform designed exclusively for a
                closed community, mainly college/ campus in our instance. The main agenda for the development of this
                project is to provide paid services to the students. So, the students basically “sell” their services
                to those who need it for a reasonable amount. The services include: a. Gadgets for rent – Cameras,
                laptops, tablets, tripods, speakers, etc b. Paid assistance – graphic design, video editing, coding,
                photography, etc.</p>
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-5 mb-4">
                    <!--Form with header-->
                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="uniform-bg text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                                <p class="m-0">We'll write rarely, but only the best content.</p>
                            </div>
                        </div>
                        <div class="card-body p-3">
                        <form action="<?php echo ROOT_PATH_FOR_ACTIONS?>/email/send.php" method="post">
                            <!--Body-->
                            <div class="form-group">
                                <label class="bmd-label-floating">Your name</label>
                                <div class="input-group">
                                    <!-- <div class="input-group-addon bg-light"><i class="fa fa-user text-primary"></i></div> -->
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                        placeholder="" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Your email</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <!-- <div class="input-group-addon bg-light"><i class="fa fa-envelope text-primary"></i></div> -->
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                        placeholder="" name="customer_email">
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="bmd-label-floating">Message</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <!-- <div class="input-group-addon bg-light "><i class="fa fa-pencil text-primary "></i></div> -->
                                    <textarea class="form-control" name="message"></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block rounded-0 py-2">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!--Form with header-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-7">
                    <!--Google map-->
                    <div class="mb-4">
                    </div>

                    <!--Buttons-->
                    <div class="row text-center">
                        <div class="col-md-4">
                            <a class="uniform-bg px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                            <p>Kristu jayanti college<br> Karnataka, Bangalore</p>

                        </div>

                        <div class="col-md-4">
                            <a class="uniform-bg px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                            <p>+ 123454321, <br> Mon - Fri, 8:00-22:00</p>
                        </div>

                        <div class="col-md-4">
                            <a class="uniform-bg px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                            <p>info@becho.com <br> sale@becho.com</p>
                        </div>
                    </div>

                </div>
                <!--Grid column-->

            </div>

        </section>

        <!-- video -->

    </body>
    <?php require_once(ROOT_PATH.'/includes/dashboard.footer.php') ?>

    <?php require_once(ROOT_PATH.'/includes/footer_script.php')?>


</html>