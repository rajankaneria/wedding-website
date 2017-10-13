<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function rsvp(){
		$rsvpData = $_POST["rsvpData"];

		echo $rsvpData["guest_count"];

	}

}