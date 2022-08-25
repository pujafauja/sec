<?php
/**
 * 
 */
class Icon_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function get($id = 0, $filter = array(), $hlm = 1, $totrows = false)
	{
		if($id)
			$this->db->where('id', $id);

		if(count($filter) > 0)
			$this->db->where($filter);

		$this->db->order_by('id', 'asc');
		$roots = $this->db->get('tb_fa')->result_array();

		if($id > 0)
			$menus = $roots[0];
		else
			$menus = $roots;

		return $menus;
	}

}
?>