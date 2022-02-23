<?php
$num = 10;
while ($num<=20){
    echo "Nambari ni $num <br>";
    $num+=3;


}

echo "<br>";

//do while
$num2 = 8;
do {
    echo "The number is: $num2  <br>";
    $num2++;
} while($num2<=9);

echo "<br>";
echo "<br>";

for ($num3=20;$num3<=55;$num3+=6){
    echo "The number is: $num3 <br> ";
}

echo "<br>";
echo "<br>";
$netscape_class=["Dennis","Eric","Peninah","Joseph", 90, 5.6, true, false];
echo $netscape_class[0];
echo "<br>";
var_dump($netscape_class);
foreach ($netscape_class as $darasa) {
    echo "$darasa <br>";
}
