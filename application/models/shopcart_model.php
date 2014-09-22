<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shopcart_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function get_product($product_id = FALSE)
  {
    if($product_id === FALSE)
    {
      $query = $this->db->get('product');
      return $query;
    }

    $query = $this->db->get_where('product',array('product_id'=>$product_id));
    return $query;
  }

  public function add_cart()
  {


  }

  public function add_favor()
  {

  }

  public function add_compare()
  {

  }

}

/* End of file shopcart_model.php */
/* Location: ./application/models/shopcart_model.php */