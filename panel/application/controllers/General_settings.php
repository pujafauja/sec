<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class General_settings extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('general_model');
		isloggedin();
		cekoto($this->uri->segment(1), 'edit');
	}

	function index()
	{
		$data['general'] = $this->general_model->get(1);
		$this->load->templateAdmin('setting/list_general', $data);
	}

	private function _uploadImage()
	{
	    $config['upload_path']   = './upload/popoti/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['file_name']     = 'logo';
	    $config['overwrite']     = true;
	    $config['max_size']      = 50000; // 1MB
	    // $config['max_width']  = 1024;
	    // $config['max_height'] = 768;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('image')) {
	        return $this->upload->data("file_name");
	    }
	    
	    return "default.jpg";
	}

	function saving($id = '') 
	{
		print_ar($_POST);
		die();
		$title       = $this->input->post('title');
		$facebook    = $this->input->post('facebook');
		$twitter     = $this->input->post('twitter');
		$instagram   = $this->input->post('instagram');
		$linkedin    = $this->input->post('linkedin');
		$uploadimage = $_FILES['header']['size'];

		if (!empty($_FILES["image"]["name"])) {
		    $this->image = $this->_uploadImage();

		    $dataimage = array('gambar' => base_url('upload/popoti/logo.png'));
		    $this->general_model->update($dataimage, $id);
		}

		$config['upload_path']   = './upload/popoti/';
		$config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']      = 100;
		// $config['max_width']     = 1024;
		// $config['max_height']    = 768;

		$this->load->library('upload', $config);

		$data = array(
			'title'     => $title,
			'facebook'  => $facebook,
			'twitter'   => $twitter,
			'instagram' => $instagram,
			'linkedin'  => $linkedin,
		);

		if ($uploadimage > 0 && ! $this->upload->do_upload('header')){
			$this->session->set_flashdata('global', get_alert('error', $this->upload->display_errors()));
			redirect('general_settings');
		} else if ($uploadimage > 0) {
			$upload_data = $this->upload->data();
			$data['header'] = $upload_data['file_name'];
		}

		if($id)
			$this->general_model->update($data, $id);
		else
			$this->general_model->saving($data);

		$this->session->set_flashdata('global', get_alert('success', 'Data berhasil disimpan.'));
		redirect('general_settings');
	}
}