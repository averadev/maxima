<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

setlocale(LC_ALL,"es_ES@euro","es_ES","esp");

//require APPPATH.'/libraries/REST_Controller.php';


/**
 * The Saving coupon
 * Author: Alberto Vera Espitia
 * GeekBucket 2014
 *
 */
class Registration extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->database('default');
		$this->load->model('registration_db');
    }

	public function index(){
		$this->load->view('vwRegistration');
    }
    
    // almacena el registro
	public function save(){
		if($this->input->is_ajax_request()){
            $data = $this->registration_db->insert($_POST);
            echo json_encode($data);
        }
	}
	
}