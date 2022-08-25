<?php

/**
 * 
 */
class MY_Loader extends CI_Loader
{
	
	function template($name, $vars = array(), $return = false)
	{
		$header = 'includes/header';
		$navbar = 'includes/navbar';
		$footer = 'includes/footer';

		if($return):
			$content = $this->view($header, $vars, $return);
			$content .= $this->view($navbar, $vars, $return);
			$content .= $this->view($name, $vars, $return);
			$content .= $this->view($footer, $vars, $return);

			return $content;
		else:
			$this->view($header, $vars, $return);
			$this->view($navbar, $vars, $return);
			$this->view($name, $vars, $return);
			$this->view($footer, $vars, $return);
		endif;
	}

}

?>