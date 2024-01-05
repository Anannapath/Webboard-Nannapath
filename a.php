<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        $a = 4;
        $b = 10;
        $c = ($b - 5) * $a; //20
        echo "Result 1 = " . $c . "<BR>"; //BR=บรรนทัดใหม่
        echo 'Result 2 = ' . $c . '<BR>';
        echo "Result 3 = $c <BR>"; //มองเป็นตัวแปร " "
        echo 'Result 4 = $c <BR>'; //มอง $c เป็นข้อความทั้งหมด ' ' ไม่มองเป็นตัวแปร
        echo "Result 5 = " . ($c + $b) . "<BR>";  // 20+10 = 30
    ?>

</body>
</html>