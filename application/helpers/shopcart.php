<?php
  function _if_in_cart($cart_array,$product_id)
  {
    foreach($cart_array as $cart) {
      if($cart['id'] == $product_id)
      {
        echo 'disabled';
        break;
      }
    }
  }

?>