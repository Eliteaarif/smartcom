<!DOCTYPE html>
<html lang="en">
<head>
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>help disk</title>        
        
  <meta charset="utf-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- linking css file -->
  <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
</div>  
         
</body>

<?php
error_reporting(0);
session_start();

$conn=mysqli_connect("localhost","root","","smart");
extract($_POST);
$pin=$_POST['pin'];
$prob=$_POST['prob'];
$usid=$_SESSION["usid"];
$j="insert into help(uid,problem) values('$usid','$````prob')";
mysqli_query($conn,$j);
              $i="select * from smartc where pincode='$pin'";
 $result = mysqli_query($conn,$i);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
if($count==1)
{
$to_email=$row['email'];

$subject="need help";
$body=$_POST['prob'];
$headers = "From:sender email";
if (mail($to_email, $subject, $body, $headers))
{
    echo "<script> alert('Email successfully sent to $to_email..')</script>.";
    echo "<script>location.href='helpdisk.html';
     alert('your details are sent to users') </script>";
}
 else
 {
    echo "<script>alert('Email sending failed! $to_email')</script>";
    echo "<script>location.href='./check.php'</script>";
}
	
}
else
{
echo "<script> alert('No users are found at this particular location') </script>"; echo "<script>location.href='./check.php'</script>";

}
error_reporting(0);
?>
