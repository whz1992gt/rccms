a:2:{s:6:"config";a:0:{}s:8:"template";a:3:{i:0;s:18:"help/help-list.ini";i:1;s:15:"user/header.ini";i:2;s:15:"user/footer.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--��ȡ�������� -->
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ְλ���������- ���� - ����������</title>
<meta name="description" content="ְλ�������������">
<meta name="keywords" content="ְλ���������İ�����Ϣ">
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
		if ($("#help_searcform #key").val()=="" || $("#key").val()=="������ؼ���...")
			{
				//delete the alert tip,it's is very ugly.
				// alert("������ؼ���");
				$('#key').attr('value','������ؼ���...');
				$('#key').css('color','#CCCCCC');
				return false;
			}
	$("body").append('<div id="pageloadingbox">ҳ�������....</div><div id="pageloadingbg"></div>');
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
			alert("ajax����ʧ��");
		}
	});
	});
	$("#help_searcform #key").focus(function(){
	if ($("#key").val()=="������ؼ���...")
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
</div><div class="page_location link_bk">
��ǰλ�ã�<a href="/">��ҳ</a>&nbsp;>>&nbsp;<a href="/help/">����</a>&nbsp;>>&nbsp;<a href="/help/help-list.php?id=9">ְλ���������</a>
</div>
<div class="main">
  <div class="leftbox">
  	              <div class="l-content">
         <h3><a href="#" class="l-tittle">�˻�����</a></h3>
         <ul class="zclist">
	  								<li><a href="/help/help-list.php?id=4">ע�����¼</a></li>
		 				<li><a href="/help/help-list.php?id=5">�����һ�������</a></li>
		 				<li><a href="/help/help-list.php?id=6">�˻�״̬</a></li>
		 				<li><a href="/help/help-list.php?id=7">������ͷ��</a></li>
		 				<li><a href="/help/help-list.php?id=8">�ֻ���������֤</a></li>
		 	         </ul>
      </div>
      <div class="mar-10"></div>
            <div class="l-content">
         <h3><a href="#" class="l-tittle">������ҵ</a></h3>
         <ul class="zclist">
	  								<li><a href="/help/help-list.php?id=9">ְλ���������</a></li>
		 				<li><a href="/help/help-list.php?id=10">ְλ�ƹ�</a></li>
		 				<li><a href="/help/help-list.php?id=11">��Ƹ����</a></li>
		 				<li><a href="/help/help-list.php?id=12">��Ƹ��</a></li>
		 				<li><a href="/help/help-list.php?id=13">��ֵ������</a></li>
		 				<li><a href="/help/help-list.php?id=14">ʹ����Ʒ��</a></li>
		 				<li><a href="/help/help-list.php?id=15">�������ͼ</a></li>
		 	         </ul>
      </div>
      <div class="mar-10"></div>
            <div class="l-content">
         <h3><a href="#" class="l-tittle">���Ǹ���</a></h3>
         <ul class="zclist">
	  								<li><a href="/help/help-list.php?id=16">�������������</a></li>
		 				<li><a href="/help/help-list.php?id=17">��ְ����</a></li>
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
						<input name="key" type="text" id="key" maxlength="25" value="������ؼ���..." style="color: #CCCCCC"/>
						</div>			
						<div class="subinputbox"><input type="submit" name="" value="����" id="search_go" /></div>
						<div class="clear"></div>
			   		 </div>
			</div>
	  <div class="hotkey link_bku">
			���Źؼ��֣�<a href="/help/help-search.php?key=%D5%D2%BB%D8%C3%DC%C2%EB">�һ�����</a><a href="/help/help-search.php?key=%D5%D2%BB%D8%C3%DC%C2%EB">�ö�</a><a href="/help/help-search.php?key=%CD%C6%BC%F6">�Ƽ�</a><a href="/help/help-search.php?key=%C4%A3%B0%E6">ģ��</a><a href="/help/help-search.php?key=%B5%E7%D7%D3%B5%D8%CD%BC">���ӵ�ͼ</a>
	  </div>
			<div class="clear"></div>	

	</div>
	<div class="jiaoliu_box" style="width:745px;">

			<div class="jl_span">ְλ���������</div>
            <div class="bg_line">
            
            <div class="jl_title">
            	 <ul>
				   											<li>û�������Ϣ��</li>
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
