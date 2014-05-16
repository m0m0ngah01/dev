<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
$active_group = 'default';

/**
 *
 */
$active_record = TRUE;

/**
 *
 */
$db['default'] = array();

/**
 *
 */
$db['default']['hostname'] = 'mysql:dbname=TWSec;host=localhost';

/**
 *
 */
$db['default']['username'] = 'root';

/**
 *
 */
$db['default']['password'] = 'pass';

/**
 *
 */
$db['default']['database'] = 'TWSec';

/**
 *
 */
$db['default']['char_set'] = 'utf8';

/**
 *
 */
$db['default']['dbcollat'] = 'utf8_general_ci';

/**
 *
 */
$db['default']['dbdriver'] = 'pdo';

/**
 *
 */
$db['default']['dbprefix'] = '';

/**
 *
 */
$db['default']['pconnect'] = TRUE;


/**
 *
 */
$db['default']['db_debug'] = FALSE;

/**
 * db response cache on ?
 */
$db['default']['cache_on'] = FALSE;


$db['default']['cachedir'] = APPPATH . '';
//$db['default']['cachedir'] = APPPATH . 'cache/db';

/**
 *  db connect when instance is loaded
 */
$db['default']['autoinit'] = TRUE;

/** 
 *  show alert whem data type is wrong 
 */
$db['default']['stricton'] = TRUE;

/**
 *
 */
$db['default']['swap_pre'] = '';
