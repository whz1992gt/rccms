a:2:{s:6:"config";a:0:{}s:8:"template";a:3:{i:0;s:16:"jobfair-list.ini";i:1;s:15:"user/header.ini";i:2;s:15:"user/footer.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>招聘会 - 福建劳务网</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="copyright" content="yunyunhr.com" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/favicon.ico" />
<link href="/templates/mand/css/jobfairnew.css" rel="stylesheet" type="text/css" />
<link href="/templates/mand/css/global.css" rel="stylesheet" type="text/css">
<link href="/templates/mand/css/index-2013.css" rel="stylesheet" type="text/css"> 
<script src="/templates/mand/js/jquery.js" type="text/javascript" language="javascript"></script> 
<script src="/templates/mand/js/jquery.lazyload.js" type="text/javascript"></script>
<script src="/templates/mand/js/lpsjob-public.js" type="text/javascript" language="javascript"></script>

<link href="/templates/mand/css/style.css" rel="stylesheet" type="text/css" /> 
<script src="/templates/mand/js/jquery.vtip-min.js" type='text/javascript' ></script>
<!--
<link href="/templates/mand/css/global.css" rel="stylesheet" type="text/css">
<link href="/templates/mand/css/jobfairnew.css" rel="stylesheet" type="text/css" />
<link href="/templates/mand/css/index-2013.css" rel="stylesheet" type="text/css"> 
<script src="/templates/mand/js/jquery.js" type="text/javascript" language="javascript"></script> 
<script src="/templates/mand/js/jquery.lazyload.js" type="text/javascript"></script>
<script src="/templates/mand/js/lpsjob-public.js" type="text/javascript" language="javascript"></script>
<link href="/templates/mand/css/style.css" rel="stylesheet" type="text/css"> 
<script src="/templates/mand/js/jquery.vtip-min.js" type='text/javascript' ></script>-->

<script type="text/javascript">
$(document).ready(function()
{
 $(".jobfair").hover(function(){$(this).css("border-color","#FFB384")},function(){$(this).css("border-color","#FFE8DA")});
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
    <script type="text/javascript" language="javascript"  src="/templates/mand/js/index.js"></script>
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
            <input name="keywords" id="keywords" onfocus="$(this).addClass(&#39;cgry&#39;)" onblur="$(this).removeClass()"  type="text" x-webkit-speech="true">
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
</div><div id="wrapper">
<div class="img-banner"><a href="http://www.yunyunhr.com/jobfair/jobfair-list.php" target="_blank"><img src="/data/comads/2013/10/14/1381757304254.jpg" alt="" width="950" border="0" /></a></div>
<!-- 列表 begin -->
<div class="list-box-in">
<i class="tp"></i>
<div class="cont-warp">
<i class="bmz"></i>
<!-- [ 招聘会信息 begin ] -->
 
<div class="zph clearfix">
<div class="l">
<i class="years">2014年</i>
<i class="month">07月</i>
<i class="day">31日<em>(星期四)</em></i>
</div>

<div class="r">
<h2><a href="/jobfair/jobfair-show.php?id=7" target="_blank"><span style=color:#f00;font-weight:bold;>test111</span></a></h2>
<p>
<strong>时　　间：</strong>2014年07月31日<br />   
<strong>地　　点：</strong><br />
<strong>电　　话：</strong>
</p>

<div class="countdown">
<p>
<i id="times"></i>
<script type="text/javascript">
function _fresh()  
{  
 var endtime=new Date("2014/07/31,9:00:00");  
 var nowtime = new Date();  
 var leftsecond=parseInt((endtime.getTime()-nowtime.getTime())/1000);  
 __d=parseInt(leftsecond/3600/24);  
 __h=parseInt((leftsecond/3600)%24);  
 __m=parseInt((leftsecond/60)%60);  
 __s=parseInt(leftsecond%60);  
var c=new Date();
var q=((c.getMilliseconds())%10);
 document.getElementById("times").innerHTML=__d+"天"+__h+"小时"+__m+"分"+__s+"."+q+"秒";  
 if(leftsecond<=0){  
 document.getElementById("times").innerHTML="已成功举办！";  
 clearInterval(sh);  
 }  
}  
_fresh()  
var sh;  
sh=setInterval(_fresh,100);
</script>
</p>
</div>
<div class="zph-bnt">
<a href="/jobfair/jobfair-show.php?id=7" class="xq" title="查看详情" target="_blank" id="cur">
	查看详情</a>
<a href="/jobfair/jobfair-exhibitors.php?id=7" class="md" title="参会企业名单" target="_blank">
	参会企业名单</a>
<a class="dz"  href="/user/company/company_jobfair.php?act=jobfair" title="请进入企业会员中心预定展位">在线预定</a>
</div>
</div>
</div>
 
<div class="zph clearfix">
<div class="l">
<i class="years">2013年</i>
<i class="month">11月</i>
<i class="day">30日<em>(星期六)</em></i>
</div>

<div class="r">
<h2><a href="/jobfair/jobfair-show.php?id=6" target="_blank"><span style=color:#ee1d24;font-weight:bold;>2013年兆和大型青年人才招聘会</span></a></h2>
<p>
<strong>时　　间：</strong>2013年11月30日<br />   
<strong>地　　点：</strong>兆和市金沂蒙体育馆（新华一路与开阳路交汇处路东）<br />
<strong>电　　话：</strong>010-12345678
</p>

<div class="countdown">
<p>
<i id="times"></i>
<script type="text/javascript">
function _fresh()  
{  
 var endtime=new Date("2013/11/30,9:00:00");  
 var nowtime = new Date();  
 var leftsecond=parseInt((endtime.getTime()-nowtime.getTime())/1000);  
 __d=parseInt(leftsecond/3600/24);  
 __h=parseInt((leftsecond/3600)%24);  
 __m=parseInt((leftsecond/60)%60);  
 __s=parseInt(leftsecond%60);  
var c=new Date();
var q=((c.getMilliseconds())%10);
 document.getElementById("times").innerHTML=__d+"天"+__h+"小时"+__m+"分"+__s+"."+q+"秒";  
 if(leftsecond<=0){  
 document.getElementById("times").innerHTML="已成功举办！";  
 clearInterval(sh);  
 }  
}  
_fresh()  
var sh;  
sh=setInterval(_fresh,100);
</script>
</p>
</div>
<div class="zph-bnt">
<a href="/jobfair/jobfair-show.php?id=6" class="xq" title="查看详情" target="_blank" id="cur">
	查看详情</a>
<a href="/jobfair/jobfair-exhibitors.php?id=6" class="md" title="参会企业名单" target="_blank">
	参会企业名单</a>
<a class="dz" title="已停止在线预定展位" href="javascript:void(null);" >在线预定</a>
</div>
</div>
</div>

<!-- 部分参企名单 begin -->
<div class="zph-md">
<h3><i class="i-l"></i><i class="i-r"></i>
<strong>招聘会企业名单(部分)</strong><span></span>
</h3>
<div class="md-list clearfix">
<ul>
<li>中央市华特电气有限公司</li><li>陕西东岭房地产开发有限公司</li><li>阳光家居</li><li>新华人寿保险股份有限公司宝...</li><li>沃德伟业科技有限公司</li><li>上海山楠泵业（集团）有限公...</li><li>中央鑫盛森工贸有限公司</li><li>中央爱迪生物科技发展有限公司</li><li>中央双力叉车制造有限公司&a...</li><li>中央市金之力机械制造有限公...</li><li>中国太平洋保险股份有限公司...</li><li>中央合强钛业有限公司</li><li>中央元盛商贸</li><li>中国平安人寿保险股份有限公...</li><li>中国平安人寿保险股份有限公...</li><li>天恩灯饰</li><li>缤纷鸟少儿美术馆</li><li>陕西宏信有限责任会计师事务所</li><li>中央韩勇9+9制药厂</li><li>中央欧鹏石油设备有限责任公...</li><li>中央蔡家坡康复医院&amp;nbsp;</li><li>陕西长岭纺织机电科技有限公司</li><li>中央市建恒钛业有限公司</li><li>中央天下汇商业有限公司</li><li>中央市宝众汽车销售服务有限...</li><li>中央市凯林信息科技工程有限...</li><li>共享健康科技股份有限公司</li><li>中国劲酒中央办事处</li><li>中央市泽康医疗器械有限责任...</li><li>宜信普惠</li><li>中国太平洋保险股份有限公司</li><li>学府教育</li><li>陕西宝雅建筑装饰工程有限责...</li><li>陕西威晟机械零部件有限公司</li><li>楷模家居中央独立店</li><li>贝辉世通信息技术有限公司</li><li>中央市双峰氧气厂</li><li>巴黎风谛</li><li>中央陈仓兆裕文化发展有限公司</li><li>中央中衡仪表衡器有限公司</li></ul>
</div>
</div>
<!-- 部分参企名单 end -->

<!-- 布展图/地图 begin -->
<div class="img-list zph-in-img clearfix">
<ul>
	<li><a href="20131012/Booth.php" target="_blank" title="布展图"><img src="/img/img-bzt.gif" width="206" height="134" alt="布展图" /></a></li>
	<li><a href="http://j.map.baidu.com/BXtBM" target="_blank" title="电子地图"><img src="/img/img-dztu.gif" width="206" height="134" alt="电子地图" /></a></li>
	<li><a href="http://j.map.baidu.com/1dvBM" target="_blank" title="卫星地图"><img src="/img/img-wxtu.gif" width="206" height="134" alt="卫星地图" /></a></li>
	<li><a href="20131012/Personal.php#lx" target="_blank" title="乘车路线"><img src="/img/img-cclx.gif" width="206" height="134" alt="乘车路线" /></a></li>
</ul>
</div>
<!-- 布展图/地图 end -->
</div>
<i class="bt"></i>
</div>


<!-- 优势 begin -->
<div class="list-box-ys">
<i class="tp"></i>
<div class="cont-warp">
<h3 class="xc">火爆现场</h3>
<script src="clearbox.js" type="text/javascript"></script>
<div class="left-bnt" id="LeftArr"></div>
<div class="img-list zph-ys-img clearfix" id="ISL_Cont_1">
<ul>
	<li><a href="/img/2012-10-13-1.jpg" rel="clearbox[gallery=Green,,title=2012年秋季招聘会剪影-1]"><img src="/img/m2012-10-13-1.GIF" width="206" height="134" /></a></li>
	<li><a href="/img/2012-10-13-2.jpg" rel="clearbox[gallery=Green,,title=2012年秋季招聘会剪影-2]"><img src="/img/m2012-10-13-2.GIF" width="206" height="134" /></a></li>
	<li><a href="/img/2012-10-13-3.jpg" rel="clearbox[gallery=Green,,title=2012年秋季招聘会剪影-3]"><img src="/img/m2012-10-13-3.GIF" width="206" height="134" /></a></li>	
	<li><a href="/img/2012-5-26-1.jpg" rel="clearbox[gallery=Green,,title=2012年夏季招聘会剪影-1]"><img src="/img/m2012-5-26-1.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2012-5-26-2.jpg" rel="clearbox[gallery=Green,,title=2012年夏季招聘会剪影-2]"><img src="/img/m2012-5-26-2.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2012-5-26-3.jpg" rel="clearbox[gallery=Green,,title=2012年夏季招聘会剪影-3]"><img src="/img/m2012-5-26-3.gif" width="206" height="134" /></a></li>	
	<li><a href="/img/2012-2-4-1.jpg" rel="clearbox[gallery=Green,,title=2012年春季招聘会剪影-1]"><img src="/img/m2012-2-4-1.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2012-2-4-2.jpg" rel="clearbox[gallery=Green,,title=2012年春季招聘会剪影-2]"><img src="/img/m2012-2-4-2.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2012-2-4-3.jpg" rel="clearbox[gallery=Green,,title=2012年春季招聘会剪影-3]"><img src="/img/m2012-2-4-3.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2012-2-4-4.jpg" rel="clearbox[gallery=Green,,title=2012年春季招聘会剪影-4]"><img src="/img/m2012-2-4-4.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2011-11-19-1.jpg" rel="clearbox[gallery=Green,,title=2011年秋季招聘会剪影-1]"><img src="/img/m2011-11-19-1.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2011-11-19-2.jpg" rel="clearbox[gallery=Green,,title=2011年秋季招聘会剪影-2]"><img src="/img/m2011-11-19-2.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2011-11-19-3.jpg" rel="clearbox[gallery=Green,,title=2011年秋季招聘会剪影-3]"><img src="/img/m2011-11-19-3.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2011-2-19-1.jpg" rel="clearbox[gallery=Green,,title=2011年春季招聘会剪影-1]"><img src="/img/m2011-2-19-1.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2011-2-19-2.jpg" rel="clearbox[gallery=Green,,title=2011年春季招聘会剪影-2]"><img src="/img/m2011-2-19-2.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2011-2-19-3.jpg" rel="clearbox[gallery=Green,,title=2011年春季招聘会剪影-3]"><img src="/img/m2011-2-19-3.gif" width="206" height="134" /></a></li>
</ul>
</div>
<div class="right-bnt" id="RightArr"></div>
<SCRIPT src="/img/ScrollPic.js" type=text/javascript></SCRIPT>
<SCRIPT language=javascript type=text/javascript>
var scrollPic_02 = new ScrollPic();
scrollPic_02.scrollContId   = "ISL_Cont_1"; 
scrollPic_02.arrLeftId      = "LeftArr";
scrollPic_02.arrRightId     = "RightArr";
scrollPic_02.frameWidth     = 948;
scrollPic_02.pageWidth      = 232; 
scrollPic_02.speed          = 10;
scrollPic_02.space          = 10;
scrollPic_02.autoPlay       = true;
scrollPic_02.autoPlayTime   = 2; 
scrollPic_02.initialize();					
</SCRIPT>
<!-- [ 火爆现场 end ] -->

<h3 class="sc">领导视察</h3>
<div class="img-list zph-ys-img clearfix">
<ul>
	<li><a href="/img/ldsc-1.jpg" rel="clearbox[gallery=Green,,title=中央市人力资源和社会保障局领导和中央就业促进会领导亲临招聘会现场指导工作]"><img src="/img/mldsc-1.GIF" width="206" height="134" /></a></li>
	<li><a href="/img/ldsc-2.jpg" rel="clearbox[gallery=Green,,title=中央市人力资源和社会保障局领导和中央就业促进会领导亲临招聘会现场指导工作]"><img src="/img/mldsc-2.GIF" width="206" height="134" /></a></li>
	<li><a href="/img/ldsc-3.jpg" rel="clearbox[gallery=Green,,title=中央市人力资源和社会保障局相关领导莅临云云人才网检查指导工作，中央电视台记者跟踪报道]"><img src="/img/mldsc-3.GIF" width="206" height="134" /></a></li>
	<li><a href="/img/ldsc-4.jpg" rel="clearbox[gallery=Green,,title=中央市工商管理局相关领导莅临云云人才网检查指导工作，中央电视台记者跟踪报道]"><img src="/img/mldsc-4.GIF" width="206" height="134" /></a></li>
</ul>
</div><!-- [ 领导视察 end ] -->

<h3 class="mt">媒体报道</h3>
<div class="mtbd">
<div class="img"><a href="/news/2012/0213/953.html" title="《中央电视台》《中央日报》对云云人才网招聘会宣传报道" target="_blank">
	《中央电视台》《中央日报》对云云人才网招聘会宣传报道</a></div>
</div>


</div>
<i class="bt"></i>
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
    <div class="contact-app">
      <div class="app-box">手机版<br>
        <img height="90" src="/templates/mand/images/img/app-mobile.png" width="90"><br>
        手机扫一扫</div>
    </div>
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
</body>
</html>