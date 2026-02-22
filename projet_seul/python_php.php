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
                $append = array(file_get_contents($filename));
                print_r($append);
                if (empty($append)) {
                    $id = "1";
                }
                else {
                    $id = strval($append[strval(count($append))]+1);
                }

                

                if (1==1) {
                $data = [$id=> ["username" => $username, "passwd" => $passwd, "email" => $email, "name" => $name]];
                $append[] = $data;
                $file = fopen($filename, "w");
                fwrite($file, json_encode($append));
                fclose($file);
                }
            }
        }
    }
}
?>