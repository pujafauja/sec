<?php

/**
 * Error Class
 */
class Errors extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function notfound() {
		$this->load->templateAdmin('errors/404');
	}
}

?>