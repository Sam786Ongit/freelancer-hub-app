<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
$my_app = new FreelancerApp();
Authenticate::checkAuth();
if(isset($_SESSION["authenticated"])){
    $user_id = $_SESSION['authUser']['id'];
    $user =  $my_app->db_operation->getDataFromTable('users',['id'],[$user_id]);
    $user = $user['data'][0];
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
                        <!-- <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">content_copy</i>
                                        </div>
                                        <p class="card-category">Tasks</p>
                                        <h3 class="card-title">25/50
                                            <small>completed</small>
                                        </h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-danger">warning</i>
                                            <a href="#pablo">Warning Message</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">store</i>
                                        </div>
                                        <p class="card-category">Messages</p>
                                        <h3 class="card-title">200</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">date_range</i> Last 24 Hours
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-danger card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">info_outline</i>
                                        </div>
                                        <p class="card-category">Reminders</p>
                                        <h3 class="card-title">6</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">local_offer</i> info
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-info card-header-icon">
                                        <div class="card-icon">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                        <p class="card-category">Followers</p>
                                        <h3 class="card-title">+20</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">update</i> Just Updated
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-tabs card-header-primary">
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <span class="nav-tabs-title"></span>
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#userprofile" data-toggle="tab">
                                                            <i class="material-icons">person</i> Profile
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                    <!-- <li class="nav-item">
                                                        <a class="nav-link" href="#messages" data-toggle="tab">
                                                            <i class="material-icons">code</i> Website
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li> -->
                                                    <!-- <li class="nav-item">
                                                        <a class="nav-link" href="#settings" data-toggle="tab">
                                                            <i class="material-icons">cloud</i> Server
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="userprofile">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <form method="post" action="<?php echo ROOT_PATH_FOR_ACTIONS?>/users/update.php">
                                                            <div class="row">
                                                                <input type="hidden" class="form-control" name="user_id" value="<?php echo $user['id']?>"> 
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="bmd-label-floating">Name</label>
                                                                        <input type="text" class="form-control" name="name"
                                                                            value="<?php echo $user['name'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="bmd-label-floating">Email address</label>
                                                                        <input type="email" class="form-control" name="email"
                                                                            value="<?php echo $user['email']  ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="bmd-label-floating">Phone</label>
                                                                        <input type="number" class="form-control" name="phone"
                                                                            value="<?php echo $user['phone'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="bmd-label-floating">Country</label>
                                                                        <select class="form-control" id="exampleSelect1"
                                                                            name="country" required>
                                                                            <option value="india" selected>India</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input"
                                                                                id="customSwitch1" name="email_public"
                                                                                <?php if($user['email_public']==1){
                                                                                echo "checked" ; } ?>>
                                                                            <label class="custom-control-label" for="customSwitch1">Make
                                                                                my Email
                                                                                Public</label>
                                                                        </div>
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input"
                                                                                id="customSwitch2" name="phone_public"
                                                                                <?php if($user['phone_public']==1){
                                                                                echo "checked" ; } ?>>
                                                                            <label class="custom-control-label" for="customSwitch2">Make
                                                                                my Phone
                                                                                Number
                                                                                Public</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="customRadio1" name="gender"
                                                                                class="custom-control-input" value="male"
                                                                                <?php if($user['gender']=="male" ){
                                                                                echo "checked" ; } ?> >
                                                                            <label class="custom-control-label" for="customRadio1">Male</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="customRadio2" name="gender"
                                                                                class="custom-control-input" value="female"
                                                                                <?php if($user['gender']=="female" ){
                                                                                echo "checked" ; } ?>>
                                                                            <label class="custom-control-label" for="customRadio2">Female</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="bmd-label-floating">City</label>
                                                                        <input type="text" class="form-control" name="city"
                                                                            value="<?php echo $user['city'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="bmd-label-floating">Country</label>
                                                                        <input type="text" class="form-control" name="country"
                                                                            value="<?php echo $user['country'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="bmd-label-floating">Postal Code</label>
                                                                        <input type="text" class="form-control" name="pincode"
                                                                            value="<?php echo $user['pincode'] ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>About Me</label>
                                                                        <div class="form-group">
                                                                            <label class="bmd-label-floating">
                                                                            </label>
                                                                            <textarea class="form-control" rows="5"
                                                                                name="description">
                                                                            <?php echo $user['description'] ?>
                                                                        </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="submit" class="btn btn-primary pull-right" value="Update
                                                                Profile">
                                                            <div class="clearfix"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="messages">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="" checked="">
                                                                        <span class="form-check-sign">
                                                                            <span class="check"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>Flooded: One year later, assessing what was lost and
                                                                what was found
                                                                when a ravaging rain swept through metro Detroit
                                                            </td>
                                                            <td class="td-actions text-right">
                                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                                                    data-original-title="Edit Task">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                                                    data-original-title="Remove">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="">
                                                                        <span class="form-check-sign">
                                                                            <span class="check"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>Sign contract for "What are conference organizers
                                                                afraid of?"</td>
                                                            <td class="td-actions text-right">
                                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                                                    data-original-title="Edit Task">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                                                    data-original-title="Remove">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="settings">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="">
                                                                        <span class="form-check-sign">
                                                                            <span class="check"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>Lines From Great Russian Literature? Or E-mails From My
                                                                Boss?</td>
                                                            <td class="td-actions text-right">
                                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                                                    data-original-title="Edit Task">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                                                    data-original-title="Remove">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="" checked="">
                                                                        <span class="form-check-sign">
                                                                            <span class="check"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>Flooded: One year later, assessing what was lost and
                                                                what was found
                                                                when a ravaging rain swept through metro Detroit
                                                            </td>
                                                            <td class="td-actions text-right">
                                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                                                    data-original-title="Edit Task">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                                                    data-original-title="Remove">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="" checked="">
                                                                        <span class="form-check-sign">
                                                                            <span class="check"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>Sign contract for "What are conference organizers
                                                                afraid of?"</td>
                                                            <td class="td-actions text-right">
                                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                                                    data-original-title="Edit Task">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                                                    data-original-title="Remove">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="card card-profile">
                                    <div class="card-avatar">
                                        <a href="#pablo">
                                            <img class="img" src="<?php echo ROOT_PATH_FOR_ASSETS?>/material/img/faces/marc.jpg" />
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-category text-gray">Freelancer / Full-Stack Developer</h6>
                                        <h4 class="card-title">Yathan Upadhyay</h4>
                                        <p class="card-description">
                                            <?php echo $user['description'] ;?>
                                        </p>
                                        <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-warning">
                                        <h4 class="card-title">Skills</h4>
                                        <p class="card-category">Last updated 20th july</p>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-hover">
                                            <thead class="text-warning">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Experience</th>
                                                    <th>Level</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Bootstrap 4</td>
                                                    <td>1+ Years</td>
                                                    <td>Intermediate</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Bootstrap 4</td>
                                                    <td>1+ Years</td>
                                                    <td>Intermediate</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Bootstrap 4</td>
                                                    <td>1+ Years</td>
                                                    <td>Intermediate</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Bootstrap 4</td>
                                                    <td>1+ Years</td>
                                                    <td>Intermediate</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> -->
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