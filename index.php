<!DOCTYPE html>
<html lang="en">

<?php 
    $title = "HomeWork";
    $h1Title = "Ex. 4";
    $year  = date ('Y');
?>

<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $title ?>
    </title>
</head>

<body>
    <h1>
        <?php echo $h1Title ?>
    </h1>
    <p>
        Текущий год =
        <?php echo $year ?>
    </p>
    <hr>
    <h1> Ex. 5</h1>
    <p>
        <?php 
            $a = 1;
            $b = 2;
            echo "a = $a; b = $b  <br>";
            $a += $b;
            $b = $a - $b;
            $a = $a - $b;
            echo "a = $a; b = $b";
        ?>
    </p>

</body>

</html>
