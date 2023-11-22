<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task-2</title>
</head>
<body>
    <form method="POST" action="index1.php">
    <label for="id">id:</label><br>

  <input type="int" name="id"><br><br><br>


  <label >gender:</label><br><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">male</label><br>
  <input type="radio" id="female" name="gender" value="male">
  <label for="female">female</label><br><br><br>
 
<label>language;</label><br><br>
<input type="checkbox" id="tamil" name="language[]" value="tamil">
  <label for="tamil"> tamil</label><br>
  <input type="checkbox" id="vehicle2" name="language[]" value="english">
  <label for="english"> english</label><br>
  <input type="checkbox" id="vehicle3" name="language[]" value="malayalm">
  <label for="malayalam"> malayalm</label><br>
  <input type="checkbox" id="vehicle3" name="language[]" value="hindi">
  <label for="hindi"> hindi</label><br>
  <input type="checkbox" id="vehicle3" name="language[]" value="telugu">
  <label for="telugu"> telugu</label><br>
  <button type="submit" name="submit">Register</button>
  






</form>
    
</body>
</html>