 <header>
    <div class="container">
      <div id="logo" style="padding-top:15px;">
        <a href="index.php"><img src="assets/images/logoo.svg" alt="" /></a>
        <button type="button" class="collapsed" id="navbar-toggle"><i class="icon fa fa-bars"></i></button>
      </div>
      <div class="nav-header-right">
        <nav class="main-nav">
           <div class="header-right">
             <div class="header-right-btns">
          <ul>
       <span style="height:auto; border:thin solid;  padding:2px;">
            <li><a href="projects.php">Explore Projects <!-- <span>what is fundz?</span> --></a></li>
          </span>
           <!--  <li><a href="/blog">Explore <span>amazing ideas</span></a>
              <ul>
                <li><a href="projects.php">Projects - Sidebar</a></li>
                <li><a href="projects-2.php">Projects - Full Width</a></li>
                <li><a href="project-single.php">Projects Single</a></li>
              </ul>
            </li> -->
          
           <?php 

if(!isset($_SESSION['userid']) || $_SESSION['userid'] == '')

{

  echo '
   <li><a href="/blog">Blog <!-- <span>send your idea</span> --></a></li>
 
              <li>
                <a href="register.php?login" class="btn btn-4 blue">Sign In</a>
              </li>
               

';
}
else{ ?>
    <li><a href="company.php">Start A Pitch <!-- <span>send your idea</span> --></a></li>
<li><a href="#"><img src="control_panel/uploads/profile/<?php echo $_SESSION['img']; ?>" width="30" /> <?php echo  $_SESSION['name']; ?><b class="caret"></b></a>
              <ul>
              <li><a href="/blog"><i class="fa fa-fw fa-globe"></i>Blog</a></li>
                <li><a href="layout.php?tabe=profile"><i class="fa fa-fw fa-user"></i>Profile</a></li>
                <li><a href="layout.php?tabe=companies"><i class="fa fa-fw fa-building"></i>Companies</a></li>
                <li><a href="layout.php?tabe=projects"><i class="fa fa-fw fa-lightbulb-o"></i>Projects</a></li>
                <li><a href="layout.php?tabe=investments"><i class="fa fa-bar-chart fa-gear"></i>Your Investments</a></li>
                  <li><a href="layout.php?tabe=rasied"><i class="fa fa-bar-chart fa-gear"></i>Money Raised</a></li>
                <li><a href="layout.php?tabe=settings"><i class="fa fa-fw fa-gear"></i>Settings</a></li>
                <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
              </ul>
            </li>

<?php }
           ?>

               
          </ul>
        </div>
        </div>
        </nav>
       
      </div>
    </div>
  </header>