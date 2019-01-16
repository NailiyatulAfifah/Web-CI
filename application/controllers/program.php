<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class program extends Web_Controller
    {
        public function index()
        {
            $this->load->view('viewprogram');
        }
    }
?>
