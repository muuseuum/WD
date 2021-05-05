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
<article>
<?php
session_start();
include_once 'header.php';

if (isset($_POST['submit'])) { //check if the form has been submitted
	if ( empty($_POST['email']) || empty($_POST['password']) ) {
		echo "<p>Please fill out all of the form fields!</p>";
	} else {
		$conn = mysqli_connect("localhost", "root", "", "newsletter");
		if ($conn->connect_error) die($conn->connect_error);
		$email = sanitizeMySQL($conn, $_POST['email']);
		$password = sanitizeMySQL($conn, $_POST['password']);
		$query  = "SELECT firstname, lastname, email FROM subscriber WHERE email='$email' AND password='$password'";
		$result = $conn->query($query);
		if (!$result) die($conn->error);
		$rows = $result->num_rows;
		if ($rows==1) {
			$row = $result->fetch_assoc();
			$_SESSION['firstname'] = $row['firstname'];
			$_SESSION['lastname'] = $row['lastname'];
			$_SESSION['email'] = $row['email'];
			header("Location: index.php");
		} else {
			echo "<p>Invalid email/password combination!</p>";
		}
	}
}
function sanitizeString($var)
{
	$var = stripslashes($var);
	$var = strip_tags($var);
	$var = htmlentities($var);
	return $var;
}
function sanitizeMySQL($connection, $var)
{
	$var = sanitizeString($var);
	$var = $connection->real_escape_string($var);
	return $var;
}
?>
<fieldset style="width:30%"><legend>Log-in</legend>
<form method="POST" action="">
Email:<br><input type="text" name="email" size="40"><br>
Password:<br><input type="password" name="password" size="40"><br>
<input type="submit" name="submit" value="Log-In">
</form>
</fieldset>
</article>
<?php include_once 'footer.php'; ?>
