<?php
$username = $_GET["username"];
$passwd = $_GET["passwd"];
$email = $_GET["email"];
$name = $_GET["name"];
?>


<?php
$filename = "userProfile.json";
if (isset($username) and !empty($username)) {
    if (isset($passwd) and !empty($passwd)) {
        if (isset($email) and !empty($email)) {
            if (isset($name) and !empty($name)) {
                if (!empty(fopen($filename, "w"))) {
                    $file = fopen($filename, "w");
                    $array = array(file_get_contents($filename));
                    $id = count($array)+1;
                    
                }
                else {
                    $file = fopen($filename, "w");
                    $id = "1";
                }
                $table = [$array];
                $data = [$id=> ["username" => $username, "passwd" => $passwd, "email" => $email, "name" => $name]];
                $table[] = $data
                $file = fopen($filename, "w");
                fwrite($file, json_encode($table);
                fclose($file);
            }
        }
    }
}
?>