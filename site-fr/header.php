<?php include 'db.php';
session_start();?>
<html>
<head>

    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />

    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/touchTouch.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/touchTouch.jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/packery.pkgd.min.js"></script>

    <script src="js/jquery.mobile.customized.min.js"></script>
    <script src="js/wow.js"></script>


    <script>
        $(document).ready(function () {
            if ($('html').hasClass('desktop')) {
                new WOW().init();
            }
        });
    </script>

</head>
<body class="index-2">

<!--Haut de page-->
<header id="header">
    <div id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <!--Lien reseaux sociaux-->
                    <div class="social">
                        <a href="https://www.facebook.com/Master-Class-Room-1631911463770959/"><span class="bd-ra fa fa-facebook"></span></a>
                        <a href="#"><span class="bd-ra fa fa-tumblr"></span></a>
                        <a href="#"><span class="bd-ra fa fa-google-plus"></span></a>
                    </div>

                    <!-- Choix Pages-->
                    <h1><a href="index.php">Master Class Jazz</span></a></h1>
						<nav>
							<ul class="sf-menu">
								<?php if (isset($_SESSION['auth'])): ?>
								<li><a href="index.php">Accueil</a>
								<li><a href="prog semaine.php">Programme</a></li>
								<li><a href="index-2.php">Portfolio</a></li>
								<li><a href="Jam.php">Jams</a></li>
                                <li><a href="contact.php">Contacts</a></li>
								<li><a href="logout.php"><span>Déconnexion</span></a></li>
								<?php else: ?>
								<li><a href="index.php">Accueil</a></li>
									<li><a href="prog semaine.php">Programme</a></li>
									<li><a href="Jam.php">Jams</a></li>
                                    <li><a href="index-2.php">Portfolio</a></li>
									<li><a href="contact.php">Contacts</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Membre</a>

   <?php endif; ?>
                                        <!-- Modal Membre -->
                                        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header" align="center">
                                                        <div class="loader"></div>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                        </button>
                                                    </div>

                                                    <!-- Modal formulaire -->
                                                    <div id="div-forms">
                                                         <form class="form-signin" action="login.php" method="post">
                                                            <div class="modal-body">
                                                                <div id="div-login-msg">
                                                                    <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                                                    <span id="text-login-msg">Entrée votre pseudo et votre mot de passe</span>
                                                                </div>
                                                                <input class="form-control" id="pseudo" name="pseudo" type="text" placeholder="Pseudo" required>
                                                                    <input class="form-control" id="password" name="password" type="password" placeholder="Password" required>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div>
                                                                    <button type="submit" class=" btn btn-warning btn-lg btn-block">Connexion</button>
                                                                </div>
                                                                <div>
                                                                   <a href="inscription.php"> <button type="button" class="btn class=btn btn-warning btn-lg btn-block">Inscription</button></a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- Fin du formulaire -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin du Modal -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
