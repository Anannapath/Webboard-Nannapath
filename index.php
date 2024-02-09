<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Webboard Nannapath</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Nannapath</h1>
    <hr>
    <form >
        หมวดหมู่ : <select valoue="category">
            <option value="all">--ทั้งหมด--</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="study">เรื่องเรียน</option>
        </select>

        <?php
        
        if(!isset($_SESSION['id'])){
            echo "<a href=login.php style= ' float: right; ' > เข้าสู่ระบบ </a>"; //ใช้ ' style '
        }else{
           
            echo "<div style= ' float: right; '> 
                    ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;&nbsp; 
                    <a href=logout.php style= ' float: right; ' > ออกจากระบบ </a>
                </div>";//&nbsp วรรค

            echo "<br> <a href=newpost.php > สร้างกระทู้ใหม่ </a> ";
            
        }
        
        ?>
    
    </form>
    <br>
    <ul>
        <?php

            for($i = 1; $i <= 10; $i++){

                echo "<li><a href=post.php?id=$i> กระทู้ที่ $i </a>";
                if(isset($_SESSION['id']) && $_SESSION['role'] == 'a'){//login YES/NO and role == a
                    echo "&nbsp;&nbsp; <a href=delete.php?id=$i > ลบ </a>";
                }
                echo "</li>";
                
            }

        ?>
        
    </ul>
    
</body>
</html>