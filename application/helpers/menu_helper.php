<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!function_exists('active_link')) {

    function activate_menu($controller) {
        // Getting CI class instance.
        $CI = get_instance();
        // Getting router class to active.
        $class = $CI->router->fetch_class();
        return ($class == $controller) ? 'active' : '';
    }
	
	 function ipost($param) {
        $ci =& get_instance();
        return $ci->input->post($param);
    }

    function iget($param) {
        $ci =& get_instance();
        return $ci->input->get($param);
    }
	
	function epost($param) {
        $ci =& get_instance();
        return $ci->input->post($param);
    }

    function eget($param) {
        $ci =& get_instance();
        return $ci->input->get($param);
    }
	
	function sessdata($param) {
        $ci =& get_instance();
        return $ci->session->userdata($param);
    }

    function db_query($db) {
        $ci =& get_instance();
        return $ci->db->query($db);
    }
	
	function db_insert($db, $data) {
        $ci =& get_instance();
        return $ci->db->insert($db, $data);
    }

    function db_update($tableName, $arrayColumnData) {
		$ci =& get_instance();
        $arrayDataUpdate = array();
        foreach ($arrayColumnData as $key => $val) {
            if (is_array($val) && strtoupper($key) == 'WHERE') {
                foreach ($val as $keywhere => $valwhere) {
                        $ci->db->where($keywhere,$valwhere);
                }
            } else if (is_array($val) && strtoupper($key) == 'WHERE_IN') {
                foreach ($val as $keywhere => $valwhere) {
                        $ci->db->where_in($keywhere,$valwhere);
                }
            } else if (!is_array($val)) {
                if (!is_array($val)) {
                    $arrayDataUpdate[$key] = $val;
                }
            }
        }
        $ci->db->update($tableName, $arrayDataUpdate);
    }

    function db_delete($db, $where) {
        $ci =& get_instance();
        return $ci->db->delete($db, $where);
    }
	
	function loadAkses($id, $menu){
		$q = "select GROUP_CONCAT(menu_aksi) aksi
         	from(
         	select menu_id,menu_name,menu_aksi,menu_caption,menu_icon,menu_url,menu_induk no_menu,menu_no urut, 
			menu_name caption
         	from m_menu
         	where menu_aksi='VIEW' and menu_induk =0
         	union all 
         	select menu_id,menu_name,menu_aksi, menu_caption,menu_icon,menu_url,menu_no, menu_induk induk, 
			(select x.menu_name from m_menu x where x.menu_id= m_menu.menu_induk) menu_induk
         	from m_menu
         	where  menu_induk >0
         	)x
         	inner join m_akses
         		on menu_id = akses_menu_id
         	inner join m_user
         		on user_id = akses_user_id
         	where user_id={$id}
					and menu_name='{$menu}'
         	order by urut,no_menu;";
		$ci =& get_instance();
		$data = $ci->db->query($q);
		return ($data->num_rows()>0) ? $data->row()->aksi : "";
	}

}?>