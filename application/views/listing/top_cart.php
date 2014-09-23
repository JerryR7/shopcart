<a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <div class="basket-item-count">
        <span class="count"><?php echo $this->cart->total_articles();?></span>
        <img src="<?php echo base_url();?>assets/images/icon-cart.png" alt="" />
    </div>

    <div class="total-price-basket">
        <span class="lbl">購物車:</span>
        <span class="total-price">
            <span class="sign">$</span><span class="value"><?php echo $this->cart->total_cart();?></span>
        </span>
    </div>
</a>
<ul class="dropdown-menu">
    <?php if($this->cart->total_articles() > 0):?>
        <?php foreach($this->cart->get_content() as $cart):?>
        <li>
            <div class="basket-item">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 no-margin text-center">
                        <div class="thumb">
                            <img alt="" src="<?php echo base_url();?>assets/images/products/product-small-01.jpg" />
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 no-margin">
                        <div class="title"><?php echo $cart['name'];?></div>
                        <div class="price">$<?php echo $cart['price'];?></div> x <?php echo $cart['qty'];?>
                    </div>
                </div>
                <input type="hidden" class="destroy_cart" value="<?php echo $cart['rowid'];?>">
                <a id="destroy_product" class="close-btn" href="#"></a>
            </div>
        </li>
        <?php endforeach;?>
    <?php else: ?>
        <li>
            <div class="basket-item">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 no-margin text-center">
                        <div class="basket-item-count">
                            <span class="count"><?php echo $this->cart->total_articles();?></span>
                            <img src="<?php echo base_url();?>assets/images/icon-cart.png" alt="" />
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 no-margin">
                        <h4>您還沒有選購商品。</h4>
                    </div>
                </div>
            </div>
        </li>
    <?php endif;?>
    <li class="checkout">
        <div class="basket-item">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <?php echo anchor('shopcart/cart','檢視購物車',array('class'=>'le-button inverse'));?>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <?php echo anchor('shopcart/checkout','結帳',array('class'=>'le-button'));?>
                </div>
            </div>
        </div>
    </li>
</ul>