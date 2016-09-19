<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>

  <meta charset="utf-8">
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/main.css">

<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet"></head>

<body>

  <main id="banner">

    <h1>Gallery.io</h1>

    <?php

      if (isset($_GET['message'])) {
        if ($message = $_GET['message'] == "na") {
          echo "<h2>Login was not successful</h2>";
        };
      }

    ?>

    <form id="login" action="access.php" method="POST">
      <input type="text" name="username" placeholder="Username...">
      <input type="password" name="password" placeholder="Password...">
      <input id="button" type="submit" name="submit" value="Login">
    </form>

  </main>

</body>

<script src="js/scripts.js"></script>
</html>
