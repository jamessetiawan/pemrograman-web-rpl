<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mysite extends CI_Controller{
    public function index(){
        $data['judul'] = "Silvi Ainun Official Web";
        $this->load->view('beranda',$data);
    }
}