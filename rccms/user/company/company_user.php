<?php
/*
 * 兆和人才网 企业会员中心
 * ============================================================================
 * 版权所有: 兆和网络，并保留所有权利。
 * 网站地址: http://www.mandnt.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/
define('IN_QISHI', true);
require_once(dirname(__FILE__).'/company_common.php');
$smarty->assign('leftmenu',"user");
if ($act=='userprofile')
{
	$smarty->assign('user',$user);
	$smarty->assign('title','个人资料 - 会员中心 - '.$_CFG['site_name']);
	$smarty->assign('userprofile',get_userprofile($_SESSION['uid']));	
	$smarty->display('member_company/company_userprofile.ini');
}
elseif ($act=='userprofile_save')
{
	$setsqlarr['realname']=trim($_POST['realname'])?trim($_POST['realname']):showmsg('请填写真实姓名！',1);
	$setsqlarr['sex']=trim($_POST['sex']);
	$setsqlarr['birthday']=trim($_POST['birthday']);
	$setsqlarr['addresses']=trim($_POST['addresses'])?trim($_POST['addresses']):showmsg('请填写通讯地址',1);
	$setsqlarr['phone']=trim($_POST['phone']);
	$setsqlarr['qq']=trim($_POST['qq']);
	$setsqlarr['msn']=trim($_POST['msn']);
	$setsqlarr['profile']=trim($_POST['profile']);
	if (get_userprofile($_SESSION['uid']))
	{
	$wheresql=" uid='".intval($_SESSION['uid'])."'";
	write_memberslog($_SESSION['uid'],1,1005,$_SESSION['username'],"修改了个人资料");
	!updatetable(table('members_info'),$setsqlarr,$wheresql)?showmsg("修改失败！",0):showmsg("修改成功！",2);
	}
	else
	{
	write_memberslog($_SESSION['uid'],1,1005,$_SESSION['username'],"修改了个人资料");
	$setsqlarr['uid']=intval($_SESSION['uid']);
	!inserttable(table('members_info'),$setsqlarr)?showmsg("修改失败！",0):showmsg("修改成功！",2);
	}
}
elseif ($act=='pm')
{
	require_once(QISHI_ROOT_PATH.'include/page.class.php');
	$perpage=10;
	$uid=intval($_SESSION['uid']);
	$new=intval($_GET['new']);
	$msgtype=intval($_GET['msgtype']);
	$wheresql=" WHERE (p.msgfromuid='{$uid}' OR p.msgtouid='{$uid}') ";
	$joinsql=" LEFT JOIN  ".table('members')." AS i  ON  p.msgfromuid=i.uid ";
	$orderby=" order by p.pmid desc";
	if ($new>0)
	{
	$wheresql.=" AND p.`new`='{$new}' AND p.`replyuid`<>'{$uid}' ";
	}
	if ($msgtype>0)
	{
	$wheresql.=" AND p.msgtype='{$msgtype}' ";
	}
	$total_sql="SELECT COUNT(*) AS num FROM ".table('pms').' AS p '.$wheresql;
	$total_val=$db->get_total($total_sql);
	$page = new page(array('total'=>$total_val, 'perpage'=>$perpage));
	$currenpage=$page->nowindex;
	$offset=($currenpage-1)*$perpage;
	$sql="SELECT p.*,i.avatars FROM ".table('pms').' AS p'.$joinsql.$wheresql.$orderby;
	$smarty->assign('pms',get_pms($offset,$perpage,$sql));
	$smarty->assign('total1',$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$uid}' OR msgtouid='{$uid}') AND `new`='1' AND `replyuid`<>'{$uid}'"));
	$smarty->assign('total2',$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$uid}' OR msgtouid='{$uid}') AND `msgtype`='1'"));
	$smarty->assign('total3',$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$uid}' OR msgtouid='{$uid}') AND `msgtype`='2'"));
	$smarty->assign('title','短消息 - 会员中心 - '.$_CFG['site_name']);	
	$smarty->assign('page',$page->show(3));
	$smarty->assign('uid',$uid);
	$smarty->display('member_company/company_user_pm.ini');
}
elseif ($act=='pm_show')
{
	$uid=intval($_SESSION['uid']);
	$pmid=$_GET['pmid'];
	$show=get_pms_one($_GET['pmid'],$uid);
	if (empty($show))
	{
	exit();
	}
	$smarty->assign('show',$show);
	if ($show['msgtype']!='1')//非系统消息
	{
	$smarty->assign('reply',get_pms_reply($show['pmid']));
	}
	$db->query("UPDATE ".table('pms')." SET `new`='2' WHERE pmid='{$show['pmid']}' AND replyuid<>'{$uid}'");	
	$db->query("UPDATE ".table('pms_reply')." SET `new`='2' WHERE pmid='{$show['pmid']}' AND replyuid<>'{$uid}'");
	$total1=$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$uid}' OR msgtouid='{$uid}') AND `new`='1' AND `replyuid`<>'{$uid}'");
	$smarty->assign('total1',$total1);
	setcookie('QS[pmscount]',$total1,0,$QS_cookiepath,$QS_cookiedomain);
	$smarty->assign('total2',$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$uid}' OR msgtouid='{$uid}') AND `msgtype`='1'"));
	$smarty->assign('total3',$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$uid}' OR msgtouid='{$uid}') AND `msgtype`='2'"));
 	$smarty->assign('title','消息记录 - 会员中心 - '.$_CFG['site_name']); 
	$smarty->assign('uid',$uid);
	$smarty->display('member_company/company_user_pm_show.ini');
	//统计消息
	$pmscount=$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$_SESSION['uid']}' OR msgtouid='{$_SESSION['uid']}') AND `new`='1' AND `replyuid`<>'{$_SESSION['uid']}'");
	setcookie('QS[pmscount]',$pmscount, $expire,$QS_cookiepath,$QS_cookiedomain);
}
elseif ($act=='pm_reply_save')
{
	$setsqlarr['pmid']=intval($_POST['pmid']);
	$setsqlarr['replyuid']=intval($_SESSION['uid']);
	$setsqlarr['replyusername']=trim($_SESSION['username']);
	$setsqlarr['new']=1;
	$setsqlarr['replytime']=time();
	$setsqlarr['replytext']=trim($_POST['replytext']);
	inserttable(table('pms_reply'),$setsqlarr);
	$pms['new']=1;
	$pms['replytime']=$setsqlarr['replytime'];
	$pms['replyuid']=$setsqlarr['replyuid'];
	updatetable(table('pms'),$pms," pmid='{$setsqlarr['pmid']}'");
	showmsg("回复成功！",2);
}
elseif ($act=='pm_del')
{
	$pmid=intval($_GET['pmid']);
	$uid=intval($_SESSION['uid']);
	$pms= $db->getone("select * from ".table('pms')." where pmid = '{$pmid}' AND (msgfromuid='{$uid}' OR msgtouid='{$uid}') LIMIT 1");
	if (!empty($pms))
	{
	$db->query("Delete from ".table('pms')." WHERE pmid='{$pms['pmid']}'");
	$db->query("Delete from ".table('pms_reply')." WHERE pmid='{$pms['pmid']}'");
	}
	$link[0]['text'] = "返回列表";
	$link[0]['href'] = "?act=pm&msgtype={$_GET['msgtype']}&new={$_GET['new']}";
	//统计消息
	$pmscount=$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$_SESSION['uid']}' OR msgtouid='{$_SESSION['uid']}') AND `new`='1' AND `replyuid`<>'{$_SESSION['uid']}'");
	setcookie('QS[pmscount]',$pmscount, $expire,$QS_cookiepath,$QS_cookiedomain);
	showmsg("操作成功！",2,$link);
}
elseif ($act=='avatars')
{
	$smarty->assign('title','个人头像 - 会员中心 - '.$_CFG['site_name']);
	$smarty->assign('user',$user);
	$smarty->assign('rand',rand(1,100));
	$smarty->display('member_company/company_avatars.ini');
}
elseif ($act=='buddy')
{
	$perpage=30;
	require_once(QISHI_ROOT_PATH.'include/page.class.php');
	$smarty->assign('title','好友列表 - 会员中心 - '.$_CFG['site_name']);
	$uid=intval($_SESSION['uid']);
	$wheresql=" WHERE b.uid='{$uid}' ";
	$joinsql=" LEFT JOIN  ".table('members')." AS m  ON  b.tuid=m.uid ";
	$orderby=" ORDER BY b.id DESC";
	$total_sql="SELECT COUNT(*) AS num FROM ".table('members_buddy').' AS b '.$wheresql;
	$total_val=$db->get_total($total_sql);
	$page = new page(array('total'=>$total_val, 'perpage'=>$perpage));
	$currenpage=$page->nowindex;
	$offset=($currenpage-1)*$perpage;
	$sql="SELECT b.*,m.username,m.avatars FROM ".table('members_buddy').' AS b '.$joinsql.$wheresql.$orderby;
	$smarty->assign('buddy',get_buddy($offset,$perpage,$sql));
	$smarty->assign('page',$page->show(3));
	$smarty->display('member_company/company_user_buddy.ini');
}
elseif ($act=='buddy_del')
{
	$id=intval($_GET['id']);
	$uid=intval($_SESSION['uid']);
	$db->query("Delete from ".table('members_buddy')." WHERE id='{$id}' and uid='{$uid}'");
	showmsg("操作成功！",2);
}
elseif ($act=='avatars_save')
{
	require_once(QISHI_ROOT_PATH.'include/upload.php');
	!$_FILES['avatars']['name']?showmsg('请上传图片！',1):"";
	$up_dir_100="../../data/avatar/100/";
	$up_dir_48="../../data/avatar/48/";
	make_dir($up_dir_100.date("Y/m/d/"));
	make_dir($up_dir_48.date("Y/m/d/"));
	$setsqlarr['avatars']=_asUpFiles($up_dir_100.date("Y/m/d/"),"avatars",500,'gif/jpg/bmp/png',$_SESSION['uid']);
	$setsqlarr['avatars']=date("Y/m/d/").$setsqlarr['avatars'];
	if ($setsqlarr['avatars'])
	{
	makethumb($up_dir_100.$setsqlarr['avatars'],$up_dir_100.date("Y/m/d/"),100,100);
	makethumb($up_dir_100.$setsqlarr['avatars'],$up_dir_48.date("Y/m/d/"),48,48);
	$wheresql=" uid='".$_SESSION['uid']."'";
	write_memberslog($_SESSION['uid'],1,1006,$_SESSION['username'],"修改了个人头像");
	updatetable(table('members'),$setsqlarr,$wheresql)?showmsg('保存成功！',2):showmsg('保存失败！',1);
	}
	else
	{
	showmsg('保存失败！',1);
	}
}
elseif ($act=='user_email')
{
	$smarty->assign('user',$user);
	$smarty->assign('re_audit',$_GET['re_audit']);
	$smarty->assign('title','验证邮箱 - 企业会员中心 - '.$_CFG['site_name']);
	$_SESSION['send_key']=mt_rand(100000, 999999);
	$smarty->assign('send_key',$_SESSION['send_key']);
	if ($_SESSION['handsel_verifyemail'])
	{
		$smarty->assign('handsel_verifyemail',$_SESSION['handsel_verifyemail']);
		unset($_SESSION['handsel_verifyemail']);
	}
	$smarty->display('member_company/company_user_email.ini');
}
elseif ($act=='user_mobile')
{
	$smarty->assign('user',$user);
	$smarty->assign('re_audit',$_GET['re_audit']);
	$smarty->assign('title','手机认证 - 企业会员中心 - '.$_CFG['site_name']);
	$_SESSION['send_key']=mt_rand(100000, 999999);
	$smarty->assign('send_key',$_SESSION['send_key']);
	if ($_SESSION['handsel_verifymobile'])
	{
		$smarty->assign('handsel_verifymobile',$_SESSION['handsel_verifymobile']);
		unset($_SESSION['handsel_verifymobile']);
	}
	$smarty->display('member_company/company_user_mobile.ini');
}
elseif ($act=='user_status')
{
	$smarty->assign('user_status',$user['status']);
	$smarty->assign('title','账号状态 - 企业会员中心 - '.$_CFG['site_name']);
	$smarty->display('member_company/company_user_status.ini');
}
//保存会员状态
elseif ($act=='user_status_save')
{
	!set_user_status($_POST['status'],$_SESSION['uid'])?showmsg('保存失败！',1):showmsg('保存成功',2);
}
//修改密码
elseif ($act=='password_edit')
{
	$smarty->assign('title','修改密码 - 企业会员中心 - '.$_CFG['site_name']);
	$smarty->display('member_company/company_password.ini');
}
//保存修改密码
elseif ($act=='save_password')
{
	require_once(QISHI_ROOT_PATH.'include/fun_user.php');
	$arr['username']=$_SESSION['username'];
	$arr['oldpassword']=trim($_POST['oldpassword'])?trim($_POST['oldpassword']):showmsg('请输入旧密码！',1);
	$arr['password']=trim($_POST['password'])?trim($_POST['password']):showmsg('请输入新密码！',1);
	if ($arr['password']!=trim($_POST['password1'])) showmsg('两次输入密码不相同，请重新输入！',1);
	$info=edit_password($arr);
	if ($info==-1) showmsg('旧密码输入错误，请重新输入！',1);
	if ($info==$_SESSION['username']){
			//sendemail
			$mailconfig=get_cache('mailconfig');
			if ($mailconfig['set_editpwd']=="1" && $user['email_audit']=="1")
			{
			dfopen("{$_CFG['site_domain']}{$_CFG['site_dir']}plus/asyn_mail.php?uid={$_SESSION['uid']}&key=".asyn_userkey($_SESSION['uid'])."&act=set_editpwd&newpassword={$arr['password']}");
			}
			//sendemail
			//sms
			$sms=get_cache('sms_config');
			if ($sms['open']=="1" && $sms['set_editpwd']=="1"  && $user['mobile_audit']=="1")
			{
			dfopen("{$_CFG['site_domain']}{$_CFG['site_dir']}plus/asyn_sms.php?uid={$_SESSION['uid']}&key=".asyn_userkey($_SESSION['uid'])."&act=set_editpwd&newpassword={$arr['password']}");
			}
			//sms
			if(defined('UC_API'))
			{
			include_once(QISHI_ROOT_PATH.'uc_client/client.php');
			uc_user_edit($arr['username'],$arr['oldpassword'], $arr['password']);
			}
			showmsg('密码修改成功！',2);
	}
}
elseif ($act=='del_qq_binding')
{
	$db->query("UPDATE ".table('members')." SET qq_openid = ''  WHERE uid='{$_SESSION[uid]}' LIMIT 1");
	showmsg('操作成功！',2);
}
elseif ($act=='del_sina_binding')
{
	$db->query("UPDATE ".table('members')." SET sina_access_token = ''  WHERE uid='{$_SESSION[uid]}' LIMIT 1");
	showmsg('操作成功！',2);
}
elseif ($act=='del_taobao_binding')
{
	$db->query("UPDATE ".table('members')." SET taobao_access_token = ''  WHERE uid='{$_SESSION[uid]}' LIMIT 1");
	showmsg('操作成功！',2);
}
unset($smarty);
?>