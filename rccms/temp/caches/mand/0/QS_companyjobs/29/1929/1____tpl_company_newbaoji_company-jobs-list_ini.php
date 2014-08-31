a:2:{s:6:"config";a:0:{}s:8:"template";a:3:{i:0;s:45:"../tpl_company/newbaoji/company-jobs-list.ini";i:1;s:10:"header.ini";i:2;s:10:"footer.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>福建省诚毅物业管理有限公司 - 职位列表 - 福建劳务网</title>
<meta name="description" content="福建省诚毅物业管理有限公司成立于2014年6月，注册资金500万元人民币，主要经营范围物业管理；家政服务；房...},职位列表">
<meta name="keywords" content="福建省诚毅物业管理有限公司,职位列表">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/favicon.ico" />
<link href="/templates/mand/css/global.css" rel="stylesheet" type="text/css" />
<link href="/templates/tpl_company/newbaoji/css/css.css" rel="stylesheet" type="text/css" />
<script src="/templates/mand/js/jquery.js" type='text/javascript' ></script>
<script src="/templates/mand/js/jquery.dialog.js" type='text/javascript' ></script>
<script type="text/javascript">
$(document).ready(function()
{
	$(".app_jobs").click(function(){
	dialog("投简历","url:get?/user/user_apply_jobs.php?id="+$(this).attr("id")+"&act=app","500px","auto","");
	});
	$(".joblistbox").hover(
		function()
		{
			$(this).css("background-color","#FFFAE8").css("border-color","#F5B55C");
			$(this).find(".app_jobs").css("background-position","0px 0px").css("color","#FFFFFF");
			},
			function()
			{
			$(this).css("background-color","#FFFFFF").css("border-color","#E4E4E4");
			$(this).find(".app_jobs").css("background-position","0px -28px").css("color","#000000");
			}
		);
		$(".morebox").hover(
		function()
		{
			$(this).find(".more").show();
			},
			function()
			{
			$(this).find(".more").hide();
			}
		);
		$(".add_favorites").unbind().click(function(){
	dialog("加入收藏","url:get?/user/user_favorites_job.php?id="+$(this).attr("id")+"&act=add","500px","auto","");
	});
	$(".recommend").unbind().click(function()
	{
		dialog("推荐给好友","url:get?/plus/ajax_recommend.php?job="+$(this).attr("url")+"&act=recommendjobs","400px","auto","");
	});
	$("#newbuddy").click(function(){
	dialog("加为好友","url:get?/user/user_buddy.php?tuid=7896","350px","auto","");
	});
	$("#addpms").click(function(){
	var url="/user/user_pms.php?tuid=7896";
	dialog("发送短消息","url:get?"+url,"400px","auto","");
	});
});
</script>
</head>
<body>
<div class="site-nav">
  <div class="site-nav-bd">
    <div class="login-info top_loginform">
      <div class="topLoading">数据正在加载，请稍候</div>
    </div>
    <div class="quick-menu"><a href="/mobile/" class="mobile-icon">手机版</a> | <a href="/help/" class="lia">帮助中心</a> | <a href="/" class="lia">网站首页</a> | <a href="/plus/shortcut.php" style="color:#FF3300" class="lia">保存到桌面</a></div>
  </div>
</div>
<script type="text/javascript">
//顶部部登录
$.get("/plus/ajax_user.php", {"act":"top_loginform"},
function (data,textStatus)
{			
$(".top_loginform").html(data);
}
); 
</script> 
<div class="header">
  <div class="header-bd clearfix">
	<div class="logo">
	<h1><a href="/"><img src="/data/images/logo.png" alt="福建劳务网" border="0" align="absmiddle" /></a></h1>
      <h2>找工作</h2>
    </div>
    <div class="head-btn"> <a href="/user/user_reg.php?act=form&type=2" class="per-reg" title="免费登记简历"><span>1</span><em>免费登记简历</em></a> <a href="/user/user_reg.php?act=form&type=1" class="com-reg" title="免费发布招聘"><span>1</span><em>免费发布招聘</em></a> </div>
  </div>
</div>
<div class="nav-main">
  <div class="nav-bd">
    <ul>		<li><a href="/index.php" target="_self" ><span>首  页</span></a></li>		<li><a href="/new-jobs/new-jobs-list.php" target="_self" ><span>最新招聘</span></a></li>		<li><a href="/jobs/jobs-list.php" target="_self" id="cur"><span>职位搜索</span></a></li>		<li><a href="/resume/resume-list.php" target="_self" ><span>人才搜索</span></a></li>		<li><a href="/communion/communion.php" target="_self" ><span>交流合作</span></a></li>		<li><a href="/consult/consult.php" target="_self" ><span>政策咨询</span></a></li>      </ul>
    <div class="tel">客服电话：0591-87627195</div>
  </div>
</div><div class="page_location link_bk">
当前位置：<a href="/">首页</a>&nbsp;>>&nbsp;<a href="/jobs/">招聘信息</a>&nbsp;>>&nbsp;福建省诚毅物业管理有限公司
</div>
<div class="company-show-topnav">
  <div class="topcomname">
  <h1>福建省诚毅物业管理有限公司</h1>
    <div class="company_license1" title="营业执照已验证"></div>
				<div class="clear"></div>
  </div>
  <div class="snav">
		<a href="/company/company-show.php?id=1929" >公司介绍</a>
		<a href="/company/company-jobs.php?id=1929" class="selected">招聘职位</a>
		<a href="/company/company-comment.php?id=1929" >评论</a>
		<a href="/company/company-img.php?id=1929" >图片</a>
		<a href="/company/company-news.php?id=1929" >公司动态</a>
		<div class="clear"></div>
  </div>
</div>
<div class="company-show">
  <div class="left">
    <div class="jobs-list link_lan">
  			  			  <div class="joblistbox">
			    <div class="jleft link_bk">
				<h2><a href="/jobs/jobs-show.php?id=6822" target="_blank">移动客服</a>
									
				</h2>
				<div class="tip">
								招聘进行中，欢迎投递简历，截止日期为：2015-12-07
								</div>
				<div class="amount">
				工作地点：<a href="/jobs/jobs-list.php?district=14&sdistrict=241" style="text-decoration:underline">福州市</a>&nbsp;&nbsp;|&nbsp;&nbsp;招聘人数：若干人&nbsp;&nbsp;|&nbsp;&nbsp;点击：6次&nbsp;&nbsp;|&nbsp;&nbsp;更新日期：2014-07-25
				</div>
				<div class="txt">1、经济管理、投资管理、工商管理及技术经济等专业硕士及以上学历； 
2、熟悉相关法律法规及投资项目实施、资产重组和处置过程的评估方法； 
3、...</div>
			    </div>
				 <div class="jright link_bk">
				   <div class="abox app_jobs" id="6822">投递简历</div>
				   <div class="showurl"><a href="/jobs/jobs-show.php?id=6822" target="_blank">查看详细</a></div>
				   <div class="morebox">显示更多
				     <div class="more link_bk">
					<a href="/jobs/jobs-list.php?category=545&subclass=546" target="_blank">类似职位</a><br />
					<a href="javascript:void(0)" class="add_favorites" id="6822">加入收藏</a><br />
					<a href="javascript:void(0)" class="recommend" url='%2Fjobs%2Fjobs-show.php%3Fid%3D6822|移动客服'>推荐给好友</a>
				</div>
				   </div>
			       </div>
				 <div class="clear"></div>
			  </div>
      		   	  	</div>
  </div>
  <div class="right">
		  <div class="txtbox">
		    <div class="qrcode"><img src="/plus/url_qrcode.php?url=http://test155.mandnt.com/company/company-show.php?id=1929" alt="福建省诚毅物业管理有限公司 - 二维码" /></div>
				  <div class="tit">企业档案</div>	  
				  <div class="txt">
					  <ul class="link_bku">
						<li>企业性质：民营</li>
						<li>所属行业：<a href="/jobs/jobs-list.php?trade=29" target="_blank">物业管理/商业中心</a></li>
						<li>公司规模：<a href="/jobs/jobs-list.php?scale=81" target="_blank">20-99人</a></li>
						<li>所在地区：<a href="/jobs/jobs-list.php?district=14&sdistrict=241" target="_blank">福州市/福州市</a></li>
					  </ul>
				  </div>
				  <div class="pm link_bk">
					    <div class="pleft"><a href="javascript:void(0)" id="addpms">发短消息</a></div>
						<div class="pright"><a href="javascript:void(0)" id="newbuddy">加为好友</a></div>
						<div class="clear"></div>
				</div>
						
	</div>
			 <div class="txtbox">
				  <div class="tit">您可能感兴趣的职位</div>	  
															<div class="txt1 link_lan">
					<strong><a href="/jobs/jobs-show.php?id=6822" target="_blank">移动客服</a></strong><br />
					<a href="/company/company-show.php?id=1929" target="_blank">福建省诚毅物业管理有限公司</a><br />
					薪资待遇：3000~5000元/月<br />招聘人数：若干人<br />学历要求：中专
					</div>
										<div class="txt1 link_lan">
					<strong><a href="/jobs/jobs-show.php?id=6776" target="_blank">海景房销售员</a></strong><br />
					<a href="/company/company-show.php?id=1912" target="_blank">乳山市金鼎房产咨询有限公司</a><br />
					薪资待遇：3000~5000元/月<br />招聘人数：6人<br />学历要求：初中
					</div>
										<div class="txt1 link_lan">
					<strong><a href="/jobs/jobs-show.php?id=6773" target="_blank">销售精英</a></strong><br />
					<a href="/company/company-show.php?id=1912" target="_blank">乳山市金鼎房产咨询有限公司</a><br />
					薪资待遇：3000~5000元/月<br />招聘人数：6人<br />学历要求：初中
					</div>
										<div class="txt1 link_lan">
					<strong><a href="/jobs/jobs-show.php?id=6568" target="_blank">采购专员</a></strong><br />
					<a href="/company/company-show.php?id=1584" target="_blank">山东恒坤房地产开发有限公司</a><br />
					薪资待遇：面议<br />招聘人数：2人<br />学历要求：大专
					</div>
										<div class="txt1 link_lan">
					<strong><a href="/jobs/jobs-show.php?id=6551" target="_blank">物业客服</a></strong><br />
					<a href="/company/company-show.php?id=1423" target="_blank">兆和市佳顺物业管理有限公司</a><br />
					薪资待遇：面议<br />招聘人数：2人<br />学历要求：初中
					</div>
								</div>
  </div>
  <div class="clear"></div>
</div>



<div class="footer-main">
  <div class="footer-bd clearfix">
    <div class="footer">
      <p class="ft-nav"><a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://test155.mandnt.com');" href="javascript:">设为首页</a>&nbsp;|&nbsp;<a href="javascript:" onclick="window.external.addFavorite(parent.location.href,document.title);">加入收藏</a> &nbsp;|&nbsp;<a href="/explain/explain-show.php?id=3" target="_blank">网站声明</a>&nbsp;|&nbsp;<a href="/explain/explain-show.php?id=1" target="_blank">服务内容</a>&nbsp;|&nbsp;<a href="/explain/explain-show.php?id=2" target="_blank">联系我们</a>&nbsp;|&nbsp;<a href="/explain/explain-show.php?id=4" target="_blank">关于我们</a> | <span>客服QQ：<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=75943938&amp;site=qq&amp;menu=yes" class="qq" target="_blank">75943938</a></span> </p>
      <div class="copyright"> 联系地址：网站底部联系地址  联系电话：0591-87627195 <br />
       Copyright(C) 2011 - 2014 兆和网络 All Rights Reserved 
		<br>
        <a href="http://www.miibeian.gov.cn/" target="_blank" class="underline"> 备案号</a>  
			 </div>
    </div>
    <!--
    <div class="contact-app">
      <div class="app-box">手机版<br />
       <img height="90" src="/templates/mand/images/img/app-mobile.png" width="90"><br />
        手机扫一扫</div>
    </div>-->
  </div>
</div>
 <div id="floatRT" class="floatRT">
<a href="javascript:void(0)" id="serviceLink" class="serviceLink" style="display: block;"></a><div class="service" style="display: none;">
        <div class="serviceT"><p></p><b></b></div>
        <div class="serviceC">
            <div class="serviceQ">
               <p>企业会员客服：</p>
                <p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1442902227&site=qq&menu=yes" rel="nofollow"><img border="0" src="/templates/mand/images/img/qqkefu.gif" alt="QQ交谈" width="74" height="23"></a></p>
                <p>求职会员客服：</p>
                <p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1102969467&site=qq&menu=yes" rel="nofollow"><img border="0" src="/templates/mand/images/img/qqkefu.gif" alt="QQ交谈" width="74" height="23"></a></p>
                <p>官方求职QQ群：</p>
                <p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1215844055&site=qq&menu=yes" rel="nofollow"><img border="0" src="/templates/mand/images/img/qqkefu.gif" alt="QQ交谈" width="74" height="23"></a>
                </p>
            </div>
            <div class="serviceCon">
                <p>在线时间:</p>
                <p class="num">周一至周五 9点-18点</p>
                <p>服务热线:</p>
                <p class="num">12345678900</p>
            </div>
        </div>
	</div></div>
<script type="text/javascript">
  $('#serviceLink').mouseenter(function() {
        $(this).hide().siblings('.service').show();
        });
	$('.service').mouseleave(function() {
        $(this).hide();
        $('#serviceLink').show();
        });
</script>
<!-- footer end --><!-- 回顶部 begin -->
<div id="top-bar">
  <ul>
    <li class="gotop" style="display: none; "><a href="javascript:void(0)">顶部</a></li>
    <li class="qq"><a href="http://wpa.qq.com/msgrd?v=3&uin=75943938&site=qq&menu=yes" target="_blank">咨询</a></li>
  </ul>
</div>
<!-- 回顶部 end -->
<script src="/templates/mand/js/jquery.vtip-min.js" type="text/javascript" language="javascript"></script>
</body>
</html>
