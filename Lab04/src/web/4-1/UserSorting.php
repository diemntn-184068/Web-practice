<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        function user_sort($a, $b) {
            // smarts is all-important, so sort it first
            if($b == 'smarts') {
                return 1;
            }
            else if($a == 'smarts') {
                return -1;
            }
                return ($a == $b) ? 0 : (($a < $b) ?-1 : 1);
        }
        $values = array('name' => 'Buzz Lightyear',
                            'email_address' =>'buzz@starcommand.gal',
                            'age' => 32,
                            'smarts' => 'some');
        if(isset($_GET['submitted'])) {
            $submitted  = $_GET['submitted']; 
            $sort_type =  $_GET['sort_type'];
            if($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
                $sort_type($values, 'user_sort');
            }
            else {
                $sort_type($values);
            }
        }
    
?>

<form action="UserSorting.php" method="get">
    <p>
        <input type="radio" name="sort_type" value="sort" checked="checked" />Standard sort<br />
        <input type="radio" name="sort_type" value="rsort" />Reverse sort<br />
        <input type="radio" name="sort_type" value="usort" /> User-defined sort<br />
        <input type="radio" name="sort_type" value="ksort" /> Key sort<br />
        <input type="radio" name="sort_type" value="krsort" /> Reverse key sort<br/>
        <input type="radio" name="sort_type" value="uksort" /> User-defined key sort<br/>
        <input type="radio" name="sort_type" value="asort" /> Value sort<br />
        <input type="radio" name="sort_type" value="arsort" /> Reverse value sort<br />
        <input type="radio" name="sort_type" value="uasort" /> User-defined value sort<br />
    </p>
    <p align="center">
        <input type="submit" value="Sort" name="submitted" />
    </p>
    
    <div style="position: relative; display: inline-block">
        <p style="position: absolute;top: 50%;margin: 0;display: inline-block">
            Values unsorted(before sort):
        </p>
        <ul style="display: inline-block; padding-left: 100%">
        <?php
        $valueUnsort = array('name' => 'Buzz Lightyear',
                                'email_address' =>'buzz@starcommand.gal',
                                'age' => 32,
                                'smarts' => 'some');
            foreach($valueUnsort as $key=>$value) {
                echo "<li><b>$key</b>: $value</li>";
            }
        ?>
        </ul>

        
    </div>
    <div style="padding-left: 30%;position: relative; display: inline-block">

    
        <?php
            if(isset($_GET['submitted'])) {
                echo "<p style='position: absolute;top: 50%;margin: 0;display: inline-block'>Values sorted by $sort_type:</p>";
                echo "<ul style='display: inline-block; padding-left: 100%'>";
                foreach($values as $key=>$value) {
                    echo "<li ><b>$key</b>: $value</li>";
                }
                echo "</ul>";
            }
        ?>
    </div>
   
</form>
    

</body>
</html>

