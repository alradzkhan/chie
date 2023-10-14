<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="stylesheet" href="styles.css">
    <?php
    include "../connection/dbCon.php";
    ?>
</head>
<body>
    <div class="login-container">
        <form action="register.php" method="POST">
            <div>
                <label for="firstname">Firstname</label><br>
                <input type="text" name="firstname"><br>
            </div>
            <div>
                <label for="lastname">Lastname</label><br>
                <input type="text" name="lastname"><br>
            </div>
            <div>
                <label for="age">Age</label><br>
                <input type="number" name="age"><br>
            </div>
            <div>
                <label for="email">Email</label><br>
                <input type="email" name="email"><br>
            </div>
            <div>
                <label for="username">username</label><br>
                <input type="text" name="username"><br>
            </div>
            <div>
                <label for="password">Password</label><br>
                <input type="password" name="password"><br>
            </div>
            <div>
                <label for="confirm_password">confirm password</label><br>
                <input type="password" name="confirm_password"><br>
            </div>
            <div>
                <button type="submit">Register</button><br>
                <p>already have an account? <a href="login.html">Click here to Login</a></p>
            </div>
        </form>

    </div>

</body>
</html>