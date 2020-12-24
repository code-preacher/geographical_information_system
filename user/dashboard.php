<?php
session_start();
error_reporting(0);
include '../checklogin.php';
check_login();
$r="";
?>
<?php
include '../config.php';
$m1=mysqli_query($con,"select place from geodata order by id desc");


if(isset($_POST['sub'])){
$data=$_POST['data'];

$g=mysqli_query($con,"select * from geodata where place='$data' ");
$jp=mysqli_fetch_array($g);

$gx=mysqli_query($con,"select * from map where name='$data' ");
$jx=mysqli_fetch_array($gx);


if($jp){
$r='
  <div class="container-fluid">

  </div>
            <div class="container-fluid">
                <!-- Start Page Content -->



    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">'. $data.' MAP&nbsp;&nbsp; '. $jx['latitude'].'&nbsp;|'. $jx['longitude'].'&nbsp;|Distance '. $jx['distance'].'&nbsp; </h3>
       <center>     <img src="../img/'. $jx['image'].'" class="" style="width:85%;height: 85%;"></center>
        </div>
    </div>

                <div class="row">

                <div class="col-md-12">
                        
                                <h4> Searched Location : <span style="color:#006e80;">
                            '. $data.'
                        </span> </h4><hr/>

                           
                             
 
  </div>

  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-building f-s-50 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['pg'].'</h2>
                                    <p class="m-b-0">Parade ground</p>
                                </div>
                            </div>
                        </div>
                    </div>



  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-circle f-s-50 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['ff'].'</h2>
                                    <p class="m-b-0">Football Field</p>
                                </div>
                            </div>
                        </div>
                    </div>




  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-institution f-s-50 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['ch'].'</h2>
                                    <p class="m-b-0">Church</p>
                                </div>
                            </div>
                        </div>
                    </div>


  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-institution f-s-50 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['mq'].'</h2>
                                    <p class="m-b-0">Mosque</p>
                                </div>
                            </div>
                        </div>
                    </div>


  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-building f-s-45 color-pink"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['ms'].'</h2>
                                    <p class="m-b-0">Officer Mess</p>
                                </div>
                            </div>
                        </div>
                    </div>




  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-shopping-basket f-s-50 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['mk'].'</h2>
                                    <p class="m-b-0">Market</p>
                                </div>
                            </div>
                        </div>
                    </div>



  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-home  f-s-40 color-dark"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['ss'].'</h2>
                                    <p class="m-b-0">Soldier Shade</p>
                                </div>
                            </div>
                        </div>
                    </div>





  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-home f-s-50 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['cl'].'</h2>
                                    <p class="m-b-0">Club</p>
                                </div>
                            </div>
                        </div>
                    </div>



  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-building f-s-50 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['sc'].'</h2>
                                    <p class="m-b-0">School</p>
                                </div>
                            </div>
                        </div>
                    </div>



  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-home f-s-50 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['qt'].'</h2>
                                    <p class="m-b-0">Quaters</p>
                                </div>
                            </div>
                        </div>
                    </div>



                     <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-building f-s-50 color-info"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['hs'].'</h2>
                                    <p class="m-b-0">House</p>
                                </div>
                            </div>
                        </div>
                    </div>


 <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-home f-s-50 color-info"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['sr'].'</h2>
                                    <p class="m-b-0">Store</p>
                                </div>
                            </div>
                        </div>
                    </div>



  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-hotel f-s-50 color-dark"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['ht'].'</h2>
                                    <p class="m-b-0">Hostel</p>
                                </div>
                            </div>
                        </div>
                    </div>


  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-medkit f-s-50 color-dark"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['hp'].'</h2>
                                    <p class="m-b-0">Hospital</p>
                                </div>
                            </div>
                        </div>
                    </div>
 

               
                  
                   
                </div>
                
            </div>';
            
}
else{

$r='
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>SEARCH RESULT</h4><hr/>

                                <p>
                        <span style="color:red;">
                            No result found </span></b></i>
                        </span>       
                               </p> 

                            </div>
                           

                        </div>
                    </div>
                   
                </div>
                
            </div>';
            
}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Geographical Information Retrieval System</title>
    
    <!-- Basic SEO -->
     <meta name="description" content="ENGLISH TO EDO TRANSLATOR ">
    <meta name="keywords" content="ENGLISH TO EDO TRANSLATOR ">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/">
 
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->


    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
  <!-- End header header -->

        <!-- Left Sidebar  -->
   <?php
include "inc/sidebar.php";
   ?>     
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
          
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>SELECT A PLACE TO RETRIEVE GEOGRAPHICAL INFORMATION...</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#" method="POST">
                                       
                                      <div class="form-group">
                                         
                                            <div class="input-group input-group-rounded">
                                               
                                              <input type="text" name="data" required="required" style="width: 800px;">
                                                <span class="input-group-btn"><button class="btn btn-primary btn-group-right" type="submit" name="sub"><i class="ti-search"></i></button></span>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
                               
                                
    

<?php  echo $r; ?>
 <?php  echo $r=""; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">NASME BARRACKS</h3>
       <center>     <img src="../images/nas.jpeg" class="" style="width:40%;height: 40%;"></center>
        </div>
    </div>

</div>


            <!-- footer -->







<!-- FOOTER REGION -->
<?php
include "inc/footer.php";
?>

            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/scripts.js"></script>

</body>

</html>