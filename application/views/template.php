<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="MediaCenter, Template, eCommerce">
        <meta name="robots" content="all">

        <title>MediaCenter - Responsive eCommerce Template</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

        <!-- Customizable CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/red.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.transitions.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css">

        <!-- Demo Purpose Only. Should be removed in production -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/config.css">

        <link href="<?php echo base_url();?>assets/css/green.css" rel="alternate stylesheet" title="Green color">
        <link href="<?php echo base_url();?>assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
        <link href="<?php echo base_url();?>assets/css/red.css" rel="alternate stylesheet" title="Red color">
        <link href="<?php echo base_url();?>assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
        <link href="<?php echo base_url();?>assets/css/navy.css" rel="alternate stylesheet" title="Navy color">
        <link href="<?php echo base_url();?>assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
        <!-- Demo Purpose Only. Should be removed in production : END -->

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Icons/Glyphs -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

        <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
        <!--[if lt IE 9]>
            <script src="<?php echo base_url();?>assets/js/html5shiv.js"></script>
            <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script>
        <script>
        $(document).ready(function(){
            $(document).on('click', 'a.add_cart', function(event){
                var product_id = $(this).parents().siblings('input#product_id').val();
                alert(product_id);
                $.ajax({
                    type : 'POST',
                    url : '<?php echo site_url("shopcart/add_cart");?>',
                    data : {
                        <?php if($this->uri->segment(2) == 'product'):?>
                        qty : $('#qty').val(),
                        <?php endif;?>
                        product_id : product_id
                    },
                    success : function(data){
                        alert('成功新增到購物車');
                        $('#top_cart').html(data);
                    },
                })
            });
            $(document).on('click', 'a.add_favor', function(event){
                var product_id = $(this).parent().siblings('input#product_id').val();
                alert(product_id);
                $.ajax({
                    type : 'POST',
                    url : '<?php echo site_url("shopcart/add_favor");?>',
                    data : {
                        product_id : product_id
                    },
                    success : function(data){
                        alert('成功新增到喜歡清單');
                        $('#top_favor').html(data);
                    },
                })
            });
            $(document).on('click', 'a.add_compare', function(event){
                var product_id = $(this).parent().siblings('input#product_id').val();
                alert(product_id);
                $.ajax({
                    type : 'POST',
                    url : '<?php echo site_url("shopcart/add_compare");?>',
                    data : {
                        product_id : product_id
                    },
                    success : function(data){
                        alert('成功新增到比較清單');
                        $('#top_compare').html(data);
                    },
                })
            });

            $(document).on('click', '.close-btn', function(event){
                var product_id = $(this).siblings('.destroy_cart').val();
                if(confirm("確定要刪除這筆商品？")) {
                    $.ajax({
                        type : 'POST',
                        url : '<?php echo site_url("shopcart/destroy_cart");?>',
                        data : {
                            product_id : product_id
                        },
                        success : function(data){
                            $('#top_cart').html(data);
                            <?php if($this->uri->segment(2) == 'cart'):?>
                            location.reload();
                            <?php endif;?>
                        },
                    });
                }
            })
        })
        </script>
        <?php if($this->uri->segment(2) == 'index' || $this->uri->segment(2) == ''):?>
        <script type="text/javascript">
        $(document).ready(function(){
        var track_click_feature = 0;
        var track_click_new = 0;
        var track_click_popular = 0;
        var total_pages = <?php echo $total_pages;?>;

        $('#results_feature').load("<?php echo site_url('shopcart/fetch_pages');?>",
          {
            'page':track_click_feature,
            'item_per_page': <?php echo $item_per_page;?>,
          },
          function(){
            track_click_feature++;
            if(track_click_feature == total_pages)
            {
              $(".feature").attr("disabled","disabled");
            }
          });

        $('.feature').click(function(e){
          $(this).hide();
          $('.animation_image feature').show();
          if(track_click_feature < total_pages)
          {
            $.ajax({
              url : '<?php echo site_url("shopcart/fetch_pages");?>',
              type : 'POST',
              data : {
                page : track_click_feature,
                item_per_page : <?php echo $item_per_page;?>
              },
              success : function(data){
                $('.btn-loadmore feature').show();
                $('#results_feature').append(data);
                /*$("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);*/
                $('.animation_image feature').hide();
                track_click_feature++;
              },
              error : function(xhr,ajaxOptions,thrownError){
                alert(thrownError);
              }
            });

            if(track_click_feature >= total_pages-1)
            {
              $(".feature").attr("disabled","disabled");
            }
          }
        });

        $('#results_new').load("<?php echo site_url('shopcart/fetch_pages');?>",
          {
            'page':track_click_new,
            'item_per_page': <?php echo $item_per_page;?>,
          },
          function(){
            track_click_new++;
            if(track_click_new == total_pages)
            {
              $(".btn-loadmore new").attr("disabled","disabled");
            }
          });

        $('.new').click(function(e){
          $(this).hide();
          $('.animation_image new').show();

          if(track_click_new < total_pages)
          {
            $.ajax({
              url : '<?php echo site_url("shopcart/fetch_pages");?>',
              type : 'POST',
              data : {
                page : track_click_new,
                item_per_page : <?php echo $item_per_page;?>
              },
              success : function(data){
                $('.btn-loadmore new').show();
                $('#results_new').append(data);
                /*$("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);*/
                $('.animation_image new').hide();
                track_click_new++;
              },
              error : function(xhr,ajaxOptions,thrownError){
                alert(thrownError);
              }
            });

            if(track_click_new >= total_pages-1)
            {
              $(".btn-loadmore new").attr("disabled","disabled");
            }
          }
        });



        $('#results_popular').load("<?php echo site_url('shopcart/fetch_pages');?>",
          {
            'page':track_click_popular,
            'item_per_page': <?php echo $item_per_page;?>,
          },
          function(){
            track_click_popular++;
            if(track_click_popular == total_pages)
            {
              $(".btn-loadmore popular").attr("disabled","disabled");
            }
          });

        $('.popular').click(function(e){
          $(this).hide();
          $('.animation_image popular').show();

          if(track_click_popular < total_pages)
          {
            $.ajax({
              url : '<?php echo site_url("shopcart/fetch_pages");?>',
              type : 'POST',
              data : {
                page : track_click_popular,
                item_per_page : <?php echo $item_per_page;?>
              },
              success : function(data){
                $('.btn-loadmore popular').show();
                $('#results_popular').append(data);
                /*$("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);*/
                $('.animation_image popular').hide();
                track_click_popular++;
              },
              error : function(xhr,ajaxOptions,thrownError){
                alert(thrownError);
              }
            });

            if(track_click_popular >= total_pages-1)
            {
              $(".btn-loadmore popular").attr("disabled","disabled");
            }
          }
        });
      });
      </script>
      <?php endif;?>
    </head>
<body>
  <div class="wrapper">
    <?php
      foreach($view as $view):
        $this->load->view($view);
      endforeach;
    ?>
  </div>

  <?php
    foreach($contain_view as $contain):
      $this->load->view($contain);
    endforeach;
  ?>

  <!-- JavaScripts placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=zh-TW"></script>
  <script src="<?php echo base_url();?>assets/js/gmap3.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/css_browser_selector.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/echo.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.easing-1.3.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap-slider.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.raty.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.customSelect.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
  <script type="text/javascript">
    base_url = '<?php echo base_url();?>';
    address = '台北市信義區市府路1號';
  </script>
  <script src="<?php echo base_url();?>switchstylesheet/switchstylesheet.js"></script>
  <script>
  $(document).ready(function(){
    $(".changecolor").switchstylesheet( { seperator:"color"} );
    $('.show-theme-options').click(function(){
      $(this).parent().toggleClass('open');
      return false;
    });
  });

  $(window).bind("load", function() {
    $('.show-theme-options').delay(1000).trigger('click');
  });
  </script>

  <script src="http://w.sharethis.com/button/buttons.js"></script>

</body>
</html>