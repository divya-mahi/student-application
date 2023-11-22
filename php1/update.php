<?php
$con=mysqli_connect("localhost","root","","di");
$id=$_GET['id'];
$query="SELECT * from emp where id='$id'";
$sql=mysqli_query($con,$query);
if($row=mysqli_fetch_array($sql))
{

  $id=$row[0];
  $gender=$row[1];
  $language=$row[2];
  $item=explode(",",$language);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="upd.php">
    <label for="id">id:</label><br>
    <input type="text" name="id"value="<?php echo $id;?>"><br><br><br>


  <label >gender:</label><br><br>
  <input type="radio" id="male" name="gender" value="<?php echo $male;?>">
  <label for="male">male</label><br>
  <input type="radio" id="female" name="gender" value="<?php echo $female;?>">
  <label for="female">female</label><br><br><br>
 
<label>language;</label><br><br>
<input type="checkbox" name="language[]" value= "<?php echo $tamil;?>">
  <label for="tamil"> tamil</label><br>
  <input type="checkbox"  name="language[]" value="<?php echo $english;?>">
  <label for="english"> english</label><br>
  <input type="checkbox"  name="language[]" value="<?php echo $malayalam;?>" >
  <label for="malayalam"> malayalm</label><br>
  <input type="checkbox"  name="language[]" value="<?php echo $hindi;?>">
  <label for="hindi"> hindi</label><br>
  <input type="checkbox" id="vehicle3" name="language[]" value="<?php echo $telugu;?>">
  <label for="telugu">telugu</label><br>
  <button type="submit" name="submit">Register</button>

</form>
</body>
</html>
