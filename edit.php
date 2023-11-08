<?php


$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"dbcrud");
$edit=$_GET['edit'];

$sql="select * from student where id='$edit'";

$run=mysqli_query($connection,$sql);
while($row=mysqli_fetch_array($run))
{
  $uid=$row['id'];
  $name=$row['name'];
  $address=$row['address'];
  $mobile=$row['mobile'];
 
}


?>

<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"dbcrud");

if(isset($_POST['submit']))

{
$edit=$_GET['edit'];
 $name=$_POST['name'];
 $address=$_POST['address'];
 $mobile=$_POST['mobile'];
 $sql="insert into student ( name,address,mobile)values('$name','$address','$mobile')";
 if(mysqli_query($connection,$sql))
 {
    echo'<script> location.replace("index.php")</script>';
 }
 else{

echo"some thing error";
 }

}








?>



















<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
      <title>student crud application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
<div class="container">
    <div class="row">
    <div class="col-md-9">

    <div class="card">

  <div class="card-header">
   <h1> student crud application</h1>
  </div>
  <div class="card-body">
  <form action="add.php" method="post">
    


  <form>
  <div class="form-group">
    <label>name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name" values="<?php echo $name; ?>">
    </div>


    <div class="form-group">
    <label>address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter address" values="<?php echo $address?>">
    </div>


    <div class="form-group">
    <label>mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="enter mobile" values="<?php echo $mobile?>">
    </div>



    <br>
    <input type="submit" class="btn btn-primary" name="submit" value="Edit">
</form>
</body>









</html>