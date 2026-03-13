<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php if ( isset($_GET['movieId']) AND !empty($_GET['movieId'])){ 
    $movieId = $_GET['movieId'];
    $movie = moviesGetDetail($movieId);
    print_r($movie); 
    } ?>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-12 row-cols-sm-12 row-cols-md-12 g-5">
            <div class="d-flex align-items-stretchl mx-auto">
                <div class="card shadow-sm my-auto mx-1">
                    <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$movie['poster_path']; ?>" >
                </div>
                    <div>
                        <h1><?=$movie["title"]?></h1>
                        <p><?=$movie["overview"]?></p>
                            
                </div>
            </div>
        </div>
    </div>
</div>
<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-12 row-cols-sm-12 row-cols-md-12 g-5">
            <h2><?=print_r(moviesGetKey($movieId))?></h2>
        </div>
    </div>
</div>

<?php require("footer.php"); ?>