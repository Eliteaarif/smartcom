<?php
$conn=mysqli_connect("localhost","root","","smart");
extract($_POST);
if(!$conn)
{
die("connection failed:".mysqli_connect_error());
}
else
{
$name=$_POST['nm'];
$mail=$_POST['mail'];
$_phno=$_POST['phno'];
$addr=$_POST['address'];
$pinco=$_POST['pincode'];
$dob=$_POST['dob'];
$gender=$_POST['g'];
$pass=$_POST['ps1'];
$rpass=$_POST['ps2'];

  if($pass==$rpass)
  {
   $i="insert into smartc (uname,email,phone_num,address,pincode,dob,gender,pass) values('$name','$mail','$phno','$addr',
       '$pinco','$dob','$gender','$pass')";

     if(mysqli_query($conn,$i))
      {
           echo "<script>location.href='./login.html#tologin';
           alert('sucessfully registered')</script>";
      }
     else
      {
           echo " <script>location.href='./login.html#toregister';
           alert('error database')</script>";
       }
  }
  else
  {
     echo "<script>location.href='./login.html#toregister';
     alert('check password')</script>";
   }
}
mysqli_close($conn);

?>