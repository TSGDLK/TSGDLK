<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php

$nErr = "";
$n = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["n"])) {
    $nErr = "n is required";
  } else {
    $n = test_input($_POST["n"]);
    // check if name only contains letters and whitespace
    if (!is_int($n)) {
      $nErr = "Only number allowed";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP HomeWork 4-3</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  please input n(1~100) : <input type="text" name="n" value="<?php echo $n;?>">
  <br><br>>
  <span class="error">* <?php echo $nErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<?php
$fibonacci = function(int $n) use(&$fibonacci) : int {
    return $n <= 1 ? $n : $fibonacci($n - 1) + $fibonacci($n - 2);
};
$result = [];
foreach (range(0, $n) as $n) {
    $result[] = $fibonacci($n);
}
print_r($result);
//echo $result[$n];
//$lastElement  = $result[array_key_last($result)];
//    echo "<br>$lastElement";

echo "<br>";
echo "마지막 항 : ";
echo $result[$n];
echo "<br>";
echo "마지막 항 바로 앞 항 : ".$fibonacci($n-1);
$ratio1 = $fibonacci($n-1)/$fibonacci($n-1);
$ratio2 = $result[$n]/$fibonacci($n-1);
echo "<br>";
echo "두 항의 비율 : ";
echo " $ratio1 : $ratio2  ";
?>
    </body>
    </html>