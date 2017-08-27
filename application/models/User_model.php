<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_Model {

	public $table_name = 'user';

	public function login($params = array()){
		$this->db->select($this->table_name.'.*,
			group.name AS group,
			user_group.group_id AS group_id');
		$this->db->join('user_group', 'user_group.user_id = '.$this->table_name.'.id', 'left');
		$this->db->join('group', 'group.id = user_group.group_id', 'left');
		$this->db->where('email', $params['email']);
		$this->db->where('password', $params['password']);
		$query = $this->db->get($this->table_name);
		//echo $this->db->last_query();
		if ($item = $query->row_array()) {
			return $item;
		}else{
			return NULL;
		}

	}
	
	public function get_rows($params = array()){
		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get();
		$items = $query->result_array();
		//echo $this->db->last_query();
		return $items;
	}
	
	public function get_row($id, $params = array()){
		$this->db->where('id', $id);
		$query = $this->db->get($this->table_name);
		$item = $query->row_array();
		return $item;
	}


	public function create($params){
		$this->db->insert($this->table_name, $params); 
		if($id = $this->db->insert_id()){
			return $this->get_row($id);
		}else{
			return null;
		}
	}

	public function update($id, $params){
		$this->db->trans_start();
		$this->db->where('id', $id);
		$this->db->update($this->table_name, $params); 
		$this->db->trans_complete();
		$success = ($this->db->trans_status() === FALSE) ? FALSE : TRUE; 
		if($success){
			return $this->get_row($id);
		}else{
			return null;
		}
	}

	public function delete($id){
		//$success = FALSE;
		$this->db->trans_start();
		$this->db->where('id', $id);
		$this->db->delete($this->table_name);
		$this->db->trans_complete();
		$success = ($this->db->trans_status() === FALSE) ? FALSE : TRUE; 
		return $success;
/*		if($success){
			return $this->get_row($id);
		}else{
			return null;
		}*/
	}
	
}
/* End of file User_model.php */
/* Location: /application/models/User_model.php */