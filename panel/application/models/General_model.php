<?php
/**
 * 
 */
class general_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function get($id = 0, $type = 'array')
	{
		if($id)
			$this->db->where('id', $id);

		$this->db->order_by('title', 'asc');
		if($type == 'array')
			$roots = $this->db->get('pp_settings')->result_array();
		else
			$roots = $this->db->get('pp_settings')->result();

		if($id > 0)
			$goods = $roots[0];
		else
			$goods = $roots;

		return $goods;
	}

	function saving($datas) {
		$this->db->insert('pp_settings', $datas);
	}

	function update($datas, $id) {
		$this->db->where('id', $id);
		$this->db->update('pp_settings', $datas);
	}

	function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('pp_settings');
	}
}
?>