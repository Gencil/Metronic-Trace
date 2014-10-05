<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// comen baru

class Dashboard extends MX_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
        $data['pagetitle']	= 'Dashboard';
        $data['time'] 		= date('Y/m/d');
        $js['js']			= array('vmap','flot','pulsate','daterange','gritter','fullcalendar','piechart','sparkline');
        $js['custom']		= array('jvmap');
		$this->template->display('dashboard', $data, $js);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */