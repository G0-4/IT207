<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="styles.css" type="text/css" />
	<head>
		<title>
			Practicum 2
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
                    <h2>207 Enterprises</h2>
                    <div id="regMess">
                        Please register an account
                    </div>
                    <form method='POST' action='regCheck.php'>
                            First Name: <input type='text' name='fName' placeholder="First Name" required/><br/><br/>
                            Last Name: <input type='text' name='lName' placeholder="Last Name" required/><br/><br/>
                            Email: <input type='text' name='email' placeholder="Email" required/><br/><br/>
                            Password: <input type='text' name='password' placeholder="Password" required/><br/><br/>
                            <input type='submit' value='Register'/> Or <a href='Prac2.php'>Login</a><br/>
                    </form>
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