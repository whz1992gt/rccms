<?php 
 /*
 * �׺��˲��� ֧����Ӧҳ��
 * ============================================================================
 * ��Ȩ����: �׺����磬����������Ȩ����
 * ��վ��ַ: http://www.mandnt.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ�������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã�������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
 * ============================================================================
*/
define('IN_QISHI', true);
require_once(dirname(__FILE__).'/../common.inc.php');
require_once(QISHI_ROOT_PATH.'include/mysql.class.php');
$db = new mysql($dbhost,$dbuser,$dbpass,$dbname);
require_once(QISHI_ROOT_PATH.'include/fun_company.php');
require_once(QISHI_ROOT_PATH."include/payment/chinabank.php");
	if (respond())
	{
		$link[0]['text'] = "�鿴����";
		$link[0]['href'] = get_member_url(1,true).'company_service.php?act=order_list';
		$link[1]['text'] = "��Ա����";
		$link[1]['href'] = url_rewrite('QS_login');		
		$link[2]['text'] = "��վ��ҳ";
		$link[2]['href'] = $_CFG['site_dir'];
		showmsg("����ɹ���",2,$link,false);
	}
	else
	{
		$link[0]['text'] = "��Ա����";
		$link[0]['href'] = get_member_url(1);
		showmsg("����ʧ�ܣ�����ϵ��վ����Ա",0,$link);
	}
?>
