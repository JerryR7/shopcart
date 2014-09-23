<section id="cart-page">
    <div class="container">
        <!-- ========================================= CONTENT ========================================= -->
        <div id="cart_checkout" class="col-xs-12 col-md-9 items-holder no-margin">
            <?php if($this->cart->total_articles() > 0):?>
            <?php echo form_open('shopcart/cart_update');?>
                <?php foreach($this->cart->get_content() as $cart):?>
                <div class="row no-margin cart-item">
                    <div class="col-xs-12 col-sm-2 no-margin">
                        <?php echo anchor('shopcart/product/' . $cart['id'],'<img class="lazy" alt="" src="http://placehold.it/73x73" />',array('class'=>'thumb-holder'));?>
                    </div>

                    <div class="col-xs-12 col-sm-5 ">
                        <div class="title">
                            <?php echo anchor('shopcart/product/' . $cart['id'],$cart['name']);?>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-3 no-margin">
                        <div class="quantity">
                            <div class="le-quantity">

                                    <a class="minus" href="#reduce"></a>
                                    <input name="qty[]" readonly="readonly" type="text" value="<?php echo $cart['qty'];?>" />
                                    <a class="plus" href="#add"></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 no-margin">
                        <div class="price">
                            $<?php echo $cart['price'];?>
                        </div>
                        <input type="hidden" class="destroy_cart" value="<?php echo $cart['rowid'];?>">
                        <a class="close-btn" href="javascript:undefined"></a>
                    </div>
                </div>
                <input type="hidden" name="rowid[]" value="<?php echo $cart['rowid'];?>">
                <input type="hidden" name="id[]" value="<?php echo $cart['id'];?>">
                <input type="hidden" name="name[]" value="<?php echo $cart['name'];?>">
                <input type="hidden" name="price[]" value="<?php echo $cart['price'];?>">
                <?php endforeach;?>
                <br>
                <div class="buttons-holder" style="float:right">
                    <input class="le-button big" type="submit" value="更　新" />
                </div>
            <?php echo form_close();?>
            <?php endif;?>
        </div>
        <!-- ========================================= CONTENT : END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->

        <div class="col-xs-12 col-md-3 no-margin sidebar ">
            <div class="widget cart-summary">
                <h1 class="border">購物車</h1>
                <div class="body">
                    <ul class="tabled-data no-border inverse-bold">
                        <li>
                            <label>小　計</label>
                            <div class="value pull-right">$<?php echo $this->cart->total_cart();?></div>
                        </li>
                        <li>
                            <label>運　費</label>
                            <div class="value pull-right">免　運費</div>
                        </li>
                    </ul>
                    <ul id="total-price" class="tabled-data inverse-bold no-border">
                        <li>
                            <label>總金額</label>
                            <div class="value pull-right">$<?php echo $this->cart->total_cart();?></div>
                        </li>
                    </ul>
                    <div class="buttons-holder">
                        <?php echo anchor('shopcart/checkout','結　帳',array('class'=>'le-button big'));?>
                        <?php echo anchor('','繼續購物',array('class'=>'simple-link block'));?>
                    </div>
                </div>
            </div><!-- /.widget -->

            <div id="cupon-widget" class="widget">
                <h1 class="border">使用優惠券</h1>
                <div class="body">
                    <form>
                        <div class="inline-input">
                            <input data-placeholder="輸入代碼" type="text" />
                            <button class="le-button" type="submit">使用</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.widget -->
        </div><!-- /.sidebar -->

        <!-- ========================================= SIDEBAR : END ========================================= -->
    </div>
</section>