<?php
 /*
 * 兆和人才网 WAP
 * ============================================================================
 * 版权所有: 兆和网络，并保留所有权利。
 * 网站地址: http://www.mandnt.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/
define('IN_QISHI', true);
require_once(dirname(__FILE__).'/../include/common.inc.php');
require_once(QISHI_ROOT_PATH.'include/fun_wap.php');
if(browser())
{
header("location:wap.php"); 
} 
else
{
require_once(QISHI_ROOT_PATH.'include/mysql.class.php');
$db = new mysql($dbhost,$dbuser,$dbpass,$dbname);
$smarty->display("wap/index.ini");
}
?>