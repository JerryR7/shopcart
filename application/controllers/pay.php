<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pay extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url','form'));
    $this->load->library(array('udp_cart'));

    $this->cart = new Udp_cart('cart');
    $this->favor = new Udp_cart('favor');
    $this->compare = new Udp_cart('compare');
  }
}

/* End of file pay.php */
/* Location: ./application/controllers/pay.php */