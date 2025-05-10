<?php 
defined('BASEPATH') or exit('No direct script access allowed');

$active_group = 'local';
$query_builder = true;

$db['local'] = array(
    'dsn'	=> '',
    'hostname' => 'localhost',
	'username' => 'root',
	'password' => '12345678',
	'database' => 'infomyid_famtree_ks',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => array(),
    'save_queries' => true
);

$db['sql'] = array(
    'dsn'	=> '',
    'hostname' => 'LAPTOP-PPPSAUFC\SQLEXPRESS',
	'username' => 'sa',
	'password' => '12345678',
	'database' => 'iami',
    'dbdriver' => 'sqlsrv',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => array(),
    'save_queries' => true
);
