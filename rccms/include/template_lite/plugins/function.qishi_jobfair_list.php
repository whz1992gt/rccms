<?php
function tpl_function_qishi_jobfair_list($params, &$smarty)
{
global $db,$_CFG;
$arrset=explode(',',$params['set']);
foreach($arrset as $str)
{
$a=explode(':',$str);
	switch ($a[0])
	{
	case "�б���":
		$aset['listname'] = $a[1];
		break;
	case "��ʾ��Ŀ":
		$aset['row'] = $a[1];
		break;
	case "���ⳤ��":
		$aset['titlelen'] = $a[1];
		break;	
	case "��ʼλ��":
		$aset['start'] = $a[1];
		break;
	case "��ַ�":
		$aset['dot'] = $a[1];
		break;
	case "���ڷ�Χ":
		$aset['settr'] = $a[1];
		break;
	case "��ҳ��ʾ":
		$aset['paged'] = $a[1];
		break;
	case "ҳ��":
		$aset['showname'] = $a[1];
		break;
	case "�б�ҳ":
		$aset['listpage'] = $a[1];
		break;
	case "�λ���ҵҳ":
		$aset['exhibitorspage'] = $a[1];
		break;
	}
}
if (is_array($aset)) $aset=array_map("get_smarty_request",$aset);
$aset['listname']=isset($aset['listname'])?$aset['listname']:"list";
$aset['row']=isset($aset['row'])?intval($aset['row']):10;
$aset['start']=isset($aset['start'])?intval($aset['start']):0;
$aset['titlelen']=isset($aset['titlelen'])?intval($aset['titlelen']):15;
$aset['showname']=isset($aset['showname'])?$aset['showname']:'QS_jobfairshow';
$aset['listpage']=isset($aset['listpage'])?$aset['listpage']:'QS_jobfairlist';
$aset['exhibitorspage']=isset($aset['exhibitorspage'])?$aset['exhibitorspage']:'QS_jobfairexhibitors';
$orderbysql=" order BY `order` DESC,id DESC ";
$wheresql=" WHERE display=1 ";
if (isset($aset['settr']))
{
$settr_val=strtotime("-".intval($aset['settr'])." day");
$wheresql.=" AND addtime > ".$settr_val;
}
if ($_CFG['subsite']=="1" && $_CFG['subsite_filter_jobfair']=="1")
{
	$wheresql.=" AND (subsite_id=0 OR subsite_id=".intval($_CFG['subsite_id']).") ";
}
if (isset($aset['paged']))
{
	require_once(QISHI_ROOT_PATH.'include/page.class.php');
	$total_sql="SELECT COUNT(*) AS num FROM ".table('jobfair').$wheresql;
	$total_count=$db->get_total($total_sql);
	$pagelist = new page(array('total'=>$total_count, 'perpage'=>$aset['row'],'alias'=>$aset['listpage']));
	$currenpage=$pagelist->nowindex;
	$aset['start']=($currenpage-1)*$aset['row'];
		if ($total_count>$aset['row'])
		{
		$smarty->assign('page',$pagelist->show(3));
		}
		else
		{
		$smarty->assign('page','');
		}
		$smarty->assign('total',$total_count);
}
$limit=" LIMIT ".abs($aset['start']).','.$aset['row'];
$result = $db->query("SELECT * FROM ".table('jobfair')." ".$wheresql.$orderbysql.$limit);
$list= array();
$week=array('������','����һ','���ڶ�','������','������','������','������');
$time=time();
while($row = $db->fetch_array($result))
{
	$row['title_']=$row['title'];
	$color=$row['color']?"color:".$row['color'].";":'';
	$weight=$row['weight']=="1"?"font-weight:bold;":'';
	$row['title']=cut_str($row['title'],$aset['titlelen'],0,$aset['dot']);
	if ($color || $weight)$row['title']="<span style=".$color.$weight.">".$row['title']."</span>";
	$row['holddates_week']=$week[date("w",$row['holddates'])];
	$row['url'] = url_rewrite($aset['showname'],array('id'=>$row['id']));
	$row['exhibitorsurl'] = url_rewrite($aset['exhibitorspage'],array('id'=>$row['id']));	
	if ($row['predetermined_status']=="1" && $row['holddates']>$time && $time>$row['predetermined_start'] && ($row['predetermined_end']=="0" || $row['predetermined_end']>$time) && ($row['predetermined_web']=="1" || $row['predetermined_tel']=="1"))
	{
	$row['predetermined_ok']=1;
	}
	else
	{
	$row['predetermined_ok']=0;
	}
	$list[] = $row;
}
$smarty->assign($aset['listname'],$list);
}
?>