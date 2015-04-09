<?php namespace models;

class Contacts extends \core\model {

	public function get_contacts(){
		return $this->_db->select("SELECT * FROM ".PREFIX."contact ORDER BY name ");
	}

	public function get_contact($id){
		return $this->_db->select("SELECT * FROM ".PREFIX."contact WHERE id= :id ORDER BY name ",array(':id'=>$id));
	}

	public function insert_contact($data){
		return $this->_db->insert(PREFIX.'contact',$data);
	}

	public function update_contact($data,$where){
		$this->_db->update(PREFIX.'contact',$data,$where);
	}

	public function delete_contacts($where){
		$this->_db->delete(PREFIX.'contact',$where);
	}
}

?>