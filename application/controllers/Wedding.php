<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wedding extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Wedding",
			"stylesheet" => array("dashboard.css","wedding.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "Wedding",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
