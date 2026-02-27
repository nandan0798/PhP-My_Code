<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <!-- <form action="Math.php" method="post">
                <label>x:</label>
                <input type="text" name="x"> <br> <br>
                <label>y:</label>
                <input type="text" name="y"> <br> <br>
                 <label>z:</label>
                <input type="text" name="z"> <br> <br>
                <input type="submit" value="total">
        </form> -->

        <form action="Math.php" method="post">
                <label>radius</label>
                <input type="text" name="radius"> <br> <br>
                <input type="submit" value="calculate">
        </form> <br> 
</body>
</html>

<?php
//   $x=$_POST["x"];
//   $y=$_POST["y"];
//   $z = $_POST["z"];
//   $total = null;
// //   $total = abs($x);
// //  $total = round($x); 
// //     $total = sqrt($x);
// // $total = floor($x);
// //   $total = ceil($x);

// // $total = pow($x, $y);
// //  $total = max($x, $y , $z);
// // $total = min($x, $y , $z);
// //    $total= pi();
//   $total = rand(1,100);
//   echo $total;

  $radius = $_POST["radius"];
  $circumferance = null;
  $area = null;
  $volume = null;

  $circumferance = 2* pi() * $radius;
  $circumferance = round($circumferance, 2); 
  $area = pi() * pow($radius , 2);
  $area = round($area, 2);
  $volume = 4/3 * pi() * pow($radius, 3); 
  $volume = round($volume , 2);

  echo "Circumferance = {$circumferance}cm <br>";
  echo "Area = {$area}cm^2 <br>";
  echo "Volume = {$volume}cm^3 <br> "
?>