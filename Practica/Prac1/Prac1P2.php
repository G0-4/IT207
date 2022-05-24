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
            <a href="/~cslavitt/IT207/Practica/Prac1/Prac1.php">Part 1</a>
            <h3>Midway Coupon Distribution</h3>
            <form action="Prac1P2-2.php" method="post">
                <div id="content">
                    Total Number of Coupons: <input type="text" name="coupons"/>
                    <br/><br/>
                </div>
        <input type="submit" value="Calculate"></form>
        </div>
    </body>