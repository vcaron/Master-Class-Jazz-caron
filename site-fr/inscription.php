<?php
require_once ('header.php');
?>
<body>
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Formulaire inscription</span></h2>
					</header>
								<article>
									<form action="form_inscription.php" method="post">

										<div class="form-group">
											<label for="pseudo">Pseudo :</label>
											<input class="form-control" id="Pseudo" name="pseudo" type="text" placeholder="Pseudo" required/>
										</div>

										<div class="form-group">
										<label for="email">E-mail :</label>
										<input class="form-control"  id="Email" name="email" type="email" placeholder="Email" required/>
										</div>

										<div class="form-group">
										<label for="nom">Nom :</label>
										<input class="form-control" id="Nom" name="nom" type="text" placeholder="Nom" required/>
										</div>

										<div class="form-group">
										<label for="prenom">Prénom :</label>
										<input class="form-control" id="Prenom" name="prenom" type="text" placeholder="Prenom" required/>
										</div>

										<div class="form-group">
										<label for="password">Password :</label>
										<input class="form-control" id="Password" name="password" type="password" placeholder="Password" required/>
										</div>

										<div class="form-group">
										<label for="password">Retapez votre password :</label>
										<input class="form-control" id="Password" name="password_confirm" type="password" placeholder="Password" required/>
										</div>

										Navette aeroport ?<br />
											<input type="radio" name="Navette" value="oui" required/>Oui
											<input type="radio" name="Navette" value="non" required/>Non<br/><br>

										Accompagné ?<br />
											<input type="radio" name="Accompagné" value="oui" required/>Oui
											<input type="radio" name="Accompagné" value="non" required/>Non<br/><br>

										Choix du cours (un seul cours par personne)<br />
											<input type="radio" name="Cours" value="Chant" required/>Chant<br/>
											<input type="radio" name="Cours" value="Guitare" required/>Guitare<br />
											<input type="radio" name="Cours" value="Piano" required/>Piano<br/>
											<input type="radio" name="Cours" value="Contrebasse" required/>Contrebasse<br/>
											<input type="radio" name="Cours" value="Cuivre" required/>Cuivre<br/>
											<input type="radio" name="Cours" value="Batterie" required/>Batterie<br/>

										<input class="btn btn-warning btn-lg btn-block" type="submit" />



									</form>
			</div>				</article>

	</div>
		</div>





	</div>



</body>

<?php
require_once 'footer.php';
?>
