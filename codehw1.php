<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <title> HW1 </title>
</head>
<body>

<h1>Challenge 1:Correct Change</h1>
<?php
$amount=200;
$dollars=0;
$quaters=0;
$dimes=0;
$nickels=0;
$cents=0;

echo "You are due $amount cents back in change total.</br>";
if($amount>=100){
    $dollars = intdiv($amount,100);
  $amount = $amount%100;
  }
if($amount>=25){
  $quaters = intdiv($amount,25);
  $amount = $amount%25;
  }

if($amount>=10){
  $dimes = intdiv($amount,10);
  $amount = $amount%10;
}

if($amount>=5){
  $nickels = intdiv($amount,5);
  $amount = $amount%5;
}
if($amount>=1){
  $cents= intdiv($amount,1);
  $amount = $amount%1;
}

echo "You are due back $dollars dollar(s), $quaters quater(s), $dimes dime(s), $nickels nickel(s), and $cents cent(s).";
?>

<h1>Challenge 2: 99 Bottles of Beer</h1>
         <?php
         $i=99;
         while($i<=100 and $i>0){
         echo "$i bottles of beer on the wall, $i bottles of beer!<br>";
         $i = $i-1;
         echo "Take one down, pass it around, $i bottles of beer on the wall!!</br>";
         }
         ?>

</body>
</html>
