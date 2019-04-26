<!DOCTYPE html>
<html lang="en">

<?php 
    $title = "First page";
    $h1Title = "Welcome!";
    $year  = date ('Y');
?>

<head>
    <meta charset="UTF-8">
    <title>
        <?php $title ?>
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
</body>

</html>
