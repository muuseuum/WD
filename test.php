<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
    table
    {
    border-style:solid;
    border-width:2px;
    border-color:pink;
    }
    </style>
  </head>
<body bgcolor="#EEFDEF">

<h1> 2. Challenge:  Coin Toss, continued </h1>
<?php


    function cointoss () {
      return mt_rand(0,1);
    }

    $head = '<img src="heads.jpg" width="100" height="100"/>';
    $tail = '<img src="tails.jpg" width="100" height="100"/>';

    // a: 1, 3, 5, 9 just toss coins
echo "Fliping a coin 1 times...<br>";
    for($i=0; $i<1; $i++) {
      if(cointoss() === 1) {
        // show head
        echo $head;
      } else {
        // show tail
        echo $tail;
      }
    }
    echo '<br></br>';
echo "Fliping a coin 3 times...<br>";
    for($i=0; $i<3; $i++) {
      if(cointoss() === 1) {
        // show head
        echo $head;
      } else {
        // show tail
        echo $tail;
      }
    }
    echo '<br></br>';
echo "Fliping a coin 5 times...<br>";
    for($i=0; $i<5; $i++) {
       if(cointoss() === 1) {
         // show head
         echo $head;
       } else {
         // show tail
         echo $tail;
       }
     }
    echo '<br></br>';
echo "Fliping a coin 7 times...<br>";
    for($i=0; $i<7; $i++) {
      if(cointoss() === 1) {
    // show head
         echo $head;
       } else {
    // show tail
         echo $tail;
       }
     }
     echo '<br></br>';
echo "Fliping a coin 9 times...<br>";
     for($i=0; $i<9; $i++) {
       if(cointoss() === 1) {
    // show head
        echo $head;
       } else {
    // show tail
      echo $tail;
       }
     }
    echo '<br></br>';
    echo '<br></br>';
    echo '<br></br>';
    echo '<br></br>';

// b : while loop

echo "Beginning the coin flipping...<br>";

* Count Loop *
* Set the Count number *

array("Title","First Name","Last Name","Number of Pages","Type","Price")
echo ("Your total price is $");
echo $bookdata[1][5]+$bookdata[2][5]+$bookdata[3][5]+$bookdata[4][5]+$bookdata[5][5]+$bookdata[6][5];

// Janet
https://github.com/jliu52-pratt/info638homework/blob/main/codehw3.php


    $prevCoin = cointoss();
    if($prevCoin === 1) {
      // show head
      echo $head;
    } else {
      // show tail
      echo $tail;
    }
    $currentCoin = 0;

    while(1) {
      $currentCoin = cointoss();
      if($currentCoin === 1) {
        // show head
        echo $head;
      } else {
        // show tail
        echo $tail;
      }
      if($prevCoin === 1 && $currentCoin === 1) {
        // break the while loop.
        break;
      } else {
        $prevCoin = $currentCoin;
      }

    }
echo '<br></br>';
echo "Yay! Flipped two heads in a row, in $prevCoin flips!<br>";
    ?>

</body>
</html>
