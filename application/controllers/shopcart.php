<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shopcart extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url','form'));
    $this->load->library(array('udp_cart'));
    $this->load->model('shopcart_model');

    $this->cart = new Udp_cart('cart');
    $this->favor = new Udp_cart('favor');
    $this->compare = new Udp_cart('compare');
  }

  public function send_email()
  {
    set_time_limit(0);
    $interval = 60;

    do{
      $config = array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_user' => 'leesu88@gmail.com',
        'smtp_pass' => 'audilgul',
        'smtp_port' => '465',
        'smtp_timeout' => 5,
        'validate' => TRUE,
      );
      $this->load->library('email',$config);
      $this->email->clear();
      $this->email->set_newline("\r\n");
      $this->email->from('your@example.com', 'Your Name');
      $this->email->to('cherub0526@livemail.tw');

      $this->email->subject('Email Test');
      $this->email->message('Testing the email class.');

      $this->email->send();

      //echo $this->email->print_debugger();
      sleep($interval);
      }while(true);
  }

  public function index()
  {
    $data = array(
      'item_per_page' => 4,
      'total_pages' => 2,
      'view' => array(
        'shopcart/top_bar','shopcart/header','shopcart/top_container'
      ),
      'contain_view' => array(
        'banner/home_banner','shopcart/product_tab','shopcart/bestsellers','shopcart/recently_review','shopcart/top_brands','shopcart/footer'
      ),
    );
    $this->load->view('template',$data);
  }

  public function category()
  {
    $data = array(
      'view' => array(
        'shopcart/top_bar','shopcart/header'
      ),
      'contain_view' => array(
        'shopcart/category','shopcart/footer'
      ),
    );
    $this->load->view('template',$data);
  }

  public function search()
  {
    $data = array(
      'view' => array(
        'shopcart/top_bar','shopcart/header'
      ),
      'contain_view' => array(
        'shopcart/category','shopcart/footer'
      ),
    );
    $this->load->view('template',$data);
  }

  public function product($product_id = FALSE)
  {
    $data = array(
      'view' => array(
        'shopcart/top_bar','shopcart/header'
      ),
      'contain_view' => array(
        'shopcart/animate','shopcart/single_product','banner/home_banner','shopcart/recently_review','shopcart/footer'
      ),
    );
    $this->load->view('template',$data);
  }

  public function faq()
  {
    $data = array(
      'view' => array(
        'shopcart/top_bar','shopcart/header'
      ),
      'contain_view' => array(
        'shopcart/animate','shopcart/faq','shopcart/footer'
      ),
    );
    $this->load->view('template',$data);
  }

  public function contact()
  {
    $data = array(
      'view' => array(
        'shopcart/top_bar','shopcart/header'
      ),
      'contain_view' => array(
        'shopcart/contact','shopcart/footer'
      ),
    );
    $this->load->view('template',$data);
  }

  public function cart()
  {
    $data = array(
      'view' => array(
        'shopcart/top_bar','shopcart/header'
      ),
      'contain_view' => array(
        'cart/cart','shopcart/footer'
      ),
    );
    $this->load->view('template',$data);
  }

  public function auth()
  {
    $data = array(
      'view' => array(
        'shopcart/top_bar','shopcart/header'
      ),
      'contain_view' => array(
        'shopcart/auth','shopcart/recently_review','shopcart/top_brands','shopcart/footer'
      ),
    );
    $this->load->view('template',$data);
  }

  public function checkout()
  {
    print_r($_POST);
    $data = array(
      'view' => array(
        'shopcart/top_bar','shopcart/header'
      ),
      'contain_view' => array(
        'cart/checkout','shopcart/footer'
      ),
    );
    $this->load->view('template',$data);
  }

  public function order_done()
  {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('buy_lastname', '購買人姓氏', 'trim|required');
    $this->form_validation->set_rules('buy_firstname', '購買人名子', 'trim|required');
    $this->form_validation->set_rules('buy_email', '購買人 Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('buy_contact', '購買人聯絡電話', 'trim|required|min_length[8]|max_length[10]|numeric');
    $this->form_validation->set_rules('buy_company', '購買人公司', 'trim');
    $this->form_validation->set_rules('buy_zip', '購買人區號', 'trim|required|min_length[3]|max_length[5]|numeric');
    $this->form_validation->set_rules('buy_address', '購買人地址', 'trim|required');

    $this->form_validation->set_rules('receive_lastname', '收件人姓氏', 'trim|required');
    $this->form_validation->set_rules('receive_firstname', '收件人名子', 'trim|required');
    $this->form_validation->set_rules('receive_email', '收件人 Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('receive_contact', '收件人聯絡電話', 'trim|required|min_length[8]|max_length[10]|numeric');
    $this->form_validation->set_rules('receive_company', '收件人公司', 'trim');
    $this->form_validation->set_rules('receive_zip', '收件人區號', 'trim|required|min_length[3]|max_length[5]|numeric');
    $this->form_validation->set_rules('receive_address', '收件人地址', 'trim|required');

    $this->form_validation->set_error_delimiters('<span class="btn-danger">', '</span>');
    $this->form_validation->set_message('required', '請輸入 %s ');
    if ($this->form_validation->run() == FALSE) {
      $data = array(
        'view' => array(
          'shopcart/top_bar','shopcart/header'
        ),
        'contain_view' => array(
          'cart/order_done','shopcart/footer'
        ),
      );
      $this->load->view('template',$data);
    }
    else {

    }
  }

  public function fetch_pages()
  {
    for($i=0;$i<4;$i++)
    {
      $this->load->view('listing/fetch_pages');
    }
  }

  public function add_cart()
  {
    $product_id = $this->input->post('product_id');
    $qty = $this->input->post('qty');
    //$product = $this->shopcart_model->get_product($product_id)->result();

    if(empty($qty)) {
      $qty = 1;
    }

    $cart = $this->cart->get_content();
    if(!empty($cart)) {
      foreach($cart as $cart) {
        if($cart['id'] != $product_id) {
          $cart = array("id" => $product_id,"qty" => $qty,"name" => "shoes","price" => "10");
          $this->cart->insert($cart);
          break;
        }
        else {
        }
      }
    }
    else {
      $cart = array("id" => $product_id,"qty" => $qty,"name" => "shoes","price" => "10");
      $this->cart->insert($cart);
    }
    $this->load->view('listing/top_cart');
  }

  public function destroy_cart()
  {
    $product_id = $this->input->post('product_id');
    if( !$this->cart->remove_item($product_id)){}

    $data['cart'] = $this->cart->get_content();

    $this->load->view('listing/top_cart',$data);
  }

  public function cart_update()
  {
    $rowid = $this->input->post('rowid');
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $price = $this->input->post('price');
    $qty = $this->input->post('qty');

    for($i=0; $i < count($id); $i++)
    {
      if($qty[$i] == 0)
      {
        $this->cart->remove_item($rowid[$i]);
      }
      else
      {
        $cart = array(
          'id' => $id[$i],
          'qty' => $qty[$i],
          'price' => $price[$i],
          'name' => $name[$i],
        );

        $this->cart->update($cart);
      }
    }
    redirect('shopcart/cart','refresh');
  }

  public function add_favor()
  {
    $product_id = $this->input->post('product_id');
    //$product = $this->shopcart_model->get_product($product_id)->result();

    $favor = array("id" => rand(1,10),"qty" => 1,"name" => "shoes","price" => "10");
    $this->favor->insert($favor);

    echo anchor('shopcart/favor','<i class="fa fa-heart"></i>喜歡商品<span class="value">(' . $this->favor->total_articles() . ')</span>');
  }

  public function add_compare()
  {
    $product_id = $this->input->post('product_id');
    //$product = $this->shopcart_model->get_product($product_id)->result();

    $compare = array("id" => rand(1,10),"qty" => 1,"name" => "shoes","price" => "10");
    $this->compare->insert($compare);

    echo anchor('shopcart/compare','<i class="fa fa-exchange"></i>比較商品<span class="value">(' . $this->compare->total_articles() . ')</span>');
  }
}

/* End of file shopcart.php */
/* Location: ./application/controllers/shopcart.php */