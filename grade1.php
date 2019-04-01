<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">
		
		<h1>This is the result page.</h1>
		
        <?php
            $fname = $_POST['fname'];
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
			$answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
			$answer11 = $_POST['question-11-answers'];
            $answer12 = $_POST['question-12-answers'];
            $answer13 = $_POST['question-13-answers'];
            $answer14 = $_POST['question-14-answers'];
            $answer15 = $_POST['question-15-answers'];
            $totalCorrect = 0;
            
            if ($answer1 == "C") {$totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
			if ($answer6 == "C") {$totalCorrect++; }
            if ($answer7 == "B") { $totalCorrect++; }
            if ($answer8 == "C") { $totalCorrect++; }
            if ($answer9 == "D") { $totalCorrect++; }
            if ($answer10 == "C") { $totalCorrect++; }
			if ($answer11 == "A") {$totalCorrect++; }
            if ($answer12 == "B") { $totalCorrect++; }
            if ($answer13 == "D") { $totalCorrect++; }
            if ($answer14 == "A") { $totalCorrect++; }
            if ($answer15 == "C") { $totalCorrect++; }
            
            echo "$fname your score is<div id='results'>$totalCorrect / 15 </div>";
			if ($totalCorrect > 10){echo "$fname that was a very good performance";}
            //if ($totalCorrect > 8 && < 12){echo "$fname that was a satisfactory performance";}
			if ($totalCorrect < 10){echo "$fname that was a poor performance, try harder next time";}
        ?>
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>