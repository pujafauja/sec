<?php

/**
 * 
 */
class Programs extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->template('programs');
	}
}

?>