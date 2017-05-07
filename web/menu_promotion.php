<?php
$requete="SELECT distinct `categorie` FROM `produits` ";
$resultat=mysql_query($requete);


?> 

 
 
                <div class="menu_box">
                    <h3 class="menu_head">Marque</h3>
				   	     <ul class="nav_color">
                <?php
				while($ligne=mysql_fetch_array($resultat))
				{
				?>
                    <a href="promotion.php?categorie=<?php echo $ligne['categorie']?>" class="list-group-item"><?php echo $ligne['categorie']?></a>
                             
                <?php
				}
				?>
                    </ul>
                    
                </div>

