<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="calStyles.css" type="text/css" />
    <head>
        <title>
            Calendar
        </title>
	</head>
	<body>
        <div id="title">Office Hours Sign Up</div>
        
        <div id="banner">
            <?php
                $weekdays = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'); //Everything from here to the echo statement is variable generation
                $thisMonth = date("F");
                $thisMonthNum = date("n");
                $thisYear = date("Y");
                $monthDays = date("t");
                $firstDay = date("l", mktime(0, 0, 0, $thisMonthNum, 1, $thisYear));
                $firstDayIndex = array_search($firstDay, $weekdays);
                $dayCounter = 1;
                $mondayTimes = $_POST["mondayTimes"];
                $tuesdayTimes = $_POST["tuesdayTimes"];
                $wednesdayTimes = $_POST["wednesdayTimes"];
                $thursdayTimes = $_POST["thursdayTimes"];
                $fridayTimes = $_POST["fridayTimes"];
                $day1 = $_POST["1times"]
                $day2 = $_POST["2times"]
                $day3 = $_POST["3times"]
                $day4 = $_POST["4times"]
                $day5 = $_POST["5times"]
                $day6 = $_POST["6times"]
                $day7 = $_POST["7times"]
                $day8 = $_POST["8times"]
                $day9 = $_POST["9times"]
                $day10 = $_POST["10times"]
                $day11 = $_POST["11times"]
                $day12 = $_POST["12times"]
                $day13 = $_POST["13times"]
                $day14 = $_POST["14times"]
                $day15 = $_POST["15times"]
                $day16 = $_POST["16times"]
                $day17 = $_POST["17times"]
                $day18 = $_POST["18times"]
                $day19 = $_POST["19times"]
                $day20 = $_POST["20times"]
                $day21 = $_POST["21times"]
                $day22 = $_POST["22times"]
                $day23 = $_POST["23times"]
                $day24 = $_POST["24times"]
                $day25 = $_POST["25times"]
                $day26 = $_POST["26times"]
                $day27 = $_POST["27times"]
                $day28 = $_POST["28times"]
                $day29 = $_POST["29times"]
                $day30 = $_POST["30times"]
                $day31 = $_POST["31times"]
                echo "$thisMonth, $thisYear"; //Displays the current month and year
            ?>
        </div>
        <div id="workspace">
            <?php 
            for ($i = 0; $i < count($weekdays); $i++) //Displays all the weekdays
                echo "<div id='days'>$weekdays[$i]</div>";
            for ($i = 0; $i < count($weekdays); $i++) //For loop checks what weekday the first day of the month lands on
                if ($i >= $firstDayIndex) //Nested if statements start counting and displaying days on and after the first weekday of the month, displaying all available sign up times
                {
                    echo "<div id='days'>$dayCounter<br>";
                    if ($i == 1)
                    {
                        foreach ($mondayTimes as $time) 
                        {
                            echo "$time<br>";
                        }
                    }
                    if ($i == 2)
                    {
                        foreach ($tuesdayTimes as $time) 
                        {
                            echo "$time<br>";
                        }
                    }
                    if ($i == 3)
                    {
                        foreach ($wednesdayTimes as $time) 
                        {
                            echo "$time<br>";
                        }
                    }
                    if ($i == 4)
                    {
                        foreach ($thursdayTimes as $time) 
                        {
                            echo "$time<br>";
                        }
                    }
                    if ($i == 5)
                    {
                        foreach ($fridayTimes as $time) 
                        {
                            echo "$time<br>";
                        }
                    }
                    echo "</div>";
                    $dayCounter++;
                }
                else //Empty boxes for non-applicable days
                {
                    echo "<div id='days'></div>";
                }
            while ($dayCounter < $monthDays) //While loops will continue the loop until the day counter reaches the max days in the month
            {
                for ($i = 0; $i < count($weekdays); $i++) //For loop makes a row of days
                    if ($dayCounter <= $monthDays) //Every applicable day will display a number
                    {
                        echo "<div id='days'>$dayCounter<br>";
                        if ($i == 1)
                        {
                            foreach ($mondayTimes as $time) 
                            {
                                echo "$time<br>";
                            }
                        }
                        if ($i == 2)
                        {
                            foreach ($tuesdayTimes as $time) 
                            {
                                echo "$time<br>";
                            }
                        }
                        if ($i == 3)
                        {
                            foreach ($wednesdayTimes as $time) 
                            {
                                echo "$time<br>";
                            }
                        }
                        if ($i == 4)
                        {
                            foreach ($thursdayTimes as $time) 
                            {
                                echo "$time<br>";
                            }
                        }
                        if ($i == 5)
                        {
                            foreach ($fridayTimes as $time) 
                            {
                                echo "$time<br>";
                            }
                        }
                        echo "</div>";
                        $dayCounter++;
                        }
                    else //Every non-applicable day displays a blank box
                    {
                        echo "<div id='days'></div>";
                    }
            }
            ?>
        </div>
    </body>
</html>