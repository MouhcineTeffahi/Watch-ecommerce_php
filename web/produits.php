<?php
$nbr_prd_page=8;
if(isset($_GET['detail']))
{
		include 'web/detail.php';
	
	}
else
{
 if(isset($_GET['categorie']))
{
	$recuper_cat=$_GET['categorie'];
	$requete="SELECT * FROM `produits` where `categorie`= '$recuper_cat'";
}
else
{
$requete="SELECT * FROM `produits` where `promo`=1 ";
}

$resultat=mysql_query($requete);
$total=mysql_num_rows($resultat);

$nbr_page=ceil($total/$nbr_prd_page);

if(isset($_GET['num_page']))
{
	$recuper_num_page=$_GET['num_page'];
	$debut=($recuper_num_page*$nbr_prd_page)-$nbr_prd_page;
	}
	else
	{
		$debut=0;
		
		}
$requete.=" limit $debut,$nbr_prd_page";


$resultat=mysql_query($requete);
?>
<div class="row marge_pagination">

  <div class="col-sm-4"></div>



     <div class="col-sm-4"></div>
  
  </div>
<?php
			


				while($ligne=mysql_fetch_array($resultat))
				{
				?>



     <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="photos/<?php echo $ligne['ref']?>.jpg" alt="">
                            <div class="caption">
                                <h5 class="pull-right"><?php echo $ligne['prix']?> Dh</h5>
                                <h5><a href="index.php?detail=<?php echo $ligne['ref']?>"><?php echo $ligne['nom']?></a>
                                </h5>
                                <p><?php echo $ligne['description']?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><?php echo $ligne['qnt']?></p>
                                <p>
                         <button type="button" onclick="capter_ref_qnt(<?php echo $ligne['ref']?>)"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;Panier</button>
                         <input type="text" class="btn_qnt" id="ch_qnt_<?php echo $ligne['ref']?>"   value="1">
                                    
                                </p>
                            </div>
                        </div>
         
                    </div>
                    
                   <?php
				}
}
				?>



  
   