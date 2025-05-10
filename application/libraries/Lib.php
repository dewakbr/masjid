<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//use Workerman\Worker;
//use PHPSocketIO\SocketIO;

class Lib {

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	function __construct() {
        date_default_timezone_set("Asia/Jakarta");
    }

    function export_excel($query, $filename, $header="") {
      $CI =& get_instance();
      $b = $CI->db->query($query)->result_array();
      $a = (count($b) > 0) ? $b[0] : $CI->db->query($query)->row_array() ;
      $extensi = 'xls';

      header("Content-type: application/octet-stream");
      header("Content-Disposition: attachment; filename=" . $filename . "." . $extensi);
      header("Pragma: no-cache");
      header("Expires: 0");
      echo '
      <table >
      <tr><td colspan="16"><font size="5"><strong>' . $header . '</strong></font></td></tr>
      <tr><td colspan="16">Tanggal Cetak : '. date('d M Y, H:i:s') .'</td></tr>
      <tr><td colspan="16"></td></tr>
      </table> ';
      echo '
      <table border="1">
      <tr bgcolor="#D7EDE1" >' ;
      if(count($a) > 0) {
        foreach($a as $key => $val) {
          echo '<th>' . $key . '</th>';
        }
      }
      if(count($b) > 0) {
        foreach($b as $key => $val) {
          echo '<tr>';
          foreach($val as $vals) {
            echo '<td>'. $vals .'</td>';
          }
          echo '</tr>';
        }
      }
      echo '</table>';
    }

    function rand_id() {
      $CI =& get_instance();
      return md5('TIPTECH_'.date('Ymdhisu').$CI->session->userdata('userid'));
    }

    function export_excel_no_header($query, $filename, $header="") {
      $CI =& get_instance();
      $b = $CI->db->query($query)->result_array();
      $a = (count($b) > 0) ? $b[0] : $CI->db->query($query)->row_array() ;
      $extensi = 'xls';

      header("Content-type: application/octet-stream");
      header("Content-Disposition: attachment; filename=" . $filename . "." . $extensi);
      header("Pragma: no-cache");
      header("Expires: 0");
      echo '
      <table border="1">
      <tr bgcolor="#D7EDE1" >' ;
      if(count($a) > 0) {
        foreach($a as $key => $val) {
          echo '<th>' . $key . '</th>';
        }
      }
      if(count($b) > 0) {
        foreach($b as $key => $val) {
          echo '<tr>';
          foreach($val as $vals) {
            echo '<td>'. $vals .'</td>';
          }
          echo '</tr>';
        }
      }
      echo '</table>';
    }

    function pagination_getSearch($kolom) {
      $CI =& get_instance();
      if (count($kolom) > 0) {
        $search = null;
        foreach($kolom as $key => $val) {
          $search[$key] = $val;
        }
        return $search;
      } else {
        return null;
      }
    }

    function terbilang($x)
    {
        $ambil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        if ($x < 12)
            return " " . $ambil[$x];
        elseif ($x < 20)
            return $CI->terbilang($x - 10) . " belas";
        elseif ($x < 100)
            return $CI->terbilang($x / 10) . " puluh" . $CI->terbilang($x % 10);
        elseif ($x < 200)
            return " seratus" . $CI->terbilang($x - 100);
        elseif ($x < 1000)
            return $CI->terbilang($x / 100) . " ratus" . $CI->terbilang($x % 100);
        elseif ($x < 2000)
            return " seribu" . $CI->terbilang($x - 1000);
        elseif ($x < 1000000)
            return $CI->terbilang($x / 1000) . " ribu" . $CI->terbilang($x % 1000);
        elseif ($x < 1000000000)
            return $CI->terbilang($x / 1000000) . " juta" . $CI->terbilang($x % 1000000);
    }

  
	
	public function upload($field, $filename, $dir)
    {
        $ci=& get_instance();
        $config['upload_path'] = './upload/'.$dir;
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }
        $config['allowed_types'] = '*';
        $config['file_name'] = $filename;
        $path = substr($config['upload_path'],2);
		$ci->load->library('upload');
        $ci->upload->initialize($config);
        if ($ci->upload->do_upload($field)) {
            $this->img_resize('./'.$path.'/'.$ci->upload->data('file_name'));
            return $path.'/'.$ci->upload->data('file_name');
        } else {
            return null;
        }
    }

    public function img_resize($file)
    {
        $ci=& get_instance();
        $config['image_library']  = 'gd2';
        $config['source_image']   = $file;
        $config['create_thumb']   = FALSE;
        $config['quality']        = '70%';
        $config['width']          = '800';
        $config['height']         = '1';
        $config['maintain_ratio'] = TRUE;
        $config['master_dim']     = 'width';
        $config['new_image']      = $file;
        $ci->load->library('image_lib', $config);
        $done = $ci->image_lib->resize();
        return $done;
    }

}
