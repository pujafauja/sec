<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $this->data['menuName'] ?> | CMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

        <?php
        if(isset($this->data['css']) && count($this->data['css']) > 0) {
            foreach ($this->data['css'] as $css) { ?>
                <link rel="stylesheet" type="text/css" href="<?php echo $css; ?>">
            <?php }
        }
        ?>

		<!-- App css -->
		<link href="<?php echo base_url() ?>assets/css/bootstrap-creative.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="<?php echo base_url() ?>assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<!-- icons -->
		<link href="<?php echo base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>