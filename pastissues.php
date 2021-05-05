<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/finalproject/homepage/style.css">
  <body id="target">
  <header>
    <img src="http://localhost/finalproject/homepage/project.PNG" alt="Jiyoung">
    <h1><a href="http://localhost/finalproject/homepage/index.php"> IGGY ZINE </a></h1>
  </header>
  <nav>
    <ol>
      <?php
      echo file_get_contents("list.txt");
      ?>
    </ol>
  </nav>

  <article>
    <?php
    session_start();
    if (isset($_SESSION['firstname'])) {
      echo "Hello, ". $_SESSION['firstname'];
      echo " | <small><a href=\"sign_out.php\">Logout</a></small></h3>";
      echo "<img src=\"http://localhost/finalproject/homepage/pastissues.png\">";
    } else{
      echo "<h2> To view past issues of Iggy Zine, please login </h2>";
      echo "<a href=\"sign_in.php\">Sign in</a>";
    }
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "newsletter");
    $result = mysqli_query($conn, "SELECT * FROM subscriber");
    ?>



</body>
</html>
