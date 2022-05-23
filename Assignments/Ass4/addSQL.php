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
				<?php
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $comment = $_POST['comment'];

                    $connect = mysqli_connect("helios.vse.gmu.edu", "cslavitt", "eegnoats", "cslavitt");

                    if ($connect)
                    {
                        mysqli_query($conn,"USE cslavitt");
                        $matchChecker = false;
                        $allInfo = mysqli_query($connect, "SELECT id, name, email, comment FROM comments");
                        $numPeople = mysqli_num_rows($allInfo);

                        if($numPeople > 0)
                        {
                            for($i = 0; $i < $numPeople; $i++)
                            {
                                mysqli_data_seek($allInfo,$i);
                                $rowInfo = mysqli_fetch_row($allInfo);
                                if($name == $rowInfo[1])
       	        	            {
                                    $matchChecker = true;
                                    break;
           		                }
                            }
                        }

                        if($matchChecker == true)
                        {
                            echo "<p>One per person! You already left comments for this posting.";
                            echo "<br><a href='Ass4SQL.php'>Someone Else Want to Comment?</a></p>";
                        }
                        else
                        {
                            if(mysqli_query($connect, "INSERT INTO comments VALUES (NULL, '$name','$email','$comment')"))
                            {
                                echo "<h1>Comments Added</h1><hr/>";
                                echo "<b>Name</b>: <u>$name</u><br/>";
                                echo "<b>Comments</b>: $comment<br/>";
                                echo "<hr/>";
                                echo "<a href='Ass4SQL.php'>Someone Else Want to Comment?</a><br/>";
                                echo "<a href='commentsPageSQL.php'>View Posting Comments</a>";
                            }
                        }

                    }
                    else
                    {
                        echo "Error connecting to database.";
                        echo "<hr/>";
                        echo "<a href='Ass4SQL.php'>Someone Else Want to Comment?</a><br/>";
                        echo "<a href='commentsPageSQL.php'>View Posting Comments</a>";

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