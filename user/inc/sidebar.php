

 <div class="left-sidebar">
    <span><i class="fa fa-user-circle f-s-50 color-primary"></i></span>
    <?php
include '../config.php';
$qt=mysqli_query($con,"select * from user_login where email='".$_SESSION['email']."'");
$tr=mysqli_fetch_array($qt);

?>

   Hello,  <?php echo $tr['name'];  ?> 
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                            
                        </li>
                        
                     


                         <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Profile</span></a>
                            
<ul aria-expanded="false" class="collapse">
                                <li><a href="profile.php">View Profile</a></li>
                             
                            </ul>

                        </li>

                         
                        
                       
                        <li> <a href="logout.php" aria-expanded="false"><i class="fa fa-map-marker"></i><span class="hide-menu">Logout</span></a>
                            
                        </li>
                        
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>