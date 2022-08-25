<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'mahardhika.co.id', 
    'smtp_port' => 587,
    'smtp_user' => 'no-reply@mahardhika.co.id',
    'smtp_pass' => 'B15millah2022',
    'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '10', //in seconds
    'charset' => 'utf-8',
    'wordwrap' => TRUE,
);