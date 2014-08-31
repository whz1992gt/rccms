a:2:{s:6:"config";a:0:{}s:8:"template";a:3:{i:0;s:13:"news-show.ini";i:1;s:15:"user/header.ini";i:2;s:15:"user/footer.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0026)http://test164.mandnt.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK"> 
<title>视面必成5大原则 第1天就上班 - 福建劳务网</title>
<meta name="description" content="尼克。柯考迪罗斯，一位专门替大公司物色高级职员的猎头专家，多年来，他从设在加州硅谷的公司引荐过大量精英给许多大公司，如施">
<meta name="keywords" content="视面必成5大原则 第1天就上班">
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
      var id="855";
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
      <h1>视面必成5大原则 第1天就上班</h1>
      <div class="time">发表时间：2013-08-21&nbsp;&nbsp;<a href="#" class="a-lw">兆和人才网</a> 点击：813
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
            尼克。柯考迪罗斯，一位专门替大公司物色高级职员的猎头专家，多年来，他从设在加州硅谷的公司引荐过大量精英给许多大公司，如施乐公司、IBM公司、通用电气公司等。以下是他向准备参加面试的求职者提出'求职必成6原则“。但请求职者注意的是：面试成不成功，最更本的决定因素还是你本身具不具备你所去面试的公司所需的素质或潜质。<p></p>
<p>　　履历表用途不大</p>
<p>　　专业位大公司物色人才的专家都知道，公司是否雇用某个人，决不会只根据这个人的履历。履历表只是列出你过去的经历，对求职可以说没有什么帮助，因为不能证明你可以胜任你想得到的那份工作。柯考迪罗斯说：履历表的作用是供雇主参考，根据他来推测你是否对他们有用。只靠履历表某直觉不可能成功。'他忆起一句促销格言：赠送货样给顾客，可让顾客找到理由多买一些。他建议你也这样做：向雇主举例说明你能为他们做些什么。“在履历表中增加一栏，称之为'能为贵公司带来的利益‘。用两句话来说明你能为未来雇主带来什么好处。例如，我会整顿运输部，节省营运成本。'内容要具体，想你去求职的每一家公司应提交不同的履历表。</p>
<p>　　不要理会人力资源部</p>
<p>　　只要可能，猎头专家总是设法绕过人力资源部。'大多数人力资源部其实都是以处理文件为主的部门，“柯考迪罗斯说，'他们把你的求职函、履历表等文件装包、编组、归档、分类。然后，如果你的文件有幸没在混乱中给弄丢，他们可能把你的文件送交一位真正知道公司需要什么人才的经理。可是，在你等待人力资源部约你去面试的时候，猎头公司的人已在打电话、走后门去和负责雇用职员的经理接触了。”所以，你求职也应采取同样的策略：直接向有最终决定权的人求职。</p>
<p>　　面试以前必须查明一切</p>
<p>　　猎头公司只会推荐显然符合资格的求职者去面世。你找工作时，也应先设法了解自己是否能胜任那个职位。去面试前要先查明该职位的工作范围，研究该公司，摸清他的企业文化和目标，以及有什么竞争对手。</p>
<p>　　要了解某家公司，最好的方法就是去找该公司的雇员谈谈。罗切斯特大学电机工程学及光学博士班学生肯登。格林毕业前去求职，就采用了这种方法：' 我会去找一篇在我感兴趣的那家公司工作的某同行所写的论文，然后打电话给他要求跟他谈谈，向他查询我是否达到受雇条件，并且讨论公司的需求。我这样做了之后，结果通常是：我获邀请去面试，要不然就是总算知道这家公司并不适合我。“</p>
<p>　　调查可能加入的那家公司之后，你往往会发觉那家公司其实并不适合你。'那可是好事，“柯考迪罗斯说，'到你最终找到一家真正适合你的公司时，你就会满怀信心地去面试，并且认定该公司时你愿意效力的。”</p>
<p>　　记住，雇主真的想雇用你</p>
<p>　　'公司举行面试是为了要找到最佳人选，“柯考迪罗斯说，'如果你获录用，经理会欣喜若狂，因为他或她再也不用主持面试，可以去做自己的工作了。”</p>
<p>　　所以你要调整一下自己的心态。'如果你确信经理会录用你，面试时自然充满信心、挥洒自如，而经理就可能因此对你产生好感。“</p>
<p>　　视面试为第一天上班</p>
<p>　　大多数人视面试为讯问：雇主提出问题，他们答话。猎头专家认为需避免让这种局面出现。柯考迪罗斯说：'你应该当自己已是雇员，正在那里讨论一项新计划，而不应视自己为渴望获录用的求职者，并因而表现的卑躬屈膝、唯唯诺诺。“</p>
<p>　　且看柯考迪罗斯如何指点想去美国电报电话公司填补空缺的盖利。查高斯基。主持面试的副总裁告诉查高斯基，面试不会超过20分钟。查高斯基走到副总裁旁边的记事板前，扼要地写下该公司正面临的考验，以及他相信可为公司增加利润的措施。15分针后，查高斯基写下他估计的最终利润，同时抬起头来朝副总裁看了一眼。</p>
<p>　　'那副总裁嘴巴张得老大，“柯考迪罗斯说，'他告诉查高斯基，面试可以继续下去。”然后副总裁去把他自己部门的人都叫了进来，大家开会开了两个小时。</p>
<p>　　查高斯基如此把面试转为工作会议，不但让对方看得出他了解并能胜任他所应征的职位，也让对方明白他能为公司带来什么益处。</p>
<p>　　如获录用，先参观公司</p>
<p>　　雇主如果决定聘用你，他除了给你提供一个职位和相应的薪金福利，还放弃了部分对雇用程序的控制权。'面试开始的时候，雇主对是否录用你掌握全部决定权，“柯考迪罗斯说，'但一旦告诉你他要聘用你，他就把决定权让给了你。身处这种情况的人只有极少数知道自己拥有此权力。你一旦知道了自己已获录用，就应该去研究是否要更改聘用条件以助你达成目标，也应到该公司去彻底参观一次。”</p>
<p>　　去参观你将要加入的那个部门，要求和那部门的人见面，看看由那些资源归你支配。要求把薪酬提高—先决条件是你认为自己值得拿较高的薪酬。不必担心雇主可能不满。'只要你提出要求的时候有技巧，所提要求也合理，“柯考迪罗斯说，'公司时会考虑的。”</p>
<p>　　他指出，一旦你获得录用，'你就有权决定是否加入那家公司，是否应该要求更好的薪酬和福利。“</p>
<br />
          <br />
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