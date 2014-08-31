a:2:{s:6:"config";a:0:{}s:8:"template";a:1:{i:0;s:37:"../tpl_resume/default/resume-show.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>蔡丽丹的个人简历 - 福建劳务网</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="兆和CMS" />
<meta name="copyright" content="mandntwork.com" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/favicon.ico" />
<link href="/templates/mand/css/global.css" rel="stylesheet" type="text/css" />
<link href="/templates/tpl_resume/default/css/resume-style.css" rel="stylesheet" type="text/css">
<script src="/templates/mand/js/jquery.js" type='text/javascript' ></script>
<script src="/templates/mand/js/jquery.dialog.js" type='text/javascript' ></script>
<script type="text/javascript">
$(document).ready(function()
{
		var id="5814";
		var tsTimeStamp= new Date().getTime();
		$.get("/plus/ajax_click.php", { "id": id,"time":tsTimeStamp,"act":"resume_click"},
			function (data,textStatus)
			 {			
				$(".click").html(data);
			 }
		);
		$.get("/plus/ajax_contact.php", { "id": id,"time":tsTimeStamp,"act":"resume_contact"},
			function (data,textStatus)
			 {			
				$("#resume_contact").html(data);
				//下载简历
				$("#download").click(function(){
				var url="/user/user_download_resume.php?id="+id+"&act=download&t="+tsTimeStamp;
				dialog("下载简历","url:get?"+url,"500px","auto","");
				});	
				//邀请面试
				$("#invited").click(function(){
				var url="/user/user_invited.php?id="+id+"&act=invited&t="+tsTimeStamp;
				dialog("邀请面试","url:get?"+url,"500px","auto","");
				});	
				//添加都人才库
				$(".add_resume_pool").click(function(){
				var url="/user/user_favorites_resume.php?id="+id+"&act=add&t="+tsTimeStamp;
				dialog("添加到人才库","url:get?"+url,"500px","auto","");				
				});	
			 }
		);
	$("#newbuddy").click(function(){
	dialog("加为好友","url:get?/user/user_buddy.php?tuid=7888","350px","auto","");
	});
	$("#addpms").click(function(){
	var url="/user/user_pms.php?tuid=7888";
	dialog("发送短消息","url:get?"+url,"400px","auto","");
	});
});
</script>
</head>
<body class="res-body">
<div class="res-warp">
  <div class="res-main">
    <div class="head">
  <table  border="0" align="center" cellpadding="0" cellspacing="0"  class="resume_show" style="border-bottom:0px;" >
  <tr>
    <td class="link_lan">&nbsp;&nbsp;<a href="http://test155.mandnt.com/">福建劳务网</a><span  style="color:#999999">&nbsp;&nbsp;(http://test155.mandnt.com)</span></td>
    <td   class="link_bku top_a">
	<a href="http://test155.mandnt.com/">网站首页</a> <a href="javascript:window.print();">打印简历</a>  <a href="javascript:void(0)"  class="add_resume_pool">添加到人才库</a>
	 <a href="javascript:void(0)" id="addpms">发短消息</a>
	<a href="javascript:void(0)" id="newbuddy">加为好友</a>
	</td>
  </tr>
</table>
      <table cellpadding="0" cellspacing="0" style="width:100%">
          <td style="width:80%" class="title"><h1>蔡丽丹的个人简历</h1>
            <div class="res-info">更新时间：2014-07-24　会员编号：17207 　浏览次数：<span class="click"></span> 次</div></td>
          <td style="text-align:right"><a href="http://test155.mandnt.com/"><img height="54" src="/data/images/logo.gif" width="150"></a></td>
        </tr>
      </table>
    </div>
    <div class="basic">
      <table cellpadding="0" cellspacing="0" style="width:100%">
        <tr>
          <td><table cellpadding="0" cellspacing="0" style="width:100%">
              <tr>
                <td class="td-l" style="width:65px"></td>
                <td class="td-r" style="width:30%"></td>
                <td class="td-l" style="width:65px"></td>
                <td class="td-r"></td>
              </tr>
              <tr>
                <td class="td-l">姓　　名：</td>
                <td class="td-r">蔡丽丹</td>
                <td class="td-l">性　　别：</td>
                <td class="td-r">女</td>
              </tr>
              <tr>
                <td class="td-l">年　　龄：</td>
                <td class="td-r">21 岁</td>
                <td class="td-l">身　　高：</td>
                <td class="td-r">168CM</td>
              </tr>
              <tr>
                <td class="td-l">婚姻状况：</td>
                <td class="td-r">未婚</td>
                <td class="td-l">户籍所在：</td>
                <td class="td-r">福建莆田</td>
              </tr>
              <tr>
                <td class="td-l">最高学历：</td>
                <td class="td-r">本科</td>
                <td class="td-l">工作经验：</td>
                <td class="td-r">无经验</td>
              </tr>
              <tr>
                <td class="td-l">联系地址：</td>
                <td class="td-r">福建省福州市仓山区上下店路福建农林大学东苑8311</td>
                <td class="td-l">浏览次数：</td>
                <td class="td-r"><span class="click"></span>次</td>
              </tr>
              <tr>
                <td class="td-l">刷新时间：</td>
                <td class="td-r">2014-07-24</td>
                <td class="td-l">简历等级：</td>
                <td class="td-r">高级</td>
              </tr>
            
            </table></td>
          <td style="width:200px"><div style="height:200px"> <img height="158" src="/data/photo/thumb/no_photo.gif" width="130"> </div></td>
        </tr>
      </table>
    </div>
    <div id="resume">
      <div class="tit">求职意向</div>
      <div class="c0 m-t">
        <table cellpadding=0 cellspacing=0 border=0>
          <tr>
            <td class=td1>最近工过的职位：</td>
            <td class=td2></td>
          </tr>
        </table>
        <table cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td class="td1">期望岗位性质：</td>
            <td class="td2">实习</td>
          </tr>
          <tr>
            <td class="td1">期望工作地：</td>
            <td class="td2">福建省/福州市</td>
          </tr>
          <tr>
            <td class="td1">期望月薪：</td>
            <td class="td2">2000~3000元/月</td>
          </tr>
          <tr>
            <td class="td1">期望从事的岗位：</td>
            <td class="td2">人事专员/助理,招聘专员/助理,薪资福利主管/专员,绩效考核主管/专员</td>
          </tr>
          <tr>
            <td class="td1">期望从事的行业：</td>
            <td class="td2">房地产开发,物业管理/商业中心,教育/培训,酒店/旅游,政府部门/事业单位</td>
          </tr>
        </table>
      </div>
      <div class="tit">技能特长</div>
      <div class="c1">
        <table cellpadding=0 cellspacing=0 border=0>
          <tr>
            <th class=td1 width="80" align="right" style="text-align:right">技能特长：</th>
            <td class=td2>应届毕业生，大学担任两年班委；<br />
外语能力较好，辅修第二专业英语；<br />
熟练使用办公软件；<br />
写作能力与表达能力较好。
</td>
          </tr>
        </table>
      </div>
      <div class="tit">教育经历</div>
      <div class="c0">
        <table cellpadding="0" cellspacing="0" border="0">
		           <tr>
            <th colspan="2" class="td1" style="text-align:left"><strong>福建农林大学 </strong>(本科)</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">起止年月：</th>
            <td bgcolor="#FFFFFF" class="td2">2011年9月至2015年7月&nbsp;</td>
          </tr>
          <tr>
            <th align="right" class="td1" >学校名称：</th>
            <td bgcolor="#FFFFFF" class="td2">福建农林大学</td>
          </tr>
          <tr>
            <th align="right" class="td1">专业名称：</th>
            <td bgcolor="#FFFFFF" class="td2">人力资源管理</td>
          </tr>
          <tr>
            <th align="right" class="td1">获得学历：</th>
            <td bgcolor="#FFFFFF" class="td2">本科</td>
          </tr>
		           </table>
      </div>
      <div class="tit">工作经验</div>
      <div class="c0">
        <table  cellpadding="0" cellspacing="0" border="0">
		    	                   <tr>
            <th colspan="2"  class="td1" style="text-align:left"><strong>黄石鞋业有限公司</strong> - 质检员</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">起止日期：</th>
            <td bgcolor="#FFFFFF" class="td2">2011年7月至2011年8月&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">企业名称：</th>
            <td bgcolor="#FFFFFF" class="td2">黄石鞋业有限公司</td>
          </tr>
          <tr>
            <th align="right" class="td1">从事职位：</th>
            <td bgcolor="#FFFFFF" class="td2">质检员</td>
          </tr>
          <tr>
            <th align="right" class="td1">业绩表现：</th>
            <td bgcolor="#FFFFFF" class="td2">两个月工作期内，每天按规定完成任务，准时上班，没有出现迟到现象，检验鞋子也细心认真，无重大失误。</td>
          </tr>
          <tr>
            <th align="right"  class="td1">企业介绍：</th>
            <td bgcolor="#FFFFFF" class="td2">该公司是一家从事鞋生产及销售企业,产品大部份销往东南亚各国,月生产量可达8万双.公司自1985年创办以来,坚持以诚信为基础,以质量求生存的方针,产品销售赢得了广大客商的信赖。</td>
          </tr>
                       <tr>
            <th colspan="2"  class="td1" style="text-align:left"><strong>莆田托教中心</strong> - 功课指导老师</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">起止日期：</th>
            <td bgcolor="#FFFFFF" class="td2">2012年7月至2012年8月&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">企业名称：</th>
            <td bgcolor="#FFFFFF" class="td2">莆田托教中心</td>
          </tr>
          <tr>
            <th align="right" class="td1">从事职位：</th>
            <td bgcolor="#FFFFFF" class="td2">功课指导老师</td>
          </tr>
          <tr>
            <th align="right" class="td1">业绩表现：</th>
            <td bgcolor="#FFFFFF" class="td2">负责晚间孩子们的自习监督与功课指导。</td>
          </tr>
          <tr>
            <th align="right"  class="td1">企业介绍：</th>
            <td bgcolor="#FFFFFF" class="td2">私企，规模较好，主要负责照顾小学儿童课余生活照顾与学习督促指导。</td>
          </tr>
                       <tr>
            <th colspan="2"  class="td1" style="text-align:left"><strong>福州长虹公司</strong> - 临时促销员</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">起止日期：</th>
            <td bgcolor="#FFFFFF" class="td2">2013年10月至2013年10月&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">企业名称：</th>
            <td bgcolor="#FFFFFF" class="td2">福州长虹公司</td>
          </tr>
          <tr>
            <th align="right" class="td1">从事职位：</th>
            <td bgcolor="#FFFFFF" class="td2">临时促销员</td>
          </tr>
          <tr>
            <th align="right" class="td1">业绩表现：</th>
            <td bgcolor="#FFFFFF" class="td2">国庆期间在宝龙国美担任促销员，帮助引导顾客，进行产品介绍。广告推广，宝龙国美带国庆期间获得福州长虹销量第一。</td>
          </tr>
          <tr>
            <th align="right"  class="td1">企业介绍：</th>
            <td bgcolor="#FFFFFF" class="td2">四川长虹电子集团有限公司始创于1958年，从军工立业、彩电兴业，到信息电子的多元拓展，已成为集军工、消费电子、核心器件研发与制造为一体的综合型跨国企业集团，并正向具有全球竞争力的信息家电内容与服务提供商挺进。福州长虹公司是其子公司。</td>
          </tr>
                       <tr>
            <th colspan="2"  class="td1" style="text-align:left"><strong>福州长虹公司</strong> - 临时促销员</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">起止日期：</th>
            <td bgcolor="#FFFFFF" class="td2">2013年10月至2013年10月&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">企业名称：</th>
            <td bgcolor="#FFFFFF" class="td2">福州长虹公司</td>
          </tr>
          <tr>
            <th align="right" class="td1">从事职位：</th>
            <td bgcolor="#FFFFFF" class="td2">临时促销员</td>
          </tr>
          <tr>
            <th align="right" class="td1">业绩表现：</th>
            <td bgcolor="#FFFFFF" class="td2">国庆期间在宝龙国美担任促销员，帮助引导顾客，进行产品介绍。广告推广，宝龙国美带国庆期间获得福州长虹销量第一。</td>
          </tr>
          <tr>
            <th align="right"  class="td1">企业介绍：</th>
            <td bgcolor="#FFFFFF" class="td2">四川长虹电子集团有限公司始创于1958年，从军工立业、彩电兴业，到信息电子的多元拓展，已成为集军工、消费电子、核心器件研发与制造为一体的综合型跨国企业集团，并正向具有全球竞争力的信息家电内容与服务提供商挺进。福州长虹公司是其子公司。</td>
          </tr>
            	            
		  </table>
      </div>
      <div class="tit">培训经历</div>
      <div class="c0">
        <table  border="0" align="center" cellpadding="7" cellspacing="1" bgcolor="#CCCCCC" class="resume_show">
          	      		  <tr>
            <th colspan="2" class="td1" style="text-align:left"><strong>福建长虹公司</strong> - 销售</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">起止日期：</th>
            <td class="td2" bgcolor="#FFFFFF">2013年9月至2013年9月</td>
          </tr>
          <tr>
            <th align="right"  class="td1" >培训机构：</th>
            <td class="td2" bgcolor="#FFFFFF">福建长虹公司</td>
          </tr>
          <tr>
            <th align="right" class="td1">培训课程：</th>
            <td class="td2" bgcolor="#FFFFFF">销售</td>
          </tr>
          <tr>
            <th align="right" class="td1">培训描述：</th>
            <td class="td2" bgcolor="#FFFFFF">培训师通过ppt讲授销售的环节，方法技巧以及应注意的问题。然后就是让我们一个个上去演示如何引导顾客。</td>
          </tr>
		     	                    </table>
      </div>
    </div>
    <div class="tit">联系方式</div>
    <div class="tips" id="resume_contact"></div>
  </div>
</div>
</div>
<div class="copyright"><a href="http://test155.mandnt.com">福建劳务网</a> 版权所有 Copyright &copy; <a href="http://test155.mandnt.com"> http://test155.mandnt.com</a> All Right Reserved.</div>
</body>
</html>
