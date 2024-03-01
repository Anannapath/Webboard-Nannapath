<?php

session_start();
if(isset($_SESSION['id'])){
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
    <title>Register</title>
</head>
<body>
    <div class="container-lg">
        <h1 style="text-align: center;" class="mt-3">Webboard Nannapath</h1> 

        <?php
            include "nav.php"
        ?>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1 "></div>
            <div class="col-lg-6 col-md-8 col-sm-10 ">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-while">เข้าสู่ระบบ</div>
                    <div class="card-body">
                        <form action="register_save.php" method="post">
                            <div class="row">
                                <label class="col-lg-3 col-form-label" for="user">ชื่อบัญชี :</label>
                                <div class="col-lg-9">
                                    <input type="text" name="login" id="user" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label" for="pwd">รหัสผ่าน :</label>
                                <div class="col-lg-9">
                                    <input type="password" name="pwd" id="pwd" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label" for="fname">ชื่อ-นามสกุล :</label>
                                <div class="col-lg-9">
                                    <input type="text" name="name" id="fname" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">เพศ :</label>
                                <div class="col-lg-9">
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="male" class="form-check-input" required>
                                        <label class="form-check-label">ชาย</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="female" class="form-check-input" required>
                                        <label class="form-check-label">หญิง</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="other" class="form-check-input" required>
                                        <label class="form-check-label">อื่นๆ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label" for="email">อีเมล :</label>
                                <div class="col-lg-9">
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-secondary btn-sm me-2"> <i class="bi bi-save"></i> สมัครสมาชิก</button>
                                    <button type="reset" class="btn btn-danger btn-sm"> <i class="bi bi-x-square"></i> ยกเลิก</button>
                                </div>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1 "></div>
        </div>      
    </div>
</body>
</html>