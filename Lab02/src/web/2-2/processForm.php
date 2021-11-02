<html>

<head>
    <title> Display Form </title>
</head>

<body>

    <?php
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $date = $_POST['birthday'];
    $class = $_POST['class'];
    $uni = $_POST['uni'];
    $email = $_POST['email'];
    $hobby = $_POST['hobby'];
    print(" Hello world !!!<br>");
    print("My name is $name<br> I am $gender <br> My birthday is $date <br> University: $uni <br> My hobby is $hobby<br> My email is $email");
    ?>
</body>

</html>