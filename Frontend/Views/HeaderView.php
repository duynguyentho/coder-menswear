        <!-- header -->
        <header>
            <div class="container-fluid">
                <div class="row header">
                    <!-- left -->
                    <div class="col-xl-4 header-left">
                        <div id="logo">
                            <a href="index.php"><img class="img-fluid" src="../Assets/Frontend/img/codermenswear.png" alt=""></a>
                        </div>
                    </div>
                    <!-- /left -->
                    <!-- right -->
                    <div class="col-xl-8 header-right">
                        <nav class="menu" style="z-index: 999;">
                            <ul>
                                <li><a href="index.php">Trang chủ</a></li>
                                <li><a href="index.php?controller=products&action=showall">Sản phẩm</a></li>
                                <li><a href="index.php?controller=contact&action=read">Về chúng tôi</a></li>
                                <li><a href="index.php?controller=blogs&action=read">Blog</a></li>
                                <li><a href="#">Khuyến mãi</a></li>
                            </ul>
                        </nav>
                        <div class="login-and-cart">
                            <ul>
                                 <?php if(isset($_SESSION["customerName"])== false):?> 
                                <li ><a href="index.php?controller=account&action=login">Đăng nhập</a></li>
                                <li style="position:absolute;"><a  href="index.php?controller=cart&action=read" style="font-size:25px;"><i class="fa fa-cart-plus" aria-hidden="true">
                                </i></a></li>
                                <?php else:?>
                                    <li style="position: relative;" id="displayy"><a href="index.php">Hi <?php echo $_SESSION["customerName"];?></a></li>
                                    <li style="position:absolute;"><a href="index.php?controller=cart&action=read" style="font-size:25px;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
                                <?php endif;?>
                                <div class="change-inf" id="onff">
                                    <a href="index.php?controller=account&action=change&id=<?php echo $_SESSION["customerId"];?>">Thông tin tài khoản</a>
                                    <a href="index.php?controller=account&action=read&id=<?php echo $_SESSION["customerId"]; ?>">Xem đơn hàng</a>
                                    <a href="index.php?controller=account&action=logout">Đăng xuất</a>
                                </div>
                            </ul>
                            <style>
                                .change-inf{
                                    display: none;
                                    position: absolute;
                                    background-color: #f1f1f1;
                                    top: 70px;
                                    bottom:50;
                                    right: 150px;
                                    width: 150px;
                                    z-index: 999;
                                }
                                .change-inf a{
                                    display: block;
                                    line-height: 30px;
                                    text-align:center;
                                }
                            </style>
                            <script>
                                $(document).ready(function(){
                                    $("#displayy").mouseenter(function(){
                                        $("#onff").fadeIn(500);
                                    })
                                    $("#onff").mouseleave(
                                        function(){
                                            $(this).fadeOut();
                                        }
                                    )
                                })
                            </script>
                        </div>
                    </div>
                    <!-- /right -->
                </div>
            </div>
        </header>
        <!-- /header -->
        <div class="addTc" style="display:none;">
            Đã thêm vào giỏ hàng !
        </div>
        <script>
            function addTC(){
                document.getElementsByClassName("addTC").setAttribute("style","display:block;")
            }
        </script>
