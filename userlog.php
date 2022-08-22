<?php
session_start();
$conn=mysqli_connect("localhost","root","","smart");
extract($_POST); 
$name=$_POST['uid'];
$pass=$_POST['upas'];
$i="select * from smartc where email='$name' and pass='$pass'";
 $result = mysqli_query($conn,$i);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
if($count==1)
{      $_SESSION["usid"]=$row['uid'];
	echo "<script>location.href='helpdisk.html'</script>";
	
}
else
{
echo "<script> alert('ERR: LOGIN FAILED!') </script>";
echo "<script>location.href='./login.html'</script>";}

?>