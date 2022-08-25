<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {

	/**
	 * Reference to the CI singleton
	 *
	 * @var	object
	 */
	private static $instance;

	/**
	 * Class constructor
	 *
	 * @return	void
	 */
	public function __construct()
	{
		self::$instance =& $this;

		// Assign all the class objects that were instantiated by the
		// bootstrap file (CodeIgniter.php) to local class variables
		// so that CI can run as one big super object.
		foreach (is_loaded() as $var => $class)
		{
			$this->$var =& load_class($class);
		}

		$this->load =& load_class('Loader', 'core');
		$this->load->initialize();
		log_message('info', 'Controller Class Initialized');

		// cek otoritas
		// if(!$this->session->userdata('otoritas') && $this->session->userdata('user')) {
			if($this->session->userdata('user') != 1) {
				$otoritas = $this->global_model->_get(
					'pp_otority a', 
					['u.USE_ID' => $this->session->userdata('user')], 
					[], 
					[], 
					'a.otority', 
					[['tb_user u', 'u.OTORITY_ID = a.id', 'left']]
				)->row();
			} else {
				$allmenu = $this->global_model->_get('pp_menus')->result();
				foreach($allmenu as $am):
					$ot[$am->class] = ['view','add','edit','delete','void','audit','backdate'];
				endforeach;
				$otoritas = (object) array('otority' => json_encode($ot));
			}
			// print_ar($this->db->last_query());
			// print_ar($otoritas);
			// $otoritas = sql_get_var('tb_user', 'OTORITY', array('USE_ID' => $this->session->userdata('user')));
			$this->session->set_userdata(array('otoritas' => $otoritas->otority));
		// }

		$this->data['menus'] = $this->menu_model->getMenu(0, TRUE, $this->session->userdata('otoritas'));

		// jika ada cookie maka masukkan datanya sebagai session
		if(isset($_COOKIE['user']))
			$this->session->set_userdata(array('user' => $_COOKIE['user']));

		if($this->session->userdata('user')) {
			// if($this->data['avatar'] && !$this->data['avatar'])
				$this->data['avatar'] = 'default.jpg';
		}

		// unset filter_data di setiap index
		// if($this->uri->segment(2) == '')
		// 	$this->session->unset_userdata('filter_data');

		// ambil nama menu
		$this->data['menuName'] = sql_get_var('pp_menus', 'nama', array('class' => $this->uri->segment(1)), $count = 0, $group_by = '', $sum = 0, $order = 'desc');
		if(empty($this->data['menuName']) OR $this->uri->segment(1) == 'welcome')
			$this->data['menuName'] = 'Dashboard';

		// set default js
        $this->data['js'][] = base_url('assets/libs/jquery-toast-plugin/jquery.toast.min.js');
        $this->data['js'][] = base_url('assets/libs/flatpickr/flatpickr.min.js');
        $this->data['js'][] = base_url('assets/libs/sweetalert2/sweetalert2.min.js');
        // $this->data['js'][] = base_url('assets/libs/autonumeric/autoNumeric-min.js');


        // $this->data['js'][] = base_url("assets/libs/jquery-mask-plugin/jquery.mask.min.js");
        $this->data['js'][] = base_url("assets/libs/autonumeric/autoNumeric-min.js");

        $this->data['js'][] = base_url("assets/js/pages/form-masks.init.js");
        $this->data['js'][] = base_url('assets/libs/ladda/spin.min.js');
        $this->data['js'][] = base_url('assets/libs/ladda/ladda.min.js');

		// set default css
		$this->data['css'][] = base_url('assets/libs/jquery-toast-plugin/jquery.toast.min.css');
		$this->data['css'][] = base_url('assets/libs/flatpickr/flatpickr.min.css');
		$this->data['css'][] = base_url('assets/libs/sweetalert2/sweetalert2.min.css');
        $this->data['css'][] = base_url('assets/libs/ladda/ladda-themeless.min.css');

		// variable global
		$this->data['webtitle'] = sql_get_var('pp_settings', 'title', array('id' => '1'));
		$this->data['weblogo'] = sql_get_var('pp_settings', 'gambar', array('id' => '1'));

		// customizing form error output
		// $this->form_validation->set_message('required', '%s harus diisi');
		// $this->form_validation->set_message('min_length', '{field} minimal harus {param} karakter');
		// $this->form_validation->set_message('max_length', '{field} tidak boleh lebih dari {param} karakter');
		// $this->form_validation->set_message('is_unique', '{field} ini sudah terdaftar');
	}

	// --------------------------------------------------------------------

	/**
	 * Get the CI singleton
	 *
	 * @static
	 * @return	object
	 */
	public static function &get_instance()
	{
		return self::$instance;
	}

}
