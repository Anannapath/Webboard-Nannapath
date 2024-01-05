<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php  
        $ages = array('Bob' => 20, 'Peter' => 35);

        echo "1 - " . $ages['Bob'] . "<BR>"; //20
        echo "2 - " . $ages['Peter'] . "<BR>"; //35

        $ages['Lek'] = 18;
        $ages['Ying'] = 42;

        echo "3 - " . ($ages['Lek'] + $ages['Peter']) . "<BR>"; //18 + 35 = 53

        $ages['Peter'] = $ages['Bob'] - $ages['Lek']; //20 - 18 = 2

        echo "4 - " . $ages['Peter'] . "<BR>"; //2
    ?>

</body>
</html>