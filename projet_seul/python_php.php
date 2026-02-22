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
                if (strlen($append[0]) === 0) {
                    $append = array();
                    $id = 1;
                    echo("1");
                }
                else {
                    $id = $append[count($append)-1]+1;
                    echo("2");
                }

                

                if (1==1) {
                $data = ["'$id'" => ['username' => "'$username'", 'passwd' => "'$passwd'", 'email' => "'$email'", 'name'  => "'$name'"]];
                $append[0][] = $data;
                $file = fopen($filename, "w");
                fwrite($file, json_encode($append));
                fclose($file);
                }
            }
        }
    }
}
?>