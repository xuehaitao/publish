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
        $web_title = "了解更多";
        $meta_content = "彩麒麟-信息披露";
        $vtime = date('Y-m-d H:i:s',time());
        $data["web_title"] = $web_title;
        $data["meta_content"] = $meta_content;
        $data["vtime"] = $vtime;
        $this->assign("data",$data);
        
        $path = 'assets/jsons/transaction_data.json';
        $json_result= file_get_contents($path);
        $json_array= json_decode($json_result,true);
        
        $navstatus = array(0=>"",1=>"",2=>"",3=>"",4=>"",5=>"",6=>"");
        $id = $this->input->get_post("id");
        $subid = $this->input->get_post("subid");
		if(!isset($id) || floor($id)!=$id || $id<1 || $id>10 || $id==""){$id=1;$navstatus[0]=" active";}
        if(!isset($subid) || floor($subid)!=$subid || $subid<1 || $subid>8 || $subid==""){$subid="";}
		$data["id"]=$id;$navstatus[($id-1)]=" active";
        $data["navstatus1"] = $navstatus[0];
        $data["navstatus2"] = $navstatus[1];
        $data["navstatus3"] = $navstatus[2];
        $data["navstatus4"] = $navstatus[3];
        $data["navstatus5"] = $navstatus[4];
        $data["navstatus6"] = $navstatus[5];
        $data["navstatus7"] = $navstatus[6];
        $data["operate_data"] = $json_array["operate_data"];
        $this->assign("data",$data);
        if($subid!=""){$file=$id."_".$subid;}else{$file=$id;}
        $this->view("h5/".$file.".html");
	}
}