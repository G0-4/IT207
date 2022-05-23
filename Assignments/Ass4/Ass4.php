<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="styles.css" type="text/css" />
	<head>
		<title>
			Ass4
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
                    <h2>Huh?</h2>
                    <p>Kirschner and Karpinski report that:<br/>
                    Students who used social networking sites while studying score 20% lower on tests and students who used 
                    social media had an average GPA of 3.06 versus non-users who had an average GPA of 3.82.<br/>
                    Source: Paul A. Kirschner and Aryn C. Karpinski, "Facebook and Academic Performance," Computers in Human Behavior, Nov. 2010</p>
                    <h1>Add Comments</h1>
                    <hr/>
                    <form method='POST' action='add.php'>
                        Name: <input type='text' name='name' required/><br/><br/>
                        Email: <input type='text' name='email' required/><br/><br/>
                        Comments: <textarea name='comment' rows="4" cols="50" required/></textarea><br/><br/>
                        <input type='submit' value='Sign'/> <input type="reset" value="Reset">
                    </form>
                    <hr/>
                    <a href='commentsPage.php'>View Posting Comments</a><br/>
                    <a href='Ass4SQL.php'>Add Comments to Database</a><br/>
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