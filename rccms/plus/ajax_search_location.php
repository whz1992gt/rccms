<?php
 /*
 * �׺��˲��� ajax ������ת
 * ============================================================================
 * ��Ȩ����: �׺����磬����������Ȩ����
 * ��վ��ַ: http://www.mandnt.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ�������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã�������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
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