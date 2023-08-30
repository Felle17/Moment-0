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
        $ans4 = $_POST['q4'];
        $ans5 = $_POST['q5'];
        $ans6 = $_POST['q6'];
        $name = $_POST['n1'];
     	$points = 0;
     	
     	if($ans1 == 9)
           $points++;
     	if($ans2 == 15)
           $points++;
        if($ans3 == 24)
            $points++;
        if($ans4 == 41)
            $points++;
        if($ans5 == 640)
            $points++;
        if($ans6 == 1)
            $points++;
     	
     	echo("<p>Du fick " . $points . " av 6 möjliga " . $name . "! Bra jobbat! </p>");
?>
</body>
</html>