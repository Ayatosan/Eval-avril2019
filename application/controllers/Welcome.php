<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->helper('url');

}
public function base()
{
	$this->load->view('base');
}
	public function index()
	{
		// $this->load->view('index');
		$this->load->renderWithTemplate('index');
	}

	public function foo()
	{
		$this->load->renderWithTemplate('foo');
	}


	public function bar()
	{
		$id = uniqid();
		$this->load->renderWithTemplate('bar');
	}

	public function inscription(){
	$this->load->view('inscription');
	$_SESSION['user'] = 'Yop !!';
	// $this->load->database();
}
public function username(){

	echo $_SESSION['user'];
}
}
