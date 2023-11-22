<?php
$con=mysqli_connect("localhost","root","","di");
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $gender=$_POST['gender'];
    $language=$_POST['language'];
    $item=implode(",",$language);
    
    $sql="UPDATE `emp` SET `id`='[value-1]',`gender`='[value-2]',`language`='[value-3]' WHERE 'id'='$id'";
    if($res=mysqli_query($con,$sql))
    {
       echo "update";
    }
    else
    {
      echo "error";
    }
  }
?>
