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
        <?php
        echo "<form action='calendar.php' method='post' name='studentName'><label for='studentName'>Student Name:</label><input type='text' name='studentName'>";
        echo "<form action='calendar.php' method='post' name='studentEmail'><label for='studentEmail'>Student Email:</label><input type='text' name='studentEmail'>";
        echo "<input type='submit' value='Submit'></form>";

        /*if(empty($_POST["studentName"]) || (empty($_POST["studentEmail"])))
        {
        }
        else
        {
            $to = "cslavitt@gmu.edu";
            $subject = "$_POST['studentName']";
            $message = "Email Sent";
            $headers = "From:$_POST['studentEmail']";
            mail($to, $subject, $message, $headers);
            if(mail($to, $subject, $message, $headers) == true)
            {
                echo "<br><br>Email successfully sent from" . $_POST["studentEmail"];
            }
        }*/
        ?>
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
                $takenTime = $_POST["takenTime"];
                //$day = $_POST["day"];
                echo "$thisMonth, $thisYear"; //Displays the current month and year
            ?>
        </div>
        <div id="workspace">
            <?php 
            for ($i = 0; $i < count($weekdays); $i++) //Displays all the weekdays
            {
                echo "<div id='days'>$weekdays[$i]</div>";
            }
                for ($i = 0; $i < count($weekdays); $i++) //For loop checks what weekday the first day of the month lands on
                if ($i >= $firstDayIndex) //Nested if statements start counting and displaying days on and after the first weekday of the month, displaying all available sign up times
                {
                    echo "<div id='days'><form action='' method='post'>$dayCounter<br>";
                    if ($i == 1)
                    {
                        foreach ($mondayTimes as $time) 
                        {
                            echo "<input type='radio' name='takenTime' value='$time'>$time<br>";
                            echo "<input type='hidden' name='mondayTimes[]' value='$time'/>";
                        }
                    }
                    if ($i == 2)
                    {
                        foreach ($tuesdayTimes as $time) 
                        {
                            echo "<input type='radio' name='takenTime' value='$time'>$time<br>";
                            echo "<input type='hidden' name='tuesdayTimes[]' value='$time'/>";
                        }
                    }
                    if ($i == 3)
                    {
                        foreach ($wednesdayTimes as $time) 
                        {
                            echo "<input type='radio' name='takenTime' value='$time'>$time<br>";
                            echo "<input type='hidden' name='wednesdayTimes[]' value='$time'/>";
                        }
                    }
                    if ($i == 4)
                    {
                        foreach ($thursdayTimes as $time) 
                        {
                            echo "<input type='radio' name='takenTime' value='$time'>$time<br>";
                            echo "<input type='hidden' name='thursdayTimes[]' value='$time'/>";
                        }
                    }
                    if ($i == 5)
                    {
                        foreach ($fridayTimes as $time) 
                        {
                            echo "<input type='radio' name='takenTime' value='$time'>$time<br>";
                            echo "<input type='hidden' name='thursdayTimes[]' value='$time'/>";
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
                        echo "<div id='days'><form action=''>$dayCounter<br>";
                        if ($i == 1)
                        {
                            foreach ($mondayTimes as $time) 
                            {
                                echo "<input type='radio' name='takenTime' value='$time'>$time<br>";
                            }
                        }
                        if ($i == 2)
                        {
                            foreach ($tuesdayTimes as $time) 
                            {
                                echo "<input type='radio' name='takenTime' value='$time'>$time<br>";
                            }
                        }
                        if ($i == 3)
                        {
                            foreach ($wednesdayTimes as $time) 
                            {
                                echo "<input type='radio' name='takenTime' value='$time'>$time<br>";
                            }
                        }
                        if ($i == 4)
                        {
                            foreach ($thursdayTimes as $time) 
                            {
                                echo "<input type='radio' name='takenTime' value='$time'>$time<br>";
                            }
                        }
                        if ($i == 5)
                        {
                            foreach ($fridayTimes as $time) 
                            {
                                echo "<input type='radio' name='takenTime' value='$time'>$time<br>";
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
            echo "</form>";
            ?>
        </div>
    </body>
</html>