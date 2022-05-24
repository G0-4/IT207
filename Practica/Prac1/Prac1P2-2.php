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
        <a href="/~cslavitt/IT207/Practica/Prac1/Prac1P2.php">Input Form Page</a><br/>
        <a href="/~cslavitt/IT207/Practica/Prac1/Prac1.php">Part 1</a>
        <?php
            $coupons = $_POST["coupons"];
            $numOfBars = 0;
            $numOfGum = 0;
            $remainder = 0;
            $barString = "";
            $gumString = "";
            $remString = "";

            function prizeCounter($numOfCoup, $coupPrice)
            {
                if ($numOfCoup > $coupPrice)
                {
                    $numOfPrizes = $numOfCoup / $coupPrice;
                }

                return $numOfPrizes;
            }

            while ($coupons >= 3)
            {
                if ($coupons >= 12)
                {
                    $numOfBars = round(prizeCounter($coupons, 12));
                    $coupons = $coupons % 12;
                }
                else if ($coupons >= 3)
                {
                    $numOfGum = round(prizeCounter($coupons, 3));
                    $coupons = $coupons % 3;
                }
            }
            $remainder = round(prizeCounter($coupons, 1));

            for ($i = 0; $i < $numOfBars; $i++)
            {
                $barString .= "O";
            }
            for ($i = 0; $i < $numOfGum; $i++)
            {
                $gumString .= "O";
            }
            for ($i = 0; $i < $remainder; $i++)
            {
                $remString .= "O";
            }

            echo "<div id='outer-box'><h3>Coupon Distribution Results</h3><div id='content'>For ", $_POST['coupons'], " you can get:<br/>", $numOfBars, " candy bars<br/><div id='counter'>", $barString,
            "</div><br/>", $numOfGum, " gumballs<br/><div id='counter'>", $gumString, "</div><br/>", $remainder, " coupon(s) left over<br/><div id='counter'>", $remString, "</div></div><div style='text-align: right;'>Legend: Candy Bar = 10 | Gumball = 3";
        ?>
    </body>