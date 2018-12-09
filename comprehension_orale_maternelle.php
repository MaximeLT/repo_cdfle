<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['classe'] = $_POST['classe'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Test FLE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="./images/favicon2.ico" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
	<div class="w3-content" style="max-width:1000px">

		<h1 class="w3-center w3-padding-small">Test jeunesse maternelle</h1>
		<form id="reponses" method="post" action="evaluation.php">
			<div class="exercice">
				<div id="bloc_timer"></div>
				<h2 class="livre">Compréhension orale</h2>
				<div class="consigne" style="margin-top: 40px"><!-- bloc contenant l'énoncé de l'exerice -->
					<p>Exercice 1: Écoutez les dialogues et choisissez le dessin correspondant</p>
				</div>
				<audio controls style="width:100%">
					<source src="./audio/Test_français_Maternelle1.m4a" type="audio/mpeg">
				</audio>
				<div class="contenuReponses">
					<ol>
						<li>
							<p class="question" style="color:#d01b42;"><b>Quel travail fait le papa de Pierre ?</b></p><!-- bloc contenant l'énoncé de la question -->
							<div class="reponse"><!-- bloc contenant les choix possibles ou les champs de saisie -->
								<label>
									<input class="w3-radio" type="radio" name="q1" value="Option 1" required>
									<img src="./images/01-pompier-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="q1" value="Option 2" required>
									<img src="./images/02-boulanger-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="q1" value="Option 3" required>
									<img src="./images/03-medecin-2000x2000.png" style="height: 10%; width: 10%">
								</label>
							</div>
						</li>
						<li>
							<p class="question" style="color:#d01b42;"><b>Question</b></p><!-- bloc contenant l'énoncé de la question -->
							<div class="reponse"><!-- bloc contenant les choix possibles ou les champs de saisie -->
								<label>
									<input class="w3-radio" type="radio" name="q2" value="Option 4" required>
									<img src="./images/04-enfantsdansunebibliotheque-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="q2" value="Option 5" required>
									<img src="./images/05-enfantsdansunparc-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="q2" value="Option 6" required>
									<img src="./images/06-enfantsalaplage-2000x2000.png" style="height: 10%; width: 10%">
								</label>
							</div>
						</li>
						<li>
							<p class="question" style="color:#d01b42;"><b>Question</b></p><!-- bloc contenant l'énoncé de la question -->
							<div class="reponse"><!-- bloc contenant les choix possibles ou les champs de saisie -->
								<label>
									<input class="w3-radio" type="radio" name="q3" value="Option 7" required>
									<img src="./images/07-garcon6anssoeur3ans-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="q3" value="Option 8" required>
									<img src="./images/08-garcon6anssoeur18ans-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="q3" value="Option 9" required>
									<img src="./images/09-garcon6anssoeur4ansfrere2ans-2000x2000.png" style="height: 10%; width: 10%">
								</label>
							</div>
						</li>
						<li>
							<p class="question" style="color:#d01b42;"><b>Question</b></p><!-- bloc contenant l'énoncé de la question -->
							<div class="reponse"><!-- bloc contenant les choix possibles ou les champs de saisie -->
								<label>
									<input class="w3-radio" type="radio" name="q4" value="Option 10" required>
									<img src="./images/10-lecturelivre-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="q4" value="Option 11" required>
									<img src="./images/11-matchfoottelevision-2000x200.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="q4" value="Option 12" required>
									<img src="./images/12-jeudesociete-2000x2000.png" style="height: 10%; width: 10%">
								</label>
							</div>
						</li>
						<li>
							<p class="question" style="color:#d01b42;"><b>Question</b></p><!-- bloc contenant l'énoncé de la question -->
							<div class="reponse"><!-- bloc contenant les choix possibles ou les champs de saisie -->
								<label>
									<input class="w3-radio" type="radio" name="q5" value="Option 13" required>
									<img src="./images/13-chienepagneulbreton-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="q5" value="Option 14" required>
									<img src="./images/14-chat-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="q5" value="Option 15" required>
									<img src="./images/15-lapin-2000x2000.png" style="height: 10%; width: 10%">
								</label>
							</div>
						</li>

					</ol>
				</div>
				<div class="consigne" style="margin-top: 40px"><!-- bloc contenant l'énoncé de l'exerice -->
				<p>Exercice 2: Écoute les messages et note le numéro du message sous le dessin correspondant.</p>
				</div>
				<audio controls style="width:100%">
					<source src="./audio/Test_français_Maternelle2.m4a" type="audio/mpeg">
				</audio>
				<div class="contenuReponses">
					<ol>
						<li>
							<div class="reponse"><!-- bloc contenant les choix possibles ou les champs de saisie -->
								<label>
									<img src="./images/16-ciseaux-2000x2000.png" style="height: 10%; width: 10%"><br>
									<input class="w3-text" type="text" name="2q1" maxlength="1" size="1">
								</label>
							</div>
						</li>
						<li>
							<div class="reponse"><!-- bloc contenant les choix possibles ou les champs de saisie -->
								<label>
									<img src="./images/17-date-2000x2000.png" style="height: 10%; width: 10%"><br>
									<input class="w3-text" type="text" name="2q2"maxlength="1" size="1">
								</label>
							</div>
						</li>
						<li>
							<div class="reponse"><!-- bloc contenant les choix possibles ou les champs de saisie -->
								<label>
									<img src="./images/18-peinture-2000x2000.png" style="height: 10%; width: 10%"><br>
									<input class="w3-text" type="text" name="2q3"maxlength="1" size="1">
								</label>
							</div>
						</li>
						<li>
							<div class="reponse"><!-- bloc contenant les choix possibles ou les champs de saisie -->
								<label>
									<img src="./images/19-coloriage-2000x2000.png" style="height: 10%; width: 10%"><br>
									<input class="w3-text" type="text" name="2q4"maxlength="1" size="1">
								</label>
							</div>
						</li>
					</ol>
				</div>
			</div>
			<div class="consigne" style="margin-top: 40px"><!-- bloc contenant l'énoncé de l'exerice -->
					<p>Exercice 1: Écoutez les dialogues et choisissez le dessin correspondant</p>
				</div>
				<audio controls style="width:100%">
					<source src="./audio/Test_français_Maternelle3.m4a" type="audio/mpeg">
				</audio>
				<div class="contenuReponses">
					<ol>
						<li>
							<p class="question" style="color:#d01b42;"><b>Quel travail fait le papa de Pierre ?</b></p><!-- bloc contenant l'énoncé de la question -->
							<div class="reponse"><!-- bloc contenant les choix possibles ou les champs de saisie -->
								<label>
									<input class="w3-radio" type="radio" name="3q1" value="Option 16" required>
									<img src="./images/20-hommerouxpolovert-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="3q1" value="Option 17" required>
									<img src="./images/21-hommebrunchemiseverte-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="3q1" value="Option 18" required>
									<img src="./images/22-hommeblondpolobleu-2000x2000.png" style="height: 10%; width: 10%">
								</label>
							</div>
						</li>
						<li>
							<p class="question" style="color:#d01b42;"><b>Question</b></p><!-- bloc contenant l'énoncé de la question -->
							<div class="reponse"><!-- bloc contenant les choix possibles ou les champs de saisie -->
								<label>
									<input class="w3-radio" type="radio" name="3q2" value="Option 19" required>
									<img src="./images/23-groschatnoiretblancyeuxverts-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="3q2" value="Option 20" required>
									<img src="./images/24-petitchatrouxyeuxverts-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="3q2" value="Option 21" required>
									<img src="./images/25-groschatgrisyeuxverts-2000x2000.png" style="height: 10%; width: 10%">
								</label>
							</div>
						</li>
						<li>
							<p class="question" style="color:#d01b42;"><b>Question</b></p><!-- bloc contenant l'énoncé de la question -->
							<div class="reponse"><!-- bloc contenant les choix possibles ou les champs de saisie -->
								<label>
									<input class="w3-radio" type="radio" name="3q3" value="Option 22" required>
									<img src="./images/26-maisonjaunetoitrougegarage-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="3q3" value="Option 23" required>
									<img src="./images/27-maisonjaunetoitrougevoiturejardin-2000x2000.png" style="height: 10%; width: 10%">
								</label>
								<label>
									<input class="w3-radio" type="radio" name="3q3" value="Option 24" required>
									<img src="./images/28-maisonjaunetoitbleu-2000x2000.png" style="height: 10%; width: 10%">
								</label>
							</div>
						</li>
					</ol>
				</div>
			<div class="valider"><!-- bloc contenant le bouton d'envoi du formulaire -->
				<input type="submit" name="send01" value="Valider le Test !" class="fleche" />
			</div>
		</form>
		<footer class="w3-container w3-center">
			<img src="images/footer.jpg" style="width:100%">
		</footer>
	</div>
</body>
</html>