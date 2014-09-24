<section id="checkout-page">
    <div class="container">
        <div class="col-xs-12 no-margin">
            <?php echo form_open('shopcart/order_done',array('id'=>'orderForm','class'=>'form-horizontal','role'=>'form'));?>
                <div class="shipping-address">
                    <h2 class="border h1">購買人</h2>
                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6">
                            <label>姓氏* <?php echo form_error('buy_lastname'); ?></label>
                            <input type="name" name="buy_lastname" class="le-input" value="<?php echo set_value('buy_lastname'); ?>" >
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label>名子* <?php echo form_error('buy_firstname'); ?></label>
                            <input type="name" name="buy_firstname" class="le-input" value="<?php echo set_value('buy_firstname'); ?>" >
                        </div>
                    </div>

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-4">
                            <label>Email 信箱* <?php echo form_error('buy_email'); ?></label>
                            <input type="email" name="buy_email" class="le-input" value="<?php echo set_value('buy_email'); ?>" >
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <label>聯絡電話* <?php echo form_error('buy_contact'); ?></label>
                            <input type="text" name="buy_contact" class="le-input" value="<?php echo set_value('buy_contact'); ?>" >
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <label>公司名稱 <?php echo form_error('buy_company'); ?></label>
                            <input type="text" name="buy_company" class="le-input" value="<?php echo set_value('buy_company'); ?>" >
                        </div>
                    </div>

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-4">
                            <label>郵遞區號 / Zip* <?php echo form_error('buy_zip'); ?></label>
                            <input type="text" name="buy_zip" class="le-input" value="<?php echo set_value('buy_zip'); ?>"  >
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <label>地址* <?php echo form_error('buy_address'); ?></label>
                            <input type="text" name="buy_address" class="le-input" data-placeholder="" value="<?php echo set_value('buy_address'); ?>" >
                        </div>
                    </div>
                </div>

                <section id="shipping-address">
                    <h2 class="border h1">收件人</h2>
                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6">
                            <label>姓氏* <?php echo form_error('receive_lastname'); ?></label>
                            <input type="name" name="receive_lastname" class="le-input" value="<?php echo set_value('receive_lastname'); ?>" >
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label>名子* <?php echo form_error('receive_firstname'); ?></label>
                            <input type="name" name="receive_firstname" class="le-input" value="<?php echo set_value('receive_firstname'); ?>" >
                        </div>
                    </div>

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-4">
                            <label>Email 信箱* <?php echo form_error('receive_email'); ?></label>
                            <input type="email" name="receive_email" class="le-input" value="<?php echo set_value('receive_email'); ?>" >
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <label>聯絡電話* <?php echo form_error('receive_contact'); ?></label>
                            <input type="text" name="receive_contact" class="le-input" value="<?php echo set_value('receive_contact'); ?>" >
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <label>公司名稱 <?php echo form_error('receive_company'); ?></label>
                            <input type="text" name="receive_company" class="le-input" value="<?php echo set_value('receive_company'); ?>" >
                        </div>
                    </div>

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-4">
                            <label>郵遞區號 / Zip* <?php echo form_error('receive_zip'); ?></label>
                            <input type="text" name="receive_zip" class="le-input" value="<?php echo set_value('receive_zip'); ?>"  >
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <label>收件人地址* <?php echo form_error('receive_address'); ?></label>
                            <input type="text" name="receive_address" class="le-input" data-placeholder="" value="<?php echo set_value('receive_address'); ?>" >
                        </div>
                    </div>
                </section>

                <section id="your-order">
                    <h2 class="border h1">購物清單</h2>
                    <?php if($this->cart->total_articles() > 0):?>
                        <?php foreach($this->cart->get_content() as $cart):?>
                        <div class="row no-margin order-item">
                            <div class="col-xs-1 col-sm-1 no-margin">
                                <a href="#" class="qty"><?php echo $cart['qty'];?> x</a>
                            </div>
                            <div class="col-xs-3 col-sm-3 no-margin">
                                <?php echo anchor('shopcart/product/' . $cart['id'],'<img class="lazy" alt="" src="http://placehold.it/73x73" />',array('class'=>'thumb-holder'));?>
                            </div>
                            <div class="col-xs-7 col-sm-7 ">
                                <div class="title">
                                    <?php echo anchor('shopcart/product/' . $cart['id'],$cart['name']);?>
                                </div>
                                <div class="brand">sony</div>
                            </div>

                            <div class="col-xs-1 col-sm-1 no-margin">
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
                                            <input class="le-radio" type="radio" name="fare" value="free" checked> <div class="radio-label bold">免運費</div><br>
                                            <input class="le-radio" type="radio" name="fare" value="local">  <div class="radio-label">運費<br><span class="bold">$15</span></div>
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
                </div>

                <div id="payment-method-options">
                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="pay" value="atm" checked>
                        <div class="radio-label bold ">ATM匯款<br>
                            <p>ATM匯款說明</p>
                        </div>
                    </div>

                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="pay" value="cheque">
                        <div class="radio-label bold ">支票付款</div>
                    </div>

                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="pay" value="paypal">
                        <div class="radio-label bold ">使用 Paypal 結帳</div>
                    </div>
                </div>

                <div class="place-order-button">
                    <button class="le-button big" name="submit" type="submit">確認訂單</button>
                </div>
            <?php echo form_close();?>
        </div>
    </div>
</section>