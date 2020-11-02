<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SetTable extends CI_Controller {
    public function __construct(){
        parent:: __construct();
               
    }

	public function index(){
        $this->load->view("SetTableView");
    }
    public function form_validation(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("tbl_name", "Table Name", 'required|alpha');
        if($this->form_validation->run())  
        { 
            $tbl_name = $this->input->post("tbl_name");
            if($tbl_name == "Product" || $tbl_name == "product"){
                redirect(base_url()."Products/index");
            }
            else{
                $this->index();
            }
        }
        else{
            $this->index();
        }
    }
}
?>
