<?php 
$recuper_ref=$_GET['detail'];
$requete="SELECT * FROM `produits` WHERE `ref`=$recuper_ref";
$resultat=mysql_query($requete);
while($ligne=mysql_fetch_array($resultat))
{
?>

<div class="media"> 
<div class="media-left"> 

<img class="media-object"  alt="<?php echo $ligne['nom']?>" src="photoimg/<?php echo $ligne['ref']?>.jpg" data-holder-rendered="true"> 

</div>

 <div class="media-body"> 
 <h4 class="media-heading"><?php echo $ligne['nom']?> </h4>
  <p> <?php echo $ligne["detail"] ?> </p> 
    <span class="prix"><?php echo $ligne['prix']?>dh</span>
    <br>
    <button type="button" class="btn panier"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;Panier</button>
    </div> 
  </div>
  <hr>
  <?php
  $cat=$ligne["categorie"] ;
  $prix=$ligne['prix'];
  $ref_en_cour=$ligne['ref'];
  }
  $requete="SELECT * FROM `produits` WHERE `categorie`='$cat' and (`prix`>=$prix+1000 or `prix`>=$prix-1000) ";
 $resultat=mysql_query($requete);




 
 while($ligne=mysql_fetch_array($resultat))
{
	if($ref_en_cour!=$ligne['ref'])
	{
	?>
 <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="photos/<?php echo $ligne['ref']?>.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php echo $ligne['prix']?> Dh</h4>
                                <h4 style="margin-top: 36px;
    display: block;"><a href="index.php?detail=<?php echo $ligne['ref']?>"><?php echo $ligne['nom']?></a>
                                </h4>
                                <div class="col-md-9">
   <h4 class="h5">Titre :</h4>
 <p>Guitare folk</p>
 <h4 class="h5">Description :</h4>
  <p> Guitare folk tres élégant avec une texture de bois beig claire qui lui donne son charme </p>
    <p></p><h4 class="h5">Prix :</h4> 900dh<p></p>
    <p></p><h4 class="h5">Quantité en stock :</h4> 37<p></p>
    <h4 class="h5">Ajouter au Panier :</h4>
    <button type="button" class="btn btn-warning" onclick="capter_ref_qnt(13)"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;Panier</button>
    <input type="number" class="btn_qnt" id="ch_qnt_13" value="1" min="1">
    </div>
                                <p><?php echo $ligne['description']?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><?php echo $ligne['qnt']?></p>
                                <p>
                         <button type="button" class="btn-btn-default panier"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;Panier</button>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php	
	
}
					
}
?>