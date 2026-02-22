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
                $append = file_get_contents($filename);
                echo("value : '$append'<br><br>");
                
                
                if (strlen($append[0]) === 0) {
                    $append = array();
                    $id = 1;
                    echo("1");
                }
                else {
                    echo("2");
                }
                echo "<br><br>";
                $append = json_decode($append);
                foreach($append as $value=>$val) {
                   print_r($value => $val);
                   echo "<br>";
                }
                echo "<br><br>";
                

                if (1==2) {
                $data = ["'$id'" => ['username' => "'$username'", 'passwd' => "'$passwd'", 'email' => "'$email'", 'name'  => "'$name'"]];
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

