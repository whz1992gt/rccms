<?php
 /*
 * 兆和人才网 管理中心左侧
 * ============================================================================
 * 版权所有: 兆和网络，并保留所有权利。
 * 网站地址: http://www.mandnt.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/
define('IN_QISHI', true);
require_once(dirname(__FILE__).'/../data/config.php');
require_once(dirname(__FILE__).'/include/admin_common.inc.php');
$act=!empty($_REQUEST['act']) ? trim($_REQUEST['act']) : 'index';
if($act)
{
	$smarty->display("sys/admin_left_{$act}.htm");
}
?>