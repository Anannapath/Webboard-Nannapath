<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
<h1 style="text-align: center;">Webboard Nannapath</h1>
    <hr> 
    <div style="text-align: center;">
        ต้องการดูกระทู้หมายเลข <?php echo " $_GET[id]<br>";

        $id = $_GET['id'];
        if(($id%2) == 0){
            echo "เป็นกระทู้หมายเลขคู่";
        }else{
            echo "เป็นกระทู้หมายเลขคี่";
        }
        ?>
        
    </div>
    <br>
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr>
            <td style=" background-color: #6CD2FE;">แสดงความคิดเห็น</td>
        </tr> 
        <tr>
            <td> <center><textarea  name="" id="" cols="80" rows="10"></textarea></center> </td>
        <tr>
        <td style="text-align: center;"> 
            <input type="submit" value="ส่งข้อความ"> </td>
        </td>
    </table>
    <br>
    <center><a href="index.php">กลับไปหน้าหลัก</center>
</body>
</html>