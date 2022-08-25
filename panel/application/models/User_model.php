<?php

/**

 * 

 */

class User_model extends CI_Model

{

	public $dbname = 'tb_user';

	function __construct()

	{

		parent::__construct();

	}



	function getuser($id = 0, $filter = array(), $hlm = 1, $totrows = false)

	{

		if($id)

			$this->db->where('USE_ID', $id);



		$this->db->where(

			[

				'USE_ISDELETE' => 0,

				'USE_ID != ' => 1,

			]

		);



		// pagination

		if(!$totrows) {

			$start = ($hlm - 1) * $this->config->item('itemperpage');

			$this->db->limit($this->config->item('itemperpage'), $start);

		}

		

		if(count($filter) > 0)

			$this->db->where($filter);



		$this->db->order_by('USE_NAMA', 'asc');

		$roots = $this->db->get('tb_user')->result_array();



		if($id > 0)

			$menus = $roots[0];

		else

			$menus = $roots;



		return $menus;

	}



	function totrows($filter = array()) {

		$rows = $this->getuser(0, $filter, 1, true);

		return count($rows);

	}



	function add($datas) {

		if($datas['USE_PASS'])
			$datas['USE_PASS'] = md5($datas['USE_PASS']);
		else
			unset($datas['USE_PASS']);		

		$this->db->insert('tb_user', $datas);

	}



	function update($datas, $id) {

		if($datas['USE_PASS'])

			$datas['USE_PASS'] = md5($datas['USE_PASS']);

		else

			unset($datas['USE_PASS']);



		$this->db->where('USE_ID', $id);

		$this->db->update('tb_user', $datas);

	}



	function delete($id) {

		$this->db->where('USE_ID', $id);

		$this->db->update('tb_user', array('USE_ISDELETE'=> '1'));

	}



	function auth($username, $USE_PASS) {
		$user = array('superadmin', 'owner');
		$this->db->where(array(
			'USE_USER'     => $username,
			'USE_PASS'     => md5($USE_PASS),
			'USE_ISDELETE' => '0',
		));

		$result = $this->db->get('tb_user', 1)->result();
		if(count($result) > 0) {
			if($result[0]->USE_ISDELETE == 0)
				return $result[0];
			else
				return "nonaktif";
		}
		else
			return FALSE;

	}

	function fetch($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)
	{
		$sql = "
			SELECT 
				a.`USE_ID`,
				a.`USE_KODE`,
				a.`USE_NAMA`,
				a.`USE_AVATAR`,
				a.`USE_ISDELETE`,
				a.`USE_USER`,
				a.`USE_PASS`,
				a.`OTORITY_ID`,
				a.`OTORITY`,
				a.`member_id`,
				a.`employeeid`,
				c.`nama` as `group`
			FROM 
				`$this->dbname` as a
			LEFT JOIN `pp_otority` as c ON a.`OTORITY_ID` = c.`id`
			WHERE 1=1 
				AND a.`USE_ID` != '1' 
				AND a.`USE_ISDELETE` != '1'
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