<?php
	//N'affiche pas l'erreur lorsqu'il n'y a pas d'utilisateur connecté
	error_reporting(0);
	ini_set('display_errors', 0); 
		
	// On démarre la session	
	session_start();
	/*session is started if you don't write this line can't use $_Session  global variable*/
	
	//On récupère le pseudo entré dans la page Inscription
	$pseudo = $_SESSION['pseudo'];
?>
<!DOCTYPE HTML>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Bootslander landing page template</title>

  <meta name="keywords" content="" />
  <meta name="description" content="" />

  <!-- css -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/bootstrap-responsive.css" />
  <link rel="stylesheet" href="css/prettyPhoto.css" />
  <link rel="stylesheet" href="css/sequence.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/myStyle.css" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico">

  <!-- =======================================================
    Theme Name: Bootslander
    Theme URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
	======================================================= -->
</head>

<body>
  <!-- main wrap -->
  <div class="main-wrap">

    <!-- header -->
    <header>
      <!-- top area -->
      <div class="top-nav">
        <div class="wrapper">
          <!--<div class="logo">
            <a href="index.html">
               your logo image 
              <img src="img/logo.png" alt="" />
            </a>
          </div>-->
			<?php 
				//On teste si un utilisateur est connecté
				if(empty($pseudo))
				{
					echo 'pas remplit';
				}
				else
				{
					echo 'Bienvenue  '.$pseudo;
				}
				
				//On détruit la session lorsqu'on se déconnecte
				session_destroy();
				?>
				<button class="btn btn-theme btn-medium margintop10 margin-right:100px" onclick="window.location.href = './index.php';">Accueil</button>
          <div class="phone">
            <p>
				Écrivez-nous au : 008 009 172   
				<button class="btn btn-theme btn-medium margintop10 margin-left:15px" onclick="window.location.href = './Inscription.html';">Inscription</button>
				<button class="btn btn-theme btn-medium margintop10 margin-left:10px" onclick="window.location.href = './Authentification.php';">Connexion</button>
			</p>
          </div>
        </div>
      </div>
      <!-- end top area -->
    </header>
    <!-- end of header-->

    <!-- section main content -->
    <section id="main-content">
      <div class="content-wrap" style="width:100%;">
		<p></p>
	  <!-- wrapper -->
        <div class="wrapper">
			<!-- boxes empty for space -->
			<div class="boxes">
				<div class="row-fluid">
				<p></p>
				</div>
			</div>
		</div>
	<!-- end wrapper -->
	<div class="wrapper">
	<div id="dropdown">
		<ul>
		  <li><a href="#">Greil</a>
		  <ul>
		  <!-- boxes helmet -->
				    <div class="boxes">
					  <div class="row-fluid">
						<!-- box 1 -->
								  <div class="span4">
									<div class="box">
									  <div class="icon">
										<img src="img/Products/Merceneries/Greil/Ike.png" class="" alt="" />
									  </div>
									  <h4 style="color:white;">Ike</h4>
									</div>
								  </div>
								  
								  <!-- box 1 -->
								  <div class="span4">
									<div class="box">
									  <div class="icon">
										<img src="img/Products/Merceneries/Greil/Titania.png" class="" alt="" />
									  </div>
									  <h4 style="color:white;">Titania</h4>
									</div>
								  </div>
								  
								  <!-- box 1 -->
								  <div class="span4">
									<div class="box">
									  <div class="icon">
										<img src="img/Products/Merceneries/Greil/Soren.png" class="" alt="" />
									  </div>
									  <h4 style="color:white;">Soren</h4>
									</div>
								  </div>
					  </div>
					</div>
					<!-- end boxes helmet -->
			</ul>
		  
		  </li>
		  
		  
		  <li><a href="#">Gerik</a>
		  
		  <ul>
		  <!-- boxes helmet -->
				    <div class="boxes">
					  <div class="row-fluid">
						<!-- box 1 -->
								  <div class="span4">
									<div class="box">
									  <div class="icon">
										<img src="img/Products/Merceneries/Gerik/Gerik.png" class="" alt="" />
									  </div>
									  <h4 style="color:white;">Gerik</h4>
									</div>
								  </div>
								  
								  <!-- box 1 -->
								  <div class="span4">
									<div class="box">
									  <div class="icon">
										<img src="img/Products/Merceneries/Gerik/Marisa.png" class="" alt="" />
									  </div>
									  <h4 style="color:white;">Marisa</h4>
									</div>
								  </div>
								  
								  <!-- box 1 -->
								  <div class="span4">
									<div class="box">
									  <div class="icon">
										<img src="img/Products/Merceneries/Gerik/Saleh.png" class="" alt="" />
									  </div>
									  <h4 style="color:white;">Saleh</h4>
									</div>
								  </div>
					  </div>
					</div>
					<!-- end boxes helmet -->
			</ul>
		  
		  </li>
		</ul>
	</div>
	
	<!-- boxes -->
          <div class="boxes">
            <div class="row-fluid">

              <!-- box 1 -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <img src="img/icons/potion.png" class="" alt="" />
                  </div>
                  <h4>Potions</h4>
                  <p>Ne partez pas à l'aventure sans un minimum de concotions tel que nos potions d'invisibilité, de soins, de vision nocturne...</p>
                  <a href="Potions.php" class="textlink">Produits disponibles</a>
                </div>
              </div>

              <!-- box 2 -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <img src="img/icons/sword.png" class="" alt="" />
                  </div>
                  <h4>Équipements</h4>
                  <p>Choisissez parmi une grande variété d'armures et d'armes comprenant entre autres épées, arcs, écus, casques, cottes de mailles...</p>
                  <a href="Equipements.php" class="textlink">Produits disponibles</a>
                </div>
              </div>

              <!-- box 3 -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <img src="img/icons/blason.png" class="" alt="" />
                  </div>
                  <h4>Escouades</h4>
                  <p>Louez les services de mercenaires reconnus dans toute la contrée tel que les mercenaires de Greil, de Gerik... </p>
                  <a href="Escouades.php" class="textlink">Produits disponibles</a>
                </div>
              </div>

            </div>

          </div>
          <!-- end boxes -->
	
	</div>
	
	
	
	  </div>
	</section>
    <!-- end main content section -->

    <!-- section contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="span8">
            <h4>Restez en contact avec nous en remplissant le formulaire ci-dessous :</h4>

            <form method="post" class="contactForm">

              <div id="sendmessage">Votre message a été envoyé. Merci !</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span4 field form-group">
                  <input type="text" name="name" placeholder="* Entrer votre nom et prénom" data-rule="minlen:4" data-msg="Entrer au moins 4 caractères" />
                  <div class="validation"></div>
                </div>
                <div class="span4 field form-group">
                  <input type="text" name="email" placeholder="* Entrer votre adresse mail" data-rule="email" data-msg="Entrer une adresse mail valide" />
                  <div class="validation"></div>
                </div>
                <div class="span8 margintop10 field form-group">
                  <input type="text" name="subject" placeholder="Entrer votre sujet" data-rule="minlen:4" data-msg="Entrer au moins 4 caractères" />
                  <div class="validation"></div>
                </div>
                <div class="span8 margintop10 field form-group">
                  <textarea rows="12" name="message" class="input-block-level" placeholder="* Écrivez ici votre message..." data-rule="required" data-msg="Please write something"></textarea>
                  <div class="validation"></div>

                  <p>
                    <button class="btn btn-theme btn-medium margintop10 pull-left" type="submit">Envoyer message</button>
                    <span class="pull-right margintop20">* Veuillez remplir tous les champs requis, merci !</span>
                  </p>
                </div>
              </div>
            </form>
          </div>
          <div class="span4">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

              <div class="widget">
                <h5 class="widgetheading">Contact informations<span></span></h5>

                <ul class="contact-info">
                  <li><label>Adresse :</label> Tinggi sekali tower Jl.Kemacetan timur<br /> Jakarta selatan - Indonesia</li>
                  <li><label>Téléphone :</label>+62 123 456 78 / +62 123 456 79</li>
                  <li><label>Fax : </label>+62 123 456 10 / +62 123 456 11</li>
                  <li><label>Email : </label> info@yourdomain.com</li>
                </ul>

              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- end section contact -->

    <!-- footer -->
    <footer>
      <div class="footer">
        <div class="wrapper">
          <div class="social">
            <a href="#" class="fb"> </a> <a href="#" class="tw"> </a>
          </div>

          <div class="subfooter">
            <ul>
              <li><a href="#">Home</a> &#45; </li>
              <li><a href="#">Terms conditions</a> &#45; </li>
              <li><a href="#">Contact</a></li>
            </ul>
            <p class="copyright">&#169; Copyright. All rights reserved</p>

          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bootslander
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </footer>


  </div>
  <!-- end main wrap -->

  <!-- Javascript Libraries -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/sequence.jquery.js"></script>
  <script src="js/jquery-hover-effect.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="js/custom.js"></script>

</body>

</html>
