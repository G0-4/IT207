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
                    <h1>Comments</h1>
                    <hr/>
                    <?php
                        $commNum = intval($_POST['comment']);
                        $connect = mysqli_connect("helios.vse.gmu.edu", "cslavitt", "eegnoats", "cslavitt");

                        if ($connect)
                        {
                            mysqli_query($connect,"USE cslavitt");
                            $allInfo = mysqli_query($connect, "SELECT id, name, email, comment FROM comments");

                            if (empty($commNum) == false)
                            {
                                mysqli_data_seek($allInfo,$commNum - 1);
                                $rowInfo = mysqli_fetch_row($allInfo);
                                mysqli_query($connect, "DELETE FROM comments WHERE id = $rowInfo[0]");
                                $allInfo = mysqli_query($connect, "SELECT id, name, email, comment FROM comments");
                            }

                            $allInfo = mysqli_query($connect, "SELECT id, name, email, comment FROM comments ORDER BY name ASC");
                            $numPeople = mysqli_num_rows($allInfo);

                            echo "<ol class='hr'>";
                            for ($i = 0; $i < $numPeople; $i++)
                            {
                                mysqli_data_seek($allInfo,$i);
                                $rowInfo = mysqli_fetch_row($allInfo);
                                echo "<li>" . "Name: " . "<a href='mailto:" . $rowInfo[2] . "'>" . $rowInfo[1] . "</a>" . "<br/>" . "Comment: " . $rowInfo[3] . "</li>";
                            }
                            echo "</ol>";
                            echo "<hr/>";
                            echo "<a href='Ass4SQL.php'>Add New Comment</a><br/><br/>";
                            echo "<a href='ascendingComSQL.php'>Sort Comments A-Z (by name)</a><br/><br/>";
                            echo "<a href='descendingComSQL.php'>Sort Comments Z-A (by name)</a><br/><br/>";
    
                        }
                        else
                        {
                            echo "Error connecting to database.";
                            echo "<hr/>";
                            echo "<a href='Ass4SQL.php'>Someone Else Want to Comment?</a><br/>";
                            echo "<a href='commentsPageSQL.php'>View Posting Comments</a>";
    
                        }    
                        ?>
                        <form method='POST' action='commentsPageSQL.php'>
                        Delete Comment Number: <input type='text' name='comment' size='1'/> <input type='submit' value='Delete'/>
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