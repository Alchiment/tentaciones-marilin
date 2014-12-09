<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Cliente extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('cliente_model', 'cliente');
		}

		function index(){
			if(!$this->ion_auth->logged_in())
			{
				redirect('auth/login', 'refresh');
			}
			elseif ($this->ion_auth->is_admin())
			{
				redirect('administrator', 'refresh');
			}
			else
			{
				$data['users'] = $this->ion_auth->users()->result();

				foreach ($data['users'] as $key => $value) {
					$data['users'][$key]->groups = $this->ion_auth->get_users_groups($value->id)->result();
				}

				$data['usuarios'] = $value = $this->ion_auth->user()->row();

				$this->load->view('body/head.php');
				$this->load->view('body/header.php',$data);
				// $this->load->view('cpanel', $data);
				$this->load->view('body/footer.php');
			}
		}
	}
?>