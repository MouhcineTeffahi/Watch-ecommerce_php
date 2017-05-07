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
                        <a href="homme.php">homme</a>
                        
                    </li>
                    <li>
                        <a href="femme.php">femme</a>
                        
                    </li>
                    <li>
                        <a href="enfant.php">Enfant</a>
                        
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                        
                    </li>
                </ul>




                
                
                <?php include "panier.php";?>

                 <a href="promotion.php?detail_panier"><i class="glyphicon glyphicon-shopping-cart" style="float:right" aria-hidden="true"></i></a>
               
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
 <div class="container">

        <div class="row">

        <div class="panel panel-default">
                    <div class="titresidebar">
                        
                        <h4 class="text_bar_left2"></h4>
                    </div>
    <div class="col-md-12 text-center">
                    <h2 class="section-heading marge_text_contact">Contactez-nous</h2>
                    
                </div>
                    <div class="panel-body">
                       <div class="col-md-12">
                    <form id="contactForm" method="post" action="contact_post.php" class="espace_right_form">
                        <div class="row">
                            <div class="col-md-12   escpace_input_contact">
                                <div class="form-group espace_form_group">
                                    
                                  <input type="text" class="form-control" class="fa fa-product-hunt" class="font_awd" name="name" placeholder="Votre nom *" id="name" required >
                                    
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group espace_form_group">
                                    <input type="email" class="form-control" name="email" placeholder="Votre Email *" id="email" required >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group espace_form_group">
                                    <input type="tel" class="form-control" name="tel" placeholder="Votre Telephone *" id="phone" required >
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-12 escpace_input_contact">
                                <div class="form-group">
                                    <textarea class="form-control height_message_contact height_message_con" name="message" placeholder="Votre Message *" id="message" required ></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <div class="pull-right">
                                <button type="submit" class="btn btn-warning  hvr-bounce-to-bottom marge_width_btn" name="submit" class="text-pull">Envoyer</button>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
                    </div>
                </div>                

                <div class="row">
					<!--affichage produits -->
               
	
                 
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
