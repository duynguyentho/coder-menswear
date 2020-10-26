
<div class="main__left" style="padding-bottom:50px;width:280px;margin-left:-10px;">
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
                <input type="number" name="" id="demo1" step="100000">
                <div class="slidecontainer">
                    <input type="range" min="0" step="50" max="10000" value="0" class="slider"
                        id="myRange1">
                </div>
                <script>
                    var slider1 = document.getElementById("myRange1");
                    var output1 = document.getElementById("demo1");
                    output1.value = slider1.value;
                    slider1.oninput = function () {
                        output1.value = this.value;
                    }
                </script>
            </div>
            <div class="maxx">
                Giá cao nhất
                <input type="number" name="" id="demo2" step="100000">
                <div class="slidecontainer">
                    <input type="range" min="0" step="50" max="10000" value="0" class="slider"
                        id="myRange2">
                </div>
                <script>
                    var slider = document.getElementById("myRange2");
                    var output = document.getElementById("demo2");
                    output.value = slider.value;
                    slider.oninput = function () {
                        output.value = this.value;
                    }
                </script>
            </div>
            <button id="btn-find-price" type="button" class="btn btn-success">Tìm Kiếm</button>
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
<div style="position: relative;" style="width:500px;" class="product__item">
                <div class="col_1">
                    <div class="img_prod">
                        <img id="main_img" style="width: 500px;" src="../Assets/Upload/Products/<?php echo $record->photo;?>" alt="">
                    </div>
                    <div class="sub_img">
                    </div>
                    <div class="rating-star">
                    <div style="border:1px solid #dddddd; margin-top: 15px;">
                    <?php
                        $starRating = new ProductsModel();
                    ?>
        <h4 style="padding-left: 10px;">Rating</h4>
        <table style="width: 100%;">
        <tbody><tr>
        <td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/img/star.jpg"></td>
        <td><span class="label label-primary"><?php echo $starRating->star1($record->id);?> vote</span></td>
        </tr>
        <tr>
        <td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/img/star.jpg"> <img src="../Assets/Frontend/img/star.jpg"></td>
        <td><span class="label label-warning"><?php echo $starRating->star2($record->id);?> vote</span></td>
        </tr>
        <tr>
        <td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/img/star.jpg"> <img src="../Assets/Frontend/img/star.jpg"> <img src="../Assets/Frontend/img/star.jpg"></td>
        <td><span class="label label-danger"><?php echo $starRating->star3($record->id);?> vote</span></td>
        </tr>
        <tr>
        <td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/img/star.jpg"> <img src="../Assets/Frontend/img/star.jpg"> <img src="../Assets/Frontend/img/star.jpg"> <img src="../Assets/Frontend/img/star.jpg"></td>
        <td><span class="label label-info"><?php echo $starRating->star4($record->id);?> vote</span></td>
        </tr>
        <tr>
        <td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/img/star.jpg"> <img src="../Assets/Frontend/img/star.jpg"> <img src="../Assets/Frontend/img/star.jpg"> <img src="../Assets/Frontend/img/star.jpg"> <img src="../Assets/Frontend/img/star.jpg"></td>
        <td><span class="label label-success"><?php echo $starRating->star5($record->id);?> vote</span></td>
        </tr>
        </tbody></table>
        <br>
        </div>
                    </div>
                    <div class="more-detail">
                        <?php echo $record->content;?>
                    </div>
                    <div class="abcd" style="width:1400px;margin-left:50px;margin-top:100px;">
                    <div class = "fb-comments" data-href = "http: // localhost / PHP48 / Main / Frontend /" data-numposts = "4" data-width = "700" > </div> 
            </div>
                </div>
                <div class="col_2">
                    <table style="width:355px">
                        <tr>
                            <td><h3 style="text-transform: uppercase;"><?php echo $record->name;?></h3></td>
                        </tr>

                        <tr>
                            <td>SKU:002</td>
                        </tr>
                        <tr>
                            <td id="price"><span id="price"><strike>$<?php echo $record->price;?></strike></span></td>
                        </tr>
                        <tr>
                            <td><span id="price" style="font-weight: bold;font-size:25px;">$<?php echo $record->price - $record->price*$record->discount/100;?></span></td>
                        </tr>
                        <tr>
                            <td><h5>Số lượng</h5></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" name="quantity" id="quantity" pattern="[0-9]*" value="1" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a style="display:block;width:354px;padding-left:150px;padding-top:12px;" onclick="addToCart();" id="atc" href="#">Add to Cart</a>
                            </td>
                        </tr>
                        <script>
                            function addToCart(){
                                var quantity = document.getElementById("quantity").value;
                                location.href="index.php?controller=cart&action=add&id=<?php echo $record->id; ?>&quantity="+quantity;
                                
                            }
                        </script>
                        <tr>
                            <td>
                                <input id="bn" onclick="window.location.href='index.php?controller=cart&action=add&id=<?php echo $record->id;?>'" type="button" value="Buy Now">
                            </td>
                        </tr>
                    </table>
                    <div class="prd-info">
                        <h6>Product info</h6>
                        <p><?php echo $record->description;?></p>
                    </div>
                    <div class="prd_shp_rtn">
                        <h6>Ship and Returns</h6>
                        <p>I'm a product detail. I'm a great place to add more information about your product such as sizing, material, care and cleaning instructions. This is also a great space to write what makes this product special and how your customers can benefit from this item. Buyers like to know what they’re getting before they purchase, so give them as much information as possible so they can buy with confidence and certainty.</p>
                    </div>
                </div>
                
            </div>
            <div style="margin-top: 500px;">
            </div>
            <style>

                .fb-comments{
                    width: 1000px;
                }
            </style>  