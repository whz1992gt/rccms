<?php
 /*
 * �׺��˲��� �ʼ�����
 * ============================================================================
 * ��Ȩ����: �׺����磬����������Ȩ����
 * ��վ��ַ: http://www.mandnt.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ�������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã�������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
 * ============================================================================
*/
define('IN_QISHI', true);
require_once(dirname(__FILE__).'/../data/config.php');
require_once(dirname(__FILE__).'/include/admin_common.inc.php');
$act = !empty($_GET['act']) ? trim($_GET['act']) : 'set_sms';
check_permissions($_SESSION['admin_purview'],"set_sms");
$smarty->assign('pageheader',"��������");
if($act == 'set_sms')
{
	get_token();
	$smarty->assign('sms',get_cache('sms_config'));
	$smarty->assign('navlabel','set');
	$smarty->display('sms/admin_sms_set.htm');
}
elseif($act == 'set_save')
{
	check_token();
	header("Cache-control: private");
	if (intval($_POST['open'])=="1")
	{
	empty($_POST['sms_name']) ? adminmsg('����д����ͨ�ʻ���',1) :'' ;
	empty($_POST['sms_key']) ? adminmsg('����дS����ͨ��Կ',1) :'' ;
	}
	foreach($_POST as $k => $v){
	!$db->query("UPDATE ".table('sms_config')." SET value='$v' WHERE name='$k'")?adminmsg('����վ������ʧ��', 1):"";
	}
	refresh_cache('sms_config');
	adminmsg("����ɹ���",2);
}
if($act == 'testing')
{
	get_token();
	$smarty->assign('navlabel','testing');
	$smarty->display('sms/admin_sms_testing.htm');
}
elseif($act == 'sms_testing')
{
	check_token();
	$txt="���ã�����һ��������ģ�����õĶ��š��յ��˶��ţ���ζ�����Ķ���ģ��������ȷ�������Խ������������ˣ�";
	$mobile=$_POST['mobile'];
	if (!preg_match("/^(13|15|18)\d{9}$/",$mobile))
	{
	adminmsg("�ֻ�����д������������д!",0);
	}
	$r=send_sms($mobile,$txt);
	if ($r=="success")
	{
	adminmsg('���ŷ��ͳɹ���',2);
	}
	else
	{
	adminmsg("���ŷ���ʧ�ܣ�$r",1);
	}
}
elseif($act == 'set_tpl')
{
	get_token();
	$smarty->assign('navlabel','templates');
	$smarty->assign('mailconfig',get_cache('mailconfig'));
	$smarty->display('sms/admin_sms_templates.htm');
}
elseif($act == 'rule')
{
	get_token();
	$smarty->assign('navlabel','rule');
	$smarty->assign('sms_config',get_cache('sms_config'));
	$smarty->display('sms/admin_sms_rule.htm');
}
elseif($act == 'sms_rule_save')
{
	check_token();
	foreach($_POST as $k => $v)
	{
	!$db->query("UPDATE ".table('sms_config')." SET value='$v' WHERE name='$k'")?adminmsg('����վ������ʧ��', 1):"";
	}
	refresh_cache('sms_config');
	adminmsg("����ɹ���",2);
}
elseif($act == 'edit_tpl')
{
	get_token();
	$templates_name=trim($_GET['templates_name']);
	$label=array();
	$label[]=array('{sitename}','��վ����');
	$label[]=array('{sitedomain}','��վ����');
	//���ɱ�ǩ
	if ($templates_name=='set_reg')
	{
	$label[]=array('{username}','�û���');
	$label[]=array('{password}','����');
	}
	elseif ($templates_name=='set_applyjobs')
	{
	$label[]=array('{personalfullname}','������');
	$label[]=array('{jobsname}','����ְλ����');
	}
	elseif ($templates_name=='set_invite')
	{
	$label[]=array('{companyname}','���뷽(��˾����)');
	}
	elseif ($templates_name=='set_order')
	{
	$label[]=array('{paymenttpye}','���ʽ');
	$label[]=array('{oid}','������');
	$label[]=array('{amount}','���');
	}
	elseif ($templates_name=='set_editpwd')
	{
	$label[]=array('{newpassword}','������');
	}
	elseif ($templates_name=='set_jobsallow' || $templates_name=='set_jobsnotallow')
	{
	$label[]=array('{jobsname}','ְλ����');
	}
	//-end
	if ($templates_name)
	{
		$sql = "select * from ".table('sms_templates')." where name='".$templates_name."'";
		$info=$db->getone($sql);
	}
	$info['thisname']=trim($_GET['thisname']);
	$smarty->assign('info',$info);
	$smarty->assign('label',$label);
	$smarty->assign('navlabel','templates');
	$smarty->display('sms/admin_sms_templates_edit.htm');
}
elseif($act == 'templates_save')
{
	check_token();
	$templates_value=trim($_POST['templates_value']);
	$templates_name=trim($_POST['templates_name']);
	!$db->query("UPDATE ".table('sms_templates')." SET value='{$templates_value}' WHERE name='{$templates_name}'")?adminmsg('����ʧ��', 1):"";
	$link[0]['text'] = "������һҳ";
	$link[0]['href'] ="?act=set_tpl";
	refresh_cache('sms_templates');
	adminmsg("����ɹ���",2,$link);
}
?>