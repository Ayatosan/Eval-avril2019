<?php

// session_start(); //we need to start session in order to access it through CI

Class User_Authentication extends CI_Controller {


	public function __construct() {
		parent::__construct();
		
	$this->session->set_userdata($array);

}
}
?>
