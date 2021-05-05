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
$hn = 'localhost';
$db = 'newsletter';
$un = 'root';
$pw = '';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$city = $_POST['city'];
$birthday = $_POST['birthday'];
$comments = $_POST['comments'];
$password = $_POST['password'];
$sql= "INSERT INTO subscriber(email, firstname, lastname, city, birthday, comments, password) VALUES('$email', '$firstname', '$lastname', '$city','$birthday','$comments', '$password')";

if (empty($_POST['email']) || empty($_POST['password']) ) {
  echo "<p><h2>Please fill out all of the form fields! :( </h2> <br> Error code: </p>";}

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully. Thank you for subscribing!";
  $_SESSION['firstname'] = $firstname;
  $_SESSION['lastname'] = $lastname;
  $_SESSION['email'] = $email;

} else {
  if ($conn->errno == 1062){
    echo "Record with " . $email . " already exists";
  } else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();
?>
</article>
