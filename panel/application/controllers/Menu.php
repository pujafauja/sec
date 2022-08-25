<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Menu extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		isloggedin();
		cekoto($this->uri->segment(1));
	}

	function index()
	{
		cekoto('menu', 'view', true, true);
		$this->data['js'][] = base_url('assets/custom/js/menu_manager.js');
		$this->data['js'][] = base_url('assets/js/pages/fontawesome.init.js');

		$data = array(
				'menu' => $this->menu_model->getMenu(NULL, true),
				'buttons' => array(
					'Tambah Baru <span class="m-l-5"><i class="fa fa-asterisk"></i>' => site_url('menu/add'),
				)
			);
		$this->load->templateAdmin('menu/list_menu', $data);
	}

	function add($id = '')
	{
		if($id)
			cekoto($this->uri->segment(1), 'edit');
		else
			cekoto($this->uri->segment(1), 'add');
		$this->session->unset_userdata('filter_data');

	    $this->data['js'][] = base_url('assets/custom/js/modal-icon.js');
	    $this->load->model('Icon_model');

	    $data['allicon'] = $this->Icon_model->get();

		$data['allmenu'] = $this->menu_model->getMenu(0, FALSE);
		if($id > 0) {
			$data['menu'] = $this->menu_model->getMenu($id, FALSE);
		} else {
			$data['menu']['id']       = '';
			$data['menu']['nama']     = '';
			$data['menu']['class']    = '';
			$data['menu']['parentid'] = '';
			$data['menu']['icon']     = '';
			$data['menu']['urutan']   = '';
		}
		$this->load->templateAdmin('menu/add_menu', $data);
	}

	function saving($id = '') 
	{
		if($id)
			cekoto($this->uri->segment(1), 'edit');
		else
			cekoto($this->uri->segment(1), 'add');

		$nama     = $this->input->post('nama');
		$class    = $this->input->post('class');
		$parentid = $this->input->post('parentid');
		$icon     = $this->input->post('icon');
		$urutan   = $this->input->post('urutan');

		$data = array(
			'nama'     => $nama,
			'class'    => $class,
			'parentid' => $parentid,
			'icon'     => $icon,
			'urutan'   => $urutan
		);

		if($id)
			$this->menu_model->update($data, $id);
		else
			$this->menu_model->saving($data);

		$this->session->set_flashdata('global', get_alert('success', 'Data berhasil disimpan.'));
		redirect('menu');
	}

	function delete($id) {
		cekoto($this->uri->segment(1), 'delete');

		if($id == 2) {
			$this->session->set_flashdata('global', get_alert('danger', 'Anda tidak dapat menghapus Menu Manager'));
			redirect('menu');
			exit();
		}
		$this->menu_model->delete($id);
		$this->session->set_flashdata('global', get_alert('success', 'Data berhasil dihapus.'));
		redirect('menu');
	}

	function setstatus() {
		cekoto($this->uri->segment(1), 'edit');

		$id      = $this->input->post('id');
		$newstat = $this->input->post('newstat');

		$newdata = array('status' => $newstat);

		$this->menu_model->update($newdata, $id);
	}
}
?>