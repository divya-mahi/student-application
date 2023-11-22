<?php
$con=mysqli_connect("localhost","root","","di");

if(isset($_POST['submit']))
{
$id=$_POST['id'];
$gender=$_POST['gender'];
$language=$_POST['language'];
$item=implode(",",$language);
$sql="insert into emp values('$id','$gender','$item')";
$query=$res=mysqli_query($con,$sql);

if ($query)
    
{
    echo "connected successfully";
}
else 
{
    echo "not connected";
}
}


?>