<?php
session_start();
ini_set("display_errors",0);
if(isset($_GET['logout']))
{
   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="descriptio unset($_SESSION['panier']);
    session_destroy();n" content="">
    <meta name="author" content="">
    <meta charset="utf-8">

    <title>acheter une montre</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.css">

    <!-- Custom CSS -->
    <link href="../bower_components/styles/shop-homepage.css" rel="stylesheet">

     <link href="../bower_components/styles/mon_styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script language="javascript" src="../js/javas.js"></script>
</head>

<body>

    <!-- Navigation -->
    <?php
	
		include "connexion.php";
	?>
     <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <img src="../bower_components/images/logo.png" class="mon_logo">
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav btn_menu">
                  <li>
                       <a href="../index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="promotion.php">Promotion</a>
                        
                    </li>
                    <li>
                        <a href="homme.php">Homme</a>
                        
                    </li>
                    <li>
                        <a href="femme.php">Femme</a>
                        
                    </li>
                    <li>
                        <a href="enfant.php">Enfant</a>
                        
                    </li>
                    
                    <li>
                        <a href="contact.php">Contact</a>
                        
                    </li>
                </ul>




                
                
                <?php include "panier.php";?>

                 <a href="homme.php?detail_panier"><i class="glyphicon glyphicon-shopping-cart" style="float:right" aria-hidden="true"></i></a>
               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <div class="header">	
      <div class="container"> 
         <div class="header-top">
      		 <div class="logo">
				
			 </div>
		   <div class="header_right">
			 <ul class="social">
				<li><a href=""> <i class="fb"> </i> </a></li>
				<li><a href=""><i class="tw"> </i> </a></li>
				<li><a href=""><i class="utube"> </i> </a></li>
				<li><a href=""><i class="pin"> </i> </a></li>
				<li><a href=""><i class="instagram"> </i> </a></li>
			 </ul>
		    
			<div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
		 </div>  
		 <div class="index-banner">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
				   	       
				   		 	
				   		 	<div class='clearfix'></div>
				   	  </div>
					</article>
				
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	  <div class="banner-wrap">
				   	       
				   		 	<div class='clearfix'></div>
				   		 </div>
					 </article>
				 </div>
				<a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                </ul>
            </div>
            <script src="../js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider();         
   		     </script> 	           	      
      </div>
	 </div>     
	</div>
   

    <!-- Page Content -->
    <div class="container marge_top_section">

        <div class="row">

            <div class="col-md-3">
               <!--Menu categorie-->
               <?php include "menu_promotion.php";?>
                <div class="menu_box">
                    <h3 class="menu_head">CATALOGUE</h3>
				   	     <ul class="nav_color">
                     <a href="homme.php" class="list-group-item">Homme</a>
                    <a href="femme.php" class="list-group-item">Femme</a>
                    <a href="enfant.php" class="list-group-item">Enfant</a>
                             
               
                    </ul>
                    
                </div>      
            </div>

            <div class="col-md-9 border_color">

<!--
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="photos/ban1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="photos/ban3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="photos/ban2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="photos/ban3.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
-->

                <div class="row">
					<!--affichage produits -->
               
	<?php 
    if(isset($_GET['detail_panier']))
    {
          include "detail_panier.php";
    }
    else
    {

        include "homme_produit.php";
    }
    ?>
                 
                </div>

  <div class="col-sm-4">
            <div class="btn-group marge_numerotation" role="group" aria-label="First group"> 
            <?php
            for($i=1;$i<=$nbr_page;$i++)
            {
				if(isset($_GET['Catalogue']))
				{?>
                <a href="promotion.php?Catalogue=<?php echo $recuper_cat?>&num_page=<?php echo $i?>">
                <?php
                }
				else
				{
					?>
                <a href="promotion.php?num_page=<?php echo $i?>">
                <?php
					}
            ?>
            <button type="button" class="btn btn-default"><?php echo $i?></button></a>
            <?php
                }
                ?>
             </div>
 </div>
            </div>

        </div>

    </div>
    <!-- /.container -->
<div class="footer">
			<div class="container marge_top_section">
				<div class="footer-grid">
					<h3>navbar</h3>
					<ul class="list1">
					 <li>
                       <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="web/promotion.php">Promotion</a>
                        
                    </li>
                    <li>
                        <a href="web/homme.php">homme</a>
                        
                    </li>
                    <li>
                        <a href="web/femme.php">femme</a>
                        
                    </li>
                    <li>
                        <a href="web/enfant.php">Enfant</a>
                        
                    </li>
                    <li>
                        <a href="web/contact.php">Contact</a>
                        
                    </li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Marque</h3>
				    <ul class="list1">
					  <li><a href="index.php?categorie=Tissot">Tissot</a></li>
					  <li><a href="index.php?categorie=Frederique%20Constant">Frederique Constant</a></li>
					  <li><a href="index.php?categorie=Victorinox">Victorinox</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Catalogue</h3>
					<ul class="list1">
					   <li>
                        <a href="web/homme.php">homme</a>
                        
                    </li>
                    <li>
                        <a href="web/femme.php">femme</a>
                        
                    </li>
                    <li>
                        <a href="web/enfant.php">Enfant</a>
                        
                    </li>
				    </ul>
				  </div>
				  
				 <div class="footer-grid footer-grid_last">
					<h3>About Us</h3>
					<p class="footer_desc">Surfant sur la tendance preppy chic, la marque Cluse a créé une collection de montres au style intemporel, qui allie élégance et décontraction. Ici décliné dans sa version munie d'un bracelet camel lumineux et gourmand, le modèle affiche un boîtier doré rose ultra féminin. Un basique qui a gagné sa place dans notre dressing!

</p>
                    <p class="f_text">Telephone:  &nbsp;&nbsp;&nbsp;00-250-2131</p>
                    <p class="email">Email: &nbsp;&nbsp;&nbsp;<span>montre@mail.com</span></p>	
                 </div>
				 <div class="clearfix"> </div>
			</div>
		</div>
   <div class="footer_bottom">
        	<div class="container">
        		<div class="copy">
				   <p>© 2016 ecommerce <a href="#" target="_blank">montre</a></p>
			    </div>
        	</div>
        </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>
