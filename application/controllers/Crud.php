<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index(){

		$this->load->view('index');
	}

	public function action_page(){
		//print_r($_POST);
		$this->form_validation->set_rules('uemail','EMAIL','trim|required|valid_email|is_unique[users.uemail]');
		$this->form_validation->set_rules('upass','PASSWORD','trim|required|min_length[4]|max_length[10]|alpha_numeric');

		if($this->form_validation->run()==false){

			$this->load->view('index.php');
		}
		else{
			//echo "ohk";
			$_POST['upass']= do_hash($_POST['upass']);
			//print_r($_POST);
			$this->load->model('crud_model');
			if($this->crud_model->insert_data($_POST)){

				redirect(base_url('index.php/crud/show'));

			}
		}
	}

	public function show(){

		$this->load->model('crud_model');
			$result=$this->crud_model->selectData();
			//print_r($result);

			$this->load->view('show_page',array("xyz"=>$result));
	}

	function deleteData($id){

			$this->load->model('crud_model');
			if($this->crud_model->deleterecord($id))
			{
				redirect(base_url('index.php/crud/show'));
			}
		}

}

?>