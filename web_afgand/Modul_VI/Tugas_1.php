<?php
$fruits['a']="apple";
$fruits['b']="orange";
$fruits['s']="banana";
$fruits['d']="lemon";

sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "<br>";
} echo"<br>";

asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
} echo"<br>";

ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
} echo"<br>";

rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
} echo"<br>";

arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
} echo"<br>";

krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
} echo"<br>";


?>