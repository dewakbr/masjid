<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    } 

    public function index()
    {
    $page=(!empty($_GET['page'])) ? $_GET['page'] : "";
    if($page=='tentangkami'){
        $halaman='landing/v_about';
    }else if($page=='program'){
        $halaman='landing/v_program';
    }else{
        $halaman='landing/v_home';
    }
        $data['judul'] = "Masjid An Nur";
        $this->load->view('landing/header', $data);
		$this->load->view($halaman, $data);
        $this->load->view('landing/footer', $data);
        
    }
	
}
?>