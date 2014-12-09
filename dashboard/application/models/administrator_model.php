<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Administrator_model extends CI_Model{

		function __construct(){
			// parend::__construct();
			$this->load->database();
			$this->load->library(array('ion_auth','form_validation'));
		}

		function getSession(){

			$data['users'] = $this->ion_auth->users()->result();

			foreach ($data['users'] as $key => $value) {
				$data['users'][$key]->groups = $this->ion_auth->get_users_groups($value->id)->result();
			}

			$data['usuarios'] = $value = $this->ion_auth->user()->row();

			return $data;
		}
	}
?>