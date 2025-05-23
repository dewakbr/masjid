<?php
//-- halaman ini bisa diganti dengan template dashboard admin

echo "<h1>".$judul."</h1>";
echo '<h3>Selamat datang, <span style="color:red">'.$this->session->username.'</span></h3>';

// link untuk logout, fungsi ini ditaruh di controler Home
echo '<a href="'.base_url('home/logout').'"> Logout disini </a>';
?>