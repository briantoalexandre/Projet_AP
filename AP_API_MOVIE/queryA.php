<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php $query = $_GET["query"];
  $query = queryA($query); ?>

<div class="album py-5 bg-body-tertiary">
  <div class="container">
       <h4>---</h4>
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
     <?php foreach($query["results"] as $result) : ?>  
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$result['profile_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $result['name']; ?></strong>
              </p>
             <button type="button" class="btn btn-primary mt-auto" onclick="location.href='actorDetail.php?actorId=<?=$result['id']?>'">View</button>
            </div>
          </div>
        </div>
     <?php endforeach; ?>
    </div>
  </div>
</div>

<?php require("footer.php"); ?>