<?php
$con=mysqli_connect("localhost","root","","di");
$id=$_GET['id'];  
$query=mysqli_query($con,"delete from emp where id='$id'"); 
if($query)
 {
    echo "<script>alert('delete');window.location.href='fetch.php';</script>";
 }
   else
   {
 echo "not connect";
}
 ?>