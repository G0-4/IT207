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
                    <?php
                    $_SESSION['status'] = 0;
                    $fName = $_POST['fName'];
                    $lName = $_POST['lName'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $account = $fName . ", " . $lName . ", " . $email . ", " . $password . "\n";

                    $usersFile = fopen('users.txt', 'r+') or die("File not Found");
                    if (filesize('users.txt') == 0)
                    {
                        $checker = fwrite($usersFile, $account);
                        fclose($usersFile);

                        if ($checker > 0)
                        {
                            echo"<h2>207 Enterprises</h2>";
                            echo"<b>Welcome, $fName <a href='Prac2.php?status=0'>Logout</a>";
                            echo"<h2>Registered Users</h2>";
                            echo"<div class='row'>";
                            echo"<div class='box'><b>First Name</b></div>";
                            echo"<div class='box'><b>Last Name</b></div>";
                            echo"<div class='box'><b>Email</b></div>";
                            echo"</div>";

                            $usersFile = fopen('users.txt', 'r+') or die("File not Found");
                            while(!feof($usersFile))
                            {
                                $userLine = fgets($usersFile);
                                $userArr = explode(", ", $userLine);
                                echo"<div class='row'>";
                                echo"<div class='box'><b>" . $userArr[0] . "</b></div>";
                                echo"<div class='box'><b>" . $userArr[1] . "</b></div>";
                                echo"<div class='box'><b>" . $userArr[2] . "</b></div>";
                                echo"</div>";
                            }
                        }
                        else
                        {
                            echo"Error registering account. Please <a href='register.php'>try again</a> or <a href='Prac2.php'>return to login page</a>.";
                        }
                    }
                    else
                    {
                        while(!feof($usersFile))
                        {
                            $userLine = fgets($usersFile);

                            if (feof($usersFile))
                            {
                                $checker = fwrite($usersFile, $account);
                                fclose($usersFile);

                                if ($checker > 0)
                                {
                                    echo"<h2>207 Enterprises</h2>";
                                    echo"<b>Welcome, $fName <a href='Prac2.php?status=0'>Logout</a>";
                                    echo"<h2>Registered Users</h2>";
                                    echo"<div class='row'>";
                                    echo"<div class='box'><b>First Name</b></div>";
                                    echo"<div class='box'><b>Last Name</b></div>";
                                    echo"<div class='box'><b>Email</b></div>";
                                    echo"</div>";

                                    $usersFile = fopen('users.txt', 'r+') or die("File not Found");
                                    while(!feof($usersFile))
                                    {
                                        $userLine = fgets($usersFile);
                                        $userArr = explode(", ", $userLine);
                                        echo"<div class='row'>";
                                        echo"<div class='box'><b>" . $userArr[0] . "</b></div>";
                                        echo"<div class='box'><b>" . $userArr[1] . "</b></div>";
                                        echo"<div class='box'><b>" . $userArr[2] . "</b></div>";
                                        echo"</div>";
                                    }
                                }
                                else
                                {
                                    echo"Error registering account. Please <a href='register.php'>try again</a> or <a href='Prac2.php'>return to login page</a>.";
                                }
                            }
                        }
                    }
                    $file = 'users.txt';
                    $lines = count(file($file));
                    echo"Total Accounts: $lines";

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