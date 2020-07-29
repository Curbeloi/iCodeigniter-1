<?php
/**
 * Created by PhpStorm.
 * User: zkasiurak
 * Date: 11/6/2018
 * Time: 12:46 PM
 */

$db['default']['failover'] = array(
    array(
        'hostname' => 'localhost1',
        'username' => '',
        'password' => '',
        'database' => '',
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => TRUE,
        'db_debug' => TRUE,
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE
    ),
    array(
        'hostname' => 'localhost2',
        'username' => '',
        'password' => '',
        'database' => '',
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => TRUE,
        'db_debug' => TRUE,
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE
    )
);

$names = array('A', 'B', 'C');
$this->db->where_not_in('username',$names);
