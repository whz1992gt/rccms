a:2:{s:6:"config";a:0:{}s:8:"template";a:3:{i:0;s:45:"../tpl_company/newbaoji/company-jobs-list.ini";i:1;s:10:"header.ini";i:2;s:10:"footer.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����ʡ������ҵ�������޹�˾ - ְλ�б� - ����������</title>
<meta name="description" content="����ʡ������ҵ�������޹�˾������2014��6�£�ע���ʽ�500��Ԫ����ң���Ҫ��Ӫ��Χ��ҵ�����������񣻷�...},ְλ�б�">
<meta name="keywords" content="����ʡ������ҵ�������޹�˾,ְλ�б�">
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
	dialog("Ͷ����","url:get?/user/user_apply_jobs.php?id="+$(this).attr("id")+"&act=app","500px","auto","");
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
	dialog("�����ղ�","url:get?/user/user_favorites_job.php?id="+$(this).attr("id")+"&act=add","500px","auto","");
	});
	$(".recommend").unbind().click(function()
	{
		dialog("�Ƽ�������","url:get?/plus/ajax_recommend.php?job="+$(this).attr("url")+"&act=recommendjobs","400px","auto","");
	});
	$("#newbuddy").click(function(){
	dialog("��Ϊ����","url:get?/user/user_buddy.php?tuid=7896","350px","auto","");
	});
	$("#addpms").click(function(){
	var url="/user/user_pms.php?tuid=7896";
	dialog("���Ͷ���Ϣ","url:get?"+url,"400px","auto","");
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
    <div class="quick-menu"><a href="/mobile/" class="mobile-icon">�ֻ���</a> | <a href="/help/" class="lia">��������</a> | <a href="/" class="lia">��վ��ҳ</a> | <a href="/plus/shortcut.php" style="color:#FF3300" class="lia">���浽����</a></div>
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
</script> 
<div class="header">
  <div class="header-bd clearfix">
	<div class="logo">
	<h1><a href="/"><img src="/data/images/logo.png" alt="����������" border="0" align="absmiddle" /></a></h1>
      <h2>�ҹ���</h2>
    </div>
    <div class="head-btn"> <a href="/user/user_reg.php?act=form&type=2" class="per-reg" title="��ѵǼǼ���"><span>1</span><em>��ѵǼǼ���</em></a> <a href="/user/user_reg.php?act=form&type=1" class="com-reg" title="��ѷ�����Ƹ"><span>1</span><em>��ѷ�����Ƹ</em></a> </div>
  </div>
</div>
<div class="nav-main">
  <div class="nav-bd">
    <ul>		<li><a href="/index.php" target="_self" ><span>��  ҳ</span></a></li>		<li><a href="/new-jobs/new-jobs-list.php" target="_self" ><span>������Ƹ</span></a></li>		<li><a href="/jobs/jobs-list.php" target="_self" id="cur"><span>ְλ����</span></a></li>		<li><a href="/resume/resume-list.php" target="_self" ><span>�˲�����</span></a></li>		<li><a href="/communion/communion.php" target="_self" ><span>��������</span></a></li>		<li><a href="/consult/consult.php" target="_self" ><span>������ѯ</span></a></li>      </ul>
    <div class="tel">�ͷ��绰��0591-87627195</div>
  </div>
</div><div class="page_location link_bk">
��ǰλ�ã�<a href="/">��ҳ</a>&nbsp;>>&nbsp;<a href="/jobs/">��Ƹ��Ϣ</a>&nbsp;>>&nbsp;����ʡ������ҵ�������޹�˾
</div>
<div class="company-show-topnav">
  <div class="topcomname">
  <h1>����ʡ������ҵ�������޹�˾</h1>
    <div class="company_license1" title="Ӫҵִ������֤"></div>
				<div class="clear"></div>
  </div>
  <div class="snav">
		<a href="/company/company-show.php?id=1929" >��˾����</a>
		<a href="/company/company-jobs.php?id=1929" class="selected">��Ƹְλ</a>
		<a href="/company/company-comment.php?id=1929" >����</a>
		<a href="/company/company-img.php?id=1929" >ͼƬ</a>
		<a href="/company/company-news.php?id=1929" >��˾��̬</a>
		<div class="clear"></div>
  </div>
</div>
<div class="company-show">
  <div class="left">
    <div class="jobs-list link_lan">
  			  			  <div class="joblistbox">
			    <div class="jleft link_bk">
				<h2><a href="/jobs/jobs-show.php?id=6822" target="_blank">�ƶ��ͷ�</a>
									
				</h2>
				<div class="tip">
								��Ƹ�����У���ӭͶ�ݼ�������ֹ����Ϊ��2015-12-07
								</div>
				<div class="amount">
				�����ص㣺<a href="/jobs/jobs-list.php?district=14&sdistrict=241" style="text-decoration:underline">������</a>&nbsp;&nbsp;|&nbsp;&nbsp;��Ƹ������������&nbsp;&nbsp;|&nbsp;&nbsp;�����6��&nbsp;&nbsp;|&nbsp;&nbsp;�������ڣ�2014-07-25
				</div>
				<div class="txt">1�����ù���Ͷ�ʹ������̹����������õ�רҵ˶ʿ������ѧ���� 
2����Ϥ��ط��ɷ��漰Ͷ����Ŀʵʩ���ʲ�����ʹ��ù��̵����������� 
3��...</div>
			    </div>
				 <div class="jright link_bk">
				   <div class="abox app_jobs" id="6822">Ͷ�ݼ���</div>
				   <div class="showurl"><a href="/jobs/jobs-show.php?id=6822" target="_blank">�鿴��ϸ</a></div>
				   <div class="morebox">��ʾ����
				     <div class="more link_bk">
					<a href="/jobs/jobs-list.php?category=545&subclass=546" target="_blank">����ְλ</a><br />
					<a href="javascript:void(0)" class="add_favorites" id="6822">�����ղ�</a><br />
					<a href="javascript:void(0)" class="recommend" url='%2Fjobs%2Fjobs-show.php%3Fid%3D6822|�ƶ��ͷ�'>�Ƽ�������</a>
				</div>
				   </div>
			       </div>
				 <div class="clear"></div>
			  </div>
      		   	  	</div>
  </div>
  <div class="right">
		  <div class="txtbox">
		    <div class="qrcode"><img src="/plus/url_qrcode.php?url=http://test155.mandnt.com/company/company-show.php?id=1929" alt="����ʡ������ҵ�������޹�˾ - ��ά��" /></div>
				  <div class="tit">��ҵ����</div>	  
				  <div class="txt">
					  <ul class="link_bku">
						<li>��ҵ���ʣ���Ӫ</li>
						<li>������ҵ��<a href="/jobs/jobs-list.php?trade=29" target="_blank">��ҵ����/��ҵ����</a></li>
						<li>��˾��ģ��<a href="/jobs/jobs-list.php?scale=81" target="_blank">20-99��</a></li>
						<li>���ڵ�����<a href="/jobs/jobs-list.php?district=14&sdistrict=241" target="_blank">������/������</a></li>
					  </ul>
				  </div>
				  <div class="pm link_bk">
					    <div class="pleft"><a href="javascript:void(0)" id="addpms">������Ϣ</a></div>
						<div class="pright"><a href="javascript:void(0)" id="newbuddy">��Ϊ����</a></div>
						<div class="clear"></div>
				</div>
						
	</div>
			 <div class="txtbox">
				  <div class="tit">�����ܸ���Ȥ��ְλ</div>	  
															<div class="txt1 link_lan">
					<strong><a href="/jobs/jobs-show.php?id=6822" target="_blank">�ƶ��ͷ�</a></strong><br />
					<a href="/company/company-show.php?id=1929" target="_blank">����ʡ������ҵ�������޹�˾</a><br />
					н�ʴ�����3000~5000Ԫ/��<br />��Ƹ������������<br />ѧ��Ҫ����ר
					</div>
										<div class="txt1 link_lan">
					<strong><a href="/jobs/jobs-show.php?id=6776" target="_blank">����������Ա</a></strong><br />
					<a href="/company/company-show.php?id=1912" target="_blank">��ɽ�н𶦷�����ѯ���޹�˾</a><br />
					н�ʴ�����3000~5000Ԫ/��<br />��Ƹ������6��<br />ѧ��Ҫ�󣺳���
					</div>
										<div class="txt1 link_lan">
					<strong><a href="/jobs/jobs-show.php?id=6773" target="_blank">���۾�Ӣ</a></strong><br />
					<a href="/company/company-show.php?id=1912" target="_blank">��ɽ�н𶦷�����ѯ���޹�˾</a><br />
					н�ʴ�����3000~5000Ԫ/��<br />��Ƹ������6��<br />ѧ��Ҫ�󣺳���
					</div>
										<div class="txt1 link_lan">
					<strong><a href="/jobs/jobs-show.php?id=6568" target="_blank">�ɹ�רԱ</a></strong><br />
					<a href="/company/company-show.php?id=1584" target="_blank">ɽ���������ز��������޹�˾</a><br />
					н�ʴ���������<br />��Ƹ������2��<br />ѧ��Ҫ�󣺴�ר
					</div>
										<div class="txt1 link_lan">
					<strong><a href="/jobs/jobs-show.php?id=6551" target="_blank">��ҵ�ͷ�</a></strong><br />
					<a href="/company/company-show.php?id=1423" target="_blank">�׺��м�˳��ҵ�������޹�˾</a><br />
					н�ʴ���������<br />��Ƹ������2��<br />ѧ��Ҫ�󣺳���
					</div>
								</div>
  </div>
  <div class="clear"></div>
</div>



<div class="footer-main">
  <div class="footer-bd clearfix">
    <div class="footer">
      <p class="ft-nav"><a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://test155.mandnt.com');" href="javascript:">��Ϊ��ҳ</a>&nbsp;|&nbsp;<a href="javascript:" onclick="window.external.addFavorite(parent.location.href,document.title);">�����ղ�</a> &nbsp;|&nbsp;<a href="/explain/explain-show.php?id=3" target="_blank">��վ����</a>&nbsp;|&nbsp;<a href="/explain/explain-show.php?id=1" target="_blank">��������</a>&nbsp;|&nbsp;<a href="/explain/explain-show.php?id=2" target="_blank">��ϵ����</a>&nbsp;|&nbsp;<a href="/explain/explain-show.php?id=4" target="_blank">��������</a> | <span>�ͷ�QQ��<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=75943938&amp;site=qq&amp;menu=yes" class="qq" target="_blank">75943938</a></span> </p>
      <div class="copyright"> ��ϵ��ַ����վ�ײ���ϵ��ַ  ��ϵ�绰��0591-87627195 <br />
       Copyright(C) 2011 - 2014 �׺����� All Rights Reserved 
		<br>
        <a href="http://www.miibeian.gov.cn/" target="_blank" class="underline"> ������</a>  
			 </div>
    </div>
    <!--
    <div class="contact-app">
      <div class="app-box">�ֻ���<br />
       <img height="90" src="/templates/mand/images/img/app-mobile.png" width="90"><br />
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
    <li class="qq"><a href="http://wpa.qq.com/msgrd?v=3&uin=75943938&site=qq&menu=yes" target="_blank">��ѯ</a></li>
  </ul>
</div>
<!-- �ض��� end -->
<script src="/templates/mand/js/jquery.vtip-min.js" type="text/javascript" language="javascript"></script>
</body>
</html>
