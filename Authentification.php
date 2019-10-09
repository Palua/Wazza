<?php
			//N'affiche pas l'erreur lorsqu'il n'y a pas d'utilisateur connecté
			error_reporting(0);
			ini_set('display_errors', 0); 

			session_start();
			// /*session is started if you don't write this line can't use $_Session  global variable*/
			$_SESSION["pseudo"]=$_POST['pseudo'];
	
			// /*session created*/
			if(empty($pseudo))
			{
				echo 'pas remplit';
			}
			else
			{
				echo 'pseudp'.$_session["pseudo"];
			}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<title>Authentification</title>
		
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
			<button class="btn btn-theme btn-medium margintop10 margin-right:100px" onclick="window.location.href = './index.php';">Accueil</button>
          <div class="phone">
            <p>
				Écrivez-nous au : 008 009 172   
				<button class="btn btn-theme btn-medium margintop10 margin-left:10px" onclick="window.location.href = './Inscription.html';">Inscription</button>
				<button class="btn btn-theme btn-medium margintop10 margin-left:10px" onclick="window.location.href = './Authentification.php';">Connexion</button>
			</p>
          </div>
        </div>
		</div>
		<!-- end top area -->
		</header>
		<!-- end of header-->
		
		<!-- section intro -->
		<section id="intro">
      <div class="featured">
        <div class="wrapper">

          <div class="row-fluid">
            <!-- slider -->
            <div class="span12">

              <div id="sequence-theme">
                <div id="sequence">
                  <img class="prev" src="img/slides/bt-prev.png" alt="Previous Frame" />
                  <img class="next" src="img/slides/bt-next.png" alt="Next Frame" />
                  <ul>
                    <li class="animate-in">
                      <h2 class="title">Actualités : Équipements</h2>
                      <h5 class="subtitle">Ne partez pas sans l'une de nos toutes dernières épées aux lames enchantées !</h5>
                      <img class="model" src="img/sword.png" alt="" />
                    </li>
                    <li>
                      <h2 class="title">Actualités : Potions</h2>
                      <h5 class="subtitle">Découvrez les dernières potions du grand mage Melthoth lui-même !</h5>
                      <img class="model" src="img/potion.png" alt="" />
                    </li>
                    <li>
                      <h2 class="title">Actualités : Escouades</h2>
                      <h5 class="subtitle">Venez bénécificiez des services du célèbre tueur d'ogres Boyd la Brute !</h5>
                      <img class="model" src="img/gifUther.gif" alt="" />
                    </li>
                  </ul>
                </div>
                <ul class="nav">
                  <li><img src="img/slides/thumb1.png" /></li>
                  <li><img src="img/slides/thumb2.png" /></li>
                  <li><img src="img/slides/thumb3.png" /></li>
                </ul>
              </div>

            </div>
            <!-- end slider -->
          </div>

        </div>
      </div>
    </section>
    <!-- end section intro -->
	
	<?php 	
			error_reporting(0);
			ini_set('display_errors', 0); 
	?>	
		<p><div><b>Inscription :</b></div></p>
		
		<div align="center">
		<fieldset>
			<legend> <br><h2 class="title">Veuillez remplir les champs suivants :</h2></br></legend> 
			<form method="post" action="./Authentification.php">
				<p> 
					<div>
						<div align="center">
							<label for="pseudo">Pseudo :</label> 
							<input type="text" name="pseudo" required /> 
						</div>
					</div>
				</p>
				
				<p>
					<div>				
						<div align="center">
							<label for="age">Age :</label> 
							<input type="number" min="18" max="2000" step="1" name="age" required /> 
						</div>
					</div>
				</p>
				
				<p>
					<div>				
						<div align="center">
							<label for="pass">Mot de Passe :</label> 
							<input type="password" name="pass" required />
						</div>
					</div>
				</p>
				
				<p>
					<div>				
						<div align="center">
							<label for="cpass">Confirmer votre mot de passe :</label> 
							<input type="password" name="cpass" required />
						</div>
					</div>
				</p>
				
		</fieldset>
				<input type="submit" value="S'inscrire" />
			</form>
				
		<?php  	$pseudo = $_POST['pseudo'];
				$age = $_POST['age'];
				$pass = $_POST['pass'];
				$cpass = $_POST['cpass'];
				//foreach ($_POST as $s){echo $s.'<br /> ';}
				//echo 'cpass '.$cpass.'<br /> ';
				$uppercase = preg_match('@[A-Z]@', $pass);
				$lowercase = preg_match('@[a-z]@', $pass);
				$number    = preg_match('@[0-9]@', $pass);
				
		
		if (!$uppercase) 
		{
			echo '<span style="color: red;" />'."<br />"."Erreur ! Votre mot de passe ne contient pas de majuscule !"."<br />".'</span>';
		}
		
		if (!$lowercase) 
		{
			echo '<span style="color: red;" />'."<br />"."Erreur ! Votre mot de passe ne contient pas de minuscule !"."<br />".'</span>';
		}
		
		if (!$number) 
		{
			echo '<span style="color: red;" />'."<br />"."Erreur ! Votre mot de passe ne contient pas de nombre !"."<br />".'</span>';
		}
		
		if (strlen($pass) < 8) 
		{
			echo '<span style="color: red;" />'."<br />"."Erreur ! Votre mot de passe trop court !"."<br />".'</span>';
		}
		
		if ($pass != $cpass) 
		{
			echo '<span style="color: red;" />'."<br />"."Erreur ! Votre mot de passe est diffÃ©rent !"."<br />".'</span>';
		}
		
		if ($uppercase && $lowercase && $number && strlen($pass) >= 8 && $pass == $cpass)
		{
			echo "<br />".'Bienvenue '.$pseudo."<br />";
			//header('Location: http://technologiesweb/Wazza/');
		}
		?>
		</div>
		
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
	</body>
</html>