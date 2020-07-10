<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">
<?php
      if(isset($_POST["login"])){
        if(empty($_POST["userid"]) || empty($_POST["password"]))
        {
          $message = "<div class='alert alert-danger'>Không được để trống</div>";
        }
        else
        {
          $userId = $_POST["userid"];
          $connect = new PDO("mysql:host=localhost;dbname=bai3tiep", "root", "");
          $query = "SELECT * FROM user WHERE username = '$userId'";
          $statement = $connect->prepare($query);
          $statement->execute();
          if($statement->rowCount()>0){
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            if($result[0]['password']==$_POST["password"]){   
                header("Location: dashboard/index.html");
              
            }
            else{
              $message = "<div class='alert alert-danger'>Sai tài khoản hoặc mật khẩu</div>";
            }
          }	
          else{
            $message = "<div class='alert alert-danger'>Sai tài khoản hoặc mật khẩu</div>";
          }		
        }
        echo $message; 
      }
    
    ?>
          <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="post">
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input type="text" name="userid" id="userid" class="form-control" placeholder="">
                        </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" name="password" id="password"  class="form-control" placeholder="">
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Lưu mật khẩu
                            

                                </div>
                                
                                    <input type="submit" name="login" value="Đăng nhập" class="btn btn-success btn-flat m-b-30 m-t-30">
                                    
                                    </input>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Đăng nhập với facebook</button>
                                        <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Đăng nhập với twitter</button>
                                    </div>
                                </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>