<?php

	class Crud_model extends CI_Model{

		function insert_data($data){

			//echo "test";
			$re= $this->db->insert('users',$data);
			//var_dump($re);
			return $re;
		}

		function selectData(){

			//return "testing";
			$query= $this->db->get('users');

			// echo "<pre>";
			// print_r($query);
			// echo "</pre>";

			if($query->result_id->num_rows>0){
				//echo "ok";
				//$ans=$query->result();
				$ans=$query->result_array();

				// echo "<pre>";
				//  print_r($ans);
			 // 	echo "</pre>";

				return $ans;
			}
			else{
				return 0;
			}
		}

		function deleterecord($id){

			return $this->db->delete('users' , array('uid'=>$id));
		}
	}

?>