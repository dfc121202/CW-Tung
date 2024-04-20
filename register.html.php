<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="CW.css">
</head>
<body class="container-body">

  <div class="container">
    <h1>Registration</h1>
    <br><br>
    <form action="/CW/Home.php" method="post" class="container-detail">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <br>
      <input type="submit" value="Register">
      <a style="color: black" href="Login.html.php">Already have an account?</a>
    </form>
  </div>

</body>
</html>