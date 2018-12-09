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

echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' ' . $_SESSION['classe'] . '<br>';
echo 'Ton score est de ' . round($totalPoint) . '/100';

?>