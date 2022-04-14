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

<h2>PHP HomeWork 4-2</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  please input n(10~100) (입력하면 오류가 사라집니다.): <input type="text" name="n" value="<?php echo $n;?>">
  <br><br>>
  <span class="error">* <?php echo $nErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input n: </h2>";
echo "You entered $n<br>";
function random_num($n)
{
    for($i=0;$i<$n;$i++)
    {
      $random_num[$i]=mt_rand(1 , 100);
    }
    return $random_num;
}

$random_num=random_num($n);
sort($random_num);
$arrlength = count($random_num);
for($x = 0; $x < $arrlength; $x++) {
  echo $random_num[$x];
  echo "<br>";
}

//print_r($random_num);

    ?>
    </body>
    </html>