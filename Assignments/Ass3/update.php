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
					$city = $_POST['city'];
                    $state = $_POST['state'];
                    $zip = $_POST['zip'];

                    if ((empty($firstName)) || (empty($lastName)) || (empty($email)) || (empty($phone)) || (empty($address)) || (empty($state)) || (empty($zip)))
                    {
                        echo "Please enter valid information into all of the fields";
                        echo "<a href='Ass3.php'>Return to Directory</a><br/>";
                    }
                    else
                    {
						$contact = $firstName . ", " . $lastName . ", " . $email . ", " . $phone . ", " . $address . ", " . $city . ", " . $state . ", " . $zip . "\n";
                        $contactsFile = fopen('/home/cslavitt/helios_html/IT207/Assignments/Ass3/contactsList.txt', 'r+') or die("File not Found");
						$checker = fwrite($contactsFile, $contact);

						if ($checker > 0)
						{
							echo "Contact succesfully updated<br/>";
							echo "<a href='Ass3.php'>Return to Directory</a><br/>";
							fclose($contactsFile);	
						}
						else
						{
							echo "Contact failed to be updated<br/>";
							echo "<a href='Ass3.php'>Return to Directory</a><br/>";
							fclose($contactsFile);	
						}
                    }
					?>
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