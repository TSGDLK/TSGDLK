<?php

$severname = 'localhost';
$username = 'root';
$PW = '';
$db = 'tiket';
$link = mysqli_connect($severname, $username, $PW,$db);
$_GET['order'] = isset($order) ? $_GET['order'] : null;
?>

<html>
<head>
<meta charset="utf-8">
    <title>tiket</title>
    <style>
        .input-wrap {
            width: 1000px;
            margin: 0 auto;
        }
        h1 { text-align: center; }
        th, td { text-align: center; }
        table {
            border: 1px solid #000;
            margin: 0 auto;

        }
        td, th {
            border: 1px solid #ccc;
        }
        a { text-decoration: none; }

    </style>
</head>
<body>
    <div class="input-wrap">
        <form action="tiket.php" method="POST">
            고객성명  <input type="text" name="name"><br>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>구분</th>
                        <th colspan ="2">어린이</th>
                        <th colspan ="2">어른</th>
                        <th>비고</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>입장권</td>
                        <td>7,000</td>
                        <td>
                        <form action="/tiket.php" method="POST">
                            <select name="kid">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </td>
                            <td>10,000</td>
                            <td><form action="/tiket.php" method="POST">
                            <select name="adult" placeholder="adult">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                </td>
                                <td>입장</td>
                          
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BIG3</td>
                        <td>12,000</td>
                        <td><form action="/tiket.php" method="POST">
                            <select name="kid_big3" placeholder="kid_big3">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </td>
                        <td>16,000</td>
                        <td><form action="/tiket.php" method="POST">
                            <select name="adult_big3" placeholder="adult_big3">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <td>입장+놀이3종</td>
                        </td>
                    </tr>
                 
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>자유이용권</td>
                        <td>21,000</td>
                        <td><form action="/tiket.php" method="POST">
                            <select name="kid_free" placeholder="kid_free">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </td>
                        <td>26,000</td>
                        <td><form action="/tiket.php" method="POST">
                            <select name="adult_free" placeholder="adult_free">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <td>입장+놀이자유</td>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>연간이용권</td>
                        <td>70,000</td>
                        <td><form action="/tiket.php" method="POST">
                            <select name="kid_year" placeholder="kid_year">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                        </td>
                        <td>90,000</td>
                        <td><form action="/tiket.php" method="POST">
                            <select name="adult_year" placeholder="adult_year">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                           
                            <td>입장+놀이자유</td>
                        </td>
                    </tr>
                    <input type="submit">
                </tbody>
            </table>
       </form>
       <?php 
            date_default_timezone_set('Asia/Seoul'); 
            if (date("A")=="АМ") 
                $dayline="오전"; 
            else 
                $dayline="오후"; 
            $time = date("Y년 m월 d일 $dayline h:i분"); 
            echo "<br><br>"; 
            echo $time;

            if(isset($_POST["name"])) 
            $name = $_POST["name"];
            else 
            $name = ""; 
            if(isset($_POST["kid"])) $kid=$_POST["kid"]; else $name = ""; 
            if(isset($_POST["kid_big3"])) $kid_big3=$_POST["kid_big3"]; else $name = ""; 
            if(isset($_POST["kid_free"])) $kid_free=$_POST["kid_free"]; else $name = ""; 
            if(isset($_POST["kid_year"])) $kid_year=$_POST["kid_year"]; else $name = "";
            if(isset($_POST["adult"])) $adult=$_POST["adult"]; else $name = "";
            if(isset($_POST["adult_big3"])) $adult_big3=$_POST["adult_big3"]; else $name = "";
            if(isset($_POST["adult_free"])) $adult_free=$_POST["adult_free"]; else $name = "";
            if(isset($_POST["adult_year"])) $adult_year=$_POST["adult_year"]; else $name = "";


                    if (isset($_POST['name']) && strlen($_POST['name']) > 0) {
                            $sum = ("7000" * $kid)+("10000" * $kid_big3)+("12000" * $kid_free)+("16000" * $adult)+("21000" * $adult_big3)+("26000" * $adult_big3)+("70000" * $kid_year)+("90000" * $adult_year);
                            $sql="INSERT INTO  tiket('name', 'kid', 'kid_big3' ,'kid_free', 'kid_year', 'adult', 'adult_big3' ,'adult_free', 'adult_year', 'date') VALUES ($name, $kid, $kid_big3 ,$kid_free, $kid_year, $adult, $adult_big3 ,$adult_free, $adult_year)";
                            mysqli_query($link,$sql);          
                    }
                    
                    $query ="SELECT * FROM tiket";
                    $result = mysqli_query($link,$query);
                    if(isset($_POST["name"])){
                        echo "<br>";
                        echo $name;
                        echo "님 감사합니다. <br>";

                        if($kid > 0 or $kid_big3 > 0 or $kid_free > 0 or $kid_year >0)
                            echo "어린이 ";
                        if($kid >0){
                            echo "입장권 ".$kid;
                            echo "매";
                        }
                        if($kid_big3 >0){
                            echo "BIG3 ".$kid_big3;
                            echo "매";
                        }
                        if($kid_free >0){
                            echo "자유 이용권 ".$kid_free;
                            echo "매";
                        }
                        if($kid_year >0){
                            echo "연간 이용권 ".$kid_year;
                            echo "매";
                        }

                        echo"<br>";

                        if($adult > 0 or $adult_big3 > 0 or $adult_free > 0 or $adult_year >0)
                            echo "어른 ";
                        if($adult >0){
                            echo "입장권 ".$adult;
                            echo "매";
                        }
                        if($adult_big3 >0){
                            echo "BIG3 ".$adult_big3;
                            echo "매";
                        }
                        if($adult_free >0){
                            echo "자유 이용권 ".$adult_free;
                            echo "매";
                        }
                        if($adult_year >0){
                            echo "연간 이용권 ".$adult_year;
                            echo "매";
                        }

                        echo "<br>";
                        echo "합계 ". $sum;
                        echo "원 입니다.";
                    }
                    mysqli_free_result($result);
                    mysqli_close($link);
                ?>
            </tbody>
        </table>
    



</body>
</html>


