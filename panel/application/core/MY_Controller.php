<?php
class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$site_lang = $this->session->userdata('language');
		if ($site_lang) {
			if ($site_lang == 'EN'):
				$site_lang = 'english';
			else:
				$site_lang = 'indonesia';
			endif;

			$this->lang->load('message', $site_lang);
		} else {
			$this->lang->load('message','english');
		}

		// $this->data['service'] = $this->global_model->_get('services');
		// $this->data['social'] = $this->global_model->_get('pp_settings', ['id' => 1])->row();
	}

	function makeProgress() {
	    $progress = 0;
	    $max = 5;

	    for ($i = 1; $i <= $max; $i++) {
	        // if (isset($_SESSION['progress'])) {
	        //     session_start(); //IMPORTANT!
	        // }
	        // $progress++;
	    	echo $i;
	        // $this->session->set_userdata(['progress' => $i]);
	        // echo $this->session->userdata('progress');
	        sleep(1); //IMPORTANT!
	    }
	}

	function query_error($pesan = "Terjadi kesalahan, coba lagi !")
	{
		$json['status'] = 2;
		$json['pesan'] 	= "<div class='alert alert-danger' role='danger'><i class='mdi mdi-block-helper mr-2'></i>".$pesan."</div>";
		echo json_encode($json);
	}

	function pesan_error($pesan = "System Error!")
	{
		$json['status'] = 2;
		$json['pesan'] 	= $pesan;
		echo json_encode($json);
	}

	function pesan_sukses($pesan = "Data has been added")
	{
		$json['status'] = 1;
		$json['pesan'] 	= $pesan;
		echo json_encode($json);
	}
	
	function input_error()
	{
		$json['status'] = 0;
		$json['pesan'] 	= "<div class=\"alert alert-warning\" role=\"alert\">".validation_errors()."</div>";
		echo json_encode($json);
	}
	function input_error_without_div()
	{
		$json['status'] = 0;
		$json['pesan'] 	= validation_errors();
		echo json_encode($json);
	}

	function clean_tag_input($str)
	{
		$t = preg_replace('/<[^<|>]+?>/', '', htmlspecialchars_decode($str));
		$t = htmlentities($t, ENT_QUOTES, "UTF-8");
		$t = trim($t);
		return $t;
	}

	function _create_thumbs($image_data, $path = './media/products'){
		// Image resizing config
		$config = array(
			// Large Image
			array(
				'image_library' => 'GD2',
				'source_image'  => $path.'/'.$image_data['file_name'],
				'maintain_ratio'=> FALSE,
				'width'         => 700,
				'height'        => 467,
				'new_image'     => $path.'/lg/'.$image_data['file_name']
				),
			// Medium Image
			array(
				'image_library' => 'GD2',
				'source_image'  => $path.'/'.$image_data['file_name'],
				'maintain_ratio'=> FALSE,
				'width'         => 600,
				'height'        => 400,
				'new_image'     => $path.'/md/'.$image_data['file_name']
				),
			// Small Image
			array(
				'image_library' => 'GD2',
				'source_image'  => $path.'/'.$image_data['file_name'],
				'maintain_ratio'=> FALSE,
				'width'         => 100,
				'height'        => 67,
				'new_image'     => $path.'/sm/'.$image_data['file_name']
			)
		);

		$this->load->library('image_lib', $config[0]);
		foreach ($config as $item){

			$w = $image_data['image_width']; // original image's width
			$h = $image_data['image_height']; // original images's height
			
			$n_w = $item['width']; // destination image's width
			$n_h = $item['height']; // destination image's height
			
			$source_ratio = $w / $h;
			$new_ratio    = $n_w / $n_h;

			if($source_ratio != $new_ratio){
			
				if($new_ratio > $source_ratio || (($new_ratio == 1) && ($source_ratio < 1))){
					$item['width']  = $n_w;
					$item['height'] = round($n_w/$new_ratio);
					$item['y_axis'] = round(($n_h - $item['height'])/2);
					$item['x_axis'] = 0;
				} else {
					$item['width']         = round($n_h * $new_ratio);
					$item['height']        = $n_h;
					$size_config['x_axis'] = round(($n_w - $item['width'])/2);
					$size_config['y_axis'] = 0;
				}
			
				$this->image_lib->initialize($item);
				$this->image_lib->crop();
				$this->image_lib->clear();
			}

			$item['maintain_ratio'] = TRUE;

			$this->image_lib->initialize($item);

			if(!$this->image_lib->resize())
				return false;

			$this->image_lib->clear();
		}
	}
}