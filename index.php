<!DOCTYPE html>
<html>
<?php
session_start();
if (isset($_SESSION['firstname'])) {
  echo "Hello, ". $_SESSION['firstname'];
  echo " | <small><a href=\"sign_out.php\">Logout</a></small></h3>";
} else{
  echo "You are not logged in. ";
  echo "<a href=\"sign_in.php\">Sign in</a>";
}
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "newsletter");
$result = mysqli_query($conn, "SELECT * FROM subscriber");
?>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost/finalproject/homepage/style.css">
</head>
<body id="target">
<header>
  <img src="http://localhost/finalproject/homepage/project.PNG" alt="Jiyoung">
  <h1><a href="http://localhost/finalproject/homepage/index.php"> IGGY ZINE </a></h1>
</header>
<nav>
  <ol>
    <?php
    echo file_get_contents("list.txt");
    if (isset($_SESSION['email']) && $_SESSION['email'] == 'jlee225@pratt.edu'){
      echo "<li><a href='http://localhost/finalproject/homepage/admin.php'> Admin </a> </li>";
    }
    ?>
  </ol>
</nav>
<article> <h2> Sign up for a subscription :) </h2>
  <?php
  if(empty($_GET['id']) === false ) {
      $sql = 'SELECT * FROM subscriber WHERE id='.$_GET['id'];
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo '<h2>'.$row['email'].'</h2>';
  }
  ?>
<form action="subscribe.php" method="post">
<p> email: <input type="text" name ="email"> </p>
<p> first name: <input type="text" name ="firstname"> </p>
<p> last name: <input type="text" name ="lastname"> </p>
<p> city: <input type="text" name ="city"> </p>
<p> birthday: <input type="date" name ="birthday"> </p>
<p> comments: <textarea name ="comments"> </textarea> </p>
<p> password: <input type="text" name ="password"> </p>
<input type="submit" name="name">
</form>
</article>
</body>
</html>
