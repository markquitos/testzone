<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Code fix to get rid of the timezone errors when using PHP 5.3.* */
if( ! ini_get('date.timezone') ){ date_default_timezone_set('GMT'); }



class Welcome extends MX_Controller {


	public function __construct(){
		parent::__construct();
	}


	public function index(){
		echo 'test page success';
		//$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */