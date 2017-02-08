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
										<label for="nom">Name :</label>
										<input class="form-control" id="Nom" name="nom" type="text" placeholder="Nom" required/>
										</div>

										<div class="form-group">
										<label for="prenom">Surname :</label>
										<input class="form-control" id="Prenom" name="prenom" type="text" placeholder="Prenom" required/>
										</div>

										<div class="form-group">
										<label for="password">Password :</label>
										<input class="form-control" id="Password" name="password" type="password" placeholder="Password" required/>
										</div>

										<div class="form-group">
										<label for="password">Confirm password :</label>
										<input class="form-control" id="Password" name="password_confirm" type="password" placeholder="Password" required/>
										</div>

										Airport shuttle ?<br />
											<input type="radio" name="Navette" value="oui" required/>yes
											<input type="radio" name="Navette" value="non" required/>No<br/><br>

										Accompanied ?<br />
											<input type="radio" name="Accompagné" value="oui" />Yes
											<input type="radio" name="Accompagné" value="non" />No<br/><br>

										Choice of course (one course per person)<br />
											<input type="radio" name="Cours" value="Chant" />Singing<br/>
											<input type="radio" name="Cours" value="Guitare" />Guitar<br />
											<input type="radio" name="Cours" value="Piano"/>Piano<br/>
											<input type="radio" name="Cours" value="Contrebasse" />Basse<br/>
											<input type="radio" name="Cours" value="Cuivre"/>Copper<br/>
											<input type="radio" name="Cours" value="Batterie"/>Drums<br/>

										<input class="btn btn-warning btn-lg btn-block" type="submit" >



									</form>
								</article>
				</div>



</body>

<?php
require_once 'footer.php';
?>
