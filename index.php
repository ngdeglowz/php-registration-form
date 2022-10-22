<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRATION FORM</title>
</head>
<body>
  <form method="POST" action="user_data.php">
    <label for="name">
    Name : <input type="text" name="name"></label><br>
    <label for="name">
    Email : <input type="email" name="email"></label><br>
   
    <label for="dateofbirth">
    Date of Birth : <input type="date" name="date ofbirth"></label><br>
    <label for="gender">Gender:</label>
    <select id="gender" name="gender">
    <option value="male">Choose</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
</select>
    <label for="country"><br>
    Country : <input type="text" name="country"></label><br>
  <button type="submit">Submit</button>
 
  </form>

</body>
</html>