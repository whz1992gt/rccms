<?php
/*
 * �׺��˲��� ��ҵ��Ա����
 * ============================================================================
 * ��Ȩ����: �׺����磬����������Ȩ����
 * ��վ��ַ: http://www.mandnt.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ��������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã��������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
 * ============================================================================
*/
define('IN_QISHI', true);
require_once(dirname(__FILE__).'/company_common.php');
$smarty->assign('leftmenu',"info");
if ($act=='company_profile')
{
	$smarty->assign('title','��ҵ���Ϲ��� - ��ҵ��Ա���� - '.$_CFG['site_name']);
	$smarty->assign('company_profile',$company_profile);
	$smarty->display('member_company/company_profile.ini');
}
elseif ($act=='company_profile_save')
{
	
	$uid=intval($_SESSION['uid']);
	$setsqlarr['uid']=intval($_SESSION['uid']);
	$setsqlarr['companyname']=trim($_POST['companyname'])?trim($_POST['companyname']):showmsg('��û��������ҵ���ƣ�',1);
	$setsqlarr['nature']=trim($_POST['nature'])?intval($_POST['nature']):showmsg('��ѡ����ҵ���ʣ�',1);
	$setsqlarr['nature_cn']=trim($_POST['nature_cn']);
	$setsqlarr['trade']=trim($_POST['trade'])?intval($_POST['trade']):showmsg('��ѡ��������ҵ��',1);
	$setsqlarr['trade_cn']=trim($_POST['trade_cn']);
	$setsqlarr['district']=intval($_POST['district'])>0?intval($_POST['district']):showmsg('��ѡ������������',1);
	$setsqlarr['sdistrict']=intval($_POST['sdistrict']);
	$setsqlarr['district_cn']=trim($_POST['district_cn']);
	if (intval($_POST['street'])>0)
	{
	$setsqlarr['street']=intval($_POST['street']);
	$setsqlarr['street_cn']=trim($_POST['street_cn']);
	}
	if (intval($_POST['officebuilding'])>0)
	{
	$setsqlarr['officebuilding']=intval($_POST['officebuilding']);
	$setsqlarr['officebuilding_cn']=trim($_POST['officebuilding_cn']);
	}
	$setsqlarr['scale']=trim($_POST['scale'])?trim($_POST['scale']):showmsg('��ѡ��˾��ģ��',1);
	$setsqlarr['scale_cn']=trim($_POST['scale_cn']);
	$setsqlarr['registered']=trim($_POST['registered']);
	$setsqlarr['currency']=trim($_POST['currency']);
	$setsqlarr['address']=trim($_POST['address'])?trim($_POST['address']):showmsg('����дͨѶ��ַ��',1);
	$setsqlarr['contact']=trim($_POST['contact'])?trim($_POST['contact']):showmsg('����д��ϵ�ˣ�',1);
	$setsqlarr['telephone']=trim($_POST['telephone'])?trim($_POST['telephone']):showmsg('����д��ϵ�绰��',1);
	$setsqlarr['email']=trim($_POST['email'])?trim($_POST['email']):showmsg('����д��ϵ���䣡',1);
	$setsqlarr['website']=trim($_POST['website']);
	$setsqlarr['contents']=trim($_POST['contents'])?trim($_POST['contents']):showmsg('����д��˾��飡',1);
	$setsqlarr['yellowpages']=intval($_POST['yellowpages']);
	$link[0]['text'] = "�鿴�޸Ľ��";
	$link[0]['href'] = '?act=company_profile';
	$link[1]['text'] = "������Ƹ��Ϣ";
	$link[1]['href'] = "company_jobs.php?act=addjobs";
	$link[2]['text'] = "��Ա������ҳ";
	$link[2]['href'] = "company_index.php?";
	if ($_CFG['company_repeat']=="0")
	{
		$info=$db->getone("SELECT uid FROM ".table('company_profile')." WHERE companyname ='{$setsqlarr['companyname']}' AND uid<>'{$_SESSION['uid']}' LIMIT 1");
		if(!empty($info))
		{
			showmsg("{$setsqlarr['companyname']}�Ѿ����ڣ�ͬ��˾��Ϣ�����ظ�ע��",1);
		}
	}
	if ($company_profile)
	{
			$_CFG['audit_edit_com']<>"-1"?$setsqlarr['audit']=intval($_CFG['audit_edit_com']):'';
			if (updatetable(table('company_profile'), $setsqlarr," uid='{$uid}'"))
			{
				$jobarr['companyname']=$setsqlarr['companyname'];
				$jobarr['trade']=$setsqlarr['trade'];
				$jobarr['trade_cn']=$setsqlarr['trade_cn'];
				$jobarr['scale']=$setsqlarr['scale'];
				$jobarr['scale_cn']=$setsqlarr['scale_cn'];
				$jobarr['street']=$setsqlarr['street'];
				$jobarr['street_cn']=$setsqlarr['street_cn'];
				$jobarr['officebuilding']=$setsqlarr['officebuilding'];
				$jobarr['officebuilding_cn']=$setsqlarr['officebuilding_cn'];				
				if (!updatetable(table('jobs'),$jobarr," uid=".$setsqlarr['uid']."")) showmsg('�޸Ĺ�˾���Ƴ�����',0);
				if (!updatetable(table('jobs_tmp'),$jobarr," uid=".$setsqlarr['uid']."")) showmsg('�޸Ĺ�˾���Ƴ�����',0);
				if (!updatetable(table('jobfair_exhibitors'),array('companyname'=>$setsqlarr['companyname'])," uid=".$setsqlarr['uid']."")) showmsg('�޸Ĺ�˾���Ƴ�����',0);
				$soarray['trade']=$jobarr['trade'];
				$soarray['scale']=$jobarr['scale'];
				$soarray['street']=$setsqlarr['street'];
				$soarray['officebuilding']=$setsqlarr['officebuilding'];
				updatetable(table('jobs_search_scale'),$soarray," uid=".$setsqlarr['uid']."");
				updatetable(table('jobs_search_wage'),$soarray," uid=".$setsqlarr['uid']."");
				updatetable(table('jobs_search_rtime'),$soarray," uid=".$setsqlarr['uid']."");
				updatetable(table('jobs_search_stickrtime'),$soarray," uid=".$setsqlarr['uid']."");
				updatetable(table('jobs_search_hot'),$soarray," uid=".$setsqlarr['uid']."");
				updatetable(table('jobs_search_key'),$soarray," uid=".$setsqlarr['uid']."");
				write_memberslog($_SESSION['uid'],$_SESSION['utype'],8001,$_SESSION['username'],"�޸���ҵ����");
				showmsg("����ɹ���",2,$link);
			}
			else
			{
				showmsg("����ʧ�ܣ�",0);
			}
	}
	else
	{
			$setsqlarr['audit']=intval($_CFG['audit_add_com']);
			$setsqlarr['addtime']=$timestamp;
			$setsqlarr['refreshtime']=$timestamp;
			if (inserttable(table('company_profile'),$setsqlarr))
			{
				write_memberslog($_SESSION['uid'],$_SESSION['utype'],8001,$_SESSION['username'],"������ҵ����");
				showmsg("����ɹ���",2,$link);
			}
			else
			{
				showmsg("����ʧ�ܣ�",0);
			}
	}
}
elseif ($act=='company_auth')
{
	$link[0]['text'] = "������ҵ����";
	$link[0]['href'] = '?act=company_profile';
	$link[1]['text'] = "������ҳ";
	$link[1]['href'] = 'company_index.php';
	if (empty($company_profile['companyname'])) showmsg("������������ҵ�������ϴ�Ӫҵִ�գ�",1,$link);
	$smarty->assign('title','Ӫҵִ�� - ��ҵ��Ա���� - '.$_CFG['site_name']);
	$smarty->assign('points',get_cache('points_rule'));
	$smarty->assign('company_profile',$company_profile);
	$smarty->display('member_company/company_auth.ini');
}
elseif ($act=='company_auth_save')
{
	require_once(QISHI_ROOT_PATH.'include/upload.php');
	$setsqlarr['license']=trim($_POST['license'])?trim($_POST['license']):showmsg('��û������Ӫҵִ��ע��ţ�',1);
	$setsqlarr['audit']=2;//����Ĭ�������..
	!$_FILES['certificate_img']['name']?showmsg('���ϴ�ͼƬ��',1):"";
	$certificate_dir="../../data/".$_CFG['updir_certificate']."/".date("Y/m/d/");
	make_dir($certificate_dir);
	$setsqlarr['certificate_img']=_asUpFiles($certificate_dir, "certificate_img",$_CFG['certificate_max_size'],'gif/jpg/bmp/png',true);
	if ($setsqlarr['certificate_img'])
	{
	$setsqlarr['certificate_img']=date("Y/m/d/").$setsqlarr['certificate_img'];
	$auth=$company_profile;
	@unlink("../../data/".$_CFG['updir_certificate']."/".$auth['certificate_img']);
	$wheresql="uid='".$_SESSION['uid']."'";
	write_memberslog($_SESSION['uid'],1,8002,$_SESSION['username'],"�ϴ���Ӫҵִ��");
	updatetable(table('jobs'),array('company_audit'=>2),$wheresql);
	updatetable(table('jobs_tmp'),array('company_audit'=>2),$wheresql);
	!updatetable(table('company_profile'),$setsqlarr,$wheresql)?showmsg('����ʧ�ܣ�',1):showmsg('����ɹ��������ĵȴ�����Ա��ˣ�',2);
	}
	else
	{
	showmsg('����ʧ�ܣ�',1);
	}
}
elseif ($act=='company_logo')
{
	$link[0]['text'] = "������ҵ����";
	$link[0]['href'] = '?act=company_profile';
	$link[1]['text'] = "��Ա������ҳ";
	$link[1]['href'] = 'company_index.php';
	if (empty($company_profile['companyname'])) showmsg("������������ҵ�������ϴ�Ӫҵִ�գ�",1,$link);
	$smarty->assign('title','��ҵLOGO - ��ҵ��Ա���� - '.$_CFG['site_name']);
	$smarty->assign('company_profile',$company_profile);
	$smarty->assign('rand',rand(1,100));
	$smarty->display('member_company/company_logo.ini');
}
elseif ($act=='company_logo_save')
{
	require_once(QISHI_ROOT_PATH.'include/upload.php');
	!$_FILES['logo']['name']?showmsg('���ϴ�ͼƬ��',1):"";
	$uplogo_dir="../../data/logo/".date("Y/m/d/");
	make_dir($uplogo_dir);
	$setsqlarr['logo']=_asUpFiles($uplogo_dir, "logo",$_CFG['logo_max_size'],'gif/jpg/bmp/png',$_SESSION['uid']);
	if ($setsqlarr['logo'])
	{
	$setsqlarr['logo']=date("Y/m/d/").$setsqlarr['logo'];
	$logo_src="../../data/logo/".$setsqlarr['logo'];
	$thumb_dir=$uplogo_dir;
	makethumb($logo_src,$thumb_dir,300,110);//��������ͼ
	$wheresql="uid='".$_SESSION['uid']."'";
			if (updatetable(table('company_profile'),$setsqlarr,$wheresql))
			{
			$link[0]['text'] = "�鿴LOGO";
			$link[0]['href'] = '?act=company_logo';
			write_memberslog($_SESSION['uid'],1,8003,$_SESSION['username'],"�ϴ�����ҵLOGO");
			showmsg('�ϴ��ɹ���',2,$link);
			}
			else
			{
			showmsg('����ʧ�ܣ�',1);
			}
	}
	else
	{
	showmsg('����ʧ�ܣ�',1);
	}
}
elseif ($act=='company_logo_del')
{
	$uplogo_dir="../../data/logo/";
	$auth=$company_profile;//��ȡԭʼͼƬ
	@unlink($uplogo_dir.$auth['logo']);//��ɾ��ԭʼͼƬ
	$setsqlarr['logo']="";
	$wheresql="uid='".$_SESSION['uid']."'";
		if (updatetable(table('company_profile'),$setsqlarr,$wheresql))
		{
		write_memberslog($_SESSION['uid'],1,8004,$_SESSION['username'],"ɾ������ҵLOGO");
		showmsg('ɾ���ɹ���',2);
		}
		else
		{
		showmsg('ɾ��ʧ�ܣ�',1);
		}
}
elseif ($act=='company_map')
{
	$link[0]['text'] = "��д��ҵ����";
	$link[0]['href'] = '?act=company_profile';
	if (empty($company_profile['companyname'])) showmsg("������������ҵ���������õ��ӵ�ͼ��",1,$link);
	if ($company_profile['map_open']=="1")//�����Ѿ���ͨ
	{
	header("Location: ?act=company_map_set");
	}
	else
	{
	$points=get_cache('points_rule');//��ȡ�������ѹ���
	$smarty->assign('title','��ͨ���ӵ�ͼ - ��ҵ��Ա���� - '.$_CFG['site_name']);
	$smarty->assign('points',$points['company_map']['value']);
	$smarty->display('member_company/company_map_open.ini');
	}
}
elseif ($act=='company_map_open')
{
	$link[0]['text'] = "��д��ҵ����";
	$link[0]['href'] = '?act=company_profile';
	if (empty($company_profile['companyname'])) showmsg("������������ҵ���������õ��ӵ�ͼ��",1);
	$points=get_cache('points_rule');
	$user_points=get_user_points($_SESSION['uid']);
	if ($points['company_map']['type']=="2" && $points['company_map']['value']>$user_points)
	{
	showmsg("���".$_CFG['points_byname']."���㣬���ֵ���ٽ�����ز�����",0);
	}
	$wheresql="uid='".$_SESSION['uid']."'";
	$setsqlarr['map_open']=1;
		if (updatetable(table('company_profile'),$setsqlarr,$wheresql))
		{
			//�����ʼ�
			$mailconfig=get_cache('mailconfig');
			if ($mailconfig['set_addmap']=="1" && $user['email_audit']=="1")
			{
			dfopen($_CFG['site_domain'].$_CFG['site_dir']."plus/asyn_mail.php?uid=".$_SESSION['uid']."&key=".asyn_userkey($_SESSION['uid'])."&act=set_addmap");
			}
			//sms
			$sms=get_cache('sms_config');
			if ($sms['open']=="1" && $sms['set_addmap']=="1"  && $user['mobile_audit']=="1")
			{
			dfopen($_CFG['site_domain'].$_CFG['site_dir']."plus/asyn_sms.php?uid=".$_SESSION['uid']."&key=".asyn_userkey($_SESSION['uid'])."&act=set_addmap");
			}
			//sms
			$link[0]['text'] = "���õ��ӵ�ͼ";
			$link[0]['href'] = '?act=company_map_set';
			$link[1]['text'] = "���ػ�Ա������ҳ";
			$link[1]['href'] = 'company_index.php?act=';			
			write_memberslog($_SESSION['uid'],1,8005,$_SESSION['username'],"��ͨ�˵��ӵ�ͼ");
			if ($points['company_map']['value']>0)
			{
			report_deal($_SESSION['uid'],$points['company_map']['type'],$points['company_map']['value']);
			$user_points=get_user_points($_SESSION['uid']);
			$operator=$points['company_map']['type']=="1"?"+":"-";
			write_memberslog($_SESSION['uid'],1,9001,$_SESSION['username'],"��ͨ�˵��ӵ�ͼ({$operator}{$points['company_map']['value']})��(ʣ��:{$user_points})");
			}
			showmsg('�ɹ���ͨ��',2,$link);
		}
		else
		{
		showmsg('��ͨʧ�ܣ�',1);
		}
}
elseif ($act=='company_map_set')
{
	$smarty->assign('title','���õ��ӵ�ͼ - ��ҵ��Ա���� - '.$_CFG['site_name']);
	$smarty->assign('company_profile',$company_profile);
	$smarty->display('member_company/company_map_set.ini');
}
elseif ($act=='company_map_set_save')
{
	$setsqlarr['map_x']=trim($_POST['x'])?trim($_POST['x']):showmsg('���ȵ�����ڵ�ͼ�ϱ���ҵ�λ�á���ť��Ȼ���ٵ�������ҵ�λ�ý��б��棡',1);
	$setsqlarr['map_y']=trim($_POST['y'])?trim($_POST['y']):showmsg('���ȵ�����ڵ�ͼ�ϱ���ҵ�λ�á���ť��Ȼ���ٵ�������ҵ�λ�ý��б��棡',1);
	$setsqlarr['map_zoom']=trim($_POST['zoom']);
	$wheresql=" uid='{$_SESSION['uid']}'";
	write_memberslog($_SESSION['uid'],1,8006,$_SESSION['username'],"�����˵��ӵ�ͼ����");
	if (updatetable(table('company_profile'),$setsqlarr,$wheresql))
	{
		$jobsql['map_x']=$setsqlarr['map_x'];
		$jobsql['map_y']=$setsqlarr['map_y'];
		updatetable(table('jobs'),$jobsql,$wheresql);
		updatetable(table('jobs_tmp'),$jobsql,$wheresql);
		unset($setsqlarr['map_zoom']);
		//
		updatetable(table('jobs_search_rtime'),$jobsql,$wheresql);
		updatetable(table('jobs_search_key'),$jobsql,$wheresql);
		showmsg('����ɹ�',2);
	}
	else
	{
	showmsg('����ʧ��',1);
	}
}
elseif ($act=='company_news')
{
	$smarty->assign('news',get_company_news(0,60,$_SESSION['uid']));
	$smarty->assign('title','��˾���� - ��ҵ��Ա���� - '.$_CFG['site_name']);
	$smarty->display('member_company/company_news_list.ini');
}
if ($act=='company_news_add')
{
	$link[0]['text'] = "������ҵ����";
	$link[0]['href'] = '?act=company_profile';
	$link[1]['text'] = "��Ա������ҳ";
	$link[1]['href'] = 'company_index.php';
	if (empty($company_profile['companyname'])) showmsg("������������ҵ���ϣ�",1,$link);
	$smarty->assign('title','���ӹ�˾���� - ��Ա���� - '.$_CFG['site_name']);
	$smarty->display('member_company/company_news_add.ini');
}
elseif ($act=='company_news_add_save')
{
	$n=$db->get_total("SELECT COUNT(*) AS num FROM ".table('company_news')." WHERE uid='".intval($_SESSION['uid'])."'");
	if($n>=60)
	{
	showmsg('��ҵ������෢��60����',1);
	}
	$setsqlarr['title']=!empty($_POST['title'])?trim($_POST['title']):showmsg('����д���⣡',1);
	$setsqlarr['order']=intval($_POST['order']);
	$setsqlarr['content']=!empty($_POST['content'])?trim($_POST['content']):showmsg('����д����',1);
	$setsqlarr['addtime']=time();
	$setsqlarr['uid']=intval($_SESSION['uid']);
	$setsqlarr['company_id']=$company_profile['id'];
	$link[0]['text'] = "�����б�";
	$link[0]['href'] = '?act=company_news';
	$link[1]['text'] = "��������";
	$link[1]['href'] = '?act=company_news_add';
	!inserttable(table('company_news'),$setsqlarr)?showmsg("����ʧ�ܣ�",0):showmsg("���ӳɹ���",2,$link);
}
if ($act=='company_news_edit')
{
	$uid=intval($_SESSION['uid']);
	$id=intval($_GET['id']);
	$smarty->assign('news',$db->getone("select * from ".table('company_news')." where uid='{$uid}' AND id ='{$id}' LIMIT 1"));
	$smarty->assign('title','�޸Ĺ�˾���� - ��Ա���� - '.$_CFG['site_name']);
	$smarty->display('member_company/company_news_edit.ini');
}
elseif ($act=='company_news_edit_save')
{
	$setsqlarr['title']=!empty($_POST['title'])?trim($_POST['title']):showmsg('����д���⣡',1);
	$setsqlarr['order']=intval($_POST['order']);
	$setsqlarr['content']=!empty($_POST['content'])?trim($_POST['content']):showmsg('����д����',1);
	$link[0]['text'] = "�����б�";
	$link[0]['href'] = '?act=company_news';
	$uid=intval($_SESSION['uid']);
	$id=intval($_POST['id']);
	!updatetable(table('company_news'),$setsqlarr," uid='{$uid}' AND id='{$id}' ")?showmsg("�޸�ʧ�ܣ�",0):showmsg("�޸ĳɹ���",2,$link);
}
elseif ($act=='company_news_del')
{
	$id =!empty($_POST['id'])?$_POST['id']:$_GET['id'];
	if (empty($id))
	{
	showmsg("��û��ѡ�����ţ�",1);
	}
	if($n=del_company_news($id,$_SESSION['uid']))
	{
	showmsg("ɾ���ɹ�����ɾ�� {$n} ��",2);
	}
	else
	{
	showmsg("ɾ��ʧ�ܣ�",0);
	}
}
elseif ($act=='company_img')
{
	$link[0]['text'] = "������ҵ����";
	$link[0]['href'] = '?act=company_profile';
	$link[1]['text'] = "��Ա������ҳ";
	$link[1]['href'] = 'company_index.php';
	if (empty($company_profile['companyname'])) showmsg("������������ҵ�������ϴ���ҵͼƬ��",1,$link);
	$smarty->assign('title','��ҵͼƬ - ��ҵ��Ա���� - '.$_CFG['site_name']);
	$smarty->assign('img',get_company_img(0,60,$_SESSION['uid']));	
	$smarty->display('member_company/company_img.ini');
}
elseif ($act=='company_img_save')
{
	$n=$db->get_total("SELECT COUNT(*) AS num FROM ".table('company_img')." WHERE uid='".intval($_SESSION['uid'])."'");
	if($n>=60)
	{
	showmsg('��ҵͼƬ��෢��60�ţ�',1);
	}
	require_once(QISHI_ROOT_PATH.'include/upload.php');
	!$_FILES['img']['name']?showmsg('���ϴ�ͼƬ��',1):"";
	$datedir=date("Y/m/d/");
	$up_dir="../../data/companyimg/original/".$datedir;
	make_dir($up_dir);
	$setsqlarr['img']=_asUpFiles($up_dir,"img",800,'gif/jpg/bmp/png',true);
	if ($setsqlarr['img'])
	{
	$img_src=$up_dir.$setsqlarr['img'];
	$thumb_dir="../../data/companyimg/thumb/".$datedir;
	make_dir($thumb_dir);
	makethumb($img_src,$up_dir,600,600);
	makethumb($img_src,$thumb_dir,295,165);
	$setsqlarr['uid']=intval($_SESSION['uid']);
	$setsqlarr['company_id']=$company_profile['id'];
	$setsqlarr['addtime']=time();
	$setsqlarr['title']=trim($_POST['title']);
	$setsqlarr['img']=$datedir.$setsqlarr['img'];
			if (inserttable(table('company_img'),$setsqlarr))
			{
			$link[0]['text'] = "������һҳ";
			$link[0]['href'] = '?act=company_img';
			showmsg('�ϴ��ɹ���',2,$link);
			}
			else
			{
			showmsg('����ʧ�ܣ�',1);
			}
	}
	else
	{
	showmsg('����ʧ�ܣ�',1);
	}
}
elseif ($act=='company_img_del')
{
	$uid=intval($_SESSION['uid']);
	$id=intval($_GET['id']);
	$img=$db->getone("select * from ".table('company_img')." WHERE uid='{$uid}' AND id='{$id}' LIMIT 1");
	if (empty($img))
	{
	showmsg('ɾ��ʧ�ܣ�',1);
	}
	@unlink("../../data/companyimg/original/".$img['img']);
	@unlink("../../data/companyimg/thumb/".$img['img']);
	$db->query("Delete from ".table('company_img')." WHERE  uid='{$uid}' AND id='{$id}'");
	showmsg('ɾ���ɹ���',2);
}
unset($smarty);
?>