<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Enter your name and select date and time for the appointment <br>
        <br>
        Name: <input type="text" size="15" maxlength="20" name="name"><br>
        <table>
            <tr>
                <td>Date: </td>
                <td>
                    <select name="day" id="">
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            print("<option>$i</option>");
                        }
                        ?>
                    </select>
                    <select name="month" id="">
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            print("<option>$i</option>");
                        }
                        ?>
                    </select>
                    <select name="year" id="">
                        <?php
                        for ($i = 1900; $i <= 2030; $i++) {
                            print("<option>$i</option>");
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Time: </td>
                <td>
                    <select name="hours" id="">
                        <?php
                        for ($i = 00; $i <= 23; $i++) {
                            print("<option>$i</option>");
                        }
                        ?>
                    </select>
                    <select name="minutes" id="">
                        <?php
                        for ($i = 00; $i < 60; $i++) {
                            print("<option>$i</option>");
                        }
                        ?>
                    </select>
                    <select name="seconds" id="">
                        <?php
                        for ($i = 00; $i < 60; $i++) {
                            print("<option>$i</option>");
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Submit" name="SubmitButton">
        <input type="reset" value="Reset">
    </form>
</body>


</html>
<?php
if(isset($_POST['SubmitButton'])){ //check if form was submitted
    $name = $_POST['name'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $hours = $_POST['hours'];
    $minutes = $_POST['minutes'];
    $seconds = $_POST['seconds'];


    print "Hi $name!<br>";
    print "You have choose to have an appointment on $hours:$minutes:$seconds ,$day/$month/$year <br><br>";
    if ($hours <= 12) {
        print " More information<br><br>";
        print "In 12 hours, the time and date is $hours:$minutes:$seconds AM ,$day/$month/$year <br><br>";
    } else {
        $hours = $hours - 12;
        print " More information<br>";
        print "In 12 hours, the time and date is $hours:$minutes:$seconds PM ,$day/$month/$year <br>";
    }

    if ($month == 2 && ($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
        print " This month has 29 days!<br>";
    } elseif ($month == 2) {
        print " This month has 28 days<br>";
    } elseif ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
        print " This month has 30 days<br>";
    } else {
        print " This month has 31 days<br>";
    }

  }    
    

    ?>