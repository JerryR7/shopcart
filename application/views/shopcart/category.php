<section id="category-grid">
    <div class="container">

        <!-- ========================================= SIDEBAR ========================================= -->
        <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">

            <!-- ========================================= PRODUCT FILTER ========================================= -->
<div class="widget">
    <h1>條件篩選</h1>
    <div class="body bordered">
        <?php echo form_open('shopcart/search',array('id'=>'select_range'));?>
        <div class="category-filter">
            <h2>品牌</h2>
            <hr>
            <ul>
                <li><input name="brand[]" checked="checked" class="le-checkbox" type="checkbox" value="APPLE" /> <label>蘋　果</label> <span class="pull-right">(2)</span></li>
                <li><input name="brand[]" class="le-checkbox" type="checkbox" value="DELL"/> <label>戴　爾</label> <span class="pull-right">(8)</span></li>
                <li><input name="brand[]" class="le-checkbox" type="checkbox" value="TOSHIBA"/> <label>東　芝</label> <span class="pull-right">(1)</span></li>
                <li><input name="brand[]" class="le-checkbox" type="checkbox" value="SAMSUNG"/> <label>三　星</label> <span class="pull-right">(5)</span></li>
            </ul>
        </div><!-- /.category-filter -->

        <div class="price-filter">
            <h2>價格</h2>
            <hr>
            <div class="price-range-holder">

                <input name="price" type="text" class="price-slider" value="1000,4000" >

                <span class="min-max">
                    $TWD: $100(min) - $7000(max)
                </span>
                <span class="filter-button">
                    <a href="#" onclick="$('#select_range').submit()">篩選</a>
                </span>
            </div>
        </div><!-- /.price-filter -->
        <?php echo form_close();?>
    </div><!-- /.body -->
</div><!-- /.widget -->
<!-- ========================================= PRODUCT FILTER : END ========================================= -->
            <!-- ========================================= CATEGORY TREE ========================================= -->
<div class="widget">
    <h1 class="border">訊息櫥窗</h1>
    <div class="body">
        <ul class="le-links">
            <li><a href="javascript:undefined">訊息1</a></li>
            <li><a href="javascript:undefined">訊息2</a></li>
            <li><a href="javascript:undefined">訊息3</a></li>
            <li><a href="javascript:undefined">訊息4</a></li>
        </ul><!-- /.le-links -->
    </div><!-- /.body -->
</div><!-- /.widget -->
<!-- ========================================= LINKS : END ========================================= -->
            <div class="widget">
  <div class="simple-banner">
    <a href="javascript:undefined"><img alt="" class="img-responsive" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/banners/banner-simple.jpg" /></a>
  </div>
</div>
            <!-- ========================================= FEATURED PRODUCTS ========================================= -->
<div class="widget">
    <h1 class="border">特色商品</h1>
    <ul class="product-list">

        <li class="sidebar-product-list-item">
            <div class="row">
                <div class="col-xs-4 col-sm-4 no-margin">
                    <a href="javascript:undefined" class="thumb-holder">
                        <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-small-01.jpg" />
                    </a>
                </div>
                <div class="col-xs-8 col-sm-8 no-margin">
                    <a href="javascript:undefined">Netbook Acer </a>
                    <div class="price">
                        <div class="price-prev">$2000</div>
                        <div class="price-current">$1873</div>
                    </div>
                </div>
            </div>
        </li><!-- /.sidebar-product-list-item -->

        <li class="sidebar-product-list-item">
            <div class="row">
                <div class="col-xs-4 col-sm-4 no-margin">
                    <a href="javascript:undefined" class="thumb-holder">
                        <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-small-02.jpg" />
                    </a>
                </div>
                <div class="col-xs-8 col-sm-8 no-margin">
                    <a href="javascript:undefined">PowerShot Elph 115 16MP Digital Camera</a>
                    <div class="price">
                        <div class="price-prev">$2000</div>
                        <div class="price-current">$1873</div>
                    </div>
                </div>
            </div>
        </li><!-- /.sidebar-product-list-item -->

        <li class="sidebar-product-list-item">
            <div class="row">
                <div class="col-xs-4 col-sm-4 no-margin">
                    <a href="javascript:undefined" class="thumb-holder">
                        <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-small-03.jpg" />
                    </a>
                </div>
                <div class="col-xs-8 col-sm-8 no-margin">
                    <a href="javascript:undefined">PowerShot Elph 115 16MP Digital Camera</a>
                    <div class="price">
                        <div class="price-prev">$2000</div>
                        <div class="price-current">$1873</div>
                    </div>
                </div>
            </div>
        </li><!-- /.sidebar-product-list-item -->

        <li class="sidebar-product-list-item">
            <div class="row">
                <div class="col-xs-4 col-sm-4 no-margin">
                    <a href="javascript:undefined" class="thumb-holder">
                        <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-small-01.jpg" />
                    </a>
                </div>
                <div class="col-xs-8 col-sm-8 no-margin">
                    <a href="javascript:undefined">Netbook Acer </a>
                    <div class="price">
                        <div class="price-prev">$2000</div>
                        <div class="price-current">$1873</div>
                    </div>
                </div>
            </div>
        </li><!-- /.sidebar-product-list-item -->

        <li class="sidebar-product-list-item">
            <div class="row">
                <div class="col-xs-4 col-sm-4 no-margin">
                    <a href="javascript:undefined" class="thumb-holder">
                        <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-small-02.jpg" />
                    </a>
                </div>
                <div class="col-xs-8 col-sm-8 no-margin">
                    <a href="javascript:undefined">PowerShot Elph 115 16MP Digital Camera</a>
                    <div class="price">
                        <div class="price-prev">$2000</div>
                        <div class="price-current">$1873</div>
                    </div>
                </div>
            </div>
        </li><!-- /.sidebar-product-list-item -->

    </ul><!-- /.product-list -->
</div><!-- /.widget -->
<!-- ========================================= FEATURED PRODUCTS : END ========================================= -->
        </div>
        <!-- ========================================= SIDEBAR : END ========================================= -->

        <!-- ========================================= CONTENT ========================================= -->

        <div class="col-xs-12 col-sm-9 no-margin wide sidebar">

            <div id="grid-page-banner">
                <a href="javascript:undefined">
                    <img src="<?php echo base_url();?>assets/images/banners/banner-gamer.jpg" alt="" />
                </a>
            </div>

            <section id="recommended-products" class="carousel-holder hover small">
                <div class="title-nav">
                    <h2 class="inverse">推薦商品</h2>
                    <div class="nav-holder">
                        <a href="#prev" data-target="#owl-recommended-products" class="slider-prev btn-prev fa fa-angle-left"></a>
                        <a href="#next" data-target="#owl-recommended-products" class="slider-next btn-next fa fa-angle-right"></a>
                    </div>
                </div><!-- /.title-nav -->

                <div id="owl-recommended-products" class="owl-carousel product-grid-holder">
                    <div class="no-margin carousel-item product-item-holder hover size-medium">
                        <div class="product-item">
                            <div class="ribbon red"><span>優惠</span></div>
                            <div class="image">
                                <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-11.jpg" />
                            </div>
                            <div class="body">
                                <div class="title">
                                    <a href="javascript:undefined">LC-70UD1U 70" class aquos 4K ultra HD</a>
                                </div>
                                <div class="brand">sharp</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <input type="hidden" id="product_id" class="product_id" value="2" />
                                <div class="add-cart-button">
                                    <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist add_favor" href="javascript:undefined">加入喜歡清單</a>
                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較清單</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.carousel-item -->

                    <div class="no-margin carousel-item product-item-holder hover size-medium">
                        <div class="product-item">
                            <div class="ribbon blue"><span>近期上架</span></div>
                            <div class="image">
                                <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-12.jpg" />
                            </div>
                            <div class="body">
                                <div class="title">
                                    <a href="javascript:undefined">cinemizer OLED 3D virtual reality TV Video</a>
                                </div>
                                <div class="brand">zeiss</div>
                            </div>
                            <div class="prices">

                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <input type="hidden" id="product_id" class="product_id" value="2" />
                                <div class="add-cart-button">
                                    <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist add_favor" href="javascript:undefined">加入喜歡清單</a>
                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較清單</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.carousel-item -->

                    <div class="no-margin carousel-item product-item-holder hover size-medium">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-13.jpg" />
                            </div>
                            <div class="body">
                                <div class="title">
                                    <a href="javascript:undefined">s2340T23" full HD multi-Touch Monitor</a>
                                </div>
                                <div class="brand">dell</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <input type="hidden" id="product_id" class="product_id" value="2" />
                                <div class="add-cart-button">
                                    <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist add_favor" href="javascript:undefined">加入喜歡清單</a>
                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較清單</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.carousel-item -->

                    <div class="no-margin carousel-item product-item-holder hover size-medium">
                        <div class="product-item">
                            <div class="ribbon blue"><span>近期上架</span></div>
                            <div class="image">
                                <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-14.jpg" />
                            </div>
                            <div class="body">
                                <div class="title">
                                    <a href="javascript:undefined">kardon BDS 7772/120 integrated 3D</a>
                                </div>
                                <div class="brand">harman</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <input type="hidden" id="product_id" class="product_id" value="2" />
                                <div class="add-cart-button">
                                    <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist add_favor" href="javascript:undefined">加入喜歡清單</a>
                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較清單</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.carousel-item -->

                    <div class="no-margin carousel-item product-item-holder hover size-medium">
                        <div class="product-item">
                            <div class="ribbon green"><span>熱門</span></div>
                            <div class="image">
                                <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-15.jpg" />
                            </div>
                            <div class="body">
                                <div class="title">
                                    <a href="javascript:undefined">netbook acer travel B113-E-10072</a>
                                </div>
                                <div class="brand">acer</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <input type="hidden" id="product_id" class="product_id" value="2" />
                                <div class="add-cart-button">
                                    <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist add_favor" href="javascript:undefined">加入喜歡清單</a>
                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較清單</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.carousel-item -->

                    <div class="no-margin carousel-item product-item-holder hover size-medium">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-16.jpg" />
                            </div>
                            <div class="body">
                                <div class="title">
                                    <a href="javascript:undefined">iPod touch 5th generation,64GB, blue</a>
                                </div>
                                <div class="brand">apple</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <input type="hidden" id="product_id" class="product_id" value="2" />
                                <div class="add-cart-button">
                                    <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist add_favor" href="javascript:undefined">加入喜歡清單</a>
                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較清單</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.carousel-item -->

                    <div class="no-margin carousel-item product-item-holder hover size-medium">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-16.jpg" />
                            </div>
                            <div class="body">
                                <div class="title">
                                    <a href="javascript:undefined">iPod touch 5th generation,64GB, blue</a>
                                </div>
                                <div class="brand">apple</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <input type="hidden" id="product_id" class="product_id" value="2" />
                                <div class="add-cart-button">
                                    <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist add_favor" href="javascript:undefined">加入喜歡清單</a>
                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較清單</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.carousel-item -->

                    <div class="no-margin carousel-item product-item-holder hover size-medium">
                        <div class="product-item">
                            <div class="ribbon blue"><span>近期上架</span></div>
                            <div class="image">
                                <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-16.jpg" />
                            </div>
                            <div class="body">

                                <div class="title">
                                    <a href="javascript:undefined">kardon BDS 7772/120 integrated 3D</a>
                                </div>
                                <div class="brand">harman</div>
                            </div>
                            <div class="prices">

                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <input type="hidden" id="product_id" class="product_id" value="2" />
                                <div class="add-cart-button">
                                    <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                </div>
                                <div class="wish-compare">
                                    <a class="btn-add-to-wishlist add_favor" href="javascript:undefined">加入喜歡清單</a>
                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較清單</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.carousel-item -->

                </div><!-- /#recommended-products-carousel .owl-carousel -->
            </section>

            <section id="gaming">
    <div class="grid-list-products">
        <h2 class="section-title">分類名稱</h2>

        <div class="control-bar">
            <!-- <div id="item-count" class="le-select">
                每頁顯示
                <select id="per_page">
                    <option value="24">24 筆</option>
                    <option value="48">48 筆</option>
                    <option value="72">72 筆</option>
                </select>
            </div> -->

            <div class="grid-list-buttons">
                <ul>
                    <li class="grid-list-button-item active"><a data-toggle="tab" href="#grid-view"><i class="fa fa-th-large"></i> 格狀模式</a></li>
                    <li class="grid-list-button-item "><a data-toggle="tab" href="#list-view"><i class="fa fa-th-list"></i> 列表模式</a></li>
                </ul>
            </div>
        </div><!-- /.control-bar -->

        <div class="tab-content">
            <div id="grid-view" class="products-grid fade tab-pane in active">

                <div class="product-grid-holder">
                    <div class="row no-margin">

                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>優惠</span></div>
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-01.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount green">-50% 優惠</div>
                                    <div class="title">
                                        <a href="javascript:undefined">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <input type="hidden" id="product_id" class="product_id" value="2" />
                                    <div class="add-cart-button">
                                        <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                    </div>
                                    <div class="wish-compare">
                                        <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->

                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon blue"><span>近期上架</span></div>
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-02.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="javascript:undefined">White lumia 9001</a>
                                    </div>
                                    <div class="brand">nokia</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <input type="hidden" id="product_id" class="product_id" value="2" />
                                    <div class="add-cart-button">
                                        <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                    </div>
                                    <div class="wish-compare">
                                        <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->

                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-03.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="javascript:undefined">POV Action Cam</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <input type="hidden" id="product_id" class="product_id" value="2" />
                                    <div class="add-cart-button">
                                        <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                    </div>
                                    <div class="wish-compare">
                                        <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->

                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>優惠</span></div>
                                <div class="ribbon green"><span>熱門</span></div>
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-04.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="javascript:undefined">Netbook Acer TravelMate B113-E-10072</a>
                                    </div>
                                    <div class="brand">acer</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <input type="hidden" id="product_id" class="product_id" value="2" />
                                    <div class="add-cart-button">
                                        <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                    </div>
                                    <div class="wish-compare">
                                        <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->

                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>優惠</span></div>
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-01.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount green">-50% 優惠</div>
                                    <div class="title">
                                        <a href="javascript:undefined">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <input type="hidden" id="product_id" class="product_id" value="2" />
                                    <div class="add-cart-button">
                                        <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                    </div>
                                    <div class="wish-compare">
                                        <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->

                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon blue"><span>近期上架</span></div>
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-02.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="javascript:undefined">White lumia 9001</a>
                                    </div>
                                    <div class="brand">nokia</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <input type="hidden" id="product_id" class="product_id" value="2" />
                                    <div class="add-cart-button">
                                        <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                    </div>
                                    <div class="wish-compare">
                                        <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->

                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-03.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="javascript:undefined">POV Action Cam</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <input type="hidden" id="product_id" class="product_id" value="2" />
                                    <div class="add-cart-button">
                                        <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                    </div>
                                    <div class="wish-compare">
                                        <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->

                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>優惠</span></div>
                                <div class="ribbon green"><span>熱門</span></div>
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-04.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="javascript:undefined">Netbook Acer TravelMate B113-E-10072</a>
                                    </div>
                                    <div class="brand">acer</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <input type="hidden" id="product_id" class="product_id" value="2" />
                                    <div class="add-cart-button">
                                        <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                    </div>
                                    <div class="wish-compare">
                                        <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->

                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-03.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="javascript:undefined">POV Action Cam</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <input type="hidden" id="product_id" class="product_id" value="2" />
                                    <div class="add-cart-button">
                                        <a href="javascript:undefined" class="le-button add_cart">加入購物車</a>
                                    </div>
                                    <div class="wish-compare">
                                        <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->

                    </div><!-- /.row -->
                </div><!-- /.product-grid-holder -->

                <div class="pagination-holder">
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 text-left">
                            <ul class="pagination ">
                                <li class="current"><a  href="javascript:undefined">1</a></li>
                                <li><a href="javascript:undefined">2</a></li>
                                <li><a href="javascript:undefined">3</a></li>
                                <li><a href="javascript:undefined">4</a></li>
                                <li><a href="javascript:undefined">下一頁</a></li>
                            </ul>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="result-counter">
                                顯示 <span>1-9</span> 共 <span>11</span> 結果
                            </div>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.pagination-holder -->
            </div><!-- /.products-grid #grid-view -->

            <div id="list-view" class="products-grid fade tab-pane ">
                <div class="products-list">

                    <div class="product-item product-item-holder">
                        <div class="ribbon red"><span>優惠</span></div>
                        <div class="ribbon blue"><span>近期上架</span></div>
                        <div class="row">
                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-01.jpg" />
                                </div>
                            </div><!-- /.image-holder -->
                            <input type="hidden" id="product_id" class="product_id" value="2" />
                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                <div class="body">
                                    <div class="label-discount green">-50% 優惠</div>
                                    <div class="title">
                                        <a href="javascript:undefined">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                    </div>
                                    <div class="brand">sony</div>
                                    <div class="excerpt">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
                                    </div>
                                    <div class="addto-compare">
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.body-holder -->
                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                <div class="right-clmn">
                                    <div class="price-current">$1199.00</div>
                                    <div class="price-prev">$1399.00</div>
                                    <div class="availability"><label>供應狀況:</label><span class="available">  有存貨</span></div>
                                    <a class="le-button" href="javascript:undefined">加入購物車</a>
                                    <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                </div>
                            </div><!-- /.price-area -->
                        </div><!-- /.row -->
                    </div><!-- /.product-item -->


                    <div class="product-item product-item-holder">
                        <div class="ribbon green"><span>熱門</span></div>
                        <div class="row">
                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-02.jpg" />
                                </div>
                            </div><!-- /.image-holder -->
                            <input type="hidden" id="product_id" class="product_id" value="2" />
                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="javascript:undefined">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                    </div>
                                    <div class="brand">sony</div>
                                    <div class="excerpt">
                                        <div class="star-holder">
                                            <div class="star" data-score="4"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
                                    </div>
                                    <div class="addto-compare">
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.body-holder -->
                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                <div class="right-clmn">
                                    <div class="price-current">$1199.00</div>
                                    <div class="price-prev">$1399.00</div>
                                    <div class="availability"><label>供應狀況:</label><span class="not-available">已售完</span></div>
                                    <a class="le-button disabled" href="javascript:undefined">加入購物車</a>
                                    <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                </div>
                            </div><!-- /.price-area -->
                        </div><!-- /.row -->
                    </div><!-- /.product-item -->


                    <div class="product-item product-item-holder">
                        <div class="ribbon red"><span>售完</span></div>
                        <div class="row">
                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-03.jpg" />
                                </div>
                            </div><!-- /.image-holder -->
                            <input type="hidden" id="product_id" class="product_id" value="2" />
                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="javascript:undefined">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                    </div>
                                    <div class="brand">sony</div>
                                    <div class="excerpt">
                                        <div class="star-holder">
                                            <div class="star" data-score="2"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt. </p>
                                    </div>
                                    <div class="addto-compare">
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.body-holder -->
                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                <div class="right-clmn">
                                    <div class="price-current">$1199.00</div>
                                    <div class="price-prev">$1399.00</div>
                                    <div class="availability"><label>供應狀況:</label><span class="available">有存貨</span></div>
                                    <a class="le-button" href="javascript:undefined">加入購物車</a>
                                    <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                </div>
                            </div><!-- /.price-area -->
                        </div><!-- /.row -->
                    </div><!-- /.product-item -->

                    <div class="product-item product-item-holder">
                        <div class="row">
                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-04.jpg" />
                                </div>
                            </div><!-- /.image-holder -->
                            <input type="hidden" id="product_id" class="product_id" value="2" />
                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                <div class="body">
                                    <div class="label-discount green">-50% 優惠</div>
                                    <div class="title">
                                        <a href="javascript:undefined">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                    </div>
                                    <div class="brand">sony</div>
                                    <div class="excerpt">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt. </p>
                                    </div>
                                    <div class="addto-compare">
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.body-holder -->
                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                <div class="right-clmn">
                                    <div class="price-current">$1199.00</div>
                                    <div class="price-prev">$1399.00</div>
                                    <div class="availability"><label>供應狀況:</label><span class="available">  有存貨</span></div>
                                    <a class="le-button" href="javascript:undefined">加入購物車</a>
                                    <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                </div>
                            </div><!-- /.price-area -->
                        </div><!-- /.row -->
                    </div><!-- /.product-item -->

                    <div class="product-item product-item-holder">
                        <div class="ribbon green"><span>熱門</span></div>
                        <div class="row">
                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                <div class="image">
                                    <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-04.jpg" />
                                </div>
                            </div><!-- /.image-holder -->
                            <input type="hidden" id="product_id" class="product_id" value="2" />
                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="javascript:undefined">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                    </div>
                                    <div class="brand">sony</div>
                                    <div class="excerpt">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
                                    </div>
                                    <div class="addto-compare">
                                        <a class="btn-add-to-compare add_compare add_compare" href="javascript:undefined">加入比較</a>
                                    </div>
                                </div>
                            </div><!-- /.body-holder -->
                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                <div class="right-clmn">
                                    <div class="price-current">$1199.00</div>
                                    <div class="price-prev">$1399.00</div>
                                    <div class="availability"><label>供應狀況:</label><span class="available">  有存貨</span></div>
                                    <a class="le-button" href="javascript:undefined">加入購物車</a>
                                    <a class="btn-add-to-wishlist add_favor add_favor" href="javascript:undefined">加入喜歡清單</a>
                                </div>
                            </div><!-- /.price-area -->
                        </div><!-- /.row -->
                    </div><!-- /.product-item -->

                </div><!-- /.products-list -->

                <div class="pagination-holder">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 text-left">
                            <ul class="pagination">
                                <li class="current"><a  href="javascript:undefined">1</a></li>
                                <li><a href="javascript:undefined">2</a></li>
                                <li><a href="javascript:undefined">3</a></li>
                                <li><a href="javascript:undefined">4</a></li>
                                <li><a href="javascript:undefined">next</a></li>
                            </ul><!-- /.pagination -->
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="result-counter">
                                Showing <span>1-9</span> of <span>11</span> results
                            </div><!-- /.result-counter -->
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.pagination-holder -->

            </div><!-- /.products-grid #list-view -->

        </div><!-- /.tab-content -->
    </div><!-- /.grid-list-products -->

</section><!-- /#gaming -->
        </div><!-- /.col -->
        <!-- ========================================= CONTENT : END ========================================= -->
    </div><!-- /.container -->
</section><!-- /#category-grid -->    <!-- ============================================================= FOOTER ============================================================= -->