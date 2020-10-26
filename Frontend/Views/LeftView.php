<div style="width:280px;" class="main__left">
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
                        <img style="width:60px;height:50px;" src="../Assets/Upload/Blogs/<?php echo $rows->photo;?>" alt="">
                        <?php echo $rows->title;?>
                    </a></li>
            </ul>
            <?php endforeach;?>
        </div>
        <!-- /tin tức -->
    </div>