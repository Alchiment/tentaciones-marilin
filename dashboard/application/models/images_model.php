<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Images_model extends CI_Model{
		function __construct(){
			$this->load->database();
			$this->load->library(array('ion_auth','form_validation'));
		}

		function inicializar($id = null, $objetos = false){

		}
		function getLista(){
			$query = $this->db->get('images');
			// echo "<pre>";
			// print_r($query->result());
			// echo "</pre>";

			// print_r($query);
			return $query->result();
		}
	}
?>