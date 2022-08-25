<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Otoritas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('otority_model');
		isloggedin();
		cekoto($this->uri->segment(1));
	}

	function index()
	{
		cekoto($this->uri->segment(1), 'view');
		$this->session->unset_userdata('filter_data');

		$data['otoritas'] = $this->otority_model->getotority();
		$data['buttons'] = array('Tambah Baru <span class="m-l-5"><i class="fa fa-asterisk"></i>' => site_url('otoritas/add'));
		$this->load->templateAdmin('otoritas/list_otoritas', $data);
	}

	function add($id = '')
	{
		if($id)
			cekoto($this->uri->segment(1), 'edit');
		else
			cekoto($this->uri->segment(1), 'add');

		$this->data['js'][] = base_url('assets/custom/js/otoritas.js');

		$data['menu'] = $this->menu_model->getMenu(0, true);
		if($id > 0) {
			$data['otoritas'] = $this->otority_model->getotority($id);
		} else {
			$data['otoritas']['id']         = '';
			$data['otoritas']['nama']       = '';
			$data['otoritas']['otority']    = '';
		}
		$this->load->templateAdmin('otoritas/add_otoritas', $data);
	}

	function saving($id = '') 
	{
		if($id)
			cekoto($this->uri->segment(1), 'edit');
		else
			cekoto($this->uri->segment(1), 'add');

		$nama    = $this->input->post('nama');
		$otority = json_encode($this->input->post('otoritas'));

		$data = array(
			'nama'    => $nama,
			'otority' => $otority
		);

		if($id)
			$this->otority_model->update($data, $id);
		else
			$this->otority_model->saving($data);

		redirect('otoritas');
	}

	function delete($id) {
		cekoto($this->uri->segment(1), 'delete');

		$this->otority_model->delete($id);
		$this->session->set_flashdata('global', get_alert('success', 'Data berhasil dihapus.'));
		redirect('otoritas');
	}
}
?>