<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="styles.css" type="text/css" />
	<head>
		<title>
			Ass2
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
                <div id="title">Office Hour Setup Form</div>
                <div id="banner">
                    <?php
                    $weekdays = array('Day:','Monday','Tuesday','Wednesday','Thursday','Friday'); //Everything from here to the echo statement is variable generation
                    $thisMonth = date("F");
                    $thisMonthNum = date("n");
                    $thisYear = date("Y");
                    $monthDays = date("t");
                    $firstDay = date("l", mktime(0, 0, 0, $thisMonthNum, 1, $thisYear));
                    $firstDayIndex = array_search($firstDay, $weekdays);
                    $dayCounter = 1;
                    echo "$thisMonth, $thisYear"; //Displays the current month and year
                ?>
                </div>
            <div id="workspace">
                <?php 
                for ($i = 0; $i < count($weekdays); $i++) //Displays all the weekdays
                {
                    echo "<div id='days'>$weekdays[$i]</div>";
                }
                echo "<div id='days2'>Time:</div>"; //Time Row Label

                echo "<div id='days2'><form action='calendar.php' method='post'><select id='mondayTimes[]' name='mondayTimes[]' size='8' multiple>"; //Monday
                $timesFile = fopen("times.txt", "r") or die("Unable to open file!"); //Opens times.txt file to read/list times
                echo fread($timesFile,filesize("times.txt"));
                fclose($timesFile);

                echo "<div id='days2'><form action='calendar.php' method='post'><select id='tuesdayTimes[]' name='tuesdayTimes[]' size='8' multiple>"; //Tuesday
                $timesFile = fopen("times.txt", "r") or die("Unable to open file!"); //Opens times.txt file to read/list times
                echo fread($timesFile,filesize("times.txt"));
                fclose($timesFile);

                echo "<div id='days2'><form action='calendar.php' method='post'><select id='wednesdayTimes[]' name='wednesdayTimes[]' size='8' multiple>"; //Wednesday
                $timesFile = fopen("times.txt", "r") or die("Unable to open file!"); //Opens times.txt file to read/list times
                echo fread($timesFile,filesize("times.txt"));
                fclose($timesFile);

                echo "<div id='days2'><form action='calendar.php' method='post'><select id='thursdayTimes[]' name='thursdayTimes[]' size='8' multiple>"; //Thursday
                $timesFile = fopen("times.txt", "r") or die("Unable to open file!"); //Opens times.txt file to read/list times
                echo fread($timesFile,filesize("times.txt"));
                fclose($timesFile);

                echo "<div id='days2'><form action='calendar.php' method='post'><select id='fridayTimes[]' name='fridayTimes[]' size='8' multiple>"; //Friday
                $timesFile = fopen("times.txt", "r") or die("Unable to open file!"); //Opens times.txt file to read/list times
                echo fread($timesFile,filesize("times.txt"));
                fclose($timesFile);


                echo "<div style='text-align: center;'><input type='submit'></div></form>"; //Closes Form as well as Displaying Submit Button
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