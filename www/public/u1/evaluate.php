<!doctype html>
<html>
<head lang="sv"></head>
<body>
<h1>Matematiktest</h1>
<h2>Resultat</h2>
<?php
     	$ans1 = $_POST['q1'];
     	$ans2 = $_POST['q2'];
		$ans3 = $_POST['q3'];
     	$points = 0;
     	
     	if($ans1 == 9)
           $points++;
     	if($ans2 == 15)
           $points++;
		if($ans3 == 0)
           $points++;
     	
     	echo("<p>Du fick " . $points . " av 3 möjliga</p>");
?>
</body>
</html>