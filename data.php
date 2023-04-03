
<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="trilochan";
$mysqli= new mysqli($db_host,$db_user,$db_password,$db_name);
if($mysqli->connect_error)
{
    die("connection failed");
} 
?>



<?php      
      $name=$email=$mob=$msg="";
if(isset($_POST['submit'])){

      $name = trim($_POST["name"]);
      $email= trim($_POST["email"]);
      $mob = trim($_POST["mobile"]);
      $msg = trim($_POST["message"]); 

    // Prepare an insert statement
    $sql = "INSERT INTO contact (name,email,mobile,message) VALUES (?,?,?,?)";
    //insert into main stock
    if($stmt = $mysqli->prepare($sql))
    {
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("ssss", $param_name,$param_email,$param_mobile,$param_msg);
    // Set parameters
    $param_name  =$name;
    $param_email =$email;
    $param_mobile =$mob;
    $param_msg =$msg;
    
    // Attempt to execute the prepared statement
    if($stmt->execute())
    {
        $headers = "From:$email";
        $details =  array("Name Of Person wants to contact Me : $name", "Email Address Of Person :$email", "Mobile Number :$mob","Message:$msg");
        $details = implode("\r\n", $details); 
        mail('trilochanbeherak@gmail.com', 'Contact Form Deatils From My Portfolio Website', $details, $headers);
    }else
    {
    echo $stmt->error;
    echo "Something went wrong. Please try again later.";
    }
    }else{
        echo $mysqli->error;
    }
    // Close statement
    $stmt->close();
    } 
?>

<?php

        $org=$post=$msg="";

if(isset($_POST['send'])){
    
        $org=trim($_POST["org"]);
        $post = trim($_POST["post"]);


    // Prepare an insert statement
    $sql = "INSERT INTO hire (org_name,post) VALUES (?,?)";
    //insert into main stock
    if($stmt = $mysqli->prepare($sql))
    {
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("ss",$param_org,$param_post);
    // Set parameters
 
    $param_org =$org;
    $param_post=$post;

    // Attempt to execute the prepared statement
    if($stmt->execute())
    {
        $from = "trilochanbeherak@gmail.com";
        $headers = "From: $from";
        $details =  array(" Thank Your For Your Offer !! " ," I Will Contact You Soon ", " Trilochan Behera ");
        $details = implode("\r\n", $details); 
        mail($email, ' Trilochan Behera ', $details, $headers);

    }else
    {
    echo $stmt->error;
    echo "Something went wrong. Please try again later.";
    }
    }else{
        echo $mysqli->error;
    }
    // Close statement
    $stmt->close();
    } 
?>
