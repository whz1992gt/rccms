<?php
/*
 * �׺��˲��� ��ҵ��Ա����
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
$smarty->assign('leftmenu',"jobfair");
if ($act=='jobfair')
{
	require_once(QISHI_ROOT_PATH.'include/page.class.php');
	$oederbysql=" order BY `order` DESC,id DESC";
	$wheresql=" WHERE display=1 ";
	if ($_CFG['subsite']=="1" && $_CFG['subsite_filterjobfair']=="1")
	{
			$wheresql.=empty($wheresql)?" WHERE ":" AND ";
			$wheresql.=" (subsite_id=0 OR subsite_id=".intval($_CFG['subsite_id']).") ";
	}	
	$total_sql="SELECT COUNT(*) AS num FROM ".table('jobfair').$wheresql;
	$perpage=5;
	$total_val=$db->get_total($total_sql);
	$page = new page(array('total'=>$total_val, 'perpage'=>$perpage));
	$currenpage=$page->nowindex;
	$offset=($currenpage-1)*$perpage;
	$smarty->assign('title','��Ƹ�� - ��Ա���� - '.$_CFG['site_name']);
	$smarty->assign('jobfair',get_jobfair($offset,$perpage,$wheresql));
	if ($total_val>$perpage)$smarty->assign('page',$page->show(3));
	$smarty->display('member_company/company_jobfair_list.ini');
}
elseif ($act=='booth')
{
	$id=intval($_POST['id']);
	if(empty($id))
	{
	exit("ERR");
	}
		$time=time();
		$sql = "select * from ".table('jobfair')." where id='{$id}' limit 1";
		$jobfair=$db->getone($sql);
		if ($jobfair['predetermined_status']=="1" && $jobfair['holddates']>$time && $time>$jobfair['predetermined_start'] && ($jobfair['predetermined_end']=="0" || $jobfair['predetermined_end']>$time) && $jobfair['predetermined_web']=="1")
		{
					$user_points=get_user_points($_SESSION['uid']);
					if ($jobfair['predetermined_point']>$user_points)
					{
					$link[0]['text'] = "������ֵ";
					$link[0]['href'] = 'company_service.php?act=order_add';
					$link[1]['text'] = "������һҳ";
					$link[1]['href'] = 'javascript:history.go(-1)';
					$link[2]['text'] = "��Ա������ҳ";
					$link[2]['href'] = 'company_index.php?act=';
					showmsg("���".$_CFG['points_byname']."���㣬���ֵ����Ԥ����",0,$link);
					}
					if ($db->getone("select * from ".table('jobfair_exhibitors')." where jobfairid='{$id}' AND uid={$_SESSION['uid']} limit 1"))
					{
					$link[0]['text'] = "��Ԥ����չλ";
					$link[0]['href'] = '?act=mybooth';
					$link[1]['text'] = "������һҳ";
					$link[1]['href'] = 'javascript:history.go(-1)';
					showmsg("���Ѿ�Ԥ��������Ƹ���չλ�ˣ������ظ�Ԥ��",1,$link);
					}
					$setsqlarr['jobfairid']=$id;
					$setsqlarr['uid']=intval($_SESSION['uid']);
					$setsqlarr['etypr']=1;
					$setsqlarr['eaddtime']=$timestamp;
					$setsqlarr['companyname']=$company_profile['companyname'];
					$setsqlarr['company_id']=$company_profile['id'];
					$setsqlarr['company_addtime']=$company_profile['addtime'];
					$setsqlarr['jobfair_title']=$jobfair['title'];
					$setsqlarr['jobfair_addtime']=$jobfair['addtime'];
					$setsqlarr['note']="{$_SESSION['username']} Ԥ������Ƹ�� ��{$jobfair['title']}�� ��չλ���ѳɹ��۳����� {$jobfair['predetermined_point']}";	
					if (inserttable(table('jobfair_exhibitors'),$setsqlarr))
					{
					if ($jobfair['predetermined_point']>0)
					{
						report_deal($_SESSION['uid'],2,$jobfair['predetermined_point']);
						$user_points=get_user_points($_SESSION['uid']);					
						write_memberslog($_SESSION['uid'],1,9001,$_SESSION['username'],"Ԥ������Ƹ�� ��{$jobfair['title']}�� ��չλ��(-{$jobfair['predetermined_point']})��(ʣ��:{$user_points})");
					}				
					write_memberslog($_SESSION['uid'],1,1401,$_SESSION['username'],"Ԥ������Ƹ�� ��{$jobfair['title']}�� ��չλ");
					$link[0]['text'] = "��Ԥ����չλ";
					$link[0]['href'] = '?act=mybooth';
					$link[1]['text'] = "������һҳ";
					$link[1]['href'] = 'javascript:history.go(-1)';
					$link[2]['text'] = "��Ա������ҳ";
					$link[2]['href'] = 'company_index.php?act=';
					showmsg("Ԥ���ɹ���",2,$link);
					}
		}
}
elseif ($act=='mybooth')
{
	require_once(QISHI_ROOT_PATH.'include/page.class.php');
	$oederbysql=" order BY e.id DESC";
	$wheresql= " WHERE e.uid={$_SESSION['uid']} ";
	$settr=intval($_GET['settr']);
	if($settr>0)
	{
	$settr_val=strtotime("-".$settr." day");
	$wheresql.=" AND e.eaddtime>".$settr_val;
	}
	$joinsql=" LEFT JOIN  ".table('jobfair')." AS j ON  e.jobfairid=j.id ";
	$total_sql="SELECT COUNT(*) AS num FROM ".table('jobfair_exhibitors')." as e ".$joinsql.$wheresql;
	$perpage=10;
	$total_val=$db->get_total($total_sql);
	$page = new page(array('total'=>$total_val, 'perpage'=>$perpage));
	$currenpage=$page->nowindex;
	$offset=($currenpage-1)*$perpage;
	$smarty->assign('title','��Ԥ����չλ - ��Ƹ�� - ��Ա���� - '.$_CFG['site_name']);
	$smarty->assign('list',get_jobfair_exhibitors($offset,$perpage,$joinsql.$wheresql));
	if ($total_val>$perpage)$smarty->assign('page',$page->show(3));
	$smarty->display('member_company/company_jobfair_exhibitors.ini');
}
unset($smarty);
?>