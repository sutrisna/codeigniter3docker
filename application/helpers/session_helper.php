<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function require_login() {
    $CI =& get_instance();
    if (!$CI->session->userdata('user')) {
        redirect('login');
    }
}
