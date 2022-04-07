<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
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

<h2>PHP HomeWork 4-1</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  n : <input type="text" name="n" value="<?php echo $n;?>">
  <br><br>>
  <span class="error">* <?php echo $nErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input n: </h2>";
echo $n;
function factorial($n) {
	if( $n <= 1 ) return 1;
	return $n * factorial($n-1);
}
echo "<h2>Your Input n! : </h2>";
echo factorial($n);
echo "<br>";

if (0 < $n) {
    $sum = 0;
    $mul = 1;

    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
        $mul *= $i;
    }


    echo "<h2>Your Input n sum : </h2>";
    for ($i = 1; $i <= $n; $i++) {
        echo($i);
        if ($i < $n) {
            echo(" + ");
        }
    }
    echo(" = " . $sum);
}

//$sum sum1($n) {
//    if( $n <= 1 ) return 1;
//    return $n + sum1($n);
//}
//echo sum1($n)

?>
</body>
</html>