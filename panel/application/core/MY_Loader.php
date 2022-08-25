<?php
class My_loader extends CI_Loader {
    public function templateAdmin($template_name, $vars = array(), $return = FALSE)
    {
        $header = 'includes/header';
        if(isset($_GET['cetak'])) {
            $footer = 'includes/footer-cetak';
        } else {
            $footer = 'includes/footer';
        }

        if($return):
            $content  = $this->view($header, $vars, $return);
            if(!isset($_GET['cetak']))
                $content .= $this->view('includes/navbar', $vars, $return);

            $content .= $this->view($this->config->item('template_name') . "/" . $template_name, $vars, $return);
            $content .= $this->view($footer, $vars, $return);

            return $content;
        else:
            $this->view($header, $vars);
            if(!isset($_GET['cetak']))
                $this->view('includes/navbar', $vars, $return);

            $this->view($this->config->item('template_name') . "/" . $template_name, $vars);
            $this->view($footer, $vars);
        endif;
    }
    public function templateFront($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
            $content  = $this->view('duka/includes/header', $vars, $return);
            $content  = $this->view('duka/includes/navbar', $vars, $return);
            $content .= $this->view("duka/$template_name", $vars, $return);
            $content .= $this->view('duka/includes/footer', $vars, $return);

            return $content;
        else:
            $this->view('duka/includes/header', $vars);
            $this->view('duka/includes/navbar', $vars);
            $this->view("duka/$template_name", $vars);
            $this->view('duka/includes/footer', $vars);
        endif;
    }
}
?>