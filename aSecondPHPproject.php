<?php
/**
 * Created by PhpStorm.
 * User: Rasmus laptop
 * Date: 04/10/2017
 * Time: 09:11
 */

echo "hello world";

for($i = 0; $i < 11; $i++) {
    echo $i . "<br>";
}

echo "<br>";


//Make table, make a for loop that determines rows, add for loop which then in turn add data to each cell.
echo "Multiplication table<br><table border=\"\">";

for ($r = 0; $r <= 10; $r++) {
    echo "<tr>";
    for ($c = 0; $c <= 10; $c++){
        echo "<td>" .$c*$r. "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

// Super variable $_GET, et array som kan påvirkes fra browser URL'en. efter .php?variablenavn = variabelindhold&andetvariabelnavn=variableindhold
echo "$_GET eksempel";
print_r($_GET);
$name1 = $_GET['firstname'];
$name2 = $_GET['secondname'];
$name3 = $_GET['thirdname'];

echo "<br>testing " . $name1 . ", " . $name2 . " and last but not lease " . $name3;

//multidimensional array (arrays in arrays)
$info = array
(
    array("username1", 1234),
    array("username2", "Oister")

);

echo "<br><br>username: " . $info[0][0] . "Password: " . $info[0][1] . "<br>";
echo "<br>username: " . $info[1][0] . "Password: " . $info[1][1] . "<br>";

$fetchName = $_GET['username'];
$fetchPass = $_GET['password'];

if ($fetchName.)

?>