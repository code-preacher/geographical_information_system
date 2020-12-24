<?php
session_start();
error_reporting(0);
include '../checklogin.php';
check_login();
$_SESSION['wmsg']="";
?>
<?php
include '../config.php';
if(isset($_POST['sub'])){
$place=$_POST['place'];
$tree=$_POST['tree'];
$road=$_POST['road'];
$airport=$_POST['airport'];
$house=$_POST['house'];
$school=$_POST['school'];
$church=$_POST['church'];
$market=$_POST['market'];
$hospital=$_POST['hospital'];
$busstop=$_POST['busstop'];
$fillingstation=$_POST['fillingstation'];
$hotel=$_POST['hotel'];
$store=$_POST['store'];

$date=date("d-m-y @ g:i A");
$qb=mysqli_query($con,"insert into geodata(place,tree,road,airport,house,school,church,market,hospital,busstop,fillingstation,hotel,store,date) values('$place','$tree','$road','$airport','$house','$school','$church','$market','$hospital','$busstop','$fillingstation','$hotel','$store','$date')");
if($qb){
$_SESSION['wmsg']='<span style="color:green;">'."Geo-data was successfully Added".'</span>';
}
else{
$_SESSION['wmsg']='<span style="color:red;">'."Geo-data was not successfully Added".'</span>';    
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
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">GIS</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Geo-data</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>ADD GEO-DATA</h4>

                                <p>
                               
                                <?php if (!empty($_SESSION['wmsg'])) {
                                    echo $_SESSION['wmsg'];
                                } 
                                 ?>
                            </p>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#" method="POST">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Place :</p>
                                            <input type="text" class="form-control input-rounded" name="place" placeholder="Please enter name of place" required="required">
                                        </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Trees :</p>
                                            <input type="number" class="form-control input-rounded" name="tree"  required="required">
                                        </div>
                                                </div>


                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Roads :</p>
                                            <input type="number" class="form-control input-rounded" name="road"  required="required">
                                        </div>
                                                </div>

                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Airports :</p>
                                            <input type="number" class="form-control input-rounded" name="airport"  required="required">
                                        </div>
                                                </div>


                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Houses :</p>
                                            <input type="number" class="form-control input-rounded" name="house"  required="required">
                                        </div>
                                                </div>

                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Schools :</p>
                                            <input type="number" class="form-control input-rounded" name="school"  required="required">
                                        </div>
                                                </div>

                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Churches :</p>
                                            <input type="number" class="form-control input-rounded" name="church"  required="required">
                                        </div>
                                                </div>

                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Markets :</p>
                                            <input type="number" class="form-control input-rounded" name="market"  required="required">
                                        </div>
                                                </div>

                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Hospitals :</p>
                                            <input type="number" class="form-control input-rounded" name="hospital"  required="required">
                                        </div>
                                                </div>

                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Bus-stops :</p>
                                            <input type="number" class="form-control input-rounded" name="busstop"  required="required">
                                        </div>
                                                </div>

                                                 <div class="col-md-3">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Filling Stations :</p>
                                            <input type="number" class="form-control input-rounded" name="fillingstation"  required="required">
                                        </div>
                                                </div>


                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Hotels:</p>
                                            <input type="number" class="form-control input-rounded" name="hotel"  required="required">
                                        </div>
                                                </div>


                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Stores :</p>
                                            <input type="number" class="form-control input-rounded" name="store"  required="required">
                                        </div>
                                                </div>






                                            </div>

                                        </div>
                                       
                                        
                                        <div class="form-actions">
                                        <button type="submit" name="sub" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="reset" class="btn btn-inverse">Clear</button>
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