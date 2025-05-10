<?php
class Halo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    } 

    public function index()
    {
        $data['judul'] = "Masjid An Nur";
		$this->load->view('v_halo', $data);
        
    }
	
}
?>