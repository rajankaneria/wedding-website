<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function rsvp(){
		$this->load->model("rsvp_model");
		$rsvpData = $_POST["rsvpData"];
		$mobile = $_POST["mobile"];
		$wedding_id = $_POST["wedding_id"];
		$this->rsvp_model->updateRsvp($rsvpData,$mobile,$wedding_id);
	}

	public function sendOTP(){
		$this->load->model("rsvp_model");
		$mobile = $_POST["mobile"];
		$name = $_POST["guestname"];
		$weddingID = 8;
		$details = $this->rsvp_model->sendOTP($mobile,$weddingID,$name);
	}

	public function verifyOTP(){
		$this->load->model("rsvp_model");
		$otp = $_POST["otp"];
		$mobile = $_POST["mobile"];
		$otpData = array(
			"weddingID" => 8,
			"otp" => $otp,
			"mobile" => $mobile
		);
		$output = $this->rsvp_model->verifyOTP($otpData);
		if($output["status"] == 1){
			echo "verified";
		}else{
			echo "fail";
		}
	}

}