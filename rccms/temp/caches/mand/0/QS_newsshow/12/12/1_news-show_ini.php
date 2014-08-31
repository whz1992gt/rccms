a:2:{s:6:"config";a:0:{}s:8:"template";a:3:{i:0;s:13:"news-show.ini";i:1;s:15:"user/header.ini";i:2;s:15:"user/footer.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0026)http://test164.mandnt.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK"> 
<title>试用期员工8成不懂劳动合同法吃大亏 - 福建劳务网</title>
<meta name="description" content="核心内容：用工单位忙着“招兵买马”，大学毕业生、技工和农民工等则忙着找合适自己的“东家”，找到合适的工作后就需要签订劳动">
<meta name="keywords" content="试用期员工8成不懂劳动合同法吃大亏">
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
      var id="12";
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
当前位置：<a href="/">首页</a>&nbsp;>>&nbsp;<a href="/news/">新闻资讯</a>&nbsp;>>&nbsp;<a href=""></a>&nbsp;>>&nbsp;正文
</div> 
<!-- main begin -->
<div class="main">
  <div class="leftbox">
      <div class="l-content">
         <div class="news_lite_search">
      <input name="txtSearchKey" type="text" id="txtSearchKey" class="news_lite_input" value="资讯搜索" style="width:180px;"/>
      <input type="button" id="searchBtn" name="" class="news_lite_sub" />
      <script type="text/javascript"> 
  $("#index-search-button").click(function()
  { 
    index_search_location();
  });
                    var searchBox = $('#txtSearchKey');
                    var defaultValue = '资讯搜索';
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
                            alert("资讯搜索");
                            return false;
                        }
                        else {
                           $("body").append('<div id="pageloadingbox">页面加载中....</div><div id="pageloadingbg"></div>');
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
         <h3><a href="#" class="l-tittle">最新资讯</a><a href="#" class="l-more"><img src="/templates/mand//images/img/more.png" width="36" height="18" /></a></h3>
         <ul class="zclist">
                                        <li>·<a href="/news/news-show.php?id=855" target="_blank">视面必成5大原则 第1天就上班</a></li>
                            <li>·<a href="/news/news-show.php?id=854" target="_blank">面试五分钟 礼仪术语判高下</a></li>
                            <li>·<a href="/news/news-show.php?id=853" target="_blank">求职十大成功秘诀</a></li>
                            <li>·<a href="/news/news-show.php?id=852" target="_blank">求职招聘三大细节不容忽视</a></li>
                            <li>·<a href="/news/news-show.php?id=851" target="_blank">yao学会在面试里如何自我推销</a></li>
                            <li>·<a href="/news/news-show.php?id=850" target="_blank">大学生，我想对你说</a></li>
                            <li>·<a href="/news/news-show.php?id=849" target="_blank">博客成毕业生的求职新宠</a></li>
                            <li>·<a href="/news/news-show.php?id=848" target="_blank">教你一招：如何阅读求职招聘广告</a></li>
                            <li>·<a href="/news/news-show.php?id=847" target="_blank">外企面试官最爱提的问题TOP10</a></li>
                            <li>·<a href="/news/news-show.php?id=846" target="_blank">男士见工如何着装</a></li>
                            <li>·<a href="/news/news-show.php?id=845" target="_blank">面试十大“败招”</a></li>
                            <li>·<a href="/news/news-show.php?id=844" target="_blank">名企面试看中哪些能力？</a></li>
                            <li>·<a href="/news/news-show.php?id=843" target="_blank">求职路上少走弯路的几个忠告</a></li>
                            <li>·<a href="/news/news-show.php?id=842" target="_blank">职场面试：自信+能力&#61;成功！</a></li>
                            <li>·<a href="/news/news-show.php?id=841" target="_blank">互联网时代 网上求职3大优势</a></li>
                       </ul>
      </div>
      <div class="mar-10"></div>
         <div class="l-content">
         <h3><a href="#" class="l-tittle">最新岗位</a><a href="#" class="l-more"><img src="/templates/mand/images/img/more.png" width="36" height="18" /></a></h3>
         <ul class="zclist">
                                    <li>·<a href="/jobs/jobs-show.php?id=6821" target="_blank"><span style="color:绿色">中石化森美客服</span>-福州慧诚人力资源管理有限公司</a></li>
                        <li>·<a href="/jobs/jobs-show.php?id=6823" target="_blank">程序员-google</a></li>
                        <li>·<a href="/jobs/jobs-show.php?id=6822" target="_blank">移动客服-福建省诚毅物业管理有限公司</a></li>
                        <li>·<a href="/jobs/jobs-show.php?id=6820" target="_blank">人资-福建省劳务派遣服务有限公司</a></li>
                        <li>·<a href="/jobs/jobs-show.php?id=6818" target="_blank">测试-智慧万家信息技术有限公司</a></li>
                        <li>·<a href="/jobs/jobs-show.php?id=6663" target="_blank">代理大学生网上签-山东兆和金诺劳务派遣有限公司</a></li>
                        <li>·<a href="/jobs/jobs-show.php?id=6148" target="_blank">代缴保险  档案托-兆和金诺劳务派遣有限公司</a></li>
                        <li>·<a href="/jobs/jobs-show.php?id=6817" target="_blank">电子商务客服-智慧万家信息技术有限公司</a></li>
                        <li>·<a href="/jobs/jobs-show.php?id=271" target="_blank">英语教师-银川市欧侨外国语学校</a></li>
                        <li>·<a href="/jobs/jobs-show.php?id=6816" target="_blank">懂注塑人才-高碑店市瑞森融信银行用品有限公</a></li>
                        <li>·<a href="/jobs/jobs-show.php?id=6815" target="_blank">经理助理-兆和蓝海国际大饭店</a></li>
                        <li>·<a href="/jobs/jobs-show.php?id=6814" target="_blank">司机/保安-兆和蓝海国际大饭店</a></li>
                      </ul>
      </div>
  </div>
   <div class="rightbox">
      <h1>试用期员工8成不懂劳动合同法吃大亏</h1>
      <div class="time">发表时间：2013-04-16&nbsp;&nbsp;<a href="#" class="a-lw">guanggao01</a> 点击：7
      </div>
      <div class="fontSize">
          <ul>
            <li>[ <a href="javascript:window.print();">打印</a> ]&nbsp;&nbsp;</li>
            <li>[ <a href="javascript:void(0);" onclick="window.external.addFavorite(parent.location.href,document.title);">收藏</a> ]&nbsp;&nbsp;</li>
            <li>[ <a href="javascript:self.close()">关闭</a> ]</li>
          </ul>
          </div>
      <div class="artbox">
        <div id="content">
        	<div class="content" id="article" >
            <!--style="text-indent:2em;" -->
            <p style="color:#000000;text-indent:0px;background-color:#ffffff;"><span style="color:#000000;">核心内容：用工单位忙着“招兵买马”，大学毕业生、技工和农民工等则忙着找合适自己的“东家”，找到合适的工作后就需要签订</span><span style="color:#000000;">劳动合同</span><span style="color:#000000;">，以约定双方的责任关系。大部分被调查者对《劳动合同法》中关于</span><a href="http://www.lawtime.cn/info/laodonghetongfa/shiyongqi/" target="_blank"><span style="color:#000000;">试用期</span></a><span style="color:#000000;">、社会保险和工资赔偿等方面的内容并不了解，甚至有一些农民工并不打算与用人单位签订劳动合同。</span></p>
<p style="color:#000000;text-indent:0px;background-color:#ffffff;"><span style="color:#000000;">　　不知试用期在合同期内为了摸清求职者对《劳动合同法》的了解程度和求职者如何利用《劳动合同法》维护合法权益。日前，笔者调查发现，很多求职者对《劳动合同法》的内容知之甚少。“您知道签订劳动合同后试用期应该包含在合同期内吗?”笔者向应届毕业生小张提出这样的问题时，他一脸茫然，不知道怎样回答笔者的问题。“从来没有看过劳动合同法，还真不知道这方面的规定。”家住青岛的小王告诉笔者，据他介绍，他们班上的30名同学中找到工作的同学，大部分没有详细询问与用人单位签订的劳动合同内容，即使询问的同学也不太了解《劳动合同法》的相关内容。而笔者调查过程中得知，八成求职者不了解《劳动合同法》内容。</span></p>
<p style="color:#000000;text-indent:0px;background-color:#ffffff;"><span style="color:#000000;">　　</span><strong><span style="color:#000000;">“五险一金”只知其中三项</span></strong></p>
<p style="color:#000000;text-indent:0px;background-color:#ffffff;"><span style="color:#000000;">　　笔者调查过程中了解到，很多求职者对《劳动合同法》中规定的社会保险了解的也很少。“只听说过找工作的时候，一定要注意询问用人单位保险方面的内容，但是社会保险具体包含哪些内容还真不知道。”求职者小刘告诉笔者，她只知道五险中包括养老保险、</span><span style="color:#000000;">医疗保险</span><span style="color:#000000;">和失业保险三项，而其他两项工伤保险和生育保险就不知道了。求职者不仅对于《劳动合同法》中规定的社会保险的内容不太了解，甚至还把社会保险和商业保险的内容混淆，基本上就是一个“劳动法盲”。</span></p>
<p style="color:#000000;text-indent:0px;background-color:#ffffff;"><span style="color:#000000;">　</span><strong><span style="color:#000000;">　没听说过“经济补偿”</span></strong></p>
<p style="color:#000000;text-indent:0px;background-color:#ffffff;"><span style="color:#000000;">　　“被公司辞退了，还可以领到经济补偿，真有这么回事吗?”当笔者向求职者提问是否了解《劳动合同法》中经济补偿的内容时，大部分人都向记者提出了这样的疑问。昨天笔者在市就业服务中心的招聘会上调查时，碰到了前来找工作的张女士，她就经历过被公司辞退，但是没有立即支付经济补偿的事情。去年5月份，张女士找了一份销售业务的工作，当时和单位签了一年的合同。可是工作还未满半年，单位就以效益不好为由，向他们下达了辞退通知书，跟她一起被辞退的员工大约有10名。其中有四五个像张女士一样，是工作不到半年的新员工。“工作够半年的员工多给了一个月的工资，而像我这样不够半年的则没有补偿。”张女士说，当时她就感觉受到了不公平待遇。在朋友的介绍下，她和其他几名没有领到补偿金的人就感觉很不服气，申请了劳动仲裁以后，单位才同意另外支付他们半个月的工资。</span></p>
<p style="color:#000000;text-indent:0px;background-color:#ffffff;"><span style="color:#000000;">　</span><strong><span style="color:#000000;">　农民工嫌签合同麻烦</span></strong></p>
<p style="color:#000000;text-indent:0px;background-color:#ffffff;"><span style="color:#000000;">　　“签订劳动合同太麻烦了，有时候家里有事还很难及时回家，还不如不签，干多少活拿多少工资，多利索!”在沈阳路上的人力资源市场上，来自兆和沂水的求职者卢师傅告诉笔者，他之前干过一份钳工的工作，也与用人单位签订了劳动合同，但是家里农忙缺人手时，他请个一两天的假还可以，时间一长用人单位就不同意了，甚至还会对他处罚，这让他感到很不自在，自己的自由受到了约束。“经历了这个事，我就尽量找一些工作周期比较短的工作，不跟用人单位签劳动合同，尽量把农忙时间空出来。”卢师傅说，并且从来都没有遇到过被胡乱克扣工资的状况。当笔者询问他有什么妙招时，他说，找工作时他一般都会先打听一下用工单位的情况，然后再仔细询问用工单位的招聘人员，做到知己知彼。如果得到的答案基本上一致，他就会到用人单位那里试试。</span></p>
        	</div>
        </div>
      </div>
      <div >免责声明：本文仅代表作者个人观点，与<a href="/">福建劳务网</a>无关。其原创性以及文中陈述文字和内容未经本站证实，对本文以及其中全部或者部分内容、文字的真实性、完整性、及时性本站不作任何保证或承诺，请读者仅作参考，并请自行核实相关内容。
      </div>
      <div class="newsxiangguan">
        <p> 相关阅读：</p>
        <ul>
                          <li>·<a href="/news/news-show.php?id=855" target="_blank">视面必成5大原则 第1天就上班</a></li>
                <li>·<a href="/news/news-show.php?id=64" target="_blank">成就职业生涯的秘诀：赌局中的心态</a></li>
                <li>·<a href="/news/news-show.php?id=59" target="_blank">你的工作态度及格吗？</a></li>
                <li>·<a href="/news/news-show.php?id=58" target="_blank">马化腾谈创业：曾想60万元卖掉QQ</a></li>
                <li>·<a href="/news/news-show.php?id=51" target="_blank">你做什么工作才能成为富翁？</a></li>
                <li>·<a href="/news/news-show.php?id=31" target="_blank">3招助你提升2013年工作表现</a></li>
           
        </ul>
      </div>
      <div class="mar10"></div>
   </div>
</div> 
<!-- main end -->   
<div class="clear"></div>
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