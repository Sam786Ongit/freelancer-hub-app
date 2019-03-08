<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
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
      <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Materia <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="https://jsfiddle.net/bootswatch/ndax7sh7/">Open in JSFiddle</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../4/materia/bootstrap.min.css">bootstrap.min.css</a>
                <a class="dropdown-item" href="../4/materia/bootstrap.css">bootstrap.css</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../4/materia/_variables.scss">_variables.scss</a>
                <a class="dropdown-item" href="../4/materia/_bootswatch.scss">_bootswatch.scss</a>
              </div>
        </li> -->
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