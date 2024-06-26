<?php 
session_start();
include('includes/config.php');
include('includes/format_rupiah.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Auto Transport</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<section class="container">
    <div class="row">
        <div class="cal d-flex w-100 justify-content-center align-items-center text-center py-4" style="margin-top:2rem ; padding:2rem" >
            <h1> Pemesanan</h1>
        </div>
    </div>

<div class="row p-4" style="background-color:#D0D0D0;margin-top:2rem; margin-bottom:2rem; padding:3rem 6rem; border-radius:3rem;">
    <h3>Pemesanan</h3>
    <div class="row w-100">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Masa Sewa</label>
                    <select class="form-control" aria-label="Default select example">
                    <option selected>Pilih Masa Sewa</option>
                    <option value="1">1 Hari</option>
                     <option value="2">2 Hari</option>
                     <option value="3">3 Hari</option>
                    </select>
                
                </div>
            </form>
        </div>
        <div class="col-md-6">
             <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Paket Sewa</label>
                    <select class="form-control" aria-label="Default select example">
                    <option selected>Pilih Paket Sewa</option>
                    <option value="1">Paket Holiday</option>
                     <option value="2">Paket Reguler</option>
                    </select>   
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Mulai</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dd/mm/yy">
                    
                </div>
            </form>
        </div>
        <div class="col-md-6">
             <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal selesai</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dd/mm/yy">
                    
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Waktu Pengembalian</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="--:--">
                    
                </div>
            </form>
        </div>
        <div class="col-md-6">
             <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kendaraan</label>
                    <select class="form-control" aria-label="Default select example">
                    <option selected>Pilih Jenis Kendaraan</option>
                    <option value="1">Ayla</option>
                     <option value="2">Avanza</option>
                     <option value="3">Fortuner</option>
                     <option value="3">Jazz</option>
                    </select>
                </div>
            </form>
        </div>
    </div>



    <h3>Informasi Pemesan</h3>
    <div class="row w-100">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengka</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Lengkap Anda">
                
                </div>
            </form>
        </div>
        <div class="col-md-6">
             <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Paket Sewa</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email Anda">
                    
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">No. Telepon</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+62 | Masukan Nomor Telepon Anda">
                    
                </div>
            </form>
        </div>
        
       
        
        <div class="col-md-12 align-items-center text-center">
            <button type="submit" class="btn btn-primary">Lakukan Pemesanan</button>
        </div>
    </div>
    

</div>
</section>


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>