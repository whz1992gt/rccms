a:2:{s:6:"config";a:0:{}s:8:"template";a:3:{i:0;s:13:"news-show.ini";i:1;s:15:"user/header.ini";i:2;s:15:"user/footer.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0026)http://test164.mandnt.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK"> 
<title>�������Թ���������TOP10 - ����������</title>
<meta name="description" content="1.�����һ�����Լ���
�������������ʵ����⡣һ���˻ش�����������ƽ����ֻ˵���������䡢���á��������飬��Щ�ڼ����϶�">
<meta name="keywords" content="�������Թ���������TOP10">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/favicon.ico">
<meta property="qc:admins" content="77522437776156156026375">
<!--public -->
<link href="/templates/mand/css/global.css" rel="stylesheet" type="text/css">
<script src="/templates/mand/js/jquery.js" type="text/javascript" language="javascript"></script> 
<script src="/templates/mand/js/lpsjob-public.js" type="text/javascript" language="javascript"></script>
<!--old -->
<script src="/templates/mand/js/jquery.KinSlideshow.min.js" type="text/javascript"></script>
<link href="/templates/mand/css/news2011.css" rel="stylesheet" type="text/css"  />
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
  //old
      var id="847";
      var tsTimeStamp= new Date().getTime();
      $.get("/plus/ajax_click.php", { "id": id,"time":tsTimeStamp,"act":"news_click"},
        function (data,textStatus)
         {      
          $("#click").html(data);
         }
      );
	);	
})
</script>
</head><body>
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
</div><div class="page_location link_bk">
��ǰλ�ã�<a href="/">��ҳ</a>&nbsp;>>&nbsp;<a href="/news/">������Ѷ</a>&nbsp;>>&nbsp;<a href=""></a>&nbsp;>>&nbsp;����
</div> 
<!-- main begin -->
<div class="main">
  <div class="leftbox">
      <div class="l-content">
         <div class="news_lite_search">
      <input name="txtSearchKey" type="text" id="txtSearchKey" class="news_lite_input" value="��Ѷ����" style="width:180px;"/>
      <input type="button" id="searchBtn" name="" class="news_lite_sub" />
      <script type="text/javascript"> 
  $("#index-search-button").click(function()
  { 
    index_search_location();
  });
                    var searchBox = $('#txtSearchKey');
                    var defaultValue = '��Ѷ����';
                    searchBox.focus(function (e) {
                        if ($(this).val() == defaultValue) $(this).val('').css({
                            "box-shadow": "none",
                            "border": "none"
                        });
                    });
                    searchBox.blur(function (e) {
                        if ($.trim($(this).val()).length <= 0) $(this).val(defaultValue);
                    });
                    searchBox.keydown(function (event) {
                        var e = $.event.fix(event);
                        if (e.keyCode == 13) {
                            SearchClick();
                        }
                    });

                    var searchBtn = $('#searchBtn');
                    searchBtn.click(function () {
                        SearchClick();
                    });
                    function SearchClick() {
                        if (searchBox.val().length <= 0 || searchBox.val() == defaultValue) {
                            alert("��Ѷ����");
                            return false;
                        }
                        else {
                           $("body").append('<div id="pageloadingbox">ҳ�������....</div><div id="pageloadingbg"></div>');
                         $("#pageloadingbg").css("opacity", 0.5);
                         $.get("/plus/ajax_search_location.php", {"act":"QS_newssearch","key":$(".news_lite_search #txtSearchKey").val(),"page":1},
                function (data,textStatus)
            {
         window.location.href=data;
            }
             );
                        }
                    }
</script> 
    </div>
    </div>
    <div class="mar-10"></div>
         <div class="l-content">
         <h3><a href="#" class="l-tittle">������Ѷ</a><a href="#" class="l-more"><img src="/templates/mand//images/img/more.png" width="36" height="18" /></a></h3>
         <ul class="zclist">
                                        <li>��<a href="/news/news-show.php?id=855" target="_blank">����س�5��ԭ�� ��1����ϰ�</a></li>
                            <li>��<a href="/news/news-show.php?id=854" target="_blank">��������� ���������и���</a></li>
                            <li>��<a href="/news/news-show.php?id=853" target="_blank">��ְʮ��ɹ��ؾ�</a></li>
                            <li>��<a href="/news/news-show.php?id=852" target="_blank">��ְ��Ƹ����ϸ�ڲ��ݺ���</a></li>
                            <li>��<a href="/news/news-show.php?id=851" target="_blank">yaoѧ���������������������</a></li>
                            <li>��<a href="/news/news-show.php?id=850" target="_blank">��ѧ�����������˵</a></li>
                            <li>��<a href="/news/news-show.php?id=849" target="_blank">���ͳɱ�ҵ������ְ�³�</a></li>
                            <li>��<a href="/news/news-show.php?id=848" target="_blank">����һ�У�����Ķ���ְ��Ƹ���</a></li>
                            <li>��<a href="/news/news-show.php?id=847" target="_blank">�������Թ���������TOP10</a></li>
                            <li>��<a href="/news/news-show.php?id=846" target="_blank">��ʿ���������װ</a></li>
                            <li>��<a href="/news/news-show.php?id=845" target="_blank">����ʮ�󡰰��С�</a></li>
                            <li>��<a href="/news/news-show.php?id=844" target="_blank">�������Կ�����Щ������</a></li>
                            <li>��<a href="/news/news-show.php?id=843" target="_blank">��ְ·��������·�ļ����Ҹ�</a></li>
                            <li>��<a href="/news/news-show.php?id=842" target="_blank">ְ�����ԣ�����+����&#61;�ɹ���</a></li>
                            <li>��<a href="/news/news-show.php?id=841" target="_blank">������ʱ�� ������ְ3������</a></li>
                       </ul>
      </div>
      <div class="mar-10"></div>
         <div class="l-content">
         <h3><a href="#" class="l-tittle">���¸�λ</a><a href="#" class="l-more"><img src="/templates/mand/images/img/more.png" width="36" height="18" /></a></h3>
         <ul class="zclist">
                                    <li>��<a href="/jobs/jobs-show.php?id=6821" target="_blank"><span style="color:��ɫ">��ʯ��ɭ���ͷ�</span>-���ݻ۳�������Դ�������޹�˾</a></li>
                        <li>��<a href="/jobs/jobs-show.php?id=6822" target="_blank">�ƶ��ͷ�-����ʡ������ҵ�������޹�˾</a></li>
                        <li>��<a href="/jobs/jobs-show.php?id=6820" target="_blank">����-����ʡ������ǲ�������޹�˾</a></li>
                        <li>��<a href="/jobs/jobs-show.php?id=6818" target="_blank">����-�ǻ������Ϣ�������޹�˾</a></li>
                        <li>��<a href="/jobs/jobs-show.php?id=6663" target="_blank">�����ѧ������ǩ-ɽ���׺ͽ�ŵ������ǲ���޹�˾</a></li>
                        <li>��<a href="/jobs/jobs-show.php?id=6148" target="_blank">���ɱ���  ������-�׺ͽ�ŵ������ǲ���޹�˾</a></li>
                        <li>��<a href="/jobs/jobs-show.php?id=6817" target="_blank">��������ͷ�-�ǻ������Ϣ�������޹�˾</a></li>
                        <li>��<a href="/jobs/jobs-show.php?id=271" target="_blank">Ӣ���ʦ-������ŷ�������ѧУ</a></li>
                        <li>��<a href="/jobs/jobs-show.php?id=6816" target="_blank">��ע���˲�-�߱�������ɭ����������Ʒ���޹�</a></li>
                        <li>��<a href="/jobs/jobs-show.php?id=6815" target="_blank">��������-�׺��������ʴ󷹵�</a></li>
                        <li>��<a href="/jobs/jobs-show.php?id=6814" target="_blank">˾��/����-�׺��������ʴ󷹵�</a></li>
                        <li>��<a href="/jobs/jobs-show.php?id=6813" target="_blank">���/����-�ڴ������޹�˾</a></li>
                      </ul>
      </div>
  </div>
   <div class="rightbox">
      <h1>�������Թ���������TOP10</h1>
      <div class="time">����ʱ�䣺2013-08-21&nbsp;&nbsp;<a href="#" class="a-lw">�׺��˲���</a> �����378
      </div>
      <div class="fontSize">
          <ul>
            <li>[ <a href="javascript:window.print();">��ӡ</a> ]&nbsp;&nbsp;</li>
            <li>[ <a href="javascript:void(0);" onclick="window.external.addFavorite(parent.location.href,document.title);">�ղ�</a> ]&nbsp;&nbsp;</li>
            <li>[ <a href="javascript:self.close()">�ر�</a> ]</li>
          </ul>
          </div>
      <div class="artbox">
        <div id="content">
        	<div class="content" id="article" >
            <!--style="text-indent:2em;" -->
            1.�����һ�����Լ���<p></p>
<p>�������������ʵ����⡣һ���˻ش�����������ƽ����ֻ˵���������䡢���á��������飬��Щ�ڼ����϶��У���ʵ��������ϣ��֪��������ְ���ܷ�ʤ�ι�������������ǿ�ļ��ܡ��������о���֪ʶ���򡢸�����������Ĳ��֡���������ɹ����£���Ҫ�ĳɾ͵ȣ���Щ�����Ժ�ѧϰ�޹أ�Ҳ���Ժ�ѧϰ�йأ���Ҫͻ�������ĸ��Ժ����µ�������˵�ú����������Ż����š����������һ���˵���ò����ְ��Ҫ���ؿ��٣��ڻش�ÿ������֮��˵һ�䡰лл��������ϲ������ò����ְ�ߡ�</p>
<p>����2.��ѧУ��� ϲ���Ŀγ���ʲô��Ϊʲô��</p>
<p>���������������ϣ����ְ��ֱ�ӻش���ѧ������������֮��ľ���γ̣����ֱ�ӻش�˵�������ɣ�����������ְ�߶����ѧ�Ʋ�����Ȥ�����ܻ�������Ҳ���Ҫ��ɵ�ĳЩ����û����Ȥ���������������Ƹ���������ְ�߿����������ҿ��ܶԸ����Ŀ�����ر����Ȥ����������Ϊ�������һỨ�����ʱ��ȥѧϰ���ſγ̣�ͨ��ѧϰ��ԭ��������Ȥ�Ŀ�ĿҲ��ʼ������Ȥ�����ڱ���������Ȥ�Ŀ�Ŀ����Ȼѧϰ�ø����棬���Ը��ſεĳɼ���Ϊƽ�⡣ͨ�����������⣬��������ҵ����κ����鶼�ܸ���Ȥ����ְ�ߡ�</p>
<p>����3.˵˵��������ȱ�㣿</p>
<p>����������������ʵĸ��ʺܴ�ͨ����ϣ������ֱ�ӻش��ȱ����ʲô�ȣ������ְ��˵�Լ�С���ۡ����ɶ��ˡ��ǳ�����Ƣ���󡢹���Ч�ʵͣ�����϶�����¼���㡣����ϲ����ְ�ߴ��Լ����ŵ�˵���м��һЩСȱ�㣬����ٰ�����ת�ص��ŵ��ϣ�ͻ���ŵ�Ĳ��֡�����ϲ����������ְ�ߡ�</p>
<p>����4.����Ϊ����ѧУ���ں�ѧ����</p>
<p>�����������Ƹ�ߺܾ�������������������̽���ܶ����⣺�����ְ��ѧϰ�ɼ��ã��ͻ�˵�����ǵģ��ҵĳɼ��ܺã����еĳɼ��������졣��Ȼ���ж�һ��ѧ���ǲ��Ǻ�ѧ���кܶ��׼����ѧУ�ڼ�����Ϊ�ɼ�����Ҫ�ģ������������˼����¡�ʵ�����顢�ŶӾ��񡢹�ͨ����Ҳ���Ǻ���Ҫ�ģ�������Щ����Ҳ���úܺã�Ӧ��˵����һ��ȫ�淢չ��ѧ�����������ְ�߳ɼ��������룬���˵��������Ϊ�ǲ���һ����ѧ���ı�׼�Ƕ�Ԫ���ģ��ҵ�ѧϰ�ɼ������ԣ������������ҵı���Ҳ��ͻ����������ȥ�ܶ�ط�ʵϰ�����Һ�ϲ���ڿ�����ѹ���¹���������ѧ������֯����������������ҵ��ŶӺ����������֯�������� �о������Ƹ��һ���ͻ����ף�����ϲ����ʵ����ְ�ߡ�</p>
<p>����5.˵˵��ļ�ͥ��</p>
<p>������������ʱѯ�ʼ�ͥ���ⲻ�Ƿ�Ҫ֪����ְ�߼�ͥ�������̽����˽������ϲ��̽��������˽������Ҫ�˽��ͥ��������ְ�ߵ������Ӱ�졣����ϣ���������ص�Ҳ���ڼ�ͥ����ְ�ߵĻ���Ӱ�졣������ϲ���������ǣ��Һܰ��ҵļ�ͥ���ҵļ�ͥһ��ܺ�������Ȼ�ҵĸ��׺�ĸ�׶�����ͨ�ˣ����Ǵ�С���ҾͿ����Ҹ�������̰�ڣ�ÿ�칤���ر����ͣ������ж������������������渺���̬�Ⱥ����͵ľ�����ĸ��Ϊ���������������飬�ر��������ˣ������ڵ�λ��Ե�ܺã�����һ��һ��Ҳһֱ�ڽ̵������˵ĵ����������ţ������ļ�ͥ��ϵ��һ���˵ĳɳ���Ǳ��Ĭ����Ӱ�졣</p>
<p>����6.˵˵�����ҵ��������չ���ƵĿ�����</p>
<p>����������������ܸ���Ȥ��ֻ���б���������ְ���ܹ����ء���ְ�߿���ֱ�������ϲ��Ҷ������������ҵ���ŵ���Ϣ��ֻ�������˽���ܲ������صļ��⡣������Ϊ���������ְ���Ƕ������ԵĹ�˾Ԥ���˽�ܶ࣬������˾�������ţ���չ����������Իش������ʱ������ᵽ���˽�����������ӭ������ҵ�����ǡ�֪�����������ǡ�ä�ˡ���</p>
<p>����7.������������ְλ������Ϊ�㻹Ƿȱʲô��</p>
<p>��������ϲ������ְ�����㣬����������ְ��һ�㲻ֱ�ӻش�����ϣ��������������ְ�ߣ������ظ��Լ������ƣ�Ȼ��˵������ �����ְλ���ҵ�������˵���������Լ��ǿ���ʤ�εģ�ֻ��ȱ�����飬������������ҿ��Խ��빫˾�Ժ�����̵�ʱ����������ҵ�ѧϰ������ǿ�������ſ��Ժܿ����빫˾����ҵ�Ļ������빤��״̬��������ϲ���ܹ�����ض���������ְ�ߡ�</p>
<p>����8.�������Ĺ����Ƕ��٣�</p>
<p>��������Ĺ���ˮƽ�Ǻ����ģ����������ú��ֹ��ʡ�����ϲ��ֱ�ʵ��ˣ����������ȴ��������ش�����ϣ�������������ҵ��������ҵ����ƣ�����ȫ����ʤ�����ְλ���������ҿ������úܺá����ǹ�˾�����ְλ���������Ǻܾ��壬���뻹�����Ӻ������ۡ�������ӭ��ְ�߸��䶨н�����ɶȣ�������ҧ׼һ�����롣</p>
<p>����9.���ܸ���˾����ʲô��</p>
<p>�����������֪��δ����Ա����Ϊ��ҵ��ʲô����ְ��Ӧ�ٴ��ظ��Լ������ƣ�Ȼ��˵�������ҵ��������ҿ�����һ�������Ա������֯�з�������������֯������Ч�ʺ͸�������桱������ϲ����ְ�߾������ְλ�����Լ�����������������Ӫ��֮���ְλ������˵�����ҿ��Կ����������¿ͻ���ͬʱ�����Ͽͻ�����ȫ���ܵ��ķ��񣬿����Ͽͻ�������������ѡ����ȵȡ�</p>
<p>����10.�㻹��ʲô������</p>
<p>���������������⿴��ȥ���п��ޣ���ʵ�ܹؼ�������ϲ��˵��û�����⡱���ˣ���Ϊ���ע��Ա���ĸ��Ժʹ�������������ϲ����ְ���ʸ��˸���֮������⣬������������ʣ���˾�����빫˾��Ա����û��ʲô��ѵ��Ŀ���ҿ��Բμ��𣿻���˵��˾�Ľ���������ʲô���ģ����󽫺ܻ�ӭ����Ϊ���ֳ����ѧϰ������ͶԹ�˾���ҳ϶��Լ�����Ͻ��ġ�</p>
<br />
          <br />
        	</div>
        </div>
      </div>
      <div >�������������Ľ��������߸��˹۵㣬��<a href="/">����������</a>�޹ء���ԭ�����Լ����г������ֺ�����δ����վ֤ʵ���Ա����Լ�����ȫ�����߲������ݡ����ֵ���ʵ�ԡ������ԡ���ʱ�Ա�վ�����κα�֤���ŵ������߽����ο����������к�ʵ������ݡ�
      </div>
      <div class="newsxiangguan">
        <p> ����Ķ���</p>
        <ul>
                          <li>��<a href="/news/news-show.php?id=855" target="_blank">����س�5��ԭ�� ��1����ϰ�</a></li>
                <li>��<a href="/news/news-show.php?id=64" target="_blank">�ɾ�ְҵ���ĵ��ؾ����ľ��е���̬</a></li>
                <li>��<a href="/news/news-show.php?id=59" target="_blank">��Ĺ���̬�ȼ�����</a></li>
                <li>��<a href="/news/news-show.php?id=58" target="_blank">����̸��ҵ������60��Ԫ����QQ</a></li>
                <li>��<a href="/news/news-show.php?id=51" target="_blank">����ʲô�������ܳ�Ϊ���̣�</a></li>
                <li>��<a href="/news/news-show.php?id=31" target="_blank">3����������2013�깤������</a></li>
           
        </ul>
      </div>
      <div class="mar10"></div>
   </div>
</div> 
<!-- main end -->   
<div class="clear"></div>
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
</body></html>