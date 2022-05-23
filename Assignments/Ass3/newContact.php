<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="styles.css" type="text/css" />
	<head>
		<title>
			Ass3
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
                <div id="workspace">
				<h3>Add New Contact</h3>
                    <form method='POST' action='add.php'>
                        First Name<input type='text' name='firstName'/> Last Name<input type='text' name='lastName' required/><br/><br/>
						Email Address<input type='text' name='email' required/><br/><br/>
						Phone Number<input type='text' name='phone' required/><br/><br/>
						Address<input type='text' name='address' required/> City<input type='text' name='city' required/><br/><br/>
						State<select name='state' required>
						<?php
                			$statesFile = fopen("states.txt", "r") or die("Unable to open file!");
                			echo fread($statesFile,filesize("states.txt"));
                			fclose($statesFile);
						?>
						</select>
						Zip<input type='text' name='zip' required/><br/><br/>
                        <input type='submit' value='Add Entry'/>
                    </form>
                    <hr/>
                    <a href='Ass3.php'>Return to Directory</a><br/>
                </div>
			</div>
		</div>
        <div id="footer">
			<?php
			include("footer.php");
			?>
		</div>
	</body>
</html>