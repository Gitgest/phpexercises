<?php
/**
 * Created by PhpStorm.
 * User: Rasmus laptop
 * Date: 04/10/2017
 * Time: 11:00
 */

$cookie_name = "users";
$cookie_value = "Rasmus Cookie II";

//setcookie(name, value, expire, path, domain, secure, httponly), must appear before the html tag.
//to delete a cookie set the time to some time in the past (86400 * 30) could be -3600, an hour ago.
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //86400 = 1 day, cookie expires after 30 days.

//testcookie to test wether it is enabled.
setcookie("test_cookie","test", time() + 3600, '/');
?>

<html>
    <body>
    <?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set! <br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }

    ?>

    <?php
    if(count($_COOKIE) > 0) {
        echo "<br>cookies are enabled";
    } else {
        echo "<br>cookies are disabled";
    }
    ?>

    </body>
</html>
