a:2:{s:6:"config";a:0:{}s:8:"template";a:3:{i:0;s:16:"jobfair-list.ini";i:1;s:15:"user/header.ini";i:2;s:15:"user/footer.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��Ƹ�� - ����������</title>
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
    <script type="text/javascript" language="javascript"  src="/templates/mand/js/index.js"></script>
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
    <ul>		<li><a href="/index.php" target="_self" ><span>��  ҳ</span></a></li>		<li><a href="/new-jobs/new-jobs-list.php" target="_self" ><span>������Ƹ</span></a></li>		<li><a href="/jobs/jobs-list.php" target="_self" ><span>ְλ����</span></a></li>		<li><a href="/resume/resume-list.php" target="_self" ><span>�˲�����</span></a></li>		<li><a href="/communion/communion.php" target="_self" ><span>��������</span></a></li>		<li><a href="/consult/consult.php" target="_self" ><span>������ѯ</span></a></li>      </ul>
    <div class="tel">�ͷ��绰��0591-87627195</div>
  </div>
</div><div id="wrapper">
<div class="img-banner"><a href="http://www.yunyunhr.com/jobfair/jobfair-list.php" target="_blank"><img src="/data/comads/2013/10/14/1381757304254.jpg" alt="" width="950" border="0" /></a></div>
<!-- �б� begin -->
<div class="list-box-in">
<i class="tp"></i>
<div class="cont-warp">
<i class="bmz"></i>
<!-- [ ��Ƹ����Ϣ begin ] -->
 
<div class="zph clearfix">
<div class="l">
<i class="years">2014��</i>
<i class="month">07��</i>
<i class="day">31��<em>(������)</em></i>
</div>

<div class="r">
<h2><a href="/jobfair/jobfair-show.php?id=7" target="_blank"><span style=color:#f00;font-weight:bold;>test111</span></a></h2>
<p>
<strong>ʱ�����䣺</strong>2014��07��31��<br />   
<strong>�ء����㣺</strong><br />
<strong>�硡������</strong>
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
 document.getElementById("times").innerHTML=__d+"��"+__h+"Сʱ"+__m+"��"+__s+"."+q+"��";  
 if(leftsecond<=0){  
 document.getElementById("times").innerHTML="�ѳɹ��ٰ죡";  
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
<a href="/jobfair/jobfair-show.php?id=7" class="xq" title="�鿴����" target="_blank" id="cur">
	�鿴����</a>
<a href="/jobfair/jobfair-exhibitors.php?id=7" class="md" title="�λ���ҵ����" target="_blank">
	�λ���ҵ����</a>
<a class="dz"  href="/user/company/company_jobfair.php?act=jobfair" title="�������ҵ��Ա����Ԥ��չλ">����Ԥ��</a>
</div>
</div>
</div>
 
<div class="zph clearfix">
<div class="l">
<i class="years">2013��</i>
<i class="month">11��</i>
<i class="day">30��<em>(������)</em></i>
</div>

<div class="r">
<h2><a href="/jobfair/jobfair-show.php?id=6" target="_blank"><span style=color:#ee1d24;font-weight:bold;>2013���׺ʹ��������˲���Ƹ��</span></a></h2>
<p>
<strong>ʱ�����䣺</strong>2013��11��30��<br />   
<strong>�ء����㣺</strong>�׺��н����������ݣ��»�һ·�뿪��·���㴦·����<br />
<strong>�硡������</strong>010-12345678
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
 document.getElementById("times").innerHTML=__d+"��"+__h+"Сʱ"+__m+"��"+__s+"."+q+"��";  
 if(leftsecond<=0){  
 document.getElementById("times").innerHTML="�ѳɹ��ٰ죡";  
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
<a href="/jobfair/jobfair-show.php?id=6" class="xq" title="�鿴����" target="_blank" id="cur">
	�鿴����</a>
<a href="/jobfair/jobfair-exhibitors.php?id=6" class="md" title="�λ���ҵ����" target="_blank">
	�λ���ҵ����</a>
<a class="dz" title="��ֹͣ����Ԥ��չλ" href="javascript:void(null);" >����Ԥ��</a>
</div>
</div>
</div>

<!-- ���ֲ������� begin -->
<div class="zph-md">
<h3><i class="i-l"></i><i class="i-r"></i>
<strong>��Ƹ����ҵ����(����)</strong><span></span>
</h3>
<div class="md-list clearfix">
<ul>
<li>�����л��ص������޹�˾</li><li>�������뷿�ز��������޹�˾</li><li>����Ҿ�</li><li>�»����ٱ��չɷ����޹�˾��...</li><li>�ֵ�ΰҵ�Ƽ����޹�˾</li><li>�Ϻ�ɽ骱�ҵ�����ţ����޹�...</li><li>������ʢɭ��ó���޹�˾</li><li>���밮������Ƽ���չ���޹�˾</li><li>����˫���泵�������޹�˾&a...</li><li>�����н�֮����е�������޹�...</li><li>�й�̫ƽ���չɷ����޹�˾...</li><li>�����ǿ��ҵ���޹�˾</li><li>����Ԫʢ��ó</li><li>�й�ƽ�����ٱ��չɷ����޹�...</li><li>�й�ƽ�����ٱ��չɷ����޹�...</li><li>�������</li><li>�ͷ����ٶ�������</li><li>���������������λ��ʦ������</li><li>���뺫��9+9��ҩ��</li><li>����ŷ��ʯ���豸�������ι�...</li><li>����̼��¿���ҽԺ&amp;nbsp;</li><li>���������֯����Ƽ����޹�˾</li><li>�����н�����ҵ���޹�˾</li><li>�������»���ҵ���޹�˾</li><li>�����б����������۷�������...</li><li>�����п�����Ϣ�Ƽ���������...</li><li>�������Ƽ��ɷ����޹�˾</li><li>�й�����������´�</li><li>��������ҽ����е��������...</li><li>�����ջ�</li><li>�й�̫ƽ���չɷ����޹�˾</li><li>ѧ������</li><li>�������Ž���װ�ι���������...</li><li>�������ɻ�е�㲿�����޹�˾</li><li>��ģ�Ҿ����������</li><li>������ͨ��Ϣ�������޹�˾</li><li>������˫��������</li><li>�������</li><li>����²���ԣ�Ļ���չ���޹�˾</li><li>�����к��Ǳ�������޹�˾</li></ul>
</div>
</div>
<!-- ���ֲ������� end -->

<!-- ��չͼ/��ͼ begin -->
<div class="img-list zph-in-img clearfix">
<ul>
	<li><a href="20131012/Booth.php" target="_blank" title="��չͼ"><img src="/img/img-bzt.gif" width="206" height="134" alt="��չͼ" /></a></li>
	<li><a href="http://j.map.baidu.com/BXtBM" target="_blank" title="���ӵ�ͼ"><img src="/img/img-dztu.gif" width="206" height="134" alt="���ӵ�ͼ" /></a></li>
	<li><a href="http://j.map.baidu.com/1dvBM" target="_blank" title="���ǵ�ͼ"><img src="/img/img-wxtu.gif" width="206" height="134" alt="���ǵ�ͼ" /></a></li>
	<li><a href="20131012/Personal.php#lx" target="_blank" title="�˳�·��"><img src="/img/img-cclx.gif" width="206" height="134" alt="�˳�·��" /></a></li>
</ul>
</div>
<!-- ��չͼ/��ͼ end -->
</div>
<i class="bt"></i>
</div>


<!-- ���� begin -->
<div class="list-box-ys">
<i class="tp"></i>
<div class="cont-warp">
<h3 class="xc">���ֳ�</h3>
<script src="clearbox.js" type="text/javascript"></script>
<div class="left-bnt" id="LeftArr"></div>
<div class="img-list zph-ys-img clearfix" id="ISL_Cont_1">
<ul>
	<li><a href="/img/2012-10-13-1.jpg" rel="clearbox[gallery=Green,,title=2012���＾��Ƹ���Ӱ-1]"><img src="/img/m2012-10-13-1.GIF" width="206" height="134" /></a></li>
	<li><a href="/img/2012-10-13-2.jpg" rel="clearbox[gallery=Green,,title=2012���＾��Ƹ���Ӱ-2]"><img src="/img/m2012-10-13-2.GIF" width="206" height="134" /></a></li>
	<li><a href="/img/2012-10-13-3.jpg" rel="clearbox[gallery=Green,,title=2012���＾��Ƹ���Ӱ-3]"><img src="/img/m2012-10-13-3.GIF" width="206" height="134" /></a></li>	
	<li><a href="/img/2012-5-26-1.jpg" rel="clearbox[gallery=Green,,title=2012���ļ���Ƹ���Ӱ-1]"><img src="/img/m2012-5-26-1.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2012-5-26-2.jpg" rel="clearbox[gallery=Green,,title=2012���ļ���Ƹ���Ӱ-2]"><img src="/img/m2012-5-26-2.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2012-5-26-3.jpg" rel="clearbox[gallery=Green,,title=2012���ļ���Ƹ���Ӱ-3]"><img src="/img/m2012-5-26-3.gif" width="206" height="134" /></a></li>	
	<li><a href="/img/2012-2-4-1.jpg" rel="clearbox[gallery=Green,,title=2012�괺����Ƹ���Ӱ-1]"><img src="/img/m2012-2-4-1.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2012-2-4-2.jpg" rel="clearbox[gallery=Green,,title=2012�괺����Ƹ���Ӱ-2]"><img src="/img/m2012-2-4-2.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2012-2-4-3.jpg" rel="clearbox[gallery=Green,,title=2012�괺����Ƹ���Ӱ-3]"><img src="/img/m2012-2-4-3.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2012-2-4-4.jpg" rel="clearbox[gallery=Green,,title=2012�괺����Ƹ���Ӱ-4]"><img src="/img/m2012-2-4-4.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2011-11-19-1.jpg" rel="clearbox[gallery=Green,,title=2011���＾��Ƹ���Ӱ-1]"><img src="/img/m2011-11-19-1.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2011-11-19-2.jpg" rel="clearbox[gallery=Green,,title=2011���＾��Ƹ���Ӱ-2]"><img src="/img/m2011-11-19-2.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2011-11-19-3.jpg" rel="clearbox[gallery=Green,,title=2011���＾��Ƹ���Ӱ-3]"><img src="/img/m2011-11-19-3.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2011-2-19-1.jpg" rel="clearbox[gallery=Green,,title=2011�괺����Ƹ���Ӱ-1]"><img src="/img/m2011-2-19-1.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2011-2-19-2.jpg" rel="clearbox[gallery=Green,,title=2011�괺����Ƹ���Ӱ-2]"><img src="/img/m2011-2-19-2.gif" width="206" height="134" /></a></li>
	<li><a href="/img/2011-2-19-3.jpg" rel="clearbox[gallery=Green,,title=2011�괺����Ƹ���Ӱ-3]"><img src="/img/m2011-2-19-3.gif" width="206" height="134" /></a></li>
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
<!-- [ ���ֳ� end ] -->

<h3 class="sc">�쵼�Ӳ�</h3>
<div class="img-list zph-ys-img clearfix">
<ul>
	<li><a href="/img/ldsc-1.jpg" rel="clearbox[gallery=Green,,title=������������Դ����ᱣ�Ͼ��쵼�������ҵ�ٽ����쵼������Ƹ���ֳ�ָ������]"><img src="/img/mldsc-1.GIF" width="206" height="134" /></a></li>
	<li><a href="/img/ldsc-2.jpg" rel="clearbox[gallery=Green,,title=������������Դ����ᱣ�Ͼ��쵼�������ҵ�ٽ����쵼������Ƹ���ֳ�ָ������]"><img src="/img/mldsc-2.GIF" width="206" height="134" /></a></li>
	<li><a href="/img/ldsc-3.jpg" rel="clearbox[gallery=Green,,title=������������Դ����ᱣ�Ͼ�����쵼ݰ�������˲������ָ���������������̨���߸��ٱ���]"><img src="/img/mldsc-3.GIF" width="206" height="134" /></a></li>
	<li><a href="/img/ldsc-4.jpg" rel="clearbox[gallery=Green,,title=�����й��̹��������쵼ݰ�������˲������ָ���������������̨���߸��ٱ���]"><img src="/img/mldsc-4.GIF" width="206" height="134" /></a></li>
</ul>
</div><!-- [ �쵼�Ӳ� end ] -->

<h3 class="mt">ý�屨��</h3>
<div class="mtbd">
<div class="img"><a href="/news/2012/0213/953.html" title="���������̨���������ձ����������˲�����Ƹ����������" target="_blank">
	���������̨���������ձ����������˲�����Ƹ����������</a></div>
</div>


</div>
<i class="bt"></i>
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
    <div class="contact-app">
      <div class="app-box">�ֻ���<br>
        <img height="90" src="/templates/mand/images/img/app-mobile.png" width="90"><br>
        �ֻ�ɨһɨ</div>
    </div>
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
</body>
</html>