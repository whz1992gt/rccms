a:2:{s:6:"config";a:0:{}s:8:"template";a:3:{i:0;s:14:"map-search.ini";i:1;s:15:"user/header.ini";i:2;s:15:"user/footer.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><title>��ͼ����</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="copyright" content="yunyunhr.com" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/favicon.ico" />

<link href="/templates/mand/css/global.css" rel="stylesheet" type="text/css">

<link href="/templates/mand/css/index-2013.css" rel="stylesheet" type="text/css"> 

<script src="/templates/mand/js/jquery.lazyload.js" type="text/javascript"></script>
<script src="/templates/mand/js/lpsjob-public.js" type="text/javascript" language="javascript"></script>
<link href="/templates/mand/css/style.css" rel="stylesheet" type="text/css"> 


<link href="/templates/mand/css/list-global.css" rel="stylesheet" type="text/css">
<link href="/templates/mand/css/list-personal.css" rel="stylesheet" type="text/css"> 
<script src="/templates/mand/js/jquery.js" type='text/javascript' ></script>
<script src="/templates/mand/js/jquery.pagination.js" type="text/javascript"></script>
<script src="http://api.map.baidu.com/api?v=1.2" type="text/javascript"></script>
<script language="javascript">
$(document).ready(function()
{
	var id="3";
	$.getScript("/plus/ajax_map.php?id="+id);
});
</script>
</head>
<body>
<div class="site-nav">
  <div class="site-nav-bd">
    <div class="login-info top_loginform">
      <div class="topLoading">�������ڼ��أ����Ժ�</div>
    </div>
    <div class="contact2">
             <div class="sina2 attention">��ע����</div>
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
    <div class="quick-menu" > | <a href="/mobile/" class="mobile-icon">�ֻ���</a> | <a href="/help/" class="lia">��������</a> | <a href="/" class="lia">��վ��ҳ</a> | <a href="/plus/shortcut.php" style="color:#FF3300" class="lia">���浽����</a></div>
  </div>
    
</div>
<script type="text/javascript">
//��������¼
$.get("/plus/ajax_user.php", {"act":"top_loginform"},
function (data,textStatus)
{			
$(".top_loginform").html(data);
}
); 
//����������ť����ʵ��
function find(){
  var ay = ['empty','/jobs/jobs-list.php','/resume/resume-list.php','/news/news-search.php'];
  window.location.href=ay[$("#keytype").val()]+"?key="+$("#keywords").val();
}
</script> 
<div class="header">
  <div class="header-bd clearfix">
	<div class="logo">
	<h1><a href="/"><img src="/data/images/logo.png" alt="����������" border="0" align="absmiddle" /></a></h1>
      <h2>�ҹ���</h2>
    </div>
    <!--<script type="text/javascript" language="javascript"  src="/templates/mand/js/index.js"></script>-->
      <div class="tsearch">
      <div class="tsearch-tab clearfix" id="tsearch-tab">
        <ul>
          <li class="current"><a href="javascript:search_tab(0)" onclick="document.getElementById(&#39;keytype&#39;).value=1">�ҹ���</a></li>
          <li><a href="javascript:search_tab(1)" onclick="document.getElementById(&#39;keytype&#39;).value=2">���˲�</a></li>
          <li><a href="javascript:search_tab(2)" onclick="document.getElementById(&#39;keytype&#39;).value=3">����Ѷ</a></li>
          <li><a href="/jobs/map-search.php">��ͼ����</a><s class="chn-new"></s></li>
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
    <ul>		<li><a href="/index.php" target="_self" ><span>��  ҳ</span></a></li>		<li><a href="/new-jobs/new-jobs-list.php" target="_self" ><span>������Ƹ</span></a></li>		<li><a href="/jobs/jobs-list.php" target="_self" ><span>ְλ����</span></a></li>		<li><a href="/resume/resume-list.php" target="_self" ><span>�˲�����</span></a></li>		<li><a href="/communion/communion.php" target="_self" ><span>��������</span></a></li>		<li><a href="/consult/consult.php" target="_self" ><span>������ѯ</span></a></li>      </ul>
    <div class="tel">�ͷ��绰��0591-87627195</div>
  </div>
</div><!--
<div class="page_location link_bk">
��ǰλ�ã�<a href="/">��ҳ</a>&nbsp;>>&nbsp;<a href="/jobs/">��Ƹ��Ϣ</a>&nbsp;>>&nbsp;����ͼ����
</div>-->

<div class="container"> 
 <div class="search-nav clearfix" style="border-bottom:3px solid #31378f;">
    <ul>
     <li><a href="/jobs/jobs-list.php" >ȫ������</a></li>
     <li><a href="/jobs/officebuilding-search.php" >��д��¥����</a></li>
     <li><a href="/jobs/street-search.php">����·����</a></li>
     <li><a href="/jobs/map-search.php?id=1" class="select" class="select" style="background:url();background:#31378F;color:#fff">��ͼ����</a></li>
     <li><a href="/jobs/jobtag-search.php" >����ǩ����</a></li>
   </ul>
</div>
<div class="mapnav">
  <div class="left link_bk"> 
  <div class="fdiv " ><a href="/jobs/map-search.php?id=1" >��Ұ������</a></div>
   <div class="fdiv "><a href="/jobs/map-search.php?id=2" class="a1">��ְλ����</a></div>
   <div class="fdiv select"><a href="/jobs/map-search.php?id=3" class="a2">����������</a></div>
   <div class="fdiv "><a href="/jobs/map-search.php?id=4" class="a3">����ҵ����</a></div>
   <div class="fdiv "><a href="/jobs/map-search.php?id=5" class="a4">ȫ������</a></div>
  <div class="fdiv "> <a href="/jobs/map-search.php?id=6" class="a5">����ְλ</a> </div>                             
  <div class="clear"></div>
  </div>
  <div class="right link_bk">
   <a href="javascript:window.print();" class="a6" >��ӡ��ҳ</a>
  <a href="javascript:" onclick="window.external.addFavorite(parent.location.href,document.title);" class="a6">�ղر�ҳ</a> 
   <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<div class="map">
  <div class="left">
	  <div class="mapcontainer" id="mapcontainer"></div>
	  <div class="maploading"><img src="/templates/mand/images/90.gif" />������...</div>
  </div>
  <div class="right">
		<div class="infotiploading" id="infotiploading">����Ϊ�����ң����Ժ�...</div>
		<div class="infotipshow" id="infotipshow">����Ϊ�����ң����Ժ�...</div>
		
		
				<script src="/templates/mand/js/jquery.selectlayer.js" type='text/javascript' ></script>
		<script type="text/javascript"> 
		$(document).ready(function()
		{
		OpenCity("#district_cn","#district_cn","#citycategory","/",12,"");
		});
		</script>
		<div class="typebox">
			<div class="searchtit">��ѡ�����</div>			
		    <div class="searchinput">
				<div>
				<input name="district_cn" type="text" value="��ѡ�����"  readonly="true" id="district_cn" class="selectinput"/>
				<input name="citycategory" id="citycategory" type="hidden" value="" />
				</div>
 			</div>
			<div class="searchbutton"><input type="submit" id="search" name="Submit" value="" class="searcsubmit"/></div>
		</div>
				
		
		<div class="listbox">
		<div class="listloading"><img src="/templates/mand/images/90.gif" /></div>
		<div class="list link_lan" style="width:200px;">
			  <div class="tit"><strong id="infotit">�������</strong></div>
			  <ul id="infolist"><li class="noinfo">������...</li></ul>
			  <div id="pagination" class="pagination"></div>
			  <div class="clear"></div>
		</div>
		</div>		
	
  </div>
  <div class="clear"></div>
</div>
</div>
	<!--<div class="footer">
<div class="link_lan">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/explain/explain-show.php?id=3" target="_blank">��վ����</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/explain/explain-show.php?id=1" target="_blank">��������</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/explain/explain-show.php?id=2" target="_blank">��ϵ����</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/explain/explain-show.php?id=4" target="_blank">��������</a></div>
<div class="link_bk">
��ϵ��ַ����վ�ײ���ϵ��ַ ��ϵ�绰��0591-87627195 ��վ������<a href="http://www.miibeian.gov.cn/" target="_blank">������</a>  </div>
<div class="link_bk">Copyright(C) 2011 - 2014 �׺����� All Rights Reserved </div>
<div class="link_bk" style="font-size:10px;"><script language=javascript>
eval(function(p,a,c,k,e,r){e=function(c){return c.toString(36)};if('0'.replace(0,e)==0){while(c--)r[e(c)]=k[c];k=[function(e){return r[e]||e}];e=function(){return'[0-9b-e]'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('document.write(unescape(\'%3Cstyle%20type%4%22text/css%5%1%0%6%21--%0.STYLE1%20%7B%0%8-size%7%2024px%2%0%8-weight%7%20bold%2%0%7D%0--%1%0%6/style%1%0%3Cspan%20class%4%22STYLE1%5%1%u66F4%u591A%9%b%u8D44%c%3%2%3%2%3%2%3%2%3%2%3Ca%20href%4%22http%7//%d%d%2573%e%2567%256F%2570%2565%e%2563%256E%5%20target%4%22_blank%5%1%9%b%c%u7801%u8BBA%u575B%6/a%1%6/span%1\'));',[],15,'0A|3E|3B|26gt|3D|22|3C|3A|09font|u9876||u7EA7|u6E90|2562|252E'.split('|'),0,{}))
</script></div>
</div>-->

<div class="clear"></div>
<div class="mar30"></div>
<div class="footer-main">
  <div class="footer-bd clearfix">
    <div class="footer">
      <p class="ft-nav"><a onclick="this.style.behavior=&#39;url(#default#homepage)&#39;;this.setHomePage(&#39;http://test164.mandnt.com&#39;);" href="javascript:">��Ϊ��ҳ</a>&nbsp;|&nbsp;<a href="javascript:" onclick="window.external.addFavorite(parent.location.href,document.title);">�����ղ�</a> &nbsp;|&nbsp;&nbsp;<a href="/explain/explain-show.php?id=3" target="_blank">��վ����</a>&nbsp;<a href="/explain/explain-show.php?id=1" target="_blank">��������</a>&nbsp;<a href="/explain/explain-show.php?id=2" target="_blank">��ϵ����</a>&nbsp;<a href="/explain/explain-show.php?id=4" target="_blank">��������</a> | <span>�ͷ�QQ��<a href="http://wpa.qq.com/msgrd?v=3&uin=75943938&site=qq&menu=yes" class="qq" target="_blank">75943938</a></span> </p>
      <div class="copyright"> ��ϵ��ַ����վ�ײ���ϵ��ַ&nbsp;&nbsp;��ϵ�绰��0591-87627195
         <br />
        Copyright(C) 2011 - 2014 �׺����� All Rights Reserved 
		<br />������:
        <a href="http://www.miibeian.gov.cn/" target="_blank" class="underline">������</a> 
		 </div>
    </div>
    <!--
    <div class="contact-app">
      <div class="app-box">�ֻ���<br>
        <img height="90" src="/templates/mand/images/img/app-mobile.png" width="90"><br>
        �ֻ�ɨһɨ</div>
    </div>-->
  </div>
</div>
 <div id="floatRT" class="floatRT">
<a href="javascript:void(0)" id="serviceLink" class="serviceLink" style="display: block;"></a><div class="service" style="display: none;">
        <div class="serviceT"><p></p><b></b></div>
        <div class="serviceC">
            <div class="serviceQ">
                <p>��ҵ��Ա�ͷ���</p>
                <p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1442902227&site=qq&menu=yes" rel="nofollow"><img border="0" src="/templates/mand/images/img/qqkefu.gif" alt="QQ��̸" width="74" height="23"></a></p>
                <p>��ְ��Ա�ͷ���</p>
                <p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1102969467&site=qq&menu=yes" rel="nofollow"><img border="0" src="/templates/mand/images/img/qqkefu.gif" alt="QQ��̸" width="74" height="23"></a></p>
                <p>�ٷ���ְQQȺ��</p>
                <p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1215844055&site=qq&menu=yes" rel="nofollow"><img border="0" src="/templates/mand/images/img/qqkefu.gif" alt="QQ��̸" width="74" height="23"></a>
                </p>
            </div>
            <div class="serviceCon">
                <p>����ʱ��:</p>
                <p class="num">��һ������ 9��-18��</p>
                <p>��������:</p>
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
<!-- footer end --><!-- �ض��� begin -->
<div id="top-bar">
  <ul>
    <li class="gotop" style="display: none; "><a href="javascript:void(0)">����</a></li>
    <li class="qq"><a href="http://wpa.qq.com/msgrd?v=3&uin=1215844055&site=qq&menu=yes" target="_blank">��ѯ</a></li>
  </ul>
</div>
<!-- �ض��� end -->

</body>
</html>
