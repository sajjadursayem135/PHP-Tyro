<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator using php</title>
</head>
<style>
    .form{
        height: 130px;
        width: 400px;
        background: #DAF7A6;
        margin: 0 auto;
        padding-top: 50px;
    }
    .result{
        background: #DAF7A6;
        text-align: center;
        height: 50px;
        width: 400px;
        margin: 0 auto;
        font-size: 40px;
        
    }
    .result_main{
        background: #DAF7A6;
        text-align: center;
        height: 50px;
        width: 400px;
        margin: 0 auto;
        font-size: 40px;
    }
    input{
        padding: 5px;
    }
</style>
<body>
    <form class="form" action="calculator.php" align="center" method="post">
    <label for="">First Number:</label>
    <input type="number" name="fname" placeholder="Enter Number Here"><br><br>
    <label for="">Second Number:</label>
    <input type="number" name="sname" placeholder="Enter number Here"><br><br>

    <input type="submit" name="add" value="Addtion">
    <input type="submit" name="sub" value="Subtraction">
    <input type="submit" name="mul" value="Multiplication">
    <input type="submit" name="dev" value="Division">
    <input type="submit" name="mod" value="Modulus">
    </form>
<h3 class="result_main">Result</h3>


<!--==========================
        php code start  
===============================-->
<h2 class="result">
<?php 
$a=$_POST['fname'];
$b=$_POST['sname'];

if(isset($_POST['add'])){
    echo $a+$b;
}
elseif(isset($_POST['sub'])){
    echo $a-$b;
}
elseif(isset($_POST['mul'])){
    echo $a*$b;
}
elseif(isset($_POST['dev'])){
    echo $a/$b;
}
elseif(isset($_POST['mod'])){
    echo $a%$b;
}
?>
</h2>
<!--==========================
        php code end  
===============================-->

</body>
</html>