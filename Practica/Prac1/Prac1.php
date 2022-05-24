<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="styles.css" type="text/css" />
	<head>
		<title>
			Practicum 1
		</title>
	</head>
    <body>
    <?php
		echo date("d F Y h:i:s ",getlastmod())
	?>
        <div id="outer-box">
            <a href="/~cslavitt/IT207/Practica/Prac1/Prac1P2.php">Part 2</a>
            <h3>Metabolic Equivalents Energy Expender</h3>
            <form action="Prac1-2.php" method="post">
                <div id="content">
                    Weight: <input type="text" name="weight"/> pounds<br/>
                    Time Running (at 6mph): <input type="text" name="runTime" /> minutes<br/>
                    Time Playing Basketball: <input type="text" name="ballTime" /> minutes<br/>
                    Time Sleeping: <input type="text" name="sleepTime" /> hours
                    <br/><br/>
                </div>
        <input type="submit" value="Calculate"></form>
        </div>
    </body>