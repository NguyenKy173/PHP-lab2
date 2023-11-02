<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Mảng
        echo "<h1>Bài 1: Mảng</h1>";
        $color = array('red' ,'green' ,'white');
        print_r($color);
        echo "<br>";
        echo $color[0] ;
        echo "<br>";

        $age = array();
        $age[0] = 10;
        $age[1] = 20;
        $age[3] = 30;
        print_r($age);
    ?>
    <?php
    //mảng
        echo "<h1>Bài 2: Mảng</h1>" ;
        $salaries = array(
            "mohammad"=> 2000,
            "quadir" => 1000,
            "zara" => 500
        );
        echo "Salary of mahamad is " . $salaries['mohammad'] . "<br />";
        echo "Salary of quadir is " . $salaries['quadir'] . "<br />";
        echo "Salary of zara is " . $salaries['zara'] . "<br />";
    ?>
    <?php
    //constant
        echo " <h1>Bài 3: Constant</h1>";
        define('LOCATOR' , "/locator");
        echo "LOCATOR";
        define('CLASSES' , LOCATOR."/code/classes" );
        define('FUNCTIONS' , LOCATOR."/code/functions" );
        define('USERDIR' , LOCATOR."/user");
    ?>
</body>

</html>