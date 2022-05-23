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
                    <h2>Online Contacts Directory</h2>
                    <h3>Search for a contact</h3>
                    <form method='POST' action='search.php'>
                        First Name<input type='text' name='firstName' required/><br/><br/>
                        Last Name<input type='text' name='lastName' required/><br/><br/>
                        <input type='submit' value='Search'/>
                    </form>
                    <hr/>
                    <a href='newContact.php'>Add New Contact Entry</a><br/>
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