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
                echo (filesize($filename))."<br>";
                if (filesize($filename)  > 3) {
                    $append = json_decode(file_get_contents($filename), true)[0];
                    $table[] = $append;
                    $id = count($table)+1;
                    print_r($append);
                    echo "<br>";
                }
                else {
                    $table = [];
                    $id = 1;
                }

                if (1==1) {
                $data = ["'$id'" => ['username' => "'$username'", 'passwd' => "'$passwd'", 'email' => "'$email'", 'name'  => "'$name'"]];
                $table[] = $data;
                $file = fopen($filename, "w");
                fwrite($file, json_encode($table));
                fclose($file);
                }
            }
        }
    }
}
?>

