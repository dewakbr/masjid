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
       // echo epost('email');
        //echo '<br>'.epost('password');
		
		// query select data dari tabel 'users' dengan filter user_nama dan password harus sesuai dengan parsing datanya
		$q = "select * from users
				where user_nama = '".epost('email')."' 
				and user_password = '".epost('password')."' ";
		// menampung hasil eksekusi query ke variabel '$data'
		$data = $this->db->query($q);
		
		// num_rows() => jika >0 itu datanya ketemu, jika 0 maka tidak ada datanya
		if($data->num_rows() > 0){
			$data = $data->row(); // menampilkan data tiap kolom dengan metode object
			$a['sudah_login'] = true;
			$a['user_id'] = $data->user_id; // user_id => harus sesuai dengan nama kolom di tabel users
			$a['username'] = $data->user_nama; // user_nama => harus sesuai dengan nama kolom di tabel users
			$this->session->set_userdata($a); // membuat sesi di cache browser
			
			$res['status'] = "success";
		}else{
			$res['status'] = "err";
			$res['pesan'] = "User tidak ditemukan";
		}
		
		// mengirim feedback ke frontend dengan metode JSON
		echo json_encode($res);
    }

    function register(){
        echo epost('username');
        echo '<br>'.epost('pass');
    }
	
} 
?>