<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <form method="post" action="registernew.php" >
        <h2>Register</h2>
        <input type="text" placeholder="First Name" class="fname" id="fname" name="fname" required><br>
        <input type="text" placeholder="Last Name" class="lname" id="lname" name="lname" required><br>
        <input type="email" placeholder="Email" class="email" id="email" name="email" required><br>
        <input type="password" placeholder="Password" class="password" id="password" name="password" required><br>
        <input type="submit" value="Register" name="register" ><br>
    </form>
    
</body>
</html>