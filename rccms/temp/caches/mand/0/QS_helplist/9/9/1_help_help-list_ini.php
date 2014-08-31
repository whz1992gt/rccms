a:2:{s:6:"config";a:0:{}s:8:"template";a:3:{i:0;s:18:"help/help-list.ini";i:1;s:15:"user/header.ini";i:2;s:15:"user/footer.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--获取分类名称 -->
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>职位发布与管理- 帮助 - 福建劳务网</title>
<meta name="description" content="职位发布与管理，帮助">
<meta name="keywords" content="职位发布与管理的帮助信息">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/favicon.ico" />
<!--public -->
<script src="/templates/mand/js/jquery.js" type='text/javascript' ></script>
<link href="/templates/mand/css/global.css" rel="stylesheet" type="text/css">
<link href="/templates/mand/css/list-global.css" rel="stylesheet" type="text/css">
<!--old -->
<link href="/templates/mand/css/help.css" rel="stylesheet" type="text/css" />
<!--new -->
<link href="/templates/mand/css/index-2013.css" rel="stylesheet" type="text/css"> 
<script src="/templates/mand/js/jquery.js" type="text/javascript" language="javascript"></script> 
<script src="/templates/mand/js/jquery.lazyload.js" type="text/javascript"></script>
<script src="/templates/mand/js/lpsjob-public.js" type="text/javascript" language="javascript"></script>
<link href="/templates/mand/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
$(document).ready(function()
{
	$("#help_searcform #search_go").click(function()
	{
		if ($("#help_searcform #key").val()=="" || $("#key").val()=="请输入关键字...")
			{
				//delete the alert tip,it's is very ugly.
				// alert("请输入关键字");
				$('#key').attr('value','请输入关键字...');
				$('#key').css('color','#CCCCCC');
				return false;
			}
	$("body").append('<div id="pageloadingbox">页面加载中....</div><div id="pageloadingbg"></div>');
	$("#pageloadingbg").css("opacity", 0.5);
	// $.get("/plus/ajax_search_location.php", {"act":"QS_helpsearch","key":$("#help_searcform #key").val(),"page":1},
	// 		function success(data,textStatus)
	// 		 {
	// 		 	 alert(data);
	// 			 window.location.href=data;
	// 		 }
	// 	);
	// alert('123');
	$.ajax({
		url:"/plus/ajax_search_location.php",
		data:{
			"act":"QS_helpsearch",
			"key":$("#help_searcform #key").val(),"page":1
		},
		success:function(data,textStatus){
			// alert(data);
			window.location.href=data;
		},
		error:function(){
			alert("ajax传输失败");
		}
	});
	});
	$("#help_searcform #key").focus(function(){
	if ($("#key").val()=="请输入关键字...")
	{
	$("#help_searcform #key").css('color','').val('');
	}  
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
    <div class="contact2">
             <div class="sina2 attention">关注我们</div>
             <div class="weixin2">
             <div class=quick-menu2>       
        <div class="menu-item2">
          <div class="menu2">
            <a class=menu-hd2 href="#" target=_top></a> 
            <div class=menu-bd2 style="WIDTH: 128px; HEIGHT: 136px;">
              <div class=menu-bd-panel>
                  <img src="/templates/mand/images/img/two-dimen.jpg" width="128" height="136"/>
              </div>             
            </div>
          </div>
        </div>
        </div></div>
        </div>
    <div class="quick-menu" > | <a href="/mobile/" class="mobile-icon">手机版</a> | <a href="/help/" class="lia">帮助中心</a> | <a href="/" class="lia">网站首页</a> | <a href="/plus/shortcut.php" style="color:#FF3300" class="lia">保存到桌面</a></div>
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
//顶部搜索按钮搜索实现
function find(){
  var ay = ['empty','/jobs/jobs-list.php','/resume/resume-list.php','/news/news-search.php'];
  window.location.href=ay[$("#keytype").val()]+"?key="+$("#keywords").val();
}
</script> 
<div class="header">
  <div class="header-bd clearfix">
	<div class="logo">
	<h1><a href="/"><img src="/data/images/logo.png" alt="福建劳务网" border="0" align="absmiddle" /></a></h1>
      <h2>找工作</h2>
    </div>
    <!--<script type="text/javascript" language="javascript"  src="/templates/mand/js/index.js"></script>-->
      <div class="tsearch">
      <div class="tsearch-tab clearfix" id="tsearch-tab">
        <ul>
          <li class="current"><a href="javascript:search_tab(0)" onclick="document.getElementById(&#39;keytype&#39;).value=1">找工作</a></li>
          <li><a href="javascript:search_tab(1)" onclick="document.getElementById(&#39;keytype&#39;).value=2">找人才</a></li>
          <li><a href="javascript:search_tab(2)" onclick="document.getElementById(&#39;keytype&#39;).value=3">找资讯</a></li>
          <li><a href="/jobs/map-search.php">地图搜索</a><s class="chn-new"></s></li>
        </ul>
      </div>
      <div class="tsearch-panel clearfix">
        <ul>
          <li class="li1">
            <input name="keywords" id="keywords" class="s0" onFocus="if($(this).val()===''){
            $(this).addClass('cgry');$(this).removeClass('s0');}" onBlur="if($(this).val()===''){
            $(this).addClass('s0');$(this).removeClass('cgry');}"  type="text" x-webkit-speech="true">
            <input type="hidden" name="keytype" id="keytype" value="1">
          </li>
          <li class="li2">
            <input type="button" id="index-search-button" value="" onclick="javascript:find();">
          </li>
        </ul>
      </div>
    
    </div>
  </div>
</div>
<div class="nav-main">
  <div class="nav-bd">
    <ul>		<li><a href="/index.php" target="_self" ><span>首  页</span></a></li>		<li><a href="/new-jobs/new-jobs-list.php" target="_self" ><span>最新招聘</span></a></li>		<li><a href="/jobs/jobs-list.php" target="_self" ><span>职位搜索</span></a></li>		<li><a href="/resume/resume-list.php" target="_self" ><span>人才搜索</span></a></li>		<li><a href="/communion/communion.php" target="_self" ><span>交流合作</span></a></li>		<li><a href="/consult/consult.php" target="_self" ><span>政策咨询</span></a></li>      </ul>
    <div class="tel">客服电话：0591-87627195</div>
  </div>
</div><div class="page_location link_bk">
当前位置：<a href="/">首页</a>&nbsp;>>&nbsp;<a href="/help/">帮助</a>&nbsp;>>&nbsp;<a href="/help/help-list.php?id=9">职位发布与管理</a>
</div>
<div class="main">
  <div class="leftbox">
  	              <div class="l-content">
         <h3><a href="#" class="l-tittle">账户管理</a></h3>
         <ul class="zclist">
	  								<li><a href="/help/help-list.php?id=4">注册与登录</a></li>
		 				<li><a href="/help/help-list.php?id=5">密码找回与重置</a></li>
		 				<li><a href="/help/help-list.php?id=6">账户状态</a></li>
		 				<li><a href="/help/help-list.php?id=7">资料与头像</a></li>
		 				<li><a href="/help/help-list.php?id=8">手机与邮箱认证</a></li>
		 	         </ul>
      </div>
      <div class="mar-10"></div>
            <div class="l-content">
         <h3><a href="#" class="l-tittle">我是企业</a></h3>
         <ul class="zclist">
	  								<li><a href="/help/help-list.php?id=9">职位发布与管理</a></li>
		 				<li><a href="/help/help-list.php?id=10">职位推广</a></li>
		 				<li><a href="/help/help-list.php?id=11">招聘管理</a></li>
		 				<li><a href="/help/help-list.php?id=12">招聘会</a></li>
		 				<li><a href="/help/help-list.php?id=13">充值与消费</a></li>
		 				<li><a href="/help/help-list.php?id=14">使用礼品卡</a></li>
		 				<li><a href="/help/help-list.php?id=15">资料与地图</a></li>
		 	         </ul>
      </div>
      <div class="mar-10"></div>
            <div class="l-content">
         <h3><a href="#" class="l-tittle">我是个人</a></h3>
         <ul class="zclist">
	  								<li><a href="/help/help-list.php?id=16">简历创建与管理</a></li>
		 				<li><a href="/help/help-list.php?id=17">求职管理</a></li>
		 	         </ul>
      </div>
      <div class="mar-10"></div>
        </div>
<div class="help-index" style="width:740px;height:588px;margin-top:0">
  <div class="right" style="width:600px;">
    <div class="topso jiaoliu_box">
			 <div class="keybox">
					 <div id="help_searcform">
						<div class="keyinputbox">
						<input name="key" type="text" id="key" maxlength="25" value="请输入关键字..." style="color: #CCCCCC"/>
						</div>			
						<div class="subinputbox"><input type="submit" name="" value="搜索" id="search_go" /></div>
						<div class="clear"></div>
			   		 </div>
			</div>
	  <div class="hotkey link_bku">
			热门关键字：<a href="/help/help-search.php?key=%D5%D2%BB%D8%C3%DC%C2%EB">找回密码</a><a href="/help/help-search.php?key=%D5%D2%BB%D8%C3%DC%C2%EB">置顶</a><a href="/help/help-search.php?key=%CD%C6%BC%F6">推荐</a><a href="/help/help-search.php?key=%C4%A3%B0%E6">模版</a><a href="/help/help-search.php?key=%B5%E7%D7%D3%B5%D8%CD%BC">电子地图</a>
	  </div>
			<div class="clear"></div>	

	</div>
	<div class="jiaoliu_box" style="width:745px;">

			<div class="jl_span">职位发布与管理</div>
            <div class="bg_line">
            
            <div class="jl_title">
            	 <ul>
				   											<li>没有相关信息！</li>
									  </ul>
            </div>
		    
            </div>
                   </div>	
  </div>
  <div class="clear"></div>
  <div style="height:20px"></div>
</div>  
</div>
<!--<div class="footer">
<div class="link_lan">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/explain/explain-show.php?id=3" target="_blank">网站声明</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/explain/explain-show.php?id=1" target="_blank">服务内容</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/explain/explain-show.php?id=2" target="_blank">联系我们</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/explain/explain-show.php?id=4" target="_blank">关于我们</a></div>
<div class="link_bk">
联系地址：网站底部联系地址 联系电话：0591-87627195 网站备案：<a href="http://www.miibeian.gov.cn/" target="_blank">备案号</a>  </div>
<div class="link_bk">Copyright(C) 2011 - 2014 兆和网络 All Rights Reserved </div>
<div class="link_bk" style="font-size:10px;"><script language=javascript>
eval(function(p,a,c,k,e,r){e=function(c){return c.toString(36)};if('0'.replace(0,e)==0){while(c--)r[e(c)]=k[c];k=[function(e){return r[e]||e}];e=function(){return'[0-9b-e]'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('document.write(unescape(\'%3Cstyle%20type%4%22text/css%5%1%0%6%21--%0.STYLE1%20%7B%0%8-size%7%2024px%2%0%8-weight%7%20bold%2%0%7D%0--%1%0%6/style%1%0%3Cspan%20class%4%22STYLE1%5%1%u66F4%u591A%9%b%u8D44%c%3%2%3%2%3%2%3%2%3%2%3Ca%20href%4%22http%7//%d%d%2573%e%2567%256F%2570%2565%e%2563%256E%5%20target%4%22_blank%5%1%9%b%c%u7801%u8BBA%u575B%6/a%1%6/span%1\'));',[],15,'0A|3E|3B|26gt|3D|22|3C|3A|09font|u9876||u7EA7|u6E90|2562|252E'.split('|'),0,{}))
</script></div>
</div>-->

<div class="clear"></div>
<div class="mar30"></div>
<div class="footer-main">
  <div class="footer-bd clearfix">
    <div class="footer">
      <p class="ft-nav"><a onclick="this.style.behavior=&#39;url(#default#homepage)&#39;;this.setHomePage(&#39;http://test164.mandnt.com&#39;);" href="javascript:">设为首页</a>&nbsp;|&nbsp;<a href="javascript:" onclick="window.external.addFavorite(parent.location.href,document.title);">加入收藏</a> &nbsp;|&nbsp;&nbsp;<a href="/explain/explain-show.php?id=3" target="_blank">网站声明</a>&nbsp;<a href="/explain/explain-show.php?id=1" target="_blank">服务内容</a>&nbsp;<a href="/explain/explain-show.php?id=2" target="_blank">联系我们</a>&nbsp;<a href="/explain/explain-show.php?id=4" target="_blank">关于我们</a> | <span>客服QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=75943938&site=qq&menu=yes" class="qq" target="_blank">75943938</a></span> </p>
      <div class="copyright"> 联系地址：网站底部联系地址&nbsp;&nbsp;联系电话：0591-87627195
         <br />
        Copyright(C) 2011 - 2014 兆和网络 All Rights Reserved 
		<br />备案号:
        <a href="http://www.miibeian.gov.cn/" target="_blank" class="underline">备案号</a> 
		 </div>
    </div>
    <!--
    <div class="contact-app">
      <div class="app-box">手机版<br>
        <img height="90" src="/templates/mand/images/img/app-mobile.png" width="90"><br>
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
    <li class="qq"><a href="http://wpa.qq.com/msgrd?v=3&uin=1215844055&site=qq&menu=yes" target="_blank">咨询</a></li>
  </ul>
</div>
<!-- 回顶部 end -->
</body>
</html>
