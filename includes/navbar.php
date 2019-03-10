<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Becho</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if(isset($home_active)){if($home_active === true){ echo "active" ;}} ?>">
        <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS?>/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if(isset($blog_active)){if($blog_active === true){ echo "active" ;}} ?>">
        <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS?>/blog.php">Blog</a>
      </li>
      <li class="nav-item <?php if(isset($abouts_active)){if($abouts_active === true){ echo "active" ;}} ?>">
        <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS?>/abouts.php">About Us</a>
      </li>
      <li class="nav-item <?php if(isset($contact_active)){if($contact_active === true){ echo "active" ;}} ?>">
        <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS?>/contactus.php">Contact Us</a>
      </li>
      
    </ul>
    
    <?php if(isset($_SESSION['authenticated'])) {?>
    <a class="btn btn-secondary my-2 my-sm-0 mx-2" href="<?php echo ROOT_PATH_FOR_ACTIONS?>/auth/logout.php" >logout</a>
    <a class="btn btn-secondary my-2 my-sm-0 mx-2" href="<?php echo ROOT_PATH_FOR_VIEWS?>/dashboard/" >Dashboard</a>
    <?php } 
    else{?>
      <a class="btn btn-secondary my-2 my-sm-0 mx-2" href="<?php echo ROOT_PATH_FOR_VIEWS ?>/login.php" >login</a>
    <?php } ?> 
  </div>
</nav>