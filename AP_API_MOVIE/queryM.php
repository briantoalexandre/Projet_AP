<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php $query = $_GET["query"];
  $page = $_GET["page"];
  $page0 = $page - 1;
  $query = queryM($query); ?>

<div class="album py-5 bg-body-tertiary">
  <div class="container">
       <h4>---</h4>
       <ul class="pagination">
        <li><a <?=($page > 1) ? "href=''" : "href='queryM.php?query=$query&page=$page0'"?>><</a></li>
       </ul>
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
     <?php foreach($query["results"] as $result) : ?>  
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$result['poster_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $result['title']; ?></strong>
              </p>
             <button type="button" class="btn btn-primary mt-auto" onclick="location.href='movieDetail.php?movieId=<?=$result['id']?>'">View</button>
            </div>
          </div>
        </div>
     <?php endforeach; ?>
    </div>
  </div>
</div>

<?php require("footer.php"); ?>