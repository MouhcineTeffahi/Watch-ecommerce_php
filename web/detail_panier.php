<div class="panel panel-default"> 
 <div class="panel-heading">Panier</div>
   <table class="table">

    <thead> 
    <tr> 
    <th>Photo</th>
     <th>Nom</th> 
     <th>Prix U</th>
      <th>Qnt</th> 
      <th>Prix*Qnt</th> 
      </tr>
       </thead>


        <tbody> 
<?php

$nbr_prd=count($_SESSION['panier']['ref']);
$total=0;
for ($i=0;$i<$nbr_prd;$i++){

$ref_prd=$_SESSION['panier']['ref'][$i];
$qnt_prd=$_SESSION['panier']['qnt'][$i];

$requete="SELECT `nom` , `prix` FROM `produits` WHERE `ref`=$ref_prd";

$resultat=mysql_query($requete);

	while($line=mysql_fetch_array($resultat))
	{
		$prix=$line['prix'];
		$pq=$prix*$qnt_prd;
		$total+=$pq;
		$nom=$line['nom'];

	}

?>

        <tr> 
        <td><img src="photos/<?php echo $ref_prd?>.jpg" width="60"></td>
         <td><?php echo $nom?></td> 
         <td><?php echo $prix?></td>
         <td><?php echo $qnt?></td> 
         <td><?php echo $pq?></td> 

         </tr>
            

         



<?php
}

?> 
<tr> 
        <td colspan="4" align="center"><button class="btn btn-default">Commander</button></td>
        <td><?php echo $total?> DH </td> 

         </tr>
</tbody> 
          </table> 

          </div>