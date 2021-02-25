<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
    table, td, th{
      border: 3px solid yellowgreen
    }
    table
    {
    border-style:solid;
    width:100%;
    border-color:pink;
    border-collapse:collapse;
    }
    </style>
  </head>
<body bgcolor="#EEFDEF">


<h1> 1. Challenge:  Book lists </h1>
<?php
function html_table($bookdata = array())
{
    $rows = array();
    foreach ($bookdata as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
        }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
    }
    return "<table class='hci-table'>" . implode('', $rows) . "</table>";
}

$bookdata = array(
  array(
    'title'=> "Title",
    'author' => "Author",
    'number of pages'=> "Number of pages",
    'type' => "Type",
    'price' => "Price"),

    array(
    'title'=> "HP and MySQL Web Development",
    'author' => "Luke Welling",
    'number of pages' => "144",
    'type' => "paperback",
    'price' => "$31.63"),

    array(
    'title' => "Web Design with HTML, CSS, JavaScript and jQuery",
    'author'=> "Jon Duckett",
    'number of pages' => "135",
    'type' => "paperback",
    'price' => "$41.23"),

    array(
    'title' => "PHP Cookbook: Solutions & Examples for PHP Programmers",
    'author'=> "David Sklar",
    'number of pages' => "14",
    'type' => "paperback",
    'price' => "$40.88"),

    array(
    'title' => "JavaScript and JQuery: Interactive Front-End Web Development",
    'author'=> "Jon Duckett",
    'number of pages' => "251",
    'type' => "paperback",
    'price' => "$22.09"),

    array(
    'title' => "Modern PHP: New Features and Good Practices",
    'author'=> "Josh Lockhart",
    'number of pages' => "7",
    'type' => "paperback",
    'price' => "$28.49"),

    array(
    'title' => "Modern PHP: New Features and Good Practices",
    'author'=> "Josh Lockhart",
    'number of pages' => "7",
    'type' => "paperback",
    'price' => "$28.49"),

    array(
    'title' => "Programming PHP",
    'author'=> "Kevin Tatroe",
    'number of pages' => "26",
    'type' => "paperback",
    'price' => "$28.96"
  )
);

echo html_table($bookdata)
?>

<h1> 2. Challenge:  Coin Toss, continued </h1>
<?php

echo "Beginning the coin flipping...<br>";

function cointoss () {
  return mt_rand(0,1);
  //0=true? and 1=false?
}

$head = '<img src="heads.jpg" width="100" height="100"/>';
$tail = '<img src="tails.jpg" width="100" height="100"/>';

    $prevCoin = cointoss();
    $cointoss =0;
    if($prevCoin === 1) {
      // show head

      echo $head;
    } else {
      // show tail
      echo $tail;
    }

    $count = 1;
 while ($count <= 8){
   //++$count;
   //flips coins untill count number (previous coin)=8 stop fliping
   $currentCoin = cointoss();
   if ($currentCoin == 1){
     echo $head;
   ++$count;
    }
    else {
      echo $tail;
    }
   }



echo '<br></br>';
echo "Yay! Flipped 8 heads in a row, in $count flips!<br>";
?>

</body>
</html>
