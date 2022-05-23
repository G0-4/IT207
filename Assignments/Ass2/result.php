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
				<?php
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $state = $_POST['state'];
                    $zip = $_POST['zip'];

                    if (empty($firstName)) || (empty($lastName)) || (empty($email)) || (empty($phone)) || (empty($address)) || (empty($state)) || (empty($zip))
                    {
                        echo "Please enter valid information into all of the fields";
                        echo "<a href='Ass3.php'>Return to Directory</a><br/>"
                    }
                    else
                    {
                        $contact = $firstName . ", "
                        $contactsFile = fopen
                    }

                ?>
                    
                
                    <form method='POST' action='result.php'>
                        First Name<input type='text' name='firstName'/> Last Name<input type='text' name='lastName'/><br/><br/>
						Email Address<input type='text' name='email'/><br/><br/>
						Phone Number<input type='text' name='phone'/><br/><br/>
						Address<input type='text' name='address'/> City<input type='text' name='city'/><br/><br/>
						State<select name='state'>
						<?php
                			$statesFile = fopen("states.txt", "r") or die("Unable to open file!");
                			echo fread($statesFile,filesize("states.txt"));
                			fclose($statesFile);
						?>
						</select>
						Zip<input type='text' name='zip'/><br/><br/>
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