<?php

session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Post</title>
</head>
<body>
    <div class="container-lg">
        <h1 style="text-align: center;" class="mt-3">Webboard Nannapath</h1> 

        <?php
            include "nav.php"
        ?> 
        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card border-success mt-3">
                    <div class="card-header bg-success text-white"> แสดงความคิดเห็น</div>
                    <div class="card-body">
                        <form action="post_save.php" method="post">
                            <input type="hidden" name="post_id" value="<?= $_GET['id']; ?>">
                            <div class="row mb-3 justify-content-center">
                                <div class="col-lg-10">
                                    <textarea name="comment" rows="8" class="form-control" require></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center" >
                                    <button type="submit" class="btn btn-success btn-sm text-while">  <i class="bi bi-box-arrow-up-right"></i> ส่งข้อความ </button>
                                    <button type="reset" class="btn btn-danger btn-sm ms-2">  <i class="bi bi-x-square"></i> ยกเลิก </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1 "></div>
        </div>
    </div>
</body>
</html>