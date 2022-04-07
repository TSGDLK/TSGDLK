<!DOCTYPE HTML>
<html>
<head>
<title>PHP Program To find Area and Circumference of a Circle</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td>radius : <input type="text" name="radius" value="" </td>
<td>width : <input type="text" name="width" value="" </td>
<td>height : <input type="text" name="height" value="" </td>
<td>length : <input type="text" name="length" value="" </td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
    $r = $_POST['radius'];
    $width = $_POST['width'];
    $height = $_POST['height'];
    $length = $_POST['length'];
    $pi = 3.14;
    $circle = $pi * $r * $r;
    $triangle = $width * $height;
    $sphere = 4/3 * $pi * $r * $r * $r;
    $rectangle = $width * $height;
    $rectangular_prism = $width * $length * $height;
    $cylinder = $pi * $r * $r * $height;                                 
    echo "삼각형의 면적 : ".$triangle;
    echo "<br>";
    echo "직사각형의 면적 : " .$rectangle;
    echo "<br>";
    echo "원의 면적 : ".$circle;
    echo "<br>";
    echo "직육면체의 체적 : ".$rectangular_prism; 
    echo "<br>";
    echo "원통의 체적 : ".$cylinder; 
    echo "<br>";
    echo "구의 체적 : ".$sphere; 
    echo "<br>";

return 0;
}

?>


</body>
</html>