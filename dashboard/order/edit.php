<?php
//including the database connection file
include_once("../../config/config.php");

$khachhangs = mysqli_query($mysqli, "SELECT * FROM khachhang ORDER BY id DESC");
$loaihangs = mysqli_query($mysqli, "SELECT * FROM loaihang ORDER BY id DESC");

?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="../..favicon.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../../vendors/jqvmap/dist/jqvmap.min.css">



    <link rel="stylesheet" href="../../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>


<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="../../images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="../../images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="../index.html"> <i class="menu-icon fa fa-dashboard"></i>Tổng quan</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Quản lí</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="../customer/listCustomer.php">Khách hàng</a>
                            </li>
                            <li><i class="fa fa-id-badge"></i><a href="listOrder.php">Đơn hàng</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks pt-2"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <span class="photo media-left"><img alt="avatar"
                                            src="../../images/avatar/1.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <span class="photo media-left"><img alt="avatar"
                                            src="../../images/avatar/2.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <span class="photo media-left"><img alt="avatar"
                                            src="../../images/avatar/3.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                    <span class="photo media-left"><img alt="avatar"
                                            src="../../images/avatar/4.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../../images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span
                                    class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true"
                            aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title">Thông tin đơn hàng</h5>
                <form action="" method="post" name="form1">
                    <div class="form-group">
                        <label for="">Khách hàng</label>
                        <div class="d-flex">
                            <select class="form-control" id="khachhang" name="khachhang_id" style="width: 30rem;" selectedValue=>
                                <option value="0">Tú</option>
                            </select>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
                                Thêm khách hàng
                            </button>
                        </div>
                        <?php
                            if(isset($_POST['Submitadd'])) {
                                $name = mysqli_real_escape_string($mysqli, $_POST['name']);
                                $sdt = mysqli_real_escape_string($mysqli, $_POST['sdt']);
                                $diachi = mysqli_real_escape_string($mysqli, $_POST['diachi']);
                                    
                                // checking empty fields
                                if(empty($name) || empty($sdt) || empty($diachi)) {
                                            
                                    if(empty($name)) {
                                        echo '<div class="alert alert-danger" role="alert">Tên không được để trống</div>';
                                    }
                                    
                                    if(empty($sdt)) {
                                        echo '<div class="alert alert-danger" role="alert">Số điện thoại không được để trống</div>';
                                    }
                                    
                                    if(empty($diachi)) {
                                        echo '<div class="alert alert-danger" role="alert">Địa chỉ không được để trống</div>';
                                    }
                                } else { 
                                    // if all the fields are filled (not empty) 
                                        
                                    //insert data to database	
                                    $result3 = mysqli_query($mysqli, "INSERT INTO khachhang(name,sdt,diachi) VALUES('$name','$sdt','$diachi')");
                                    echo '<div class="alert alert-success" role="alert">Thêm thành công</div>';
                                }
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Loại hàng hóa</label>
                        <div class="d-flex">
                            <select class="form-control" id="loaihang" name="loaihang_id" style="width: 30rem;">
                                <option value="0">Tú</option>
                            </select>
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#typeModal">
                                Thêm loại hàng
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Hình thức vận chuyển</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="hinhthuc"
                            placehoder="Giao hàng tiêu chuẩn" style="width: 30rem;">
                            <!-- <option value="1">Giao hàng nhanh</option>
                            <option value="0">Giao hàng tiêu chuẩn</option> -->
                            <?php
                                //id from url
                                $id = $_GET['id'];
                                $result = mysqli_query($mysqli, "SELECT * FROM donhang WHERE id=$id");

                                while($res = mysqli_fetch_array($result))
                                {
                                    if($res['hinhthuc']==1){
                                        echo '<option value="1" selected>Giao hàng nhanh</option>';
                                        echo '<option value="0">Giao hàng tiêu chuẩn</option>';
                                    }else{
                                        echo '<option value="1" >Giao hàng nhanh</option>';
                                        echo '<option value="0" selected>Giao hàng tiêu chuẩn</option>';
                                    }
                                }
                            ?>;
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Ghi chú</label>
                        <?php
                            $id = $_GET['id'];
                            $result = mysqli_query($mysqli, "SELECT * FROM donhang WHERE id=$id");

                            while($res = mysqli_fetch_array($result))
                            {
                                echo '<input class="form-control" value="'.$res['note'].'" type="text" name="note" style="width: 30rem;">';
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Tiền thu hộ</label>
                        <?php
                        //id from url
                            $id = $_GET['id'];
                            $result = mysqli_query($mysqli, "SELECT * FROM donhang WHERE id=$id");

                            while($res = mysqli_fetch_array($result))
                            {
                                echo '<input class="form-control" value="'.$res['tien'].'" type="text" name="tien" style="width: 30rem;">';
                            }
                        ?>
                    </div>
                    <a class="btn btn-secondary" href="listOrder.php">Quay lại</a>
                    <input type="submit" class="btn btn-primary" name="submitOrder" value="Thêm">
                    
                    <?php
                    if(isset($_POST['submitOrder'])) {
                        $id=$_GET['id'];
                        $khachhang_id = mysqli_real_escape_string($mysqli, $_POST['khachhang_id']);
                        $loaihang_id = mysqli_real_escape_string($mysqli, $_POST['loaihang_id']);
                        $hinhthuc = mysqli_real_escape_string($mysqli, $_POST['hinhthuc']);
                        $note = mysqli_real_escape_string($mysqli, $_POST['note']);
                        $tien = mysqli_real_escape_string($mysqli, $_POST['tien']);
                        $result1 = mysqli_query($mysqli, "UPDATE donhang SET loaihang_id=$loaihang_id, khach_id=$khachhang_id, hinhthuc=$hinhthuc,note='$note', tien=$tien WHERE id=$id");
                        echo '<div class="alert alert-success mt-2" role="alert">Thêm thành công</div>';
                    }
                    ?>
            </div>

            </form>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thêm khách hàng mới</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="post" name="form1">
                                        <div class="form-group">
                                            <label for="">Họ và Tên</label>
                                            <input class="form-control" type="text" name="name" style="width: 20rem;">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="">Số điện thoại</label>
                                            <input class="form-control" type="text" name="sdt" style="width: 20rem;">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Địa chỉ</label>
                                            <input class="form-control" type="text" name="diachi" style="width: 20rem;">
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Quay
                                            lại</button>
                                        <input type="submit" class="btn btn-primary" name="Submitadd" value="Thêm">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="typeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thêm loại hàng mới</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="post" name="form1">
                                        <div class="form-group">
                                            <label for="">Loại hàng</label>
                                            <input class="form-control" type="text" name="tenhang"
                                                style="width: 20rem;">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Quay
                                            lại</button>
                                        <input type="submit" class="btn btn-primary" name="typeAdd" value="Thêm">
                                    </form>
                                    <?php
                            if(isset($_POST['typeAdd'])) {	
                                $tenhang = mysqli_real_escape_string($mysqli, $_POST['tenhang']);

                                // checking empty fields
                                if(empty($tenhang)) {
                                            
                                    if(empty($tenhang)) {
                                        echo '<div class="alert alert-danger" role="alert">Tên hàng không được để trống</div>';
                                    }
                                    
                                } else { 
                                    // if all the fields are filled (not empty) 
                                        
                                    //insert data to database	
                                    $result4 = mysqli_query($mysqli, "INSERT INTO loaihang(tenhang) VALUES('$tenhang')");
                                    // echo '<div class="alert alert-success" role="alert">Thêm thành công</div>';
                                }
                            }
                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- end add.html -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="../../assets/js/main.js"></script>
    <script src="/tiep/jquery.min.js"></script>


    <script src="../../vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="../../assets/js/dashboard.js"></script>
    <script src="../../assets/js/widgets.js"></script>
    <script>
        var idKhach = <?php
        $id = $_GET['id'];
        $result = mysqli_query($mysqli, "SELECT * FROM donhang WHERE id=$id");

        while($res = mysqli_fetch_array($result))
        {
            echo(json_encode($res['khach_id']));
        }
         ?>;

        $(document).ready(function () {
            $.ajax({
                url: "loadkhach.php",
                method: "POST",
                data: {id:idKhach},
                success: function (data) {
                    $('#khachhang').html(data);
                }
            });
        });

    </script>

    <script>
        var idLoai = <?php
        $id = $_GET['id'];
        $result = mysqli_query($mysqli, "SELECT * FROM donhang WHERE id=$id");

        while($res = mysqli_fetch_array($result))
        {
            echo(json_encode($res['loaihang_id']));
        }
         ?>;
        $(document).ready(function () {
            $.ajax({
                url: "loadloai.php",
                method: "POST",
                data: {id:idLoai},
                success: function (data) {
                    $('#loaihang').html(data);
                }
            });
        });

    </script>


    <script>
        (function ($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);

    </script>

</body>

</html>
