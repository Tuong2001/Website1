
<?php 

if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT product.product_id, product.product_name, product.price, product.pro_qty, product.pro_image, category.cat_name, product.smalldesc, product.detaildesc 
from product , category  
where product.cat_id = category.cat_id and product.product_id='$id'";
$result = pg_query($conn, $sql);
$row=pg_fetch_array($result, NULL, PGSQL_ASSOC);


?>
   

   

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All toy brands</span>
                        </div>
                        <ul>
                            <?php Department($conn); ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 76 395 77775</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/toybackground.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Detail Product</h2>
                        <div class="breadcrumb__option">
                            <a href="?page=content">Home</a>
                            <a href="?page=content">Popular Toys</a>
                            <span>Detail Product</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="img/<?php echo $row["pro_image"]; ?>" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/apocalypsetoy.jpg"
                                src="img/product/details/beasttoy.jpg" alt="">
                            <img data-imgbigurl="img/product/details/cycloptoy.jpg"
                                src="img/product/details/deadpooltoy.jpeg" alt="">
                            <img data-imgbigurl="img/product/details/magnetotoy.jpg"
                                src="img/product/details/quicksilveltoy.jpg" alt="">
                            <img data-imgbigurl="img/product/details/stormtoy.jpg"
                                src="img/product/details/wolverinetoy.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $row["product_name"]; ?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">$<?php echo $row["price"]; ?></div>
                        <p><?php echo $row["smalldesc"]; ?></p>
                        <form method="POST">
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" name="txtqty" readonly  value="1">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="btnCart" class="primary-btn">ADD TO CARD</button>
                            <a href="shoping-cart.php" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        </form>
                        <ul>
                            <li><b>Try on</b> <a href="https://vi.chiasenhac.vn/nghe-album/abbey-road-xssw0sbwq9n4q9.html" target="_blank">CSN</a></li>
                            <li><b>Availability</b> <span>In Stock</span></li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6><?php echo $row["detaildesc"]; ?></h6>
                                    <p></p>
                                        
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Let It Be is the Beatles' last studio album, released on May 8, 1970 by Apple Records. This is also the only album that George Martin is not a producer but instead is Phil Spector. Along with the Yellow Submarine, this is a rare album by The Beatles that Rolling Stone magazine rated negative on quality. The album includes a number of popular songs, such as "Let It Be", "Get Back", "Across the Universe" and "The Long and Winding Road".</p>
                                    
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Let It Be is the Beatles' last studio album, released on May 8, 1970 by Apple Records. This is also the only album that George Martin is not a producer but instead is Phil Spector. Along with the Yellow Submarine, this is a rare album by The Beatles that Rolling Stone magazine rated negative on quality. The album includes a number of popular songs, such as "Let It Be", "Get Back", "Across the Universe" and "The Long and Winding Road".</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/apocalypsetoy.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Apocalypse Toy</a></h6>
                            <h5>$130</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/beasttoy.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Beast Toy</a></h6>
                            <h5>$140</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/cycloptoy.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Cyclop Toy</a></h6>
                            <h5>$230</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/quicksilveltoy.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Quicksilvel Toy</a></h6>
                            <h5>$250</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->
<?php }
    if(isset($_POST['btnCart']))
    {
        $qty = $_POST['txtqty'];
    if(!isset($_SESSION['cart'][$id]))
    {
        $_SESSION['cart'][$id]['img'] = $row['pro_image'];
        $_SESSION['cart'][$id]['name'] = $row['product_name'];
        $_SESSION['cart'][$id]['price'] = $row['price'];
        $_SESSION['cart'][$id]['qty'] = $qty;
        echo "<script> alert(' Add to cart successful ');location.href='?page=content';</script>";
        }
    else
    {
        $_SESSION['cart'][$id]['qty'] += $qty;
        echo "<script> alert(' Add to cart successful ');location.href='?page=content';</script>";
    }
    }
 ?>
 
  