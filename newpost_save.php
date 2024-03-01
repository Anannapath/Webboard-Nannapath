<?php
session_start();

if(isset($_POST['topic'])){

    $top=$_POST['topic'];
    $comm=$_POST['comment'];
    $cate=$_POST['category'];
    $user=$_SESSION['user_id'];

    $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");

    $sql="INSERT INTO post (title, content, post_date, cat_id, user_id) VALUES ('$top', '$comm', NOW(), '$cate', '$user');";
    $conn->exec($sql);
    $conn=null;
    header("location:index.php"); 
    die();
}else{
    header("location:index.php"); 
    die();
}
?>