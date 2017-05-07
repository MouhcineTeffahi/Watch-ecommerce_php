<?php
if(isset($_GET['ref_pan']))
{

	
	ajout_panier($_GET['ref_pan'],$_GET['qnt_pan']);
	
	
}


afficher_panier();




function ajout_panier($ref_pan,$qnt_pan)
{

	if(!(isset($_SESSION['panier'])))
	{
			$_SESSION['panier']=array();
			$_SESSION['panier']['ref']=array();
			$_SESSION['panier']['qnt']=array();
	}


	$nbr_prd=count($_SESSION['panier']['ref']);
	
	$exist=false;

	for($i=0;$i<$nbr_prd;$i++)
	{

		$ref=$_SESSION['panier']['ref'][$i];
		if($ref==$ref_pan)
		{
			$_SESSION['panier']['qnt'][$i]+=$qnt_pan;
			$exist=true;
			break;
		}
	}

	if($exist==false)
	{
		array_push($_SESSION['panier']['ref'], $ref_pan);
		array_push($_SESSION['panier']['qnt'], $qnt_pan);

	}

	
}


function afficher_panier()
{

	if(isset($_SESSION['panier']))
	{
	$nbr_prd=count($_SESSION['panier']['ref']);
	$total=0;

	for($i=0;$i<$nbr_prd;$i++)
	{

		$ref=$_SESSION['panier']['ref'][$i];
		$qnt=$_SESSION['panier']['qnt'][$i];

		$requete="SELECT `prix` FROM `produits` WHERE `ref`=$ref";
		$resultat=mysql_query($requete);
		while($ligne=mysql_fetch_array($resultat))
				{
					$prix=$ligne['prix'];
					$total+=$prix*$qnt;
				}


	}
        ?>
        <span class="espace_nbr_prd">
            <?php
        
	echo "produit: ".$nbr_prd."  total  ".$total." dh <a href='index.php?logout'>Vider</a>";
        ?>
</span>
            <?php
}
}
?>