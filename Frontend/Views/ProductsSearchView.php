<div style="margin-left:-30px;" class="main">
    <div class="main__left">
        <div class="categories">
            <div class="categories-title">DANH MỤC SẢN PHẨM</div>
            <?php 
                include "Models/MenuCategoryModel.php";
                $obj = new MenuCategoryModel();
                $listCategory = $obj->modelListCategories();
            ?>
            <?php foreach($listCategory as $rows):?>
            <ul>
                <li><a href="index.php?controller=products&action=categories&id=<?php echo $rows->id;?>"><?php echo $rows->name;?></a></li>
            </ul>
            <?php endforeach;?>
        </div>
        <div class="price">
            <div class="price-title">KHOẢNG GIÁ</div>
            <div class="minn">
                Giá thấp nhất
                <input type="number" name="" id="fromPrice" step="50">
                <div class="slidecontainer">
                    <input type="range" min="0" step="50" max="2000" value="0" class="slider"
                        id="myRange1">
                </div>
                <script>
                    var slider1 = document.getElementById("myRange1");
                    var output1 = document.getElementById("fromPrice");
                    output1.value = slider1.value;
                    slider1.oninput = function () {
                        output1.value = this.value;
                    }
                </script>
            </div>
            <div class="maxx">
                Giá cao nhất
                <input type="number" name="" id="toPrice" step="50">
                <div class="slidecontainer">
                    <input type="range" min="0" step="50" max="2000" value="50" class="slider"
                        id="myRange2">
                </div>
                <script>
                    var slider = document.getElementById("myRange2");
                    var output = document.getElementById("toPrice");
                    output.value = slider.value;
                    slider.oninput = function () {
                        output.value = this.value;
                    }
                </script>
            </div>
            <button id="btn-find-price" onclick="location.href = 'index.php?controller=products&action=searchPrice&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" type="button" class="btn btn-success">Tìm Kiếm</button>
        </div>
        <!-- tin tức -->
        <div class="blogg">
            <div class="blog-title">BLOG</div>
            <?php
                include "Models/BlogsModel.php";
                $obj = new BlogsModel();
                $listBlog = $obj->modelRead(3);        
            ?>
            <?php foreach($listBlog as $rows):?>
            <ul>
                <li><a href="index.php?controller=blogs&action=detail&id=<?php echo $rows->id?>">
                        <img src="../Assets/Upload/Blogs/<?php echo $rows->photo;?>" alt="">
                        <?php echo $rows->title;?>
                    </a></li>
            </ul>
            <?php endforeach;?>
        </div>
        <!-- /tin tức -->
    </div>
    <div class="main__middle">
        <div class="container">
            <div class="row item__prod">
                <div class="col-xl-12" id="box-search">
                    <div class="search-box">
                        <input class="search-txt" autocomplete="off" onkeyup="smartSearch();" onblur="stopSmartSearch();"type="text" name="" id="key" placeholder="Type to search..">
                        <button class="search-btn" type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
                    </div>
                    <div id="box-smart-search">
                        <ul></ul>
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
              //alert("SmartSearch.php?key="+key);
              //---
              $.ajax({
              url: "SmartSearch.php?key="+key,
              success: function( result ) {
                //clear cac gia tri trong the ul truoc khi append                
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
                            <h4><?php echo $rows->name;?></h4>
                            <?php if(isset($rows->discount) && $rows->discount >0):?>
                            <p><strike>$<?php echo $rows->price;?></strike> <span style="font-weight:bold;font-size:20px;">$<?php echo $rows->price - $rows->price*$rows->discount/100;?></span></p>
                            <?php else:?>
                                <p style="font-weight:bold;font-size:20px;">$<?php echo $rows->price;?></p>
                            <?php endif;?>
                            <p class="price-box" style="display:flex;background-color:rgba(255,255,255,0);"> 
                        <a href="index.php?controller=products&action=rating&star=1&id=<?php echo $rows->id; ?>"><img src="../Assets/Frontend/img/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&star=2&id=<?php echo $rows->id; ?>"><img src="../Assets/Frontend/img/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&star=3&id=<?php echo $rows->id; ?>"><img src="../Assets/Frontend/img/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&star=4&id=<?php echo $rows->id; ?>"><img src="../Assets/Frontend/img/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&star=5&id=<?php echo $rows->id; ?>"><img src="../Assets/Frontend/img/star.jpg"></a> </p>
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
                    <li class="page-item"><a class="page-link" href="index.php?controller=products&action=searchPrice&fromPrice=<?php echo $fromPrice; ?>&toPrice=<?php echo $toPrice; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                  </ul>
    </div>

</div>