<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter SideBar Helpers
 *
 */

// ------------------------------------------------------------------------

if ( ! function_exists('create_clinet_tree'))
{
	function create_clinet_tree($list)
	{

		if( ! is_array($list)) {
			return $list;
		}

		$li_ = [];
		foreach ($list as $index => $arr) {

			$cl_id = $arr['cl_id'];
			if( !array_key_exists( $cl_id , $li_ )) {
				$li_ += array(
						$cl_id =>  array(
								'cl_id' => $arr['cl_id'],
								'name' => $arr['name'],
								'p_list' => set_profile_list($arr)
						));
			} else {
				$li_[$cl_id]['p_list'] .= set_profile_list($arr);
			}
		}

		$ul_ = NULL;
		foreach ($li_ as $key => $val) { 
			$ul_ .=  set_clinet_tree($val);
		}

		return $ul_;
	}
}


if ( ! function_exists('set_clinet_tree'))
{
	function set_clinet_tree($arr) {

		$temp = '<li class="treeview"><a href="{cl_id}">
		<span>{name}</span> <i class="fa fa-angle-left pull-right"></i>
		</a><ul class="treeview-menu">{p_list}</ul></li>';


		if(array_key_exists('cl_id', $arr)) {
			$temp = str_replace('{cl_id}',  $arr['cl_id'] , $temp);
		}

		if(array_key_exists('name', $arr)) {
			$temp = str_replace('{name}',  $arr['name'] , $temp);
		}

		if(array_key_exists('p_list', $arr)) {
			$temp = str_replace('{p_list}',  $arr['p_list'] , $temp);
		}

		return $temp;
	}
}


if ( ! function_exists('set_profile_list'))
{
	/**
	 * @param unknown_type $pro
	 * @return string
	 */
	function set_profile_list($pro) {

		$li = '<li><a href="top/{p_id}"><span>{p_name}</span> <i class="fa fa-angle-left pull-right"></i></a></li>' ;

		if(array_key_exists('p_name', $pro)) {
			$li = str_replace('{p_name}',  $pro['p_name'] , $li);
		}

		if(array_key_exists('p_id', $pro)) {
			$li = str_replace('{p_id}',  $pro['p_id'] , $li);
		}

		return $li;
	}
}



/* End of file form_helper.php */
/* Location: ./system/helpers/form_helper.php */
