<?php

/**

 * 

 */

class otority_model extends CI_Model

{

	public $dbname = 'pp_otority';

	

	function __construct()

	{

		parent::__construct();

	}



	function getotority($id = 0, $type = 'array')

	{

		if($id)

			$this->db->where('id', $id);



		if($id != 1)

			$this->db->where('id !=', 1);



		$this->db->where('is_delete', '0');



		$this->db->order_by('nama', 'asc');



		return $this->db->get($this->dbname);

	}



	function saving($datas) {

		$this->db->insert($this->dbname, $datas);

	}



	function update($datas, $id) {

		$otoritas = sql_get_var('tb_user', 'OTORITY', array('USE_ID' => $this->session->userdata('user')));



		$this->db->where('id', $id);

		$this->db->update($this->dbname, $datas);



		// update table user

		/*$newoto = array(

			'OTORITY' => $datas['otority']

		);

		$this->db->where('OTORITY_ID', $id);

		$this->db->update('tb_user', $newoto);

		if($this->session->userdata('otoritas') == $otoritas)

			$this->session->set_userdata(array('otoritas' => $datas['otority']));*/

	}

	function change($datas, $id)
	{
		$this->db->where('id', $id);
		$this->db->update($this->dbname, $datas);
	}



	function delete($id) {

		$this->db->where('id', $id)

				->update($this->dbname, ['is_delete' => '1']);

	}



	function fetch($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)

	{

		$sql = "

			SELECT 

				a.`id`,

				a.`nama`

			FROM 

				`$this->dbname` as a

			WHERE 1=1 

				AND a.`id` != '1' 
				AND a.`is_delete` != '1' 

		";

		

		$data['totalData'] = $this->db->query($sql)->num_rows();

		

		if( ! empty($like_value))

		{

			$sql .= " AND ( ";    

			$sql .= "

				`nama` LIKE '%".$this->db->escape_like_str($like_value)."%'

			";

			$sql .= " ) ";

		}

		

		$data['totalFiltered']	= $this->db->query($sql)->num_rows();

		

		$columns_order_by = array( 

			0 => 'a.`nama`',

		);

		

		if($column_order && $column_dir && $limit_start && $limit_length)

		{

			$sql .= " ORDER BY ".$columns_order_by[$column_order]." ".$column_dir;

			$sql .= " LIMIT ".$limit_start." ,".$limit_length." ";

		}

		

		$data['query'] = $this->db->query($sql);

		return $data;

	}



	function row($where)

	{

		$this->db->where($where);

		return $this->db->get($this->dbname);

	}

}

?>