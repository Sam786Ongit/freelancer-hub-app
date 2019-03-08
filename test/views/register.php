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
                    <!-- /users/create.php test_input.php -->
                    <form action="<?php echo ROOT_PATH_FOR_ACTIONS ?>/users/create.php" method="post">
                        <div class="card bg-light mb-3" style="min-width: 100%;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-12 my-2">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-2">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-2">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Phone Number</label>
                                                <input type="number" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="phoneHelp" placeholder="" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-2">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">City</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="phoneHelp" placeholder="" name="city" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-2">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Pin Code</label>
                                                <input type="number" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="phoneHelp" placeholder="" name="pincode" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-2">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Choose Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    placeholder="" name="password" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12 my-2">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Confirm Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    placeholder="" name="confirm_password" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12 my-2">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Gender</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="gender" class="custom-control-input"
                                                        value="male" checked="">
                                                    <label class="custom-control-label" for="customRadio1">Male</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="gender" class="custom-control-input"
                                                        value="female">
                                                    <label class="custom-control-label" for="customRadio2">Female</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 my-2">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Country</label>
                                                <select class="form-control" id="exampleSelect1" name="country"
                                                    required>
                                                    <option value="india">India</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12 my-2">
                                            <div class="form-group">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch1"
                                                        name="email_public">
                                                    <label class="custom-control-label" for="customSwitch1">Make my
                                                        Email
                                                        Public</label>
                                                </div>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch2"
                                                        name="phone_public">
                                                    <label class="custom-control-label" for="customSwitch2">Make my
                                                        Phone
                                                        Number
                                                        Public</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>










                                    <!-- <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                        <label class="custom-control-label" for="customCheck1">Check this custom
                                            checkbox</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Disabled custom checkbox</label>
                                    </div>
                                </div> -->



                                </fieldset>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </body>

    <footer>
        <?php require_once(ROOT_PATH.'/includes/footer_script.php')?>
    </footer>

</html>