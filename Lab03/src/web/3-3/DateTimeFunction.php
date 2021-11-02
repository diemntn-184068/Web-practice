<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name1 : <input type="text" name="name"><br>
        Birthday 1: <input type="date" id="birt1" name="date1"><br>
        Name2 : <input type="text" name="name2"><br>
        Birthday 2: <input type="date" id="birt2" name="date2"><br>
        <input type="submit" value="Submit" name="SubmitButton">
        <input type="reset" value="Reset"><br>
    </form>
</body>
</html>
<?php
if(isset($_POST['SubmitButton'])){ 

    $date1 = $_POST["date1"];
    $date2 = $_POST["date2"];
    function printDate($date1, $date2)
    {
    $date1 = DateTime::createFromFormat('Y-m-d', $date1);
    $date2 = DateTime::createFromFormat('Y-m-d', $date2);
    $mess1 = $date1->format('l,d-m-Y');
    $mess2 = $date2->format('l, d-m-Y');
    print " $mess1 <br>";
    print " $mess2 <br>";
    $today   = new DateTime('today');
    $old = date_diff($date1, $today);
    print " Tuổi của người 1 là:  ";
    echo  $old->format("%Y");
    print "<br>";

    $old2 = date_diff($date2, $today);
    print " Tuổi của người 2 là:  ";
    echo  $old2->format("%Y");
    print "<br>";

    $diff = date_diff($date1, $date2);
    print "Difference years between two persons:  ";
    echo  $diff->format("%R%a days");
    }
    printDate($date1, $date2);
}

?>