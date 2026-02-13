<?php
require_once('header.html');
require_once("fonctions.php");
$nb_sal = nb_salarie();
$sal_moy = sal_moy();
$sal_mmax = min_max();
$services = nb_par_serv();
print_r($services)

?>
<div class="container my-5">
<table class="table table-hover">
<th>nb salariées</th>
<th>salaire moy</th>
<th>sal min-max</th>
<tr>
<td><?= htmlspecialchars($nb_sal); ?></td>
<td><?= htmlspecialchars($sal_moy); ?></td>
<td><?= htmlspecialchars($sal_mmax); ?></td>
</tr>
</table>

<table class="table table-hover">
<?php foreach($services as $i):?>


<th><?= $i['service']; ?></th>
<?php endforeach; ?>
<tr>
<?php foreach($services as $i):?>
<td><?= $i['nb_par_service']; ?></td>

<?php endforeach; ?>
</tr>
</table>
</div>
<?php
require_once('footer.html');
?>

