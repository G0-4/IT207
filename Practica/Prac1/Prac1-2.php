<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="styles.css" type="text/css" />
	<head>
		<title>
			Practicum 1-2
		</title>
	</head>
    <body>
    <?php
		echo date("d F Y h:i:s ",getlastmod())
	?>
        <a href="/~cslavitt/IT207/Practica/Prac1/Prac1.php">Input Form Page</a><br/>
        <a href="/~cslavitt/IT207/Practica/Prac1/Prac1P2.php">Part 2</a>
        <?php
            $weight = $_POST["weight"] / 2.2;
            $runTime = $_POST["runTime"];
            $ballTime = $_POST["ballTime"];
            $sleepTime = $_POST["sleepTime"] * 60;

            function calcCals($x, $y, $z)
            {
                $caloriesPM = 0;
                $calories = 0;
                $caloriesPM = 0.0175 * $z * $y;
                $calories = $caloriesPM * $x;
                return $calories;
            }

            function totalCals($x, $y, $z)
            {
                $totalCals = $x + $y + $z;
                return $totalCals;
            }

            echo "<div id='outer-box'><h3>Metabolic Equivalents Energy Expender</h3><br/><div id='content'>For a 200 pound person, it is estimated that:<br/>", round(calcCals($runTime, $weight, 10)),
            " calories were burned running<br/>", round(calcCals($ballTime, $weight, 8)), " calories were burned playing basketball<br/>", round(calcCals($sleepTime, $weight, 1)), " calories were burned sleeping</div>",
            "<div style='text-align: right;'>Total Calories Burned: ", round(totalCals(calcCals($runTime, $weight, 10), calcCals($ballTime, $weight, 8), calcCals($sleepTime, $weight, 1)));
        ?>
    </body>