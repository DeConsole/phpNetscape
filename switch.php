<!doctype html>
<html lang="en">
<head>
    <style>
        body{
            text-align: center;
            font-size: 30px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//$coursetaken = "Education";
//
//switch ($coursetaken){
//    case "marketing":
//        echo "I choose Marketing";
//    break;
//    case "architecture":
//        echo "I choose Architecture";
//        break;
//    case "Education":
//        echo "I will be a teacher when i graduate";
//        break;
//    case "software engineer":
//        echo "i like creating web systems";
//        break;
//    default:
//        echo "Kindly choose the offered courses";
//}
?>

<form name="form1" method="POST">
    <p>Enter your Coursework Mark: <input type="text" name="course_results"></p>
</form>

<?php
$course_results=$_POST['course_results'];
switch ($course_results) {
    case "A":
        echo "DISTINCTION. Excellent work 👌";
        break;
    case "B":
        echo "MERIT. Good work 👍";
        break;
    case "C":
        echo "PASS. Average score ✌";
        break;
    case "D":
        echo "POOR. Work harder 😒";
        break;
    case "E":
        echo "FAIL. You will have to repeat the course work 😢";
        break;
    default:
        echo "Kindly input valid score of Either A, B, C, D and E";
}
echo "<br>";
echo "<br>";
echo "<br>";

$num = 100;
do {
    echo "The number is: $num <br>";
    $num-=10;
} while($num>=0);

echo "<br>";
echo "<br>";
echo "<br>";

$num = 0;
while ($num<=100){
echo "Nambari ni: $num <br>";
$num+=10;}
?>


</body>
</html>
