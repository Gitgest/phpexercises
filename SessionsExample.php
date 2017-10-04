<?php
/**
 * Created by PhpStorm.
 * User: Rasmus laptop
 * Date: 04/10/2017
 * Time: 11:16
 */

session_start();
?>

<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["favcolor"] = "blue";
$_SESSION["favanimal"] = "dog";
echo "Session variables are set.<br>";

//echo session variables that were set previously
echo "<br>Session variables<br>";
echo "Favourite color is: " . $_SESSION["favcolor"] . ".<br>";
echo "Favourite color is: " . $_SESSION["favanimal"] . ".<br>";

echo "<br>Showing session variables with print_r<br>";
print_r($_SESSION);

echo "<br>Modification of session<br>";
$_SESSION["favcolor"] = "green";
print_r($_SESSION);

//remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
</body>
</html>