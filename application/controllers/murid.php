<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class murid extends CI_Controller {


	function __construct(){
        parent::__construct();
        $this->load->model('m_murid');

        if($this->session->userdata('status') != "login")
        {
            $this->session->set_flashdata("msg", "<div class='alert alert-info'>
             <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
             <strong><span class='glyphicon glyphicon-remove-sign'></span></strong> Silahkan login terlebih dahulu.
             </div>");
            redirect('login');
        }
    }

    
    function index()
    {
        $data['header'] = "header/v_header";
        $data['navbar'] = "navbar/v_navbar";
        $data['sidebar'] = "sidebar/v_sidebar";
        $data['footer'] = "footer/v_footer";
        $data['body'] = "murid/v_list_murid";

        $listmurid = $this->m_murid->listmurid();
        $data['listmurid'] = $listmurid;
        $this->load->view('v_home', $data);
    }

    function add()
    {
        $data['header'] = "header/v_header";
        $data['navbar'] = "navbar/v_navbar";
        $data['sidebar'] = "sidebar/v_sidebar";
        $data['footer'] = "footer/v_footer";
        $data['body'] = "murid/v_add_murid";

        
        $this->load->view('v_home', $data);
    }

    function edit()
    {
        $data['header'] = "header/v_header";
        $data['navbar'] = "navbar/v_navbar";
        $data['sidebar'] = "sidebar/v_sidebar";
        $data['footer'] = "footer/v_footer";
        $data['body'] = "murid/v_edit_murid";

        
        $this->load->view('v_home', $data);
    }

    
}
