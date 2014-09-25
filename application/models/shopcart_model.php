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

  public function insert_newsletter($email)
  {
    //判斷有無重複的email，有的話則不新增。
    $query = $this->db->select('email')->get('newsletter')->result();
    foreach($query as $query) {
      if($query->email == $email) {
        $check = false;
        break;
      }
      else {
        $check = true;
      }
    }

    if($check) {
      $data = array(
        'email' => $email,
        'date' => date('Y-m-d H:i:s'),
      );
      $this->db->insert('newsletter',$data);
    }
  }

  public function delete_newsletter($email)
  {

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