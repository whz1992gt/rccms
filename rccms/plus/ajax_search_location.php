<?php
 /*
 * 兆和人才网 ajax 搜索跳转
 * ============================================================================
 * 版权所有: 兆和网络，并保留所有权利。
 * 网站地址: http://www.mandnt.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/
define('IN_QISHI', true);
require_once(dirname(dirname(__FILE__)).'/include/plus.common.inc.php');
$act = !empty($_GET['act']) ? trim($_GET['act']) : 'QS_jobslist';
if (strcasecmp(QISHI_DBCHARSET,"utf8")!=0)
{
$_GET['key']=iconv("utf-8",QISHI_DBCHARSET,$_GET['key']);
}
unset($_GET['act']);
$_GET=array_map("rawurlencode",$_GET);
$url=url_rewrite($act,$_GET);
unset($_GET);
exit($url);
?>