<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="styles.css" type="text/css" />
    <head>
        <title>
            Calculations
        </title>
	</head>
	<body>
        <?php
            $percent = 0;
            $finalVal = 0;
            $weightTotal = 0;
            $grade = "";

            $paEarned = $_POST["paEarned"];
            $paMax = $_POST["paMax"];
            $paWeight = $_POST["paWeight"];

            $qEarned = $_POST["qEarned"];
            $qMax = $_POST["qMax"];
            $qWeight = $_POST["qWeight"];

            $lEarned = $_POST["lEarned"];
            $lMax = $_POST["lMax"];
            $lWeight = $_POST["lWeight"];

            $prEarned = $_POST["prEarned"];
            $prMax = $_POST["prMax"];
            $prWeight = $_POST["prWeight"];

            function calcCalcPercent($earned, $max)
            {
                $percent = 0;
                $percent = ((int) $earned/(int) $max) * 100;
				return $percent;
            }

            function calcWeightPercent($earned, $max, $weight)
			{
                $finalVal = 0;
                $finalVal = (calcCalcPercent((int) $earned, (int) $max) * (int) $weight) / 100;
				return $finalVal;
            }

            $paFinal = calcWeightPercent($paEarned,$paMax,$paWeight);
            $qFinal = calcWeightPercent($qEarned,$qMax,$qWeight);
            $lFinal = calcWeightPercent($lEarned,$lMax,$lWeight);
            $prFinal = calcWeightPercent($prEarned,$prMax,$prWeight);
            $weightTotal = $paFinal + $qFinal + $lFinal + $prFinal;

            function calcGrade($weightTotal)
            {
                $grade = "";

                $weightTotal >= 95 && $weightTotal <= 100 ? $grade = "A+" : null;
                $weightTotal >= 93 && $weightTotal < 95 ? $grade = "A" : null;
                $weightTotal >= 90 && $weightTotal < 93 ? $grade = "A-" : null;
                $weightTotal >= 85 && $weightTotal < 90 ? $grade = "B+" : null;
                $weightTotal >= 83 && $weightTotal < 85 ? $grade = "B" : null;
                $weightTotal >= 80 && $weightTotal < 83 ? $grade = "B-" : null;
                $weightTotal >= 75 && $weightTotal < 80 ? $grade = "C+" : null;
                $weightTotal >= 73 && $weightTotal < 75 ? $grade = "C" : null;
                $weightTotal >= 70 && $weightTotal < 73 ? $grade = "C-" : null;
                $weightTotal >= 65 && $weightTotal < 70 ? $grade = "D+" : null;
                $weightTotal >= 60 && $weightTotal < 65 ? $grade = "D" : null;
                $weightTotal >= 0 && $weightTotal < 60 ? $grade = "F" : null;
                $weightTotal < 0 || $weightTotal > 100? $grade = "Error: 405 <br/><br/>Method Not Allowed" : null;

                return $grade;
            }

            echo "You earned a ", calcCalcPercent($paEarned, $paMax), "% for Participation, with a weighted value of ", $paFinal,
			"<br/><br/>You earned a ", calcCalcPercent($qEarned, $qMax), "% for Quizzes, with a weighted value of ", $qFinal,
			"<br/><br/>You earned a ", calcCalcPercent($lEarned, $lMax), "% for Lab Assignments, with a weighted value of ", $lFinal,
			"<br/><br/>You earned a ", calcCalcPercent($prEarned, $prMax), "% for Practica, with a weighted value of ", $prFinal,
			"<br/><br/>Your Final Grade is a ", $weightTotal, "%, which is a ", calcGrade($weightTotal);
        ?>
    </body>
</html>