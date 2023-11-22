<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div class="container">
    <table class="table table-bordered">
    <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>gender</th>
                    <th>language</th>
                    
               </tr>
</thead>
    


<?php
$con=mysqli_connect("localhost","root","","di");
$query="SELECT * FROM emp";
$sql=mysqli_query($con,$query);
while($row=mysqli_fetch_array($sql))
{

    $id=$row['0'];
    $gender=$row['1'];
    $language=$row['2'];

    ?>

    <tr>

        <td><?php echo $id;?></td>
        <td><?php echo $gender;?></td>
        <td><?php echo $language;?></td>



    <td><a href='update.php?id=<?php echo $id;?>'>update</a></td>
    <td><a href='delete.php?id=<?php echo $id;?>'>delete</a></td>>

     
    </tr>
<?php
}
?>

</table>
  </div>  
</body>
</html>