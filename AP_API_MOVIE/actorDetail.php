<?php require("header.php"); ?>
<?php require_once("fonctions.php"); ?>

<?php $actorId = $_GET["actorId"];
  $actor = actorsGetDetail($actorId);
  $movies = getMovies($actorId) ?>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-12 row-cols-sm-12 row-cols-md-12 g-5">
            <div class="d-flex align-items-stretchl mx-auto">
                <div class="card shadow-sm my-auto mx-15">
                  <img height="300" width="200" src="https://image.tmdb.org/t/p/w500/<?=$actor['profile_path']?>" >
                </div>
                    <div style="margin: 0 5%">
                        <h1 style="text-align:center">  <?= (!empty($actor["name"])) ? $actor["name"] : "Name not found"?> </h1>
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
                if (!empty($movie['poster_path'])) {
                echo "<th><img src=\"https://image.tmdb.org/t/p/w500/".$movie['poster_path']."\" width=\"200\" height=\"300\" onclick=\"location.href='movieDetail.php?movieId=".$movie["id"]."'\"></th>";
                }
                ?>
            </tr>

            <tr>
              <?php foreach($movies as $movie)
                if (!empty($movie['title']) and !empty($movie['poster_path'])) {
                 echo "<th><p>".$movie['title']."</p></th>";
                }
              ?>
            </tr>

          </table>
        </div>
    </div>
</div>

<?php require("footer.php"); ?>