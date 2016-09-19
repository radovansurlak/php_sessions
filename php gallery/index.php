<?php

  error_reporting(0);


  if(!$_SESSION){
    session_start();
  }

  if (!isset($_SESSION["login"]) || $_SESSION["login"] == false){
    header("Location: ../php%20login/index.php");
  }

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <title></title>

  <meta charset="utf-8">
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/main.css">

</head>

<body>

  <main id="gallery">

  <a id="logout-button" href="logout.php"></a>

  <?php

    // error_reporting(0);

    $images = scandir("media");

    foreach ($images as $image ) {

      $extensions = array(".jpeg","jpg",".png");

      $image_info = getimagesize("media/$image");
      $filename = pathinfo("media/$image", PATHINFO_FILENAME);

      if($image_info && ($filename !== "logout")){
        echo "<a href=\"media/$image\"><img id=\"gallery-image\" src=\"media/$image\" alt=\"gallery image\" /></a>";
      }
    };
  ?>

</main>



</body>

<script src="js/scripts.js"></script>
</html>
