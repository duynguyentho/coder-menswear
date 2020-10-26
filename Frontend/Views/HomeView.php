        <!-- sản phẩm nổi bật -->
        <div class="container-fluid">
            <div class="row featured-product">
                <div class="col-xl-12 main-title">
                    <span>SẢN PHẨM NỔI BẬT</span>
                </div>
                <?php
                    include "Models/HomeModel.php";
                    $obj = new HomeModel();

                    $hotProducts = $obj->modelHotProduct();
                ?>
                <?php foreach($hotProducts as $rows):?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 product">
                    <div style="position:relative;">
                      <img class="img-fluid" style="width:281px;" src="../Assets/Upload/products/<?php echo $rows->photo;?>" alt="<?php echo $rows->photo?>">
                      <div class="best-seller">Best Seller</div>
                    </div>
                    <div class="property">
                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>"><?php echo $rows->name;?></a>
                    </div>
                    <ul class="addtoCart">
                        <li>
                            <a href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>"
                                ><i  class="fa fa-shopping-cart" aria-hidden="true"></i
                            ></a>
                        </li>  
                        <li>
                            <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>"
                                ><i class="fa fa-info" aria-hidden="true"></i
                            ></a>
                        </li>
                    </ul>
                    
                </div>
                <?php endforeach;?>
        </div>
        <!-- /sản phẩm nổi bật -->
            <div class="productive">
                <div class="tittle-product">
                    SẢN PHẨM MỚI
                </div>
                <div class="container-fluid">
                    <div class="row">
                      <div class="well">
                        <div id="myCarousel" class="carousel slide">
                          <div class="carousel-inner">
                            <div class="item active">
                              <div class="row">
                                  <?php
                                        $listProducts=$obj->modelProducts();
                                ?>
                                <?php foreach($listProducts as $rowsSub):?>
                                <div class="col-md-3">
                                  <div class="thumbnail"> <img style="width:281px;height:281px;" src="../Assets/Upload/Products/<?php echo $rowsSub->photo;?>" alt="Sản phẩm 1">
                                    <div class="caption">
                                            <h4><?php echo $rowsSub->name?></h4>
                                            <p style="font-size:17px;">$<?php echo $rowsSub->price?></p>
                                    </div>
                                    <ul class="addtoCart">
                                        <li>
                                            <a href="index.php?controller=cart&action=add&id=<?php echo $rowsSub->id;?>"
                                                ><i class="fa fa-shopping-cart" aria-hidden="true"></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a href="index.php?controller=products&action=detail&id=<?php echo $rowsSub->id;?>"
                                                ><i class="fa fa-info" aria-hidden="true"></i
                                            ></a>
                                        </li>
                                    </ul>
                                  </div>
                                </div>
                                <?php endforeach;?>
                              </div>
                              
                            </div>
                                
                            <div class="item">
                              <div class="row">
                              <?php
                                        $listProducts=$obj->modelProducts();
                                ?>
                                <?php foreach($listProducts as $rowsSub):?>
                                <div class="col-md-3">
                                <div class="thumbnail"> <img style="width:281px;height:281px;" src="../Assets/Upload/Products/<?php echo $rowsSub->photo;?>" alt="Sản phẩm 1">
                                    <div class="caption">
                                            <h4><?php echo $rowsSub->name;?></h4>
                                            <p>$1<?php echo $rowsSub->price;?></p>
                                    </div>
                                    <ul class="addtoCart">
                                      <li>
                                          <a href="index.php?controller=cart&action=read&id=<?php echo $rows->id;?>"
                                              ><i class="fa fa-shopping-cart" aria-hidden="true"></i
                                          ></a>
                                      </li>
                                      <li>
                                          <a href="index.php?controller=products&action=detail&id=<?php echo $rowsSub->id;?>"
                                              ><i class="fa fa-info" aria-hidden="true"></i
                                          ></a>
                                      </li>
                                  </ul>
                                  </div>
                                </div>
                                <?php endforeach;?>
                              </div>
                            </div>
                            <div class="item">
                              <div class="row">
                              <?php
                                        $listProducts=$obj->modelProducts();
                                ?>
                                <?php foreach($listProducts as $rowsSub):?>
                                <div class="col-md-3">
                                <div class="thumbnail"> <img style="width:281px;height:281px;" src="../Assets/Upload/Products/<?php echo $rowsSub->photo;?>" alt="Sản phẩm 1">
                                    <div class="caption">
                                            <h4><?php echo $rowsSub->name;?></h4>
                                            <p>$1<?php echo $rowsSub->price;?></p>
                                    </div>
                                    <ul class="addtoCart">
                                      <li>
                                          <a href="index.php?controller=cart&action=read&id=<?php echo $rows->id;?>"
                                              ><i class="fa fa-shopping-cart" aria-hidden="true"></i
                                          ></a>
                                      </li>
                                      <li>
                                          <a href="index.php?controller=products&action=detail&id=<?php echo $rowsSub->id;?>"
                                              ><i class="fa fa-info" aria-hidden="true"></i
                                          ></a>
                                      </li>
                                  </ul>
                                  </div>
                                </div>
                                <?php endforeach;?>
                              </div>
                            </div>
                          </div>
                          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-2x"></i></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-2x"></i></a>
                          <ol class="carousel-indicators" style="z-index: 1;">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                          </ol>
                        </div>    
                      </div>   
                    </div>
                  </div>
                  <script>
                      $('#myCarousel').carousel({
                          interval:   4000
                      });
                  </script>
            </div>
            <div class="container-fluid">
            <div class="row featured-product">
                <div class="col-xl-12 main-title">
                    <span>TIN TỨC MỚI NHẤT</span>
                </div>
              <div class="abc">
                      <?php
                  $hotnews = $obj->modelBlogs();
                ?>
                <?php
                  foreach($hotnews as $rowNews):
                ?>
                <div class="row" style="width:100%;margin-top:50px;padding-bottom:30px;">
                  <div class="col-xl-2 newss">
                    <img class="news-imgg" src="../Assets/Upload/Blogs/<?php echo $rowNews->photo;?>" alt="">
                    <div class="news-tit"><a id="news-tit" href="index.php?controller=blogs&action=read&id=<?php echo $rowNews->id;?>"><?php echo $rowNews->title;?></a></div>
                  </div> 
                </div>
                  <?php endforeach;?>
                      </div>
        </div>
        </div>
        <style>
          .abc{
            width: 100%;
            display: flex;
          }
          .newss{
            height: 280px;
            margin-left: 100px;
            display: inline;
          }
          .news-imgg{
            width: 250px;
            height: 200px;
            background-color: black;
            margin-left: -15px;
          }
          .news-tit{
            font-size: 12px;
            font-weight: 600;
            overflow: ellipsis;
            margin-top:15px;
            width: 200px;
            margin-left: 0;
            text-align: center;
            text-justify: center;
          }
        </style>