<?php
/*
 * �׺��˲��� ְλ����
 * ============================================================================
 * ��Ȩ����: �׺����磬����������Ȩ����
 * ��վ��ַ: http://www.mandnt.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ�������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã�������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
 * ============================================================================
*/
define('IN_QISHI', true);
require_once(dirname(__FILE__).'/company_common.php');
if ($act=='comment_list')
{
	require_once(QISHI_ROOT_PATH.'include/page.class.php');
	$id=intval($_GET['jobsid']);
	$wheresql=" WHERE c.jobs_id='{$id}'";
	$joinsql=" LEFT JOIN   ".table('members')." AS m ON c.uid=m.uid ";
	$perpage=15;
	$total_sql="SELECT COUNT(*) AS num FROM ".table('comment')." AS c ".$wheresql;
	$total_val=$db->get_total($total_sql);
	$page = new page(array('total'=>$total_val, 'perpage'=>$perpage));
	$offset=($page->nowindex-1)*$perpage;
	$smarty->assign('title','ְλ���� - ��ҵ��Ա���� - '.$_CFG['site_name']);
	$smarty->assign('list',get_comment_list($offset, $perpage,$joinsql.$wheresql));
	$smarty->assign('page',$page->show(3));
	$smarty->display('member_company/company_comment.ini');
}
elseif ($act=='comment_del')
{
	$id =!empty($_POST['id'])?$_POST['id']:$_GET['id'];
	$jobs_id=intval($_POST['jobs_id']);
	if (empty($id))
	{
	showmsg("��û��ѡ����Ŀ��",1);
	}
	if($n=del_company_comment($id,$jobs_id,$company_profile['id']))
	{
	showmsg("ɾ���ɹ�����ɾ�� {$n} ��",2);
	}
	else
	{
	showmsg("ɾ��ʧ�ܣ�",0);
	}
}
unset($smarty);
?>