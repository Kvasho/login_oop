<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Log In</title>
</head>

<body>
    <section class="main-section">
        <form action="includes/signup.inc.php" method="post" class="registration">
            <h2>Sign Up</h2>
            <input type="text" name="uid" placeholder="username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password">
            <input type="text" name="email" password="E-mail">
            <br>
            <button type="submit" name="submit">SIGN UP</button>
        </form>

        <form action="includes/login.inc.php" method="post" class="login">
            <h2>Login</h2>
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button type="submit" name="submit">LOGIN</button>
        </form>
    </section>
</body>

</html>