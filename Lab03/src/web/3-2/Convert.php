<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert radians and degress</title>
</head>

<body>
    <form action="" method="post">
        <h3>Choose radians or degress</h3>
        <table>
            <tr>
                <td><input type="radio" name="choose" value="1"> Radians to Degress</td>
                <td><input type="radio" name="choose" value="2"> Degress to radians </td>
            </tr>
        </table>
        <br>
        <input type="text" size="15" maxlength="20" name="number"><br>
        <br>
        <input type="submit" value="Submit" name="SubmitButton">
    </form>

</body>

</html>
<?php
    if(isset($_POST['SubmitButton'])){ 
        function convertRadians($radians)
    {
        $pi = pi();
        return $radians * (180 / $pi);
    }
    function convertDegrees($degrees)
    {
        $pi = pi();
        return $degrees * $pi / 180;
    }
    $input = $_POST['number'];
    
    if( $input == null || empty($_POST['choose'])){
        print "Please enter all!!!";
    }else{
        $choose = $_POST['choose'];
        if ($choose == 1) {
            $result =   convertRadians($input);
            print "Convert to degrees: $result";
        } else {
            $result =   convertDegrees($input);
            print "Convert to radians $result";
        }
    }
}


?>