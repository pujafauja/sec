<?php

defined('BASEPATH') OR exit('No direct script access allowed');



/**

 * 

 */

class User extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model(
			array(
				'user_model',
				'otority_model',
				// 'District_model'
			)
		);
		// cekoto($this->uri->segment(1));
	}

	function index($hlm = 1)
	{
		cekoto('user', 'view', true, true);
		isloggedin();

        $this->data['css'][] = base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css');
        $this->data['css'][] = base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css');
        $this->data['css'][] = base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css');
        $this->data['css'][] = base_url('assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css');
        $this->data['css'][] = base_url('assets/libs/select2/css/select2.min.css"');

        $this->data['js'][] = base_url('assets/libs/datatables.net/js/jquery.dataTables.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-buttons/js/buttons.html5.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-buttons/js/buttons.flash.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-buttons/js/buttons.print.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-select/js/dataTables.select.min.js');
        $this->data['js'][] = base_url('assets/libs/pdfmake/build/pdfmake.min.js');
        $this->data['js'][] = base_url('assets/libs/pdfmake/build/vfs_fonts.js');
        $this->data['js'][] = base_url('assets/libs/select2/js/select2.min.js');

        $this->data['js'][] = base_url('assets/custom/js/user.js');

		$this->load->templateAdmin('user/data-user');
	}

	function user_json()
	{
		if($this->input->is_ajax_request())
		{
			$requestData	= $_REQUEST;
			$fetch			= $this->user_model->fetch($requestData['search']['value'], $requestData['order'][0]['column'], $requestData['order'][0]['dir'], $requestData['start'], $requestData['length']);
			
			$totalData		= $fetch['totalData'];
			$totalFiltered	= $fetch['totalFiltered'];
			$query			= $fetch['query'];

			$data	= array();
			foreach($query->result() as $row)
			{ 
				$nestedData = array(); 

				if(! $row->USE_AVATAR)
					$row->USE_AVATAR = 'default.jpg';

				$nestedData[] = '<img src="' . base_url('assets/images/img-profile/'.$row->USE_AVATAR) . '" class="img-fluid avatar-sm rounded-circle">';
				$nestedData[] = $row->USE_NAMA;
				$nestedData[] = $row->USE_USER;
				$nestedData[] = $row->group;

				$nestedData[]	= "<div class='btn-group'>
										<a href='".site_url('user/add/'.encode($row->USE_ID))."' id='Edit' class='btn btn-info waves-effect waves-light'><i class='fas fa-pen-square mr-1'></i> Edit</a>
										<a href='".site_url('user/delete/'.encode($row->USE_ID))."' class='btn btn-danger waves-effect waves-light delete'><i class='fas fa-trash-alt mr-1'></i> Delete</a>
									</div>";

				$data[] = $nestedData;
			}

			$json_data = array(
				"draw"            => intval( $requestData['draw'] ),  
				"recordsTotal"    => intval( $totalData ),  
				"recordsFiltered" => intval( $totalFiltered ), 
				"data"            => $data
				);

			echo json_encode($json_data);
		}
	}

	function add($id = false)
	{
		if($_POST)
		{
			$this->form_validation->set_rules('USE_NAMA', 'Name', 'required');
			$this->form_validation->set_rules('USE_USER', 'Username', 'required');
			
			if(! $id)
				$this->form_validation->set_rules('USE_PASS', 'Password', 'required');

			$this->form_validation->set_rules('OTORITY_ID', 'User Group', 'required');
			$this->form_validation->set_rules('afterlogin', 'After login', 'required');

			if($this->form_validation->run() == true)
			{
				$USE_NAMA    = $this->input->post('USE_NAMA');
				$USE_USER    = $this->input->post('USE_USER');
				$USE_PASS    = $this->input->post('USE_PASS');
				$OTORITY_ID  = $this->input->post('OTORITY_ID');
				$afterlogin  = $this->input->post('afterlogin');
				$newid       = newid('tb_user', 'USE_ID');
				$uploadimage = $_FILES['avatar']['size'];

				$config['upload_path']          = './assets/images/img-profile/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 1024;
				// $config['max_width']            = 1024;
				// $config['max_height']           = 768;
		 
				$this->load->library('upload', $config);

				$OTORITY = sql_get_var('pp_otority', 'otority', array('id' => $OTORITY_ID));

				$insert = array(
					'USE_NAMA'   => $USE_NAMA,
					'USE_USER'   => $USE_USER,
					'USE_PASS'   => $USE_PASS,
					'OTORITY_ID' => $OTORITY_ID,
					'OTORITY'    => $OTORITY,
					'afterlogin' => $afterlogin,
				);

				if ($uploadimage > 0 && ! $this->upload->do_upload('avatar')){
					$this->query_error($this->upload->display_errors());
					die();
				} else if ($uploadimage > 0) {
					$upload_data = $this->upload->data();
					$insert['USE_AVATAR'] = $upload_data['file_name'];
				}

				if($id)
				{
					$this->user_model->update($insert, decode($id));
				}
				else
				{
					$insert['USE_ID'] = $newid;

					$this->user_model->add($insert);
				}

				if($this->db->affected_rows() > 0) {
					echo json_encode(array(
						'status' => 1,
						'pesan' => "<i class='fa fa-check' style='color:green;'></i> Data has been updated."
					));
				}
				else
				{
					echo json_encode(array(
						'status' => 1,
						'pesan' => "<i class='fa fa-check' style='color:green;'></i> Data has been updated."
					));
					// $this->query_error("Oops, something happends, please contact developer !");
					// $this->query_error($this->db->last_query());
				}
			}
			else
			{
				$this->input_error();
			}
		}
		else
		{
			cekoto('user', 'add');
			$this->load->model('menu_model');
			$data['otority']  = $this->otority_model->fetch()['query']->result();
			$data['menu']     = $this->menu_model->getMenu(NULL, true);
			if($id)
			{
				$data['user'] = $this->user_model->row(['USE_ID' => decode($id)])->row();
			}
			else
			{
				$data['user'] = (object) array(
					'USE_ID'     => '',
					'USE_NAMA'   => '',
					'USE_USER'   => '',
					'USE_PASS'   => '',
					'OTORITY_ID' => '',
					'afterlogin' => '',
				);
			}
			$this->load->view('popoti/user/add-user', $data);
		}
	}

	function profile()
	{
		if($this->session->userdata('user'))
		{
			$this->data['js'][] = base_url('assets/custom/js/profile.js');

			$data['user'] = $this->global_model->_get('tb_user', ['USE_ID' => $this->session->userdata('user')])->row();
			$this->load->templateAdmin('user/profile', $data);
		}
		else
			redirect();
	}

	function change_password()
	{
		if($this->input->is_ajax_request())
		{
			if($this->session->userdata('user'))
			{
				if($_POST)
				{
					$this->form_validation->set_rules('old-password', 'Password', 'required');				
					$this->form_validation->set_rules('password', 'New Passowrd', 'required');				
					$this->form_validation->set_rules('repassword', 'Retype Password', 'required|matches[password]');				

					$oldpassword = $this->input->post('old-password');
					$password    = $this->input->post('password');

					if($this->form_validation->run() == true)
					{
						$this->load->model('employee_model');
						$row = $this->employee_model->row(['a.id' => $this->session->userdata('user')])->row();

						if(password_verify($oldpassword, $row->password))
						{
							$data = [
								'password' => password_hash($password, PASSWORD_DEFAULT),
							];

							// $this->employee_model->update($data, $id);
							echo json_encode(array(
								'status' => 1,
								'pesan' => "<i class='fa fa-check' style='color:green;'></i> Data has been updated."
							));
						}
						else
						{
							$this->query_error('Wrong password. Please check again.');
						}
					}
					else
					{
						$this->input_error();					
					}
				}
				else
					$this->load->view('popoti/user/change-password');
			}
			else
			{
				echo json_encode([
					'status' => '0',
					'pesan' => 'Please Relogin'
				]);
			}
		}
	}

	function login() {
		if($this->session->userdata('user') > 0) {
			redirect('dashboard');
			exit();
		}
		$this->load->view('popoti/user/login');
	}

	function logout() {
		if(isset($_COOKIE['user']))
			setcookie('user', '0', time() + -1, '/'.$this->config->item('app_folder'));

		$this->session->unset_userdata('user');
		$this->session->unset_userdata('otoritas');

		redirect();
	}

	function auth() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$remember = $this->input->post('remember');

		if(isset($_REQUEST['callback']) && $_REQUEST['callback'] == 'login-desa') {
			$redirect = 'panel';
		} else {
			$redirect = 'panel';
		}

		$auth = $this->user_model->auth($username, $password);

		if($auth) {
			if($auth == "nonaktif") {
				$this->session->set_flashdata('login', get_alertLogin('info', 'Akun Anda sudah tidak aktif.'));
				redirect($redirect);
			} else {
				if($remember > 0) {
					setcookie('user', $auth->USE_ID, time() + (86400 * 30), "/".$this->config->item('app_folder')); // 86400 = 1 day

					$this->session->set_userdata(array(
						'user' => $auth->USE_ID
					));
				} else {
					$this->session->set_userdata(array(
						'user' => $auth->USE_ID
					));
				}

				redirect('dashboard');
			}
		} else {
			$this->session->set_flashdata('login', get_alertLogin('danger', 'Username atau Password salah !'));
			redirect($redirect);
		}
	}

	function setstatus() {
		isloggedin();
		cekoto($this->uri->segment(1), 'edit');

		$id      = $this->input->post('id');
		$newstat = $this->input->post('newstat');

		$newdata = array('status' => $newstat);

		$this->user_model->update($newdata, $id);
	}

	function delete($id) {
		isloggedin();
		cekoto('user', 'delete');
		if($this->input->is_ajax_request())
		{
			if($id == 1) {
				$this->session->set_flashdata('global', get_alert('danger', 'Anda tidak dapat menghapus Super Admin'));
				redirect('user');
				exit();
			}
			$this->user_model->delete(decode($id));
		}
	}

	function position()
	{
		cekoto('user/position', 'view', true, true);
        $this->data['css'][] = base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css');
        $this->data['css'][] = base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css');
        $this->data['css'][] = base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css');
        $this->data['css'][] = base_url('assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css');

        $this->data['js'][] = base_url('assets/libs/datatables.net/js/jquery.dataTables.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-buttons/js/buttons.html5.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-buttons/js/buttons.flash.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-buttons/js/buttons.print.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js');
        $this->data['js'][] = base_url('assets/libs/datatables.net-select/js/dataTables.select.min.js');
        $this->data['js'][] = base_url('assets/libs/pdfmake/build/pdfmake.min.js');
        $this->data['js'][] = base_url('assets/libs/pdfmake/build/vfs_fonts.js');

        $this->data['js'][] = base_url('assets/custom/js/otoritas.js');

		$this->load->templateAdmin('user/otoritas');
	}

	function group_json()
	{
		if($this->input->is_ajax_request())
		{
			$requestData	= $_REQUEST;
			$fetch			= $this->otority_model->fetch($requestData['search']['value'], $requestData['order'][0]['column'], $requestData['order'][0]['dir'], $requestData['start'], $requestData['length']);
			
			$totalData		= $fetch['totalData'];
			$totalFiltered	= $fetch['totalFiltered'];
			$query			= $fetch['query'];

			$data	= array();
			foreach($query->result() as $row)
			{ 
				$nestedData = array(); 

				$nestedData[] = $row->nama;

				$nestedData[]	= "<div class='btn-group'>
										<a href='".site_url('user/tambah-posisi/'.encode($row->id))."' id='Edit' class='btn btn-info waves-effect waves-light'><i class='fas fa-pen-square mr-1'></i> Edit</a>
										<a href='".site_url('user/delete-group/'.encode($row->id))."' class='btn btn-danger waves-effect waves-light delete'><i class='fas fa-trash-alt mr-1'></i> Delete</a>
									</div>";

				$data[] = $nestedData;
			}

			$json_data = array(
				"draw"            => intval( $requestData['draw'] ),  
				"recordsTotal"    => intval( $totalData ),  
				"recordsFiltered" => intval( $totalFiltered ), 
				"data"            => $data
				);

			echo json_encode($json_data);
		}
	}

	function tambah_posisi($id = false)
	{
		if($id)
			$id = decode($id);

		if($_POST)
		{
			$this->form_validation->set_rules('nama', 'Position Name', 'required');

			if($this->form_validation->run() == true)
			{
				$newid         = newid('pp_otority');
				$nama          = $this->input->post('nama');
				$jobdesk       = $_FILES['jobdesk']['size'];
				$statusjobdesk = $this->input->post('statusjobdesk');
				$pengangkatan  = $this->input->post('pengangkatan');
				$otority       = json_encode($this->input->post('otoritas'));

				$newjobdesk = $id ? $id : $newid;

				$config['upload_path']   = './upload/files/';
				$config['allowed_types'] = 'pdf';
				$config['file_name']     = 'jobdesk-'.$newjobdesk;
				// $config['max_size']   = 1024;
				// $config['max_width']  = 1024;
				// $config['max_height'] = 768;
		 
				$this->load->library('upload', $config);

				$data = array(
					'nama'          => $nama,
					'otority'       => $otority,
				);

				if ($jobdesk > 0 && ! $this->upload->do_upload('jobdesk')){
					$this->query_error($this->upload->display_errors());
					die();
				} else if ($jobdesk > 0) {
					$upload_data = $this->upload->data();
					$data['jobdesk'] = $upload_data['file_name'];
				}

				if($id) {
					$data['id'] = $id;
					// die($data['id']);
					$this->otority_model->update($data, $id);
				}
				else {
					$data['id'] = $newid;
					$this->otority_model->saving($data);
				}

				if($this->db->affected_rows() > 0) {
					echo json_encode(array(
						'status' => 1,
						'pesan' => "<i class='fa fa-check' style='color:green;'></i> Data has been updated.",
						'id' => encode($data['id'])
					));
				}
				else
				{
					echo json_encode(array(
						'status' => 1,
						'pesan' => "<i class='fa fa-check' style='color:green;'></i> Data has been updated.",
						'id' => encode($data['id'])
					));
				}
			}
			else
			{
				$this->input_error();
			}
		}
		else
		{
			if($id)
				cekoto('user/position', 'edit', true, true);
			else
				cekoto('user/position', 'add', true, true);
			
	        $this->data['js'][] = base_url('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js');
	        $this->data['js'][] = base_url('assets/js/pages/form-wizard.init.js');
        	$this->data['js'][] = base_url('assets/libs/summernote/summernote-bs4.min.js');
	        // $this->data['js'][] = base_url('assets/libs/dropzone/min/dropzone.min.js');
	        $this->data['js'][] = base_url('assets/libs/dropify/js/dropify.min.js');
	        // $this->data['js'][] = base_url('assets/js/pages/form-fileuploads.init.js');
	        $this->data['js'][] = base_url('assets/custom/js/tambah-posisi.js');

	        $this->data['css'][] = base_url('assets/libs/summernote/summernote-bs4.min.css');
			$this->data['css'][] = base_url('assets/libs/dropzone/min/dropzone.min.css');
			$this->data['css'][] = base_url('assets/libs/dropify/css/dropify.min.css');

			$data['menu'] = $this->menu_model->getMenu(0, true);

			if($id)
			{
				$data['otoritas'] = $this->otority_model->row(['id' => $id])->row();
			}
			else
			{
				$data['otoritas'] = (object) array(
					'id'            => '',
					'nama'          => '',
					'otority'       => '',
					'jobdesk'       => '',
					'statusjobdesk' => '',
					'pengangkatan'  => '',
				);
			}

			$this->load->templateAdmin('user/add-group', $data);

		}

	}

	function delete_group($id)
	{
		if($this->input->is_ajax_request())
		{
			$this->otority_model->change(['is_delete' => '1'], decode($id));
		}
	}

}

?>