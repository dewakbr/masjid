<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$http = 'http'.((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '').'://';
//$newurl = str_replace("index.php","",$_SERVER['SCRIPT_NAME']);
//$port = (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != '80') ? ":".$_SERVER['SERVER_PORT'] : "" ;

//$config['base_url'] = "$http".$_SERVER['SERVER_NAME'].$port."".$newurl;
if($http == 'http://'){
	//header("Location:https://info.my.id");
}
$config['base_url']	= $http.$_SERVER['HTTP_HOST'];
$config['base_url'] .= preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])).'/';

$config['index_page'] = '';

$config['uri_protocol']	= 'REQUEST_URI';

$config['url_suffix'] = '';

$config['language']	= 'english';

$config['charset'] = 'UTF-8';

$config['enable_hooks'] = TRUE;

$config['subclass_prefix'] = 'REST_';

$config['composer_autoload'] = FALSE;

$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';

$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';

$config['allow_get_array'] = TRUE;

$config['log_threshold'] = 0;

$config['log_path'] = '';

$config['log_file_extension'] = '';

$config['log_file_permissions'] = 0644;

$config['log_date_format'] = 'Y-m-d H:i:s';

$config['error_views_path'] = '';

$config['cache_path'] = '';

$config['cache_query_string'] = FALSE;

$config['encryption_key'] = '';


$config['sess_use_database'] = FALSE;
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'app_session';
$config['sess_expiration'] = 31536000;
$config['sess_save_path'] = APPPATH . 'cache/session/';
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 31536000;
$config['sess_regenerate_destroy'] = TRUE;

$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE;
$config['cookie_httponly'] 	= TRUE;

$config['standardize_newlines'] = FALSE;

$config['global_xss_filtering'] = TRUE;

$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();

$config['compress_output'] = FALSE; //--in 5.6 TRUE; in 7 FALSE

$config['time_reference'] = 'local';

$config['rewrite_short_tags'] = TRUE;

$config['proxy_ips'] = '';
