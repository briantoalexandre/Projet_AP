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
                echo "(filesize($filname))<br>";
                if (filesize($filname)) {
                    $append = json_decode(file_get_contents($filename), true)[0];
                    $table[] = $append;
                    print_r($append);
                    echo "<br>";
                }
                catch (Throwable $e) {
                    $table = [];
                    $id = 1;
                }

                if (1==2) {
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

