<?php

/**
 * All database can access from here
 */
class Global_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function _retrieve(
		$table,
		$select,
		$colOrder     = array(),
		$filter       = array(),
		$where        = NULL,
		$like_value   = NULL, 
		$column_order = NULL, 
		$column_dir   = NULL, 
		$limit_start  = NULL, 
		$limit_length = NULL,
		$group_by     = NULL
	)
	{
		// echo $select . "<br>";
		$sql = "
			SELECT 
				$select
			FROM 
				$table
			WHERE 1 
		";

		if($where != NULL)
			$sql .= $where;

		if($group_by)
			$sql .= " GROUP BY $group_by";
		
		$data['totalData'] = $this->db->query($sql)->num_rows();
		
		if( ! empty($like_value) && count($filter) > 0)
		{
			$sql .= " AND ( ";

			$ii = 0;
			foreach($filter as $filt):
				if($ii == 0):
					$sql .= $filt . ' LIKE \'%'.$this->db->escape_like_str($like_value).'%\'';
				else:
					$sql .= ' OR ' . $filt . ' LIKE \'%'.$this->db->escape_like_str($like_value).'%\'';
				endif;
				$ii++;
			endforeach;
			$sql .= " ) ";
		}
		
		$data['totalFiltered']	= $this->db->query($sql)->num_rows();
		
		$columns_order_by = $colOrder;
		
		$sql .= " ORDER BY ".$columns_order_by[$column_order]." ".$column_dir;
		$sql .= " LIMIT ".$limit_start." ,".$limit_length." ";
		
		$data['query'] = $this->db->query($sql);
		return $data;
	}

	function _get($table, $where = array(), $where_in = array(), $or_where = array(), $select = false, $join = array(), $limit = false, $order_by = false, $group_by = false)
	{
		if($select)
			$this->db->select($select);
		if(count($join) > 0) {
			$this->db->from($table);

			foreach ($join as $j) {
				$this->db->join($j[0], $j[1], $j[2]);
			}

			$table = '';
		}
		if(! is_array($where))
			$this->db->where($where);
		if(is_array($where) && count($where) > 0)
			$this->db->where($where);
		if(count($where_in) > 0)
		{
			foreach($where_in as $field => $value):
				$this->db->where_in($field, $value);
			endforeach;
		}
		if(count($or_where) > 0)
			$this->db->or_where($or_where);
		if($limit)
			$this->db->limit($limit);
		if($order_by != false) {
			if(is_array($order_by))
				$this->db->order_by($order_by[0], $order_by[1]);
			else
				$this->db->order_by($order_by);
		}
		if($group_by)
			$this->db->group_by($group_by);

		return $this->db->get($table);
	}

	function _update($table, $data, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function _update_batch($table, $data, $where)
	{
		$this->db->update_batch($table, $data, $where);
	}

	function _insert_batch($table, $data)
	{
		$this->db->insert_batch($table, $data);
	}

	function _row($table, $where)
	{
		$this->db->where($where);

		return $this->db->get($table);
	}

	function _insert($table, $data)
	{
		$this->db->insert($table, $data);

		return $this->db->insert_id();
	}

	function _delete($table, $where)
	{
		return $this->db->where($where)->delete($table);
	}
}

?>