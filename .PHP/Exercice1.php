<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcul du prix du billet en fonction de l'age</h1>
    <form action="" method="post">
    <input type="number" name="age" id=""> <button type="submit">Submit</button>
    <?php
    include "func.php";
    if (isset($_POST["age"]) and !empty($_POST["age"])) {
        $name = $_POST["age"];
        if ($name > 0) {
            if ($name < 5){
                $answer = "free";
            }
            elseif ($name<=12) {
                $answer = "10$";
            }
            elseif ($name<=59) {
                $answer = "20$";
            }
            else {
                $answer = "15$";
            }
        }
        else {
            $answer = "error";
        }
        
    }
    ?>
    <br>
    <label for=""> answer : <?php echo $answer; ?></label>
    </form>


</body>
</html>