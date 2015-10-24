<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class registration_db extends CI_MODEL
{
 
    public function __construct(){
        parent::__construct();
    }
    
    /**
	* inserta los datos de un cloud por hora
	*/
	public function insert($data){
		$this->db->insert('registration', $data);
        return $this->db->insert_id();
	}
	

}
//end model