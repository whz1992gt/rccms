a:2:{s:6:"config";a:0:{}s:8:"template";a:1:{i:0;s:37:"../tpl_resume/default/resume-show.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>李璐的个人简历 - 福建劳务网</title>
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
		var id="1";
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
	dialog("加为好友","url:get?/user/user_buddy.php?tuid=1","350px","auto","");
	});
	$("#addpms").click(function(){
	var url="/user/user_pms.php?tuid=1";
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
          <td style="width:80%" class="title"><h1>李璐的个人简历</h1>
            <div class="res-info">更新时间：2013-04-08　会员编号：17207 　浏览次数：<span class="click"></span> 次</div></td>
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
                <td class="td-r">李璐</td>
                <td class="td-l">性　　别：</td>
                <td class="td-r">女</td>
              </tr>
              <tr>
                <td class="td-l">年　　龄：</td>
                <td class="td-r">26 岁</td>
                <td class="td-l">身　　高：</td>
                <td class="td-r">165CM</td>
              </tr>
              <tr>
                <td class="td-l">婚姻状况：</td>
                <td class="td-r">保密</td>
                <td class="td-l">户籍所在：</td>
                <td class="td-r">内蒙古乌海</td>
              </tr>
              <tr>
                <td class="td-l">最高学历：</td>
                <td class="td-r">大专</td>
                <td class="td-l">工作经验：</td>
                <td class="td-r">1-3年</td>
              </tr>
              <tr>
                <td class="td-l">联系地址：</td>
                <td class="td-r">宁夏银川市</td>
                <td class="td-l">浏览次数：</td>
                <td class="td-r"><span class="click"></span>次</td>
              </tr>
              <tr>
                <td class="td-l">刷新时间：</td>
                <td class="td-r">2013-04-08</td>
                <td class="td-l">简历等级：</td>
                <td class="td-r">普通</td>
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
            <td class=td2>互联网开发及应用</td>
          </tr>
        </table>
        <table cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td class="td1">期望岗位性质：</td>
            <td class="td2">全职</td>
          </tr>
          <tr>
            <td class="td1">期望工作地：</td>
            <td class="td2">北京市</td>
          </tr>
          <tr>
            <td class="td1">期望月薪：</td>
            <td class="td2">1500~2000元/月</td>
          </tr>
          <tr>
            <td class="td1">期望从事的岗位：</td>
            <td class="td2">人力资源总监</td>
          </tr>
          <tr>
            <td class="td1">期望从事的行业：</td>
            <td class="td2">其他行业</td>
          </tr>
        </table>
      </div>
      <div class="tit">技能特长</div>
      <div class="c1">
        <table cellpadding=0 cellspacing=0 border=0>
          <tr>
            <th class=td1 width="80" align="right" style="text-align:right">技能特长：</th>
            <td class=td2>工作认真<br />

</td>
          </tr>
        </table>
      </div>
      <div class="tit">教育经历</div>
      <div class="c0">
        <table cellpadding="0" cellspacing="0" border="0">
		           <tr>
            <th colspan="2" class="td1" style="text-align:left"><strong>重庆大学 </strong>(中专)</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">起止年月：</th>
            <td bgcolor="#FFFFFF" class="td2">2003年4月至至今&nbsp;</td>
          </tr>
          <tr>
            <th align="right" class="td1" >学校名称：</th>
            <td bgcolor="#FFFFFF" class="td2">重庆大学</td>
          </tr>
          <tr>
            <th align="right" class="td1">专业名称：</th>
            <td bgcolor="#FFFFFF" class="td2"></td>
          </tr>
          <tr>
            <th align="right" class="td1">获得学历：</th>
            <td bgcolor="#FFFFFF" class="td2">中专</td>
          </tr>
		           </table>
      </div>
      <div class="tit">工作经验</div>
      <div class="c0">
        <table  cellpadding="0" cellspacing="0" border="0">
		    	                   <tr>
            <th colspan="2"  class="td1" style="text-align:left"><strong>网新科技有限公司</strong> - 销售</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">起止日期：</th>
            <td bgcolor="#FFFFFF" class="td2">2006年4月至至今&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">企业名称：</th>
            <td bgcolor="#FFFFFF" class="td2">网新科技有限公司</td>
          </tr>
          <tr>
            <th align="right" class="td1">从事职位：</th>
            <td bgcolor="#FFFFFF" class="td2">销售</td>
          </tr>
          <tr>
            <th align="right" class="td1">业绩表现：</th>
            <td bgcolor="#FFFFFF" class="td2"></td>
          </tr>
          <tr>
            <th align="right"  class="td1">企业介绍：</th>
            <td bgcolor="#FFFFFF" class="td2"></td>
          </tr>
            	            
		  </table>
      </div>
      <div class="tit">培训经历</div>
      <div class="c0">
        <table  border="0" align="center" cellpadding="7" cellspacing="1" bgcolor="#CCCCCC" class="resume_show">
          	      		  <tr>
            <th colspan="2" class="td1" style="text-align:left"><strong>未添加培训经历</strong> - </th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">起止日期：</th>
            <td class="td2" bgcolor="#FFFFFF">至</td>
          </tr>
          <tr>
            <th align="right"  class="td1" >培训机构：</th>
            <td class="td2" bgcolor="#FFFFFF">未添加培训经历</td>
          </tr>
          <tr>
            <th align="right" class="td1">培训课程：</th>
            <td class="td2" bgcolor="#FFFFFF"></td>
          </tr>
          <tr>
            <th align="right" class="td1">培训描述：</th>
            <td class="td2" bgcolor="#FFFFFF"></td>
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
