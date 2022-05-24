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
                    <div id="logMess2">
                        <?php
                            $status = $_GET['status'];
                            if(isset($status))
                            {
                                if ($status == 0)
                                {
                                    echo"Logged Out Successfully";
                                }
                                else if ($status == 401)
                                {
                                    echo"Error: Invalid email address or password";
                                }
                            }
                        ?>
                    </div>
                    <br/>
                    <div id="logMess1">
                        Please log in to continue
                    </div>
                    <br/>
                    <form method='POST' action='users.php'>
                        Email: <input type='text' name='email' placeholder="Email" required/><br/><br/>
                        Password: <input type='text' name='password' placeholder="Password" required/><br/><br/>
                        <input type='submit' value='Login'/> Or <a href='register.php'>Register new account</a><br/>
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