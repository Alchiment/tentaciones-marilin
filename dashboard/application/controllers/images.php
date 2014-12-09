<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Images extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->model('administrator_model', 'administrator');
		$this->load->model('images_model');
	}
	function index()
	{
		if(!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}else
		{
			$this->load->model('images_model', 'images');
			$data['usuarios'] = $this->administrator->getSession();
			$data['selection'] = array(
				'actUsu'	=> '',
				'actDash' 	=> '',
				'actImg' 	=> 'active'
				);

			$data['imagenes'] = $this->images->getLista();
			// echo "<pre>";
			// print_r($data['imagenes']);
			// echo "</pre>";

			$this->load->view('body/head.php');
			$this->load->view('body/header.php',$data);
			$this->load->view('images/gallery.php',$data);
			$this->load->view('body/footer.php');
		}
	}

	function add_images()
	{
		if(!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}else
		{
			$this->load->model('images_model', 'images');
			$data['usuarios'] = $this->administrator->getSession();
			$data['selection'] = array(
				'actUsu'	=> '',
				'actDash' 	=> '',
				'actImg' 	=> 'active'
				);

			$data['imagenes'] = $this->images->getLista();
			// echo "<pre>";
			// print_r($data['imagenes']);
			// echo "</pre>";

			$this->load->view('body/head.php');
			$this->load->view('body/header.php',$data);
			$this->load->view('images/add_image.php',$data);
			$this->load->view('body/footer.php');
		}
	}
}