<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    } 

    public function index()
    {
    
        $data['judul'] = "Masjid An Nur";
        $data['js'] = "login";
        //$this->load->view('landing/header', $data);
		$this->load->view('admin/v_login', $data);
        //$this->load->view('landing/footer', $data);
        
    }

    function proses(){
        echo epost('email');
        echo '<br>'.epost('password');
    }

    function register(){
        echo epost('username');
        echo '<br>'.epost('pass');
    }
	
} 
?>