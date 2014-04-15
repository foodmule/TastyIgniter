<?php
class Permission extends CI_Controller {

	public function __construct() {
		parent::__construct(); //  calls the constructor
		$this->load->library('user');
	}

	public function index() {
		
		if (!file_exists(APPPATH .'views/admin/permission.php')) {
			show_404();
		}
			
		if ($this->session->flashdata('alert')) {
			$data['alert'] = $this->session->flashdata('alert');  // retrieve session flashdata variable if available
		} else {
			$data['alert'] = '';
		}

		$data['heading'] = 'Permission'; 

		$regions = array('admin/header','admin/footer');
		$this->template->regions($regions);
		$this->template->load('admin/permission', $data);
	}
}