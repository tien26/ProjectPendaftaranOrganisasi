<?php 
class M_Irmas extends CI_Model{

    function tampil_data(){
        return $this->db->get('tbl_a_irmas');
    }

    function input_data($data, $table){
        $this->db->insert($table,$data);
    }

    function view_data($where, $table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function cek($username){
		$query = $this->db->query("Select * from tbl_a_irmas where username='$username' ");
		return $query;
	}
}