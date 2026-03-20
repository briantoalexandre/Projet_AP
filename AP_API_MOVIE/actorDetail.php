<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php $actorId = $_GET["actorId"];
  $actor = actorsGetDetail($actorId);
  $movies = getMovies($actorId) ?>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-12 row-cols-sm-12 row-cols-md-12 g-5">
            <div class="d-flex align-items-stretchl mx-auto">
                <div class="card shadow-sm my-auto mx-15">
                  <img height="300" src="https://image.tmdb.org/t/p/w500/<?=$actor['profile_path']?>" >
                </div>
                    <div>
                        <h1><?= (!empty($actor["name"])) ? $actor["name"] : "Name not found"?> </h1>
                        <p><?= (!empty($actor["biography"])) ? $actor["biography"] : "Biography not found"?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div style="overflow-x: auto; max-width: 100%; white-space: nowrap;">
          
          <table style="max-width: 100%; table-layout: fixed;">
            <tr >
              <?php foreach($movies as $movie)
                echo
                (!empty($movie['poster_path'])) ? "<th><img src=\"https://image.tmdb.org/t/p/w500/".$movie['poster_path']."\" width=\"200\" height=\"300\" onclick=\"location.href='movieDetail.php?movieId=".$movie["id"]."'\"></th>"
                : "<th><div style=\"width: 200px; height: 300px;\" onclick=\"location.href='movieDetail.php?movieId=".$movie['id']."'\"><p>Image not found</p></div></th>"
                ?>
                <p><?=$movie["poster_path"]?></p>
            </tr>

            <tr>
              <?php foreach($movies as $movie)
                echo
                (!empty($movie['title'])) ? "<th><p>".$movie['title']."</p></th>"
                : "<th><p>Title not found</p></div></th>"
              ?>
            </tr>

          </table>
        </div>
    </div>
</div>

<?php require("footer.php"); ?>