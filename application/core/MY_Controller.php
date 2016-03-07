<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Code fix to get rid of the timezone errors when using PHP 5.3.* */
if( ! ini_get('date.timezone') ){ date_default_timezone_set('GMT'); }


class MY_Controller extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
	
		// Whatever appears here will appear on all pages that inherit this class "MY_Controller"
		echo 'from MY_Controller "Core module" <br \>';
		
	}	
	
	
	public function index()
	{

	}
		

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */