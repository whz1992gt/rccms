a:2:{s:6:"config";a:0:{}s:8:"template";a:3:{i:0;s:13:"news-show.ini";i:1;s:15:"user/header.ini";i:2;s:15:"user/footer.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0026)http://test164.mandnt.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK"> 
<title>面试官告诉你:细节决定成败 - 福建劳务网</title>
<meta name="description" content="新鲜人求职面试，最重要是了解面试官看重什么。以下要点，是一些参加过招聘的面试官所看重的，你做到了吗？
铁锌:
第一印象最重要">
<meta name="keywords" content="面试官告诉你:细节决定成败">
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
      var id="840";
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
                        <li>·<a href="/jobs/jobs-show.php?id=6813" target="_blank">会计/助理-腾达广告有限公司</a></li>
                      </ul>
      </div>
  </div>
   <div class="rightbox">
      <h1>面试官告诉你:细节决定成败</h1>
      <div class="time">发表时间：2013-08-21&nbsp;&nbsp;<a href="#" class="a-lw">兆和人才网</a> 点击：700
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
            新鲜人求职面试，最重要是了解面试官看重什么。以下要点，是一些参加过招聘的面试官所看重的，你做到了吗？</P>
<P>铁锌:</P>
<P>第一印象最重要</P>
<P>基本上，应聘者推门进来、坐下、打招呼的这个过程，我就已经决定要不要他。作为外企，人事部门一般都比较严格。我知道通过他们的初步筛选的应聘者，技术上、能力上大体没什么问题。所以我主要看一个人沟通的细节。</P>
<P>在现代企业，想获得出色的业绩，除了个人努力，更重要靠团队合作，看能否得到同事的助力和资源。七秒钟的第一印象，通过他的着装、眼神、举止、习惯、表达方式，我已经知道他是否重视细节、是否具备沟通的礼仪、是否积极自信。接下来的内容，只是印证我的观点而已。</P>
<P>所以，面试考验的，最重要还是平时做人做事的习惯和积累。</P>
<P>雅歌:</P>
<P>简历要简洁不花哨</P>
<P>简历要简单、完整、明了，不要太花哨，弄个几十页。我们想知道基本信息、工作经历、能力、特长等。有些同学喜欢用邮件，但一次性发给好多公司。容易给用人单位留下不好的印象：感觉没有诚意，同时也不具备最基本的礼仪礼节。一般这样的简历会直接淘汰掉。</P>
<P>着装不要太夸张</P>
<P>面试时根据应聘公司的性质来决定自己的穿着。对于不是特别严格的公司，只要不过分休闲，暴露，一般都没有太大问题。记得上次有个姑娘竟然穿着高筒皮靴，网眼袜来。还有个刚毕业的小姑娘，穿吊带状背心，还把墨镜高高地顶在额头上来面试。这样的着装已注定了失败。</P>
<P>先对应聘公司有了解</P>
<P>有些同学投了很多简历。但来面试也不先了解一下应聘公司的行业内容、背景、应聘岗位内容等必要信息。结果问起来，居然对自己来应聘的公司什么都不了解。这样的糊涂虫，肯定过不了面试关。</P>
<P>不知怎么回答就说实话</P>
<P>回答问题有一定的技巧，最好不要撒谎，但也不必把自己的缺点暴露无遗。毕竟是来推销自己的，注重多强调一些自己客观优点。最怕遇到喜欢浮夸、吹牛的应聘者。当面试官长了，见的人也多了，眼力好歹也练出了点，遇到这样的应聘者一般不给太长的时间。</P>
<P>问为什么从上一个公司辞职，最没兴趣听到的一句话，却又是听到次数最多的一句话就是：我想有更好的发展前景，我想学更多的东西。一直不明白为什么大家都喜欢说这句话。</P>
<P>作为面试人，我的第一反应是，那么我能为你提供什么发展？如果我不能，那么你能长久工作吗？聘用一个员工，首先是因为我需要你能为我工作，解决我目前的问题，而不是首先为你提供学习的机会。</P>
<P>我比较欣赏平实的回答，比如，因为原来的薪水太低，或者希望能换个稳定点的工作，等等。总之切记，当你不知道该说什么的时候，最好说实话。这是最好的选择。 （田新 整理）</P>
<P>相关链接</P>
<P>面试着装有讲究</P>
<P>整体：头发要梳理整齐，最好面试前去洗手间整理一下。指甲长短适当，保持清洁。保持口气清新。穿着大方、整洁、得体的衣服。应选择较为正式的皮包，不要带休闲运动类的背包。</P>
<P>女士 1.着装：略显保守、给人清新感觉的套装较好。裙子下摆应长过下垂的双手指间；以穿长袖衬衫为宜，袖口可稍稍从外套袖口露一点出来，这样给人一种职业的感觉；夏天也可以着短袖，但最好不要着无袖上衣。2.鞋：没有带子的高跟船型鞋是最稳妥的选择，避免穿过高的高跟鞋。3.袜子：不要太显眼，穿颜色淡的或肉色的。4.化妆：一定要化，以淡妆为宜，以健康、自然为标准。</P>
<P>男士 1.着装：保守为主，首选西装，衣裤要搭配。最好选择没有格子和条纹的白色、浅蓝的长袖衬衫。应将西装及衬衣熨烫平整。2.领带：花色应与西服相配。下端不要长过腰带。3.鞋：穿黑色皮鞋，着深色袜子且长短适宜，切记不可穿白色袜子。</P><br />
          <br/>
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