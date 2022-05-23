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
                        $commNum = intval($_POST['comment']) - 1;
                        
                        $commentsFile = fopen('/home/cslavitt/helios_html/IT207/Assignments/Ass4/comments.txt', 'r+') or die("File not Found");
                        if (filesize('comments.txt') == 0)
                        {
                            echo "Comments Not Added";
                            echo "<br/><hr/>";
                        }
                        else
                        {
                            $commArray = [];
    
                            while(!feof($commentsFile))
                            {
                                $fileLine = fgets($commentsFile);
                                array_push($commArray, $fileLine);

                                if (feof($commentsFile) == true)
                                {
                                    fclose($commentsFile);
                                    break;
                                }
                            }
                            sort($commArray);
                            for ($i = 0; $i <= count($commArray) - 2; $i++)
                            {
                                if (($i == $commNum) && (empty($commNum) == false))
                                {
                                    unset($commArray[$i]);
                                    $newArray = array_values($commArray);
                                    $theCollapse = '';
                                    for ($i = 0; $i <= count($newArray) - 1; $i++)
                                    {
                                        $theCollapse = $theCollapse . $newArray[$i];
                                    }
                                    $commentsFile = fopen('/home/cslavitt/helios_html/IT207/Assignments/Ass4/comments.txt', 'w+') or die("File not Found");
                                    fwrite($commentsFile, $theCollapse);
                                    fclose($commentsFile);
                                }
                            }
                            
                            $commArray = array_values($commArray);

                            echo "<ol class='hr'>";
                            for ($i = 0; $i <= count($commArray) - 1; $i++)
                            {
                                if ($commArray[$i] != '')
                                {
                                    $studentArray = explode(", ", $commArray[$i]);
                                    echo "<li>" . "Name: " . "<a href='mailto:" . $studentArray[1] . "'>" . $studentArray[0] . "</a>" . "<br/>" . "Comment: " . $studentArray[2] . "</li>";
                                }
                                else
                                {
                                    continue;
                                }
                            }
                            echo "</ol>";
                        }
                        echo "<hr/>";
                        echo "<a href='Ass4.php'>Add New Comment</a><br/><br/>";
                        echo "<a href='ascendingCom.php'>Sort Comments A-Z (by name)</a><br/><br/>";
                        echo "<a href='descendingCom.php'>Sort Comments Z-A (by name)</a><br/><br/>";
                        ?>
                        <form method='POST' action='commentsPage.php'>
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