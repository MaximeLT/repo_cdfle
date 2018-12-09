<?php
session_start();

$totalPoint = 0;
$radioinput1 = $_POST['q1'];
$radioinput2 = $_POST['q2'];
$radioinput3 = $_POST['q3'];
$radioinput4 = $_POST['q4'];
$radioinput5 = $_POST['q5'];

$textinput1 = $_POST['2q1'];
$textinput2 = $_POST['2q2'];
$textinput3 = $_POST['2q3'];
$textinput4 = $_POST['2q4'];

$radioinput6 = $_POST['3q1'];
$radioinput7 = $_POST['3q2'];
$radioinput8 = $_POST['3q3'];

if ($radioinput1 == 'Option 3'){
	$totalPoint +=1;
}
if ($radioinput2 == 'Option 4'){
	$totalPoint +=1;
}
if ($radioinput3 == 'Option 7'){
	$totalPoint +=1;
}
if ($radioinput4 == 'Option 11'){
	$totalPoint +=1;
}
if ($radioinput5 == 'Option 13'){
	$totalPoint +=1;
}
if ($radioinput6 == 'Option 17'){
	$totalPoint +=1;
}
if ($radioinput7 == 'Option 21'){
	$totalPoint +=1;
}
if ($radioinput8 == 'Option 22'){
	$totalPoint +=1;
}
if ($textinput1 == '2'){
	$totalPoint +=1;
}
if ($textinput2 == '1'){
	$totalPoint +=1;
}
if ($textinput3 == '3'){
	$totalPoint +=1;
}
if ($textinput4 == '4'){
	$totalPoint +=1;
}

$totalPoint *= 100/12;

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Resulat</title>
		<link rel="stylesheet" href="css/result.css">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	</head>
		<body>
	    <input id="trigger" type="button" value="Click Here To pop up window"/>
	    <div id="match-details-curtain">
	        <div id="match-details-container">
	            <div id="title">Resultat</div>
	            <div id="teams-container">
	                <div class="homecomming-team flexbox-items">
	                    <div class="homecomming-team logo"></div>
	                    <br />
	                    <div class="homecomming-team name"></div>
	                </div>
	                <div class="flexbox-items">
											<div class=""><?=$_SESSION['prenom'] ?> <?=$_SESSION['nom'] ?> <?=$_SESSION['classe'] ?></div>
											<br>
	                    <div id="time-of-match"></div>
	                    <div id="date-of-match"></div>
	                    <br />
	                    <div id="vs"><div class="circle"></div><hr id="vs-line"/><div class="circle"></div></div>
											<br>
	                </div>
	                <div class="away-team flexbox-items">
	                    <div class="away-team logo"></div>
	                    <br />
	                    <div class="away-team name"></div>
	                </div>
	            </div>
	            <div id="score-container">
								<?php echo '<div class="homecomming-team score">' . round($totalPoint) . '</div>' ?>
	                <div class="away-team score winner">100</div>
	            </div>
	            <hr id="bottom-devider" />
	            <div id="close-details"></div>
	        </div>
	    </div>
			<script type="text/javascript">
			$( document ).ready(function() {
				var dt = new Date();
				var time = dt.getHours() + ":" + dt.getMinutes();
				var date = dt.getDate() + "/" + dt.getMonth() + "/" + dt.getFullYear();
			    $("#time-of-match").text(time);
					$("#date-of-match").text(date);
			});
			$("#trigger").click(function(){
				$("#match-details-curtain").fadeIn(500);
			});
			$("#close-details").click(function(){
				$("#match-details-curtain").fadeOut(500);
			});
			</script>
	</body>
</html>
