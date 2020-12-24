<?php
  session_start();
  $id=$_GET['id'];
  include('../config.php');
 mysqli_query($con,"delete from geodata where id='$id'");
 $_SESSION['lmsg']= '<span style="color:green;">'."Geodata was successfully deleted".'</span>';
 header("location:view.php");
?>