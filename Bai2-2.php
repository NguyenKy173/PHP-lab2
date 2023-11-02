<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Bài 1: if ... else</h1>" ; 
        $age = 50;
        if($age <30){
            echo "<h2>Tuổi của bạn nhở hơn 30!</h2>"; 
        }
        else if($age >30 && $age < 40){
            echo "<h2>Tuổi của bạn ở giữa 30 và 40! </h2>";
        }
        else if($age > 40 && $age <50){
            echo "<h2>Tuổi của bạn ở giữa 40 và 50!</h2>";
        }
        else {
            echo "<h2>Tuổi của bạn lớn hơn 50!</h2>";
        }

    ?>

    <?php
    echo "<h1>Bài 2: while</h1>";
    $max = 0;
    echo $i = 0;
    echo ",";
    echo $j = 1;
    echo ",";
    $result = 0;

    while($max <10){
        $result = $i +$j;

        $i = $j;
        $j = $result;
        $max = $result +1;
        echo $result;
        echo ",";
    }
    ?>

    <?php
        echo "<h1>Bài 3: foreach</h1>";
        $fruits = array('apple','banana','orage','grapes');
        foreach ($fruits as $fruit)
        {
            echo $fruit;
            echo "<br/>";
        }

        $employee = array('name' => 'John Smith' , 'age' => 30 , ' profestion');
        foreach ($employee as $key => $value)
        {
            echo sprintf("%s: %s</br>", $key ,$value);
            echo "<br/>";
        }
    ?>
</body>
</html>