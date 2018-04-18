<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$id = $this->input->get_post("id");
		if(!isset($id) || floor($id)!=$id || $id<1 || $id>10 || $id==""){$id=1;}
		$data["id"]=$id;
		$this->assign("data",$data);
		$this->view("about/".$id.".html");
	}
}
