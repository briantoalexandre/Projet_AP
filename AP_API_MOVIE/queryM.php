<?php require("header.php"); ?>

<?php $queryGET = $_GET["query"];
  $page = intval($_GET["page"]);
  $query = queryM($queryGET, $page); 
  $maxpage = $query["total_pages"]; ?>

<div class="album py-5 bg-body-tertiary">
  <div class="container">
       <h4><?="$page/$maxpage"?></h4>
       <nav>
        <ul class="pagination">
          <li><button onclick="location.href='./queryM.php?query=<?=$queryGET?>&page=<?=1?>'" >|<</button></li>
          <li><button style="<?= ($page>1) ? '' : 'pointer-events: none;' ?>"   onclick="location.href='./queryM.php?query=<?=$queryGET?>&page=<?=$page-1?>'" ><</button></li>
          <li><button style="<?= ($page<$maxpage) ? '' : 'pointer-events: none;' ?>"  onclick="location.href='./queryM.php?query=<?=$queryGET?>&page=<?=$page+1?>'" >></button></li>
          <li><button onclick="location.href='./queryM.php?query=<?=$queryGET?>&page=<?=$maxpage?>'" >>|</button></li>
        </ul>
      </nav>
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