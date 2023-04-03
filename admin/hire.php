<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("location:index.php");
  }
?>
<?php
  if(isset($_POST["logout"])){
    session_destroy();
    header("location:index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trilochan Behera - Portfolio</title>
    <link rel="shortcut icon" href="assets/img/photo.jpg" type="image/x-icon" oncontextmenu="return false">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/icofont/icofont.min.css">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
      
          <img src="../assets/img/photo.jpg" alt="" class="img-fluid rounded-circle" oncontextmenu="return false" style=" width: 80px;
    margin: 80px 80px 0px 95px;">
        
        <h1 class="text-light" style="
    margin: 20px 5px 20px 5px;
"><a href="index.php">Trilochan Behera</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://www.linkedin.com/in/trilochan-behera-2179b41a2" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="https://twitter.com/Triloch46261491?s=08" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="mailto:trilochanbeherak@gmail.com" class="gmail"><i class="fa fa-envelope"></i></a>
          <a href="https://github.com/Trilochan-Behera" class="github"><i class="fa fa-github"></i></a>
          <a href="https://wa.me/9583998665" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
          <a href="tel:9583998665" class="call"><i class="fa fa-phone"></i></a> 
        </div>
      </div>

      <nav class="nav-menu" style="padding-top: 77px;
    margin: 0px 12px 0px 15px;">
        <ul>
          
          <li><a href="admin_area.php"><img src="../assets/img/sidebar_logo/contact_new.png" class="sidebarlogo"> Contact Details</a></li>
          <li><a href="hire.php"><img src="../assets/img/sidebar_logo/project_new.png" class="sidebarlogo">Hire Deatils</a></li>
          
        </ul>
      </nav><!-- .nav-menu -->
      <form action="" method="POST">
      <button class="btn btn-danger" style="position:fixed;bottom:10px" name="logout"><i class="fa fa-sign-out"></i> Log Out</button>
      </form> 
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
  </header><!-- End Header -->


  <main id="main">

  <section class="wrapper"  style="margin-top:2px;">
        
               
        <div class="row">
  <div class="col-lg-12">
     <section class="panel">
       <header class="panel-heading">
        Hire Form Details
       </header>
      
       <div class="table-responsive">
       <?php
       include "connection.php";
$sql = "SELECT *  FROM  hire";
if($stmt = $db -> prepare($sql)){
$stmt -> execute();
$stmt -> store_result();
$totalrows=$stmt->num_rows;

$stmt -> bind_result($id,$org_name,$post);

if($totalrows > 0)
{
         echo "<table class='table'>";
           echo "<thead>";
             echo "<tr>";
               echo "<th>Id</th>";
               echo "<th>Organization Name</th>";
               echo "<th>Apply Link</th>";
               echo "<th>Action</th>";
             echo "</tr>";
           echo "<thead>";
           echo " <tbody>";
           $counter=1;
while ($row = $stmt -> fetch()) 
{
  echo "<tr>";
  echo "<td>" . $id."</td>";
  echo "<td>".$org_name."</td>";
  echo "<td>".$post."</td>";
 
  echo"<td>";
  echo '<form action="" method="POST">';
  echo '<input type="hidden" name="hId" value='.$id.'>';
  echo '<button  name="H_Delete" class="btn btn-danger"><i class="fa fa-trash"></i></button>';
  echo '</form>';
  echo "</td>";
  
  echo "</tr>";
  }
            
  echo "</tbody>";                            
  echo "</table>";
  } 
  else
  {
  echo "<p class='lead'><em>No records were found.</em></p>";
  }
  
  // Free result set
  $stmt->close();
  
  } 
  else
  {
  echo "ERROR: Could not able to execute $sql. " . $db->error;
  }
  
  // Close connection
  $db->close();
  ?>
   <?php
         
      
if(isset($_POST['H_Delete']))
{
    include "connection.php";
  $hid=$_POST['hId'];
  // Prepare a delete statement
$sql = "DELETE FROM hire WHERE id = $hid";

if($stmt = $db->prepare($sql)){
// Bind variables to the prepared statement as parameters
$stmt->bind_param("i", $param_id);

// Set parameters
$param_id = trim($_POST["id"]);

// Attempt to execute the prepared statement
if($stmt->execute()){
// Records deleted successfully. Redirect to landing page
echo '<meta http-equiv="refresh" content="0;url=?closed"/>';
// header("location:add_offers.php");
exit();
} else{
echo "Oops! Something went wrong. Please try again later.";
}
}

// Close statement
$stmt->close();

// Close connection
$mysqli->close();
} else{

}
?>
  
       </div>

     </section>
   </div>

   
 </div>
      
    </section>







  </main><!-- End #main -->
  <a href="#" class="back-to-top"><img src="assets/img/home.png" width="50px" ></a>


  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/jquery.easing.min.js"></script>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>


</body>

</html>