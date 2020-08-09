<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>trai</title>
</head>
<body>
    <header> 
        <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Portofolio</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="logmen">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailid" placeholder="Username/Email...">
                <input type="text" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit" class="btn">Login</button>
            </form>
            <a href="signup.php">Signup</a>
            <form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit" class="btn">Logout</button>
            </form>
        </div>
        </nav>
    </header>
</body>
   
</html>