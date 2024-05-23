<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form method="post" action="registernew.php">
        <h2> Login</h2>
        <input type="email" placeholder="Email" id="email" name="email" required><br>
        <input type="password" placeholder="Password" name="password" id="password" required><br>
        <input type="submit" value="Login" name="login"><br>
        <p class="Register"><a href="register.php" style="color: white; " > Register?</a></p>
    </form>
</body>
</html>
