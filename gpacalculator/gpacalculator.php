<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA CALCULATOR</title>
</head>
<body>
    <form action="gpacalculator.php" method="post">
        <label>GPA CALCULATOR</label><br>
        <input type="number" name="number" placeholder="Enter Your  Marks"><br>
        <input type="submit" name="submit"><br>
    </form>


    <?php 
    $mark = $_POST['number'];

    if ($mark >= 80){
        echo 'GPA: A+';
    }elseif ($mark >= 70){
        echo 'GPA: A';
    }elseif ($mark >= 60){
        echo 'GPA: A-';
    }elseif ($mark >= 50){
        echo 'GPA: B';
    }elseif ($mark >= 40){
        echo 'GPA: C';
    }elseif ($mark < 40){
        echo 'Failed ';
    }
    ?>

</body>
</html>