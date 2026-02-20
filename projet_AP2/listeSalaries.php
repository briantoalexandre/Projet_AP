<?php
require_once('header.html');
require_once("fonctions.php");
$lesSalaries = readSalaries();
$nb_sal = nb_salarie();
$sal_moy = sal_moy();
$sal_mmax = min_max();
$services = nb_par_serv();

?>

<a href="createContactHTML.php">Ajouter un salariées</a>

<div class="container my-5">
  <table class="table table-hover">
      <th>id</th> 
      <th>nom</th>
      <th>prenom</th>
      <th>date-naissance</th>
      <th>date-embauche</th>
      <th>salaire</th>
      <th>service</th>
      <th>Update</th>
      <th>Delete</th>
    <?php foreach ($lesSalaries as $leSalarie): ?>    
      <tr>      
        <td><?= htmlspecialchars( $leSalarie['id']); ?></td> 
        <td><?= htmlspecialchars( $leSalarie['nom']); ?></td>  
        <td><?= htmlspecialchars( $leSalarie['prenom']); ?></td>
        <td><?= htmlspecialchars( $leSalarie['date_naissance']); ?></td> 
        <td><?= htmlspecialchars( $leSalarie['date_embauche']); ?></td>
        <td><?= htmlspecialchars( $leSalarie['salaire']); ?></td>
        <td><?= htmlspecialchars( $leSalarie['service']); ?></td>
        <td><?= htmlspecialchars( $leSalarie['service']); ?></td>
        <td><a href="delete.php?id=<?=$leSalarie['id']?>">Supp</a></td>
      </tr> 
    <?php endforeach; ?>
  </table>

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

