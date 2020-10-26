<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="codermenswear.ico" type="image/x-icon">
    <script src="./js/jquery-3.5.1.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/Frontend/css//bootstrap.min.css">
    <script src="http://codeorigin.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/Frontend/css/reset.css">
    <link rel="stylesheet" href="../Assets/Frontend/css/style.css">
    <title>Danh mục sản phẩm</title>
</head>
<script>
    $(document).ready(function(){
        $(".prd-info h6").click(function(){
            $(".prd-info p").slideToggle(1000); 
        })
        $(".prd_shp_rtn h6").click(function(){
            $(".prd_shp_rtn p").slideToggle(1000); 
        })
    })
</script>
<body>
    <!--  --> 
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f915cae17015e2aea6d60ee/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <!--  -->
    <!-- wrapper -->
    <div class="wrapper">
    <?php 
   include "HeaderView.php";
    ?>
        <div class="main" style="margin-top:90px;">
    <?php 
            //load dong MVC
            if(file_exists($fileController)){
                include $fileController;
                if(class_exists($classController)){
                    $obj= new $classController();
                    $obj->$action();
                }
            }
         ?>
           </div>
        </div>
<?php
    include "FooterView.php";
?>
                    <div class="contact-me">
                        <a href="https://www.facebook.com/t5ca.duy/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/duynt2201/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
    </div>

    <!-- /wrapper -->
</body>
<div id = "fb-root" > </ div> <script async Hoãn crossorigin = "nặc danh" src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId= 3308884869229660 & autoLogAppEvents = 1 " nonce = " qRsWwUyp " > </script>
</html>