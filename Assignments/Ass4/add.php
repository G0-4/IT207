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
                    $studentID = $name . ", " . $email;
                    $studentComment = $name . ", " . $email . ", " . $comment . "\n";
                    $studentLength = strlen($studentID);


                    $commentsFile = fopen('/home/cslavitt/helios_html/IT207/Assignments/Ass4/comments.txt', 'r+') or die("File not Found");

                    if (filesize('comments.txt') == 0)
                    {
                        $checker = fwrite($commentsFile, $studentComment);

                        if ($checker > 0)
                        {
                            echo "<h1>Comments Added</h1><hr/>";
                            echo "<b>Name</b>: <u>$name</u><br/>";
                            echo "<b>Comments</b>: $comment<br/>";
                            echo "<hr/>";
                            echo "<a href='Ass4.php'>Someone Else Want to Comment?</a><br/>";
                            echo "<a href='commentsPage.php'>View Posting Comments</a>";
                            fclose($commentsFile);
                        }
                        else
                        {
                            echo "Comments Not Added";
                        }
                    }
                    else
                    {
                        while(!feof($commentsFile))
					    {
                            $fileLine = fgets($commentsFile);
                            $fileID = substr($fileLine, 0, $studentLength);
                            $fileLength = strlen($fileID);

                            if ($studentID == $fileID)
	    					{
                                $matchChecker += 1;
                                echo "<h1>Comments Not Added</h1><hr/>";
                                echo "One per person! You already left comments for this posting.<hr/>";
                                echo "<a href='Ass4.php'>Someone Else Want to Comment?</a><br/>";
                                echo "<a href='commentsPage.php'>View Posting Comments</a>";
                                fclose($commentsFile);
                                break;
                            }
                            else if ((feof($commentsFile) == true) && ($matchChecker == 0))
                            {
                                $checker = fwrite($commentsFile, $studentComment);

                                if ($checker > 0)
                                {
                                    echo "<h1>Comments Added</h1><hr/>";
                                    echo "<b>Name</b>: <u>$name</u><br/>";
                                    echo "<b>Comments</b>: $comment<br/>";
                                    echo "<hr/>";
                                    echo "<a href='Ass4.php'>Someone Else Want to Comment?</a><br/>";
                                    echo "<a href='commentsPage.php'>View Posting Comments</a>";
                                    fclose($commentsFile);
                                    break;
                                }
                                else
                                {
                                    echo "Comments Not Added";
                                }
                            }
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