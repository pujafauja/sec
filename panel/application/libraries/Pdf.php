<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * CodeIgniter PDF Library
 *
 * Generate PDF's in your CodeIgniter applications.
 *
 * @package			CodeIgniter
 * @subpackage		Libraries
 * @category		Libraries
 * @author			Chris Harvey
 * @license			MIT License
 * @link			https://github.com/chrisnharvey/CodeIgniter-PDF-Generator-Library
 */

require_once(dirname(__FILE__) . '/dompdf/dompdf_config.inc.php');

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf
{
	/**
	 * Get an instance of CodeIgniter
	 *
	 * @access	protected
	 * @return	void
	 */
	protected function ci()
	{
		return get_instance();
	}

	/**
	 * Load a CodeIgniter view into domPDF
	 *
	 * @access	public
	 * @param	string	$view The view to load
	 * @param	array	$data The view data
	 * @return	void
	 */
	public function load_view($view, $data = array())
	{
		$html = $this->ci()->load->view($view, $data, TRUE);

		$this->load_html($html);
	}
	public function generate($html, $filename='', $paper = '', $orientation = '', $stream=TRUE)
	   {   
	       $dompdf = new Dompdf($options);
	       $dompdf->loadHtml($html);
	       $dompdf->setPaper($paper, $orientation);
	       $dompdf->render();
	       if ($stream) {
	           $dompdf->stream($filename.".pdf", array("Attachment" => 0));
	       } else {
	           return $dompdf->output();
	       }
	   }
}
