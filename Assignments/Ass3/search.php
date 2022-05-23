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
						$fullName = $firstName . ", " . $lastName;
						$fullNameCnt = strlen($fullName);
						$matchChecker = 0;

							//Open file, read each line, and check if the first and last names match. If they do, update. If they don't output an error message

						$contactName = '';
						$contactsFile = fopen('/home/cslavitt/helios_html/IT207/Assignments/Ass3/contactsList.txt', 'r+') or die("File not Found");
						while(!feof($contactsFile))
						{
							$contact = fgets($contactsFile);
							$contactName = substr($contact, 0, $fullNameCnt);

							if ($fullName == $contactName)
							{
								$matchChecker += 1;
								$contactArray = explode(", ", $contact);
									
								echo "<h3>Update Contact</h3>";
								echo "<form method='POST' action='update.php'>";
								echo "First Name<input type='text' name='firstName' value='$contactArray[0]'/> Last Name<input type='text' name='lastName' required value='$contactArray[1]'/><br/><br/>";
								echo "Email Address<input type='text' name='email' required value='$contactArray[2]'/><br/><br/>";
								echo "Phone Number<input type='text' name='phone' required value='$contactArray[3]'/><br/><br/>";
								echo "Address<input type='text' name='address' required value='$contactArray[4]'/> City<input type='text' name='city' required value='$contactArray[5]'/><br/><br/>";
								echo "State<select name='state' required>";
								$statesFile = fopen("states.txt", "r") or die("Unable to open file!");
								echo fread($statesFile,filesize("states.txt"));
								fclose($statesFile);
								echo "</select> Zip<input type='text' name='zip' required value='$contactArray[7]'/><br/><br/>";
								echo "<input type='submit' value='Update Entry'/>";
								echo "<hr/><br/><a href='Ass3.php'>Return to Directory</a>";
								break;
							}

							if ((feof($contactsFile) == true) && ($matchChecker == 0))
							{
								echo "Contact not found.<br/>";
								echo "<a href='Ass3.php'>Return to Directory</a><br/>";
								break;
							}
						}
						fclose($contactsFile);
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