<section id="checkout-page">
    <div class="container">
        <div class="col-xs-12 no-margin">
            <?php echo form_open('');?>
                <div class="shipping-address">
                    <h2 class="border h1">購買人</h2>
                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6">
                            <label>姓氏*</label>
                            <input class="le-input" >
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label>名子*</label>
                            <input class="le-input" >
                        </div>
                    </div>

                    <div class="row field-row">
                        <div class="col-xs-12">
                            <label>公司名稱</label>
                            <input class="le-input" >
                        </div>
                    </div>

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-4">
                            <label>郵遞區號 / Zip*</label>
                            <input class="le-input"  >
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <label>Email 信箱*</label>
                            <input class="le-input" >
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <label>聯絡電話*</label>
                            <input class="le-input" >
                        </div>
                    </div>

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-12">
                            <label>地址*</label>
                            <input class="le-input" data-placeholder="地址" >
                        </div>
                    </div>
                </div>

                <section id="shipping-address">
                    <h2 class="border h1">收件人</h2>
                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6">
                            <label>姓氏*</label>
                            <input class="le-input" >
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label>名子*</label>
                            <input class="le-input" >
                        </div>
                    </div>

                    <div class="row field-row">
                        <div class="col-xs-12">
                            <label>公司名稱</label>
                            <input class="le-input" >
                        </div>
                    </div>

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-4">
                            <label>郵遞區號 / Zip*</label>
                            <input class="le-input"  >
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <label>Email 信箱*</label>
                            <input class="le-input" >
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <label>聯絡電話*</label>
                            <input class="le-input" >
                        </div>
                    </div>

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-12">
                            <label>收件人地址*</label>
                            <input class="le-input" data-placeholder="收件人地址" >
                        </div>
                    </div>
                </section>


                <section id="your-order">
                    <h2 class="border h1">購物清單</h2>
                    <?php if($this->cart->total_articles() > 0):?>
                        <?php foreach($this->cart->get_content() as $cart):?>
                        <div class="row no-margin order-item">
                            <div class="col-xs-12 col-sm-1 no-margin">
                                <a href="#" class="qty"><?php echo $cart['qty'];?> x</a>
                            </div>
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <?php echo anchor('shopcart/product/' . $cart['id'],'<img class="lazy" alt="" src="http://placehold.it/73x73" />',array('class'=>'thumb-holder'));?>
                            </div>
                            <div class="col-xs-12 col-sm-7 ">
                                <div class="title">
                                    <?php echo anchor('shopcart/product/' . $cart['id'],$cart['name']);?>
                                </div>
                                <div class="brand">sony</div>
                            </div>

                            <div class="col-xs-12 col-sm-2 no-margin">
                                <div class="price">$<?php echo $cart['price'];?></div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </section>

                <div id="total-area" class="row no-margin">
                    <div class="col-xs-12 col-lg-4 col-lg-offset-8 no-margin-right">
                        <div id="subtotal-holder">
                            <ul class="tabled-data inverse-bold no-border">
                                <li>
                                    <label>小　計</label>
                                    <div class="value ">$<?php echo $this->cart->total_cart();?></div>
                                </li>
                                <li>
                                    <label>運　費</label>
                                    <div class="value">
                                        <div class="radio-group">
                                            <input class="le-radio" type="radio" name="group1" value="free" checked> <div class="radio-label bold">免運費</div><br>
                                            <input class="le-radio" type="radio" name="group1" value="local">  <div class="radio-label">運費<br><span class="bold">$15</span></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul id="total-field" class="tabled-data inverse-bold ">
                                <li>
                                    <label>總金額</label>
                                    <div class="value">$<?php echo $this->cart->total_cart();?></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>>

                <div id="payment-method-options">
                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="group2" value="Direct">
                        <div class="radio-label bold ">銀行匯款<br>
                            <p>銀行匯款說明</p>
                        </div>
                    </div><!-- /.payment-method-option -->

                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="group2" value="cheque">
                        <div class="radio-label bold ">支票付款</div>
                    </div><!-- /.payment-method-option -->

                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="group2" value="paypal">
                        <div class="radio-label bold ">使用 Paypal 結帳</div>
                    </div>
                </div>
            <?php echo form_close();?>
            <div class="place-order-button">
                <button class="le-button big">確認訂單</button>
            </div><!-- /.place-order-button -->

        </div><!-- /.col -->
    </div><!-- /.container -->
</section>