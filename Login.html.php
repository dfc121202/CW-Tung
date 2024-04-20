<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CW.css">
    <title>Document</title>
</head>

<body class="container-body">

    <div class="container">
        <h1>Login</h1>
        <br><br>
        <form action="/CW/Home.php" method="post" class="container-detail">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Login">
            <a style="color: black" href="register.html.php">Don't have an account?</a>
        </form>
    </div>

</body>

</html>