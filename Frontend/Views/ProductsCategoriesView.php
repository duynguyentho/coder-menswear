<div style="margin-left:-30px;" class="main">
    <?php
        include "LeftView.php";
    ?>
<script src="../Assets/Frontend/js/jquery-3.5.1.js"></script>
    <div class="main__middle">
        <div class="container">
            <div class="row item__prod">
                <div class="col-xl-12" id="box-search">
                    <div class="search-box">
                        <input class="search-txt" autocomplete="off" onmouseover="display();" onkeyup="smartSearch();" onblur="stopSmartSearch();"type="text" name="" id="key" placeholder="Type to search..">
                        <button class="search-btn" type="submit"> <i class="fa fa-search" style="margin-left: 2px;;;" onclick="return search();"></i> </button>
                    </div>
                    <script>
                        function display(){
                            document.getElementById("key").setAttribute("style","width:300px;")
                        }
                    </script>
                    <div id="box-smart-search" onmouseout="hide();">
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <style type="text/css">
          #box-search{position: relative;}
          #box-smart-search{position: absolute; z-index: 10; width: 400px; background: white; display: none; height: 500px; overflow: scroll;right:0;top:40px;}
          #box-smart-search ul{
            padding:0px; margin:0px; list-style: none;            
          }
          #box-smart-search img{width: 70px;}
          #box-smart-search ul li{
            border-bottom: 1px solid #dddddd;
          }
        </style>
      <script type="text/javascript">
          function smartSearch() {
              document.getElementById("box-smart-search").setAttribute("style","display:block;");
              //---
              //lay gia tri cua id=key
              var key = document.getElementById("key").value;
              $("#box-smart-search ul").empty();
              $.ajax({
              url: "SmartSearch.php?key="+key,
              success: function( result ) {          
                $("#box-smart-search ul").append(result);
              }
            });
              //---
          }
          function stopSmartSearch(){
              //document.getElementById("box-smart-search").setAttribute("style","display:none;");
          }
      </script> 
                <br>
                <div class="col-xl-12 linex"></div>
                <div class="text-cont">DANH MỤC SẢN PHẨM</div>
                <select style="width:150px;float:right;position:absolute;right:70px;top:100px;" class="form-control"
                    onchange="location.href = 'index.php?controller=products&action=showall&sort='+this.value;">
                    <option value="0">Sắp xếp</option>
                    <option value="priceAsc">Giá tăng dần</option>
                    <option value="priceDesc">Giá giảm dần</option>
                    <option value="nameAsc">Sắp xếp A-Z</option>
                    <option value="nameDesc">Sắp xếp Z-A</option>
                </select>
                <br>
                <?php foreach($listRecord as $rows):?>
                <div style="margin-top:50px;" class="col-xl-3 col-md-3">
                    <div class="thumbnail"> <img style="width:281px;height:281px;" src="../Assets/Upload/Products/<?php echo $rows->photo;?>" alt="Sản phẩm 1">
                    <?php if(isset($rows->discount) && $rows->discount >0):?>
                        <div class="best-seller" style="background-color: red;margin-left:-25px;">-<?php echo $rows->discount?>%</div>
                    <?php endif;?>
                        <div class="caption">
                            <a style="font-size: 18px;font-family:Arial, Helvetica, sans-serif;" href="index.php?controller=products&action=detail&id=<?php echo $rows->id?>"><?php echo $rows->name;?></a>
                            <?php if(isset($rows->discount) && $rows->discount >0):?>
                            <p><strike>$<?php echo $rows->price;?></strike> <span style="font-weight:bold;font-size:20px;">$<?php echo $rows->price - $rows->price*$rows->discount/100;?></span></p>
                            <?php else:?>
                                <p style="font-weight:bold;font-size:20px;">$<?php echo $rows->price;?></p>
                            <?php endif;?>
                            <p class="price-box" style="display:flex;background-color:rgba(255,255,255,0);"> 
                        <a href="index.php?controller=products&action=rating&star=1&id=<?php echo $rows->id; ?>"><img style="width:20px;" src="../Assets/Frontend/img/star.svg"></a> 
                        <a href="index.php?controller=products&action=rating&star=2&id=<?php echo $rows->id; ?>"><img style="width:20px;" src="../Assets/Frontend/img/star.svg"></a> 
                        <a href="index.php?controller=products&action=rating&star=3&id=<?php echo $rows->id; ?>"><img style="width:20px;" src="../Assets/Frontend/img/star.svg"></a> 
                        <a href="index.php?controller=products&action=rating&star=4&id=<?php echo $rows->id; ?>"><img style="width:20px;" src="../Assets/Frontend/img/star.svg"></a> 
                        <a href="index.php?controller=products&action=rating&star=5&id=<?php echo $rows->id; ?>"><img style="width:20px;" src="../Assets/Frontend/img/star.svg"></a> </p>
                        </div>
                        <ul class="addtoCart">
                            <li>
                                <a href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>"><i class="fa fa-info" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <ul class="pagination">
                    <li class="page-item"><span>Trang</span></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li class="page-item"><a class="page-link" href="index.php?controller=products&action=showall&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                  </ul>
    </div>

</div>