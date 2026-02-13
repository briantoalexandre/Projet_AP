<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "func.php"; ?>
    <h1>Simulation de prix de location de voiture</h1>
    <form action="" method="post">
        <input type="number" name="jours" id=""><button type="submit">Submit</button>
        <br>
    </form>
    <label for=""> answer : <?php echo (isset($_POST["jours"]) and !empty($_POST["jours"])) ? CalulerPrixLocation($_POST["jours"]): ""; ?> </label>


</body>
</html>