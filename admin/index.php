<?php
    include("connection.php");
    $message="";
  if(isset($_POST["submit"])){
    $username=($_POST['username']);
	$password=($_POST['password']);
    $query="select * from admin_users where username='$username' and password='$password'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result) == 1){
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('location:admin_area.php');
    }
    else{
        $message="** Invalid Credentials";
    }
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section style="background: linear-gradient(to top,#ffc8da82,#a0cbc7);padding:5px 0 5px 0;height:100vh">
        <div class="d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100" >
            <div class="row d-flex justify-content-center align-items-center h-100" id="contactform">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card">
                <div class="card-body p-5">
                    <h2 class="admin text-uppercase text-center mb-5" style="">Admin Login</h2>
    
                    <form action="" method="POST">
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example2cg">Username</label>
                        <input type="text" name="username" class="form-control" required/>
                    </div>
    
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example4cg">Password</label>
                        <input type="password" name="password" class="form-control" required/>
                    </div>


                    <div class="form-check d-flex justify-content-center mb-1">
                        <p class="text-center text-muted mt-1 mb-0"><font color="#fbff00">
                            <?php echo "$message" ?>
                        </font></p>
                    </div>

                    <div>
                  <center> <button type="submit" value="submit" name="submit"><i class="fa fa-send"></i> LOGIN </button></center> 
                    </div>
                    </form>
    
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/jquery.easing.min.js"></script>
</body>
</html>