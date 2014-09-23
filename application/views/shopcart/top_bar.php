<nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
                <li><?php echo anchor('','首頁');?></li>
                <li class="dropdown">
                    <a class="dropdown-toggle"  data-toggle="dropdown" href="#change-colors">主題顏色</a>

                    <ul class="dropdown-menu" role="menu" >
                        <li role="presentation"><a role="menuitem" class="changecolor green-text" tabindex="-1" href="#" title="Green color">綠色</a></li>
                        <li role="presentation"><a role="menuitem" class="changecolor blue-text" tabindex="-1" href="#" title="Blue color">藍色</a></li>
                        <li role="presentation"><a role="menuitem" class="changecolor red-text" tabindex="-1" href="#" title="Red color">紅色</a></li>
                        <li role="presentation"><a role="menuitem" class="changecolor orange-text" tabindex="-1" href="#" title="Orange color">橘色</a></li>
                        <li role="presentation"><a role="menuitem" class="changecolor navy-text" tabindex="-1" href="#" title="Navy color">深藍色</a></li>
                        <li role="presentation"><a role="menuitem" class="changecolor dark-green-text" tabindex="-1" href="#" title="Darkgreen color">深綠色</a></li>
                    </ul>
                </li>
                <li><?php echo anchor('shopcart/faq','常見問題');?></li>
                <li><?php echo anchor('shopcart/contact','聯絡我們');?></li>
            </ul>
        </div><!-- /.col -->

        <div class="col-xs-12 col-sm-6 no-margin">
            <ul class="right">
                <li><?php echo anchor('shopcart/auth','註冊會員');?></li>
                <li><?php echo anchor('shopcart/auth','登入');?></li>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav>