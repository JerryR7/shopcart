<section id="category-grid">
    <div class="container">
        <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">
            <div class="widget">
                <h1>條件篩選</h1>
                <div class="body bordered">
                    <?php echo form_open('shopcart/search',array('id'=>'select_range','method'=>'get'));?>
                    <div class="category-filter">
                        <h2>品牌</h2>
                        <hr>
                        <ul>
                            <li><input name="brand[]" checked="checked" class="le-checkbox" type="checkbox" value="APPLE" /> <label>蘋　果</label> <span class="pull-right">(2)</span></li>
                            <li><input name="brand[]" class="le-checkbox" type="checkbox" value="DELL"/> <label>戴　爾</label> <span class="pull-right">(8)</span></li>
                            <li><input name="brand[]" class="le-checkbox" type="checkbox" value="TOSHIBA"/> <label>東　芝</label> <span class="pull-right">(1)</span></li>
                            <li><input name="brand[]" class="le-checkbox" type="checkbox" value="SAMSUNG"/> <label>三　星</label> <span class="pull-right">(5)</span></li>
                        </ul>
                    </div>

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
                    </div>
                    <?php echo form_close();?>
                </div>
            </div>

            <div class="widget">
                <h1 class="border">訊息櫥窗</h1>
                <div class="body">
                    <ul class="le-links">
                        <li><a href="javascript:undefined">訊息1</a></li>
                        <li><a href="javascript:undefined">訊息2</a></li>
                        <li><a href="javascript:undefined">訊息3</a></li>
                        <li><a href="javascript:undefined">訊息4</a></li>
                    </ul>
                </div>
            </div>

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
                    </li>

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
                    </li>

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
                    </li>

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
                    </li>

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
                    </li>
                </ul>
            </div>
        </div>




        <div class="col-xs-12 col-sm-9 no-margin wide sidebar">
            <section id="gaming">
                <div class="grid-list-products">
                    <h2 class="section-title">追蹤清單</h2>
                    <div class="control-bar">
                        <div class="grid-list-buttons">
                            <ul>
                                <li class="grid-list-button-item active"><a data-toggle="tab" href="#grid-view"><i class="fa fa-th-large"></i> 格狀模式</a></li>
                                <li class="grid-list-button-item "><a data-toggle="tab" href="#list-view"><i class="fa fa-th-list"></i> 列表模式</a></li>
                            </ul>
                        </div>
                    </div>

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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                </div>
                            </div>
                        </div>

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
                                        </div>
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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="no-margin col-xs-12 col-sm-3 price-area">
                                            <div class="right-clmn">
                                                <div class="price-current">$1199.00</div>
                                                <div class="price-prev">$1399.00</div>
                                                <div class="availability"><label>供應狀況:</label><span class="available">  有存貨</span></div>
                                                <a class="le-button add_cart" href="javascript:undefined">加入購物車</a
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="product-item product-item-holder">
                                    <div class="ribbon green"><span>熱門</span></div>
                                    <div class="row">
                                        <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                            <div class="image">
                                                <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-02.jpg" />
                                            </div>
                                        </div>
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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="no-margin col-xs-12 col-sm-3 price-area">
                                            <div class="right-clmn">
                                                <div class="price-current">$1199.00</div>
                                                <div class="price-prev">$1399.00</div>
                                                <div class="availability"><label>供應狀況:</label><span class="not-available">已售完</span></div>
                                                <a class="le-button disabled" href="javascript:undefined">加入購物車</a
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="product-item product-item-holder">
                                    <div class="ribbon red"><span>售完</span></div>
                                    <div class="row">
                                        <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                            <div class="image">
                                                <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-03.jpg" />
                                            </div>
                                        </div>
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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="no-margin col-xs-12 col-sm-3 price-area">
                                            <div class="right-clmn">
                                                <div class="price-current">$1199.00</div>
                                                <div class="price-prev">$1399.00</div>
                                                <div class="availability"><label>供應狀況:</label><span class="available">有存貨</span></div>
                                                <a class="le-button add_cart" href="javascript:undefined">加入購物車</a
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item product-item-holder">
                                    <div class="row">
                                        <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                            <div class="image">
                                                <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-04.jpg" />
                                            </div>
                                        </div>
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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="no-margin col-xs-12 col-sm-3 price-area">
                                            <div class="right-clmn">
                                                <div class="price-current">$1199.00</div>
                                                <div class="price-prev">$1399.00</div>
                                                <div class="availability"><label>供應狀況:</label><span class="available">  有存貨</span></div>
                                                <a class="le-button add_cart" href="javascript:undefined">加入購物車</a
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item product-item-holder">
                                    <div class="ribbon green"><span>熱門</span></div>
                                    <div class="row">
                                        <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                            <div class="image">
                                                <img alt="" src="<?php echo base_url();?>assets/images/blank.gif" data-echo="<?php echo base_url();?>assets/images/products/product-04.jpg" />
                                            </div>
                                        </div>
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
                                                    <a class="btn-add-to-compare add_compare" href="javascript:undefined">加入比較</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="no-margin col-xs-12 col-sm-3 price-area">
                                            <div class="right-clmn">
                                                <div class="price-current">$1199.00</div>
                                                <div class="price-prev">$1399.00</div>
                                                <div class="availability"><label>供應狀況:</label><span class="available">  有存貨</span></div>
                                                <a class="le-button add_cart" href="javascript:undefined">加入購物車</a
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="pagination-holder">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 text-left">
                                        <ul class="pagination">
                                            <li class="current"><a  href="javascript:undefined">1</a></li>
                                            <li><a href="javascript:undefined">2</a></li>
                                            <li><a href="javascript:undefined">3</a></li>
                                            <li><a href="javascript:undefined">4</a></li>
                                            <li><a href="javascript:undefined">next</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="result-counter">
                                            Showing <span>1-9</span> of <span>11</span> results
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>