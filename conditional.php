<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Document</title>
</head>
<body>

<!--////If statement-->
<!--//$num = 20;-->
<!--//$num1 = 30;-->
<!--//if ($num != $num1){-->
<!--//    echo "less than 30 ";-->
<!--//-->
<!--//-->
<!--////If else statement-->
<!--//if ($num != $num1) {-->
<!--//    echo $num. " is not equal to " .$num1;-->
<!--//-->
<!--//}else{-->
<!--//        echo $num. " is equal to " .$num1;-->
<!--//-->
<!--//-->
<!--//if ($num <= 20 and $num1 <= 30) {-->
<!--//    echo $num. " is equal to 20 and " .$num1. " is Equals to 30";-->
<!--//-->
<!--//}else{-->
<!--//    echo "The condition is false";-->
<!--//-->
<!--//}-->
<form name="form1" method="POST">
    <p>Enter your Coursework Mark: <input type="text" name="coursework"></p>
</form>
<?php
$coursework=$_POST['coursework'];
if ($coursework>=0 && $coursework<=39) {
    echo ' FAIL. Grade D. You will have to retake exams ';
} elseif ($coursework>=40 && $coursework<=54) {
    echo ' Pass. Grade C. Work harder next time ';
} elseif ($coursework>=55 && $coursework<=74) {
    echo ' Merit. Grade B. Good Job! ';
}  elseif ($coursework>=75 && $coursework<=99) {
    echo ' Distinction. Grade A. Congratulations😘😘😘! ';
} else {
    echo ' Kindly input valid grade';
}

?>


</body>
</html>