a:2:{s:6:"config";a:0:{}s:8:"template";a:3:{i:0;s:15:"notice-list.ini";i:1;s:15:"user/header.ini";i:2;s:15:"user/footer.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0026)http://test164.mandnt.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<!--获取资讯分类名称 --><meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>资讯中心 -   - 福建劳务网</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/favicon.ico">
<meta property="qc:admins" content="77522437776156156026375">
<!--public -->
<link href="/templates/mand/css/global.css" rel="stylesheet" type="text/css">
<script src="/templates/mand/js/jquery.js" type='text/javascript' ></script>
<script src="/templates/mand/js/lpsjob-public.js"  type='text/javascript' ></script>
<!--old -->
<link href="/templates/mand/css/news2011.css" rel="stylesheet" type="text/css"  />
<script src="/templates/mand/js/jquery.KinSlideshow.min.js" type="text/javascript"></script>
<link href="/templates/mand/css/notice.css" rel="stylesheet" type="text/css" /> 
<!--new -->
<link href="/templates/mand/css/index-2013.css" rel="stylesheet" type="text/css"> 
<script src="/templates/mand/js/jquery.lazyload.js" type="text/javascript"></script>
<link href="/templates/mand/css/style.css" rel="stylesheet" type="text/css"> 

<script> 
$(document).ready(function () {  
    //new
       index("/","/templates/newbaoji/");
       $.get("/plus/ajax_user.php", {"act":"loginform"},
      function (data,textStatus)
       {
        $("#PageLogin").html(data);
       }
         ); 
    //old
            $("#news_form_search #search_go").click(function()
    {
    $("body").append('<div id="pageloadingbox">页面加载中....</div><div id="pageloadingbg"></div>');
    $("#pageloadingbg").css("opacity", 0.5);
    $.get("/plus/ajax_search_location.php", {"act":"QS_newssearch","key":$("#news_form_search #key").val(),"page":1},
            function (data,textStatus)
             {
                 window.location.href=data;
             }
        );
    });       
})
</script>
</head><body>
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
当前位置：<a href="/">首页</a>&nbsp;>>&nbsp;网站公告
</div>
<!-- main begin -->     
<div class="main">
  <div class="leftbox">
      <div class="l-content">
         <h3><a href="#" class="l-tittle">最新职位</a></h3>
         <ul class="zclist">
                              <li>·<a href="/jobs/jobs-show.php?id=6823" target="_blank">程序员</a></li>
            <li>·<a href="/company/company-show.php?id=1930" target="_blank">google</a></li>
            <li>薪资待遇：5000~10000元/月</li>
            <li>招聘人数：5人</li>
            <li>学历要求：本科</li>
                    <li>·<a href="/jobs/jobs-show.php?id=6822" target="_blank">移动客服</a></li>
            <li>·<a href="/company/company-show.php?id=1929" target="_blank">福建省诚毅物业管理有限公司</a></li>
            <li>薪资待遇：3000~5000元/月</li>
            <li>招聘人数：若干人</li>
            <li>学历要求：中专</li>
                    <li>·<a href="/jobs/jobs-show.php?id=6821" target="_blank"><span style="color:绿色">中石化森美客服</span></a></li>
            <li>·<a href="/company/company-show.php?id=1928" target="_blank">福州慧诚人力资源管理有限公司</a></li>
            <li>薪资待遇：2000~3000元/月</li>
            <li>招聘人数：若干人</li>
            <li>学历要求：高中</li>
                    <li>·<a href="/jobs/jobs-show.php?id=6820" target="_blank">人资</a></li>
            <li>·<a href="/company/company-show.php?id=1927" target="_blank">福建省劳务派遣服务有限公司</a></li>
            <li>薪资待遇：2000~3000元/月</li>
            <li>招聘人数：5人</li>
            <li>学历要求：不限制</li>
                    <li>·<a href="/jobs/jobs-show.php?id=6818" target="_blank">测试</a></li>
            <li>·<a href="/company/company-show.php?id=1924" target="_blank">智慧万家信息技术有限公司</a></li>
            <li>薪资待遇：1000~1500元/月</li>
            <li>招聘人数：5人</li>
            <li>学历要求：不限制</li>
                </ul>
      </div>
      <div class="mar10"></div>
  </div>
   <div class="rightbox">
    
    <div class="jl-title">网站公告</div>
              <div class="jl-list">
      <img src="/templates/mand/images/img/list_r.png"/><div class="jl-list-p">
        <a href="/notice/notice-show.php?id=11" target="_blank">关于不法分子利用我公司名义收费的郑重声明</a>
     </div>
      <p>发布时间：<span>2013-10-19</span>     点击次数：<span>10</span></p>
      <p>近日，我公司发现有不法分子利用公司或公司分公司名义，向求职者收取推荐或介绍费。
&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;在此，我公司郑重声明：我公司不属于中介机构，给求职者介绍工作，不会向求职者收取任何费用。如有利用...<a href="/notice/notice-show.php?id=11">[全文]</a></p>
     </div>
          <div class="jl-list">
      <img src="/templates/mand/images/img/list_r.png"/><div class="jl-list-p">
        <a href="/notice/notice-show.php?id=10" target="_blank">表扬先进 彰显客服风采</a>
     </div>
      <p>发布时间：<span>2013-10-19</span>     点击次数：<span>5</span></p>
      <p>近日，厦门分公司召开了2013年度11185客服外包服务总结表彰会，本着简洁、朴素的例会精神，会议在客服中心餐厅举行。会议举行了简单的餐饮，全体员工热情激动、别开生面。
会上省公司总监兼厦门分公司总经理苏明珍，...<a href="/notice/notice-show.php?id=10">[全文]</a></p>
     </div>
          <div class="jl-list">
      <img src="/templates/mand/images/img/list_r.png"/><div class="jl-list-p">
        <a href="/notice/notice-show.php?id=9" target="_blank">福建劳务网正式上线</a>
     </div>
      <p>发布时间：<span>2013-10-19</span>     点击次数：<span>3</span></p>
      <p>热烈祝贺福建劳务网正式上线<a href="/notice/notice-show.php?id=9">[全文]</a></p>
     </div>
          <div class="jl-list">
      <img src="/templates/mand/images/img/list_r.png"/><div class="jl-list-p">
        <a href="/notice/notice-show.php?id=8" target="_blank">客服招聘火热</a>
     </div>
      <p>发布时间：<span>2013-06-20</span>     点击次数：<span>41</span></p>
      <p>各类客服岗位招聘火热，求职联系电话：0591-87627195<a href="/notice/notice-show.php?id=8">[全文]</a></p>
     </div>
          <div class="page-next"><div class="clear"></div></div>
   </div>
</div> 
<!-- main end -->   
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


</body></html>