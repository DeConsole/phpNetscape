<!doctype html>
<html lang="en">
<head>
    <style>
        H1, h2 {
            text-align: center;
        }
        h1{
            color: red;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>PHP Arithmetic</h1>

<?php
$number = 30;
$number2 = 20;
?>

<h2> <?php echo "The product of " . $number . " and " . $number2 . " is " . $number * $number2;?></h2>
<h2> <?php echo "The sum (addition) of " . $number . " and " . $number2 . " is " . $number + $number2; ?> </h2>
<h2> <?php echo "The difference (subtraction) of " . $number . " and " . $number2 . " is " . $number - $number2; ?>
</h2>
<h2> <?php echo $number . " divided by " . $number2 . " is " . $number / $number2; ?> </h2>

</body>
</html>




