<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Upload extends CI_Upload {

  public function set_upload($file = 'userfile')
  {
    //print_r($_POST);
    if($this->do_upload($file))
    {
      echo "<script>alert('檔案上傳成功！')</script>";
      return $this->data();
    }
    else
    {
      echo $this->display_errors();
    }
  }

}

/* End of file My_upload.php */
/* Location: ./application/controllers/My_upload.php */