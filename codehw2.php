<!doctype html>
<html>
  <head>
    <meta charset="utf-8"
  </head>
  <body>

<h1> Callenge 1: ISBN Validation </h1>
    <?php
    $isbn ="0747532699";
    $len = strlen($isbn);
    $check = 10;
    $sum = 0;
    echo "Checking isbn: $isbn for validity...<br>";
    for ($i=0; $i<$len;$i++){
      $sum += $check*$isbn[$i];
      $check--;
    }
    if ($sum%11 == 0 ){
    echo "This is a Vaild ISBN!<br>";
    }
    else {
    echo "This is NOT a vaild ISBN!<br>";
    }
    ?>

<h1> Callenge 2: Coin toss </h1>
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
echo "Yay! Flipped two heads in a row, in 10 flips!<br>";
    ?>

</body>
</html>
