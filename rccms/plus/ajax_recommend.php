<?php
 /*
 * �׺��˲��� AJAX �Ƽ�������
 * ============================================================================
 * ��Ȩ����: �׺����磬����������Ȩ����
 * ��վ��ַ: http://www.mandnt.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ�������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã�������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
 * ============================================================================
*/
define('IN_QISHI', true);
require_once(dirname(__FILE__).'/../include/common.inc.php');
$act = !empty($_GET['act']) ? trim($_GET['act']) :trim($_POST['act']);
require_once(QISHI_ROOT_PATH.'include/mysql.class.php');
$db = new mysql($dbhost,$dbuser,$dbpass,$dbname);
if ($_SESSION['uid']=='' || $_SESSION['username']=='')
{
	$captcha=get_cache('captcha');
	$smarty->assign('verify_userlogin',$captcha['verify_userlogin']);
	$smarty->display('plus/ajax_login.ini');
	exit();
}
$uid=intval($_SESSION['uid']);
$user=$db->getone("select * from ".table('members')." where uid ='{$uid}' LIMIT 1");
if ($user['email_audit']=="0")
{
$verifyurl=$_SESSION['utype']=="1"?'/company_user.php?act=user_email':'/personal_user.php?act=user_email';
$verifyurl=get_member_url($_SESSION['utype'],true).$verifyurl;
exit(" �������� <strong style=\"color:#FF6600\">{$user['email']}</strong> û����֤������ <a href=\"{$verifyurl}\">[��֤����]</a>");
}
if ($act=='recommendjobs')
{
	$info=$db->getone("select * from ".table('members_info')." where uid ='{$uid}' LIMIT 1");
	$smarty->assign('info',$info);
	$smarty->assign('user',$user);
	$smarty->assign('job',explode('|',$_GET['job']));
	$smarty->display('plus/recommend/recommend_jobs.ini');
	exit();
}
elseif ($act=='send_recommendjobs')
{
	$sendemail=trim($_POST['sendemail']);
	$realname=trim($_POST['realname']);	
	$message=trim($_POST['message']);
	$jobname=trim($_POST['jobname']);
	$joburl=trim($_POST['joburl']);
	if (strcasecmp(QISHI_DBCHARSET,"utf8")!=0)
	{
	$realname=iconv("utf-8",QISHI_DBCHARSET,$realname);
	$message=iconv("utf-8",QISHI_DBCHARSET,$message);
	$jobname=iconv("utf-8",QISHI_DBCHARSET,$jobname);
	}
	$uid=intval($_SESSION['uid']);
	$user=$db->getone("select * from ".table('members')." where uid ='{$uid}' LIMIT 1");
	if ($user['email_audit']=="0")
	{
	exit("false");
	}
	$send_title="{$realname}�����Ƽ���ְλ���Ͽ쿴���ɣ�";
	$send_body="����<a href=\"{$_CFG['site_domain']}{$_CFG['site_dir']}\" target=\"_blank\">{$_CFG['site_name']}</a>�Ͽ���һ����Ƹ��Ϣ��\"<a href=\"{$joburl}\" target=\"_blank\">{$jobname}</a>\"������ǿ���Ƽ���";
	if (!empty($message))
	{
	$send_body=$send_body."<br/>����:<br/>".$message;
	}
	if(smtp_mail($sendemail,$send_title,$send_body,$user['email'],$realname))
	{
	exit("true");
	}
	else
	{
	exit("false");
	}	
}
elseif ($act=='recommendresume')
{
	
	$info=$db->getone("select * from ".table('members_info')." where uid ='{$uid}' LIMIT 1");
	$smarty->assign('info',$info);
	$smarty->assign('user',$user);
	$smarty->assign('resume',explode('|',$_GET['resume']));
	$smarty->display('plus/recommend/recommend_resume.ini');
	exit();
}
elseif ($act=='send_recommendresume')
{
	$sendemail=trim($_POST['sendemail']);
	$realname=trim($_POST['realname']);	
	$message=trim($_POST['message']);
	$resumename=trim($_POST['resumename']);
	$resumeurl=trim($_POST['resumeurl']);
	if (strcasecmp(QISHI_DBCHARSET,"utf8")!=0)
	{
	$realname=iconv("utf-8",QISHI_DBCHARSET,$realname);
	$message=iconv("utf-8",QISHI_DBCHARSET,$message);
	$resumename=iconv("utf-8",QISHI_DBCHARSET,$resumename);
	}
	$uid=intval($_SESSION['uid']);
	$user=$db->getone("select * from ".table('members')." where uid ='{$uid}' LIMIT 1");
	if ($user['email_audit']=="0")
	{
	exit("false");
	}
	$send_title="{$realname}�����Ƽ�����ְ�������Ͽ쿴���ɣ�";
	$send_body="����<a href=\"{$_CFG['site_domain']}{$_CFG['site_dir']}\" target=\"_blank\">{$_CFG['site_name']}</a>�Ͽ���һ����ְ������\"<a href=\"{$resumeurl}\" target=\"_blank\">{$resumename}����ְ����</a>\"������ǿ���Ƽ���";
	if (!empty($message))
	{
	$send_body=$send_body."<br/>����:<br/>".$message;
	}
	if(smtp_mail($sendemail,$send_title,$send_body,$user['email'],$realname))
	{
	exit("true");
	}
	else
	{
	exit("false");
	}	
}
?>