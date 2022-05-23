<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="styles.css" type="text/css" />
	<head>
		<title>
			Ass1
		</title>
	</head>
	<body>
		<div id="outer-box">
			<div id="side-menu">
				<?php
				include("menu.php");
				?>
			</div>
			<div id="content">
				<div id="header">
				<?php
				include("header.php");
				?>
				</div>
				<div id="calculations">
					<form action="calculations.php" method="post">
						<h3>Participation</h3>
						Earned: <input type="text" name="paEarned" />
						Max: <input type="text" name="paMax" />
						Weight (percentage): <input type="text" name="paWeight" />
				
						<h3>Quizzes</h3>
						Earned: <input type="text" name="qEarned" />
						Max: <input type="text" name="qMax" />
						Weight (percentage): <input type="text" name="qWeight" />
				
						<h3>Lab Assignments</h3>
						Earned: <input type="text" name="lEarned" />
						Max: <input type="text" name="lMax" />
						Weight (percentage): <input type="text" name="lWeight" />
				
						<h3>Practica</h3>
						Earned: <input type="text" name="prEarned" />
						Max: <input type="text" name="prMax" />
						Weight (percentage): <input type="text" name="prWeight" />
						<br/><br/>
						<input type="submit">
					</form>	
				</div>
				<div id="footer">
					<?php
					include("footer.php");
					?>
				</div>
			</div>
		</div>
	</body>
</html>