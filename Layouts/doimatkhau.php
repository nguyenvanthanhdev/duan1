<?php
 session_start();
 
include("../config.php");
include("../model/taikhoan/taikhoan.php");

//    if(isset($_POST["maxacnhan"]) ){
//     $email = $_POST["email"];
    
//     $checkuser=check_gamil($email);
//    if(is_array($checkuser)){
//        $_SESSION['email']=$checkuser;
//         $email = $_POST["email"];
//          // Tạo mã xác nhận ngẫu nhiên
//          $verificationCode = mt_rand(100000, 999999);
//          $verificationTime = time();
//          $subject = "Mã Xác Nhận Quên Mật Khẩu";
//          $message = "Mã xác nhận của bạn là: $verificationCode";
//          $headers = "From: thanhnv2923@gmail.com"; // Thay thế bằng địa chỉ email của bạn
     
//          mail($email, $subject, $message, $headers);
     
//          // Chuyển hướng đến trang nhập mã xác nhận
//          // header("Location: enter_verification_code.php");
//          // exit;
        

//     }else{
//         $tb ="Email không tồn tại!";
//     }
// }
  if(isset($_GET['email'])){
    $email=$_GET['email'];
    $sql="select * from user where email='$email'";
    $load=pdo_query_one($sql);

  }
  if(isset($load)){
    extract($load);
    if(isset($_POST['doimatkhau'])){
        $pass = $_POST['pass'];
        $sql="update user set pass='$pass' where email='$email' ";
        pdo_execute($sql);
        header("location: ./login.php");
           
  }
}



  


        
            
                
          
        
          
           
           

            

        
       
        
        
        
   
  
//    if(isset($_POST['login'])){
//        $email = $_POST['email'];
//        $pass= $_POST['pass'];
//        $checkuser=check_user_admin($email,$pass);
//    if(is_array($checkuser)){
//        $_SESSION['email']=$checkuser;
//        header('location: ../index.php');
      
//    }
//    else{
//        $thongbao="Email hoặc pass sai, Vui lòng nhập lại!";
//    }
//    }



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/bootstrap-5.3.2/dist/css/bootstrap.css">
    <script src="../public/bootstrap-5.3.2/dist/js/bootstrap.js"></script>
    <title>KHÁCH SẠN THÀNH PHÁT</title>
    <style>
    .container2 {
        width: 98%;
    }

    .col-7 img {
        width: 100%;
        height: 651px;
    }

    .col-lg {
        text-align: center;
        width: 50%;
        padding: 10px 0;
        margin: 0;
        height: 100%;
        border-bottom: 4px solid rgb(255, 174, 0);
    }

    .col-lg li {
        list-style: none;
    }

    .col-lg li a {
        text-decoration: none;
        font-weight: 500;
        font-size: 20px;
        color: rgb(28, 26, 26);

    }

    hr {
        margin: 0;
        padding: 0;
    }

    .svg {
        width: 10%;
        height: 100%;
        padding: 10px 10px;

    }

    .svg svg {
        font-size: 25px;
    }

    .input-email {
        display: flex;
        width: 100%;
        height: 50px;
        border: 1px solid darkgray;
        border-radius: 5px 5px 5px 5px;

    }

    .input-email input {
        width: 90%;
        border: none;
        appearance: none;

    }

    .input-email input[type='submit'] {
        width: 100%;
        border: none;
        appearance: none;
        color: rgb(26, 25, 25);
        font-weight: 600;
        font-size: 20px;
        background-color: #F2A900;
    }

    .col-3 a {
        text-decoration: none;
        color: rgb(39, 39, 39);
    }
    </style>
</head>

<body>
    <div class="container2 login-form" style="display: block;">
        <div class="row">
            <div class="col-7">
                <img src="../images/logoadmin.png" alt="">
            </div>
            <div class="col-5">
                <div class="row my-5">
                    <div class="col">
                        <div class="col-sm text-center">
                            <a href="../index.php"><img src="../images/logoks.PNG" alt=""></a>
                            <h6>THÀNH PHÁT</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col-sm text-center">
                            <a href="../index.php"><img src="../images/logoks2.PNG" alt=""></a>
                            <h6>THÀNH PHÁT</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col " style="display: flex;">
                        <ul class="col-lg">
                            <li><a href="">ĐẶT MẬT KHẨU MỚI</a></li>

                        </ul>



                        <hr>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="row mt-4">
                        <div class="col">
                            <div class="input-email">
                                <div class="svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                                    </svg>
                                </div>

                                <input type="pass" name="pass" id="" placeholder="pass...">

                            </div>
                        </div>


                    </div>



                    <div class="row mt-4">
                        <div class="col">

                            <div class="input-email">

                                <input type="submit" name="doimatkhau" id="" value="LƯA MẬT KHẨU">

                            </div>
                            <span>
                                <?php if(isset($tb)) echo $tb?>
                            </span>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>



</body>


</html>