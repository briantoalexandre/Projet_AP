<?php require("header.php"); ?>

<?php $movieId = $_GET["movieId"];
  $key = moviesGetKey($movieId);
  $movie = moviesGetDetail($movieId);
  $actors = getActors($movieId) ?>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-12 row-cols-sm-12 row-cols-md-12 g-5">
            <div class="d-flex align-items-stretchl mx-auto">
                <div class="card shadow-sm my-auto mx-15" style="display:flex;width:25%;flex-shrink:0">
                  <img src="https://image.tmdb.org/t/p/w500/<?=$movie['poster_path']?>" >
                </div>
                    <div style="padding:15px;">
                        <h1 align="center"> <?= (empty($movie["title"])) ? $movie["title"] : "Title not found"?> </h1>
                        <p><?= (!empty($movie["overview"])) ? $movie["overview"] : "description not found"?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-12 row-cols-sm-12 row-cols-md-12 g-5">
            <?= (!empty($key)) ? "<iframe width=\"672\" height=\"378\" src=\"https://www.youtube-nocookie.com/embed/$key\" frameborder=\"0\" allowfullscreen referrerpolicy=\"strict-origin-when-cross-origin\"></iframe>"
            : "<p>Video not found</p>" ?>
        </div>
        <div style="overflow-x: auto; max-width: 100%; white-space: nowrap;">
          
          <table style="max-width: 100%; table-layout: fixed;">
            <tr >
              <?php foreach($actors as $actor)
                if (!empty($actor['profile_path'])){
                 echo "<th><img src=\"https://image.tmdb.org/t/p/w500/".$actor['profile_path']."\" width=\"200\" height=\"300\" onclick=\"location.href='actorDetail.php?actorId=".$actor["id"]."'\"></th>";
                }
                ?>
            </tr>

            <tr>
              <?php foreach($actors as $actor)
               if (!empty($actor['name']) and !empty($actor['profile_path'])) {
                echo "<th><p>".$actor['name']."</p></th>";
               }
              ?>
            </tr>
          

          </table>
        </div>
    </div>
</div>
 


<?php require("footer.php"); ?>