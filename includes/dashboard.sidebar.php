
<div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo ROOT_PATH_FOR_ASSETS?>/material/img/sidebar-1.jpg">
        <!--Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
                  Tip 2: you can also add an image using data-image tag-->
        <div class="logo">
          <a href="#" class="simple-text logo-normal">
            Becho
          </a>
        </div>
        <div class="sidebar-wrapper">
        <?php if(isset($_SESSION['authUser'])) :
             if($_SESSION['authUser']['is_admin'] == 0):
        ?>
          <ul class="nav">
            <li class="nav-item active ">
              <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS ?>/dashboard/">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS ?>/dashboard/posts.php">
                <i class="material-icons">list</i>
                <p> Create Posts</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS ?>/dashboard/viewposts.php">
                <i class="material-icons">list</i>
                <p> My Posts</p>
              </a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS ?>/dashboard/createblog.php">
                <i class="material-icons">content_paste</i>
                <p>Create new blog</p>
              </a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS ?>/dashboard/viewblog.php">
                <i class="material-icons">content_paste</i>
                <p>My Blogs</p>
              </a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS ?>/dashboard/sendsms.php">
                <i class="material-icons">message</i>
                <p>Send Message</p>
              </a>
            </li>
            <!--
            <li class="nav-item ">
              <a class="nav-link" href="./typography.html">
                <i class="material-icons">library_books</i>
                <p>Typography</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./icons.html">
                <i class="material-icons">bubble_chart</i>
                <p>Icons</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./map.html">
                <i class="material-icons">location_ons</i>
                <p>Maps</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./notifications.html">
                <i class="material-icons">notifications</i>
                <p>Notifications</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./rtl.html">
                <i class="material-icons">language</i>
                <p>RTL Support</p>
              </a>
            </li>
            <li class="nav-item active-pro ">
              <a class="nav-link" href="./upgrade.html">
                <i class="material-icons">unarchive</i>
                <p>Upgrade to PRO</p>
              </a>
            </li> -->
          </ul>
             <?php endif;
             endif;
          if(isset($_SESSION['authUser']) && $_SESSION['authUser']['is_admin'] == 1):
        ?>
        <ul class="nav">
            <li class="nav-item active ">
              <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS ?>/admin/">
                <i class="material-icons">dashboard</i>
                <p>Admin Panel</p>
              </a>
            </li>
          
            <!-- <li class="nav-item ">
              <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS ?>/dashboard/viewposts.php">
                <i class="material-icons">list</i>
                <p> My Posts</p>
              </a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS ?>/dashboard/createblog.php">
                <i class="material-icons">content_paste</i>
                <p>Create new blog</p>
              </a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link" href="<?php echo ROOT_PATH_FOR_VIEWS ?>/dashboard/viewblog.php">
                <i class="material-icons">content_paste</i>
                <p>My Blogs</p>
              </a>
            </li> -->
          </ul>


        <?php 
        endif;
        ?>
        </div>
      </div>