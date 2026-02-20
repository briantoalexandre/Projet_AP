<?php
$username = $_GET["username"];
$passwd = $_GET["username"];
$email = $_GET["username"];
$name = $_GET["username"];
?>


<?php
if (isset($username) and !empty($username)) {
    if (isset($passwd) and !empty($passwd)) {
        if (isset($email) and !empty($email)) {
            if (isset($name) and !empty($name)) {
                echo "hello";
            }
        }
    }
}
?>