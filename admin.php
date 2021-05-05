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
<title>Admin Page</title>
<style>
table {
border-collapse: collapse;
width: 80%;
color: black;
font-family: monospace;
font-size: 15px;
text-align: left;
}
th {
background-color: pink;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>

</head>
<body>
<br>
<table>
<tr>
<th>id</th>
<th>Subscription_date</th>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>city</th>
<th>birthday</th>
<th>comments</th>
<th>password</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "newsletter");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,Subscription_date,firstname,lastname,email,city,birthday,comments,password FROM subscriber";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Subscription_date"]. "</td><td>". $row["firstname"]. "</td><td>". $row["lastname"]
. "</td><td>". $row["email"]. "</td><td>". $row["city"]. "</td><td>". $row["birthday"]. "</td><td>".
 $row["comments"]. "</td><td>". $row["password"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
