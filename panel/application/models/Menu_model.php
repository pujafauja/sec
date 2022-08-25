<?php
/**
 * 
 */
class Menu_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getMenu($id = 0, $fornested = TRUE, $otoritas = FALSE, $where = array())
	{
		if($id)
			$this->db->where('id', $id);

		if($fornested)
			$this->db->where('status', '1');

		if($otoritas) {
			$otoritas = json_decode($otoritas);
			$otoritas2 = array();
			foreach($otoritas as $oto => $aksi) {
				$otoritas2[] = $oto;
			}
			$this->db->where_in('class', $otoritas2);
		}

		if(is_array($where) && count($where) > 0)
			$this->db->where($where);

		$this->db->order_by('parentid,urutan', 'asc');
		$roots = $this->db->get('pp_menus')->result_array();

		if($fornested)
			$menus = ordered_menu($roots, 0);
		else if($id > 0)
			$menus = $roots[0];
		else
			$menus = $roots;

		return $menus;
	}

	function saving($datas) {
		$this->db->insert('pp_menus', $datas);
	}

	function update($datas, $id) {
		$this->db->where('id', $id);
		$this->db->update('pp_menus', $datas);
	}

	function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('pp_menus');
	}

	function tot_cust() {
		$this->db->group_by('LOWER(nama_pembeli)');
		$result = $this->db->get('tx_order');
		return $result->num_rows();
	}

	function tot_order() {
		$result = $this->db->get('tx_order');
		return $result->num_rows();
	}

	function profit() {
		// global variable
		$sales = 0;
		$costs = 0;

		// ambil total penjualan dan pemasukkan
		$this->db->select_sum('grandtotal');
		$this->db->from('tx_order');
		$this->db->where('type !=', '2');
		$penjualan = $this->db->get()->result_array();
		$sales    += $penjualan[0]['grandtotal'];

		$this->db->select_sum('grandtotal');
		$this->db->from('tx_pemasukan');
		$this->db->where('type !=', '2');
		$pemasukan = $this->db->get()->result_array();
		$sales    += $pemasukan[0]['grandtotal'];

		$this->db->select_sum('nominal');
		$this->db->from('tx_piutang_pay');
		$piutang = $this->db->get()->result_array();
		$sales  += $piutang[0]['nominal'];

		// ambil total pengeluaran dan pembelian
		$this->db->select_sum('grandtotal');
		$this->db->where('type', '0');
		$this->db->from('tx_pembelian');
		$pembelian = $this->db->get()->result_array();
		$costs    += $pembelian[0]['grandtotal'];

		$this->db->select_sum('grandtotal');
		$this->db->where('type', '0');
		$this->db->from('tx_pengeluaran');
		$pengeluaran = $this->db->get()->result_array();
		$costs      += $pengeluaran[0]['grandtotal'];

		$this->db->select_sum('nominal');
		$this->db->from('tx_hutang_pay');
		$hutang = $this->db->get()->result_array();
		$costs += $hutang[0]['nominal'];

		return $sales - $costs;
	}
}
?>