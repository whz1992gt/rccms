a:2:{s:6:"config";a:0:{}s:8:"template";a:3:{i:0;s:13:"news-show.ini";i:1;s:15:"user/header.ini";i:2;s:15:"user/footer.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0026)http://test164.mandnt.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK"> 
<title>外企面试官最爱提的问题TOP10 - 福建劳务网</title>
<meta name="description" content="1.请介绍一下你自己。
　　这是外企常问的问题。一般人回答这个问题过于平常，只说姓名、年龄、爱好、工作经验，这些在简历上都">
<meta name="keywords" content="外企面试官最爱提的问题TOP10">
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
      <h1>外企面试官最爱提的问题TOP10</h1>
      <div class="time">发表时间：2013-08-21&nbsp;&nbsp;<a href="#" class="a-lw">兆和人才网</a> 点击：378
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
            1.请介绍一下你自己。<p></p>
<p>　　这是外企常问的问题。一般人回答这个问题过于平常，只说姓名、年龄、爱好、工作经验，这些在简历上都有，其实，外企最希望知道的是求职者能否胜任工作，包括：最强的技能、最深入研究的知识领域、个性中最积极的部分、做过的最成功的事，主要的成就等，这些都可以和学习无关，也可以和学习有关，但要突出积极的个性和做事的能力，说得合情合理外企才会相信。外企很重视一个人的礼貌，求职者要尊重考官，在回答每个问题之后都说一句“谢谢”。外企喜欢有礼貌的求职者。</p>
<p>　　2.在学校你最不 喜欢的课程是什么？为什么？</p>
<p>　　这个问题外企不希望求职者直接回答“数学”、“体育”之类的具体课程，如果直接回答还说明了理由，不仅代表求职者对这个学科不感兴趣，可能还代表将来也会对要完成的某些工作没有兴趣。这个问题外企招聘者最想从求职者口里听到：我可能对个别科目不是特别感兴趣，但是正因为这样，我会花更多的时间去学习这门课程，通过学习对原本不感兴趣的科目也开始有了兴趣，对于本来就有兴趣的科目我自然学习得更认真，所以各门课的成绩较为平衡。通过这样的问题，外企可以找到对任何事情都很感兴趣的求职者。</p>
<p>　　3.说说你最大的优缺点？</p>
<p>　　这个问题外企问的概率很大，通常不希望听到直接回答的缺点是什么等，如果求职者说自己小心眼、爱忌妒人、非常懒、脾气大、工作效率低，外企肯定不会录用你。外企喜欢求职者从自己的优点说起，中间加一些小缺点，最后再把问题转回到优点上，突出优点的部分。外企喜欢聪明的求职者。</p>
<p>　　4.你认为你在学校属于好学生吗？</p>
<p>　　外企的招聘者很精明，问这个问题可以试探出很多问题：如果求职者学习成绩好，就会说：“是的，我的成绩很好，所有的成绩都很优异。当然，判断一个学生是不是好学生有很多标准，在学校期间我认为成绩是重要的，其他方面包括思想道德、实践经验、团队精神、沟通能力也都是很重要的，我在这些方面也做得很好，应该说我是一个全面发展的学生。”如果求职者成绩不尽理想，便会说：“我认为是不是一个好学生的标准是多元化的，我的学习成绩还可以，在其他方面我的表现也很突出，比如我去很多地方实习过，我很喜欢在快节奏和压力下工作，我在学生会组织过××活动，锻炼了我的团队合作精神和组织能力。” 有经验的招聘者一听就会明白，外企喜欢诚实的求职者。</p>
<p>　　5.说说你的家庭。</p>
<p>　　外企面试时询问家庭问题不是非要知道求职者家庭的情况，探究隐私，外企不喜欢探究个人隐私，而是要了解家庭背景对求职者的塑造和影响。外企希望听到的重点也在于家庭对求职者的积极影响。外企最喜欢听到的是：我很爱我的家庭！我的家庭一向很和睦，虽然我的父亲和母亲都是普通人，但是从小，我就看到我父亲起早贪黑，每天工作特别勤劳，他的行动无形中培养了我认真负责的态度和勤劳的精神。我母亲为人善良，对人热情，特别乐于助人，所以在单位人缘很好，她的一言一行也一直在教导我做人的道理。外企相信，和睦的家庭关系对一个人的成长有潜移默化的影响。</p>
<p>　　6.说说你对行业、技术发展趋势的看法？</p>
<p>　　外企对这个问题很感兴趣，只有有备而来的求职者能够过关。求职者可以直接在网上查找对你所申请的行业部门的信息，只有深入了解才能产生独特的见解。外企认为最聪明的求职者是对所面试的公司预先了解很多，包括公司各个部门，发展情况，在面试回答问题的时候可以提到所了解的情况，外企欢迎进入企业的人是“知己”，而不是“盲人”。</p>
<p>　　7.就你申请的这个职位，你认为你还欠缺什么？</p>
<p>　　外企喜欢问求职者弱点，但精明的求职者一般不直接回答。他们希望看到这样的求职者：继续重复自己的优势，然后说：“对 于这个职位和我的能力来说，我相信自己是可以胜任的，只是缺乏经验，这个问题我想我可以进入公司以后以最短的时间来解决，我的学习能力很强，我相信可以很快融入公司的企业文化，进入工作状态。”外企喜欢能够巧妙地躲过难题的求职者。</p>
<p>　　8.你期望的工资是多少？</p>
<p>　　外企的工资水平是很灵活的，何种能力拿何种工资。外企喜欢直率的人，但这个问题却不能正面回答，外企希望听到：“以我的能力和我的优势，我完全可以胜任这个职位，我相信我可以做得很好。但是贵公司对这个职位的描述不是很具体，我想还可以延后再讨论”。外企欢迎求职者给其定薪的自由度，而不是咬准一个价码。</p>
<p>　　9.你能给公司带来什么？</p>
<p>　　外企很想知道未来的员工能为企业做什么，求职者应再次重复自己的优势，然后说：“就我的能力，我可以做一个优秀的员工在组织中发挥能力，给组织带来高效率和更多的收益”。外企喜欢求职者就申请的职位表明自己的能力，比如申请营销之类的职位，可以说：“我可以开发大量的新客户，同时，对老客户做更全面周到的服务，开发老客户的新需求和消费。”等等。</p>
<p>　　10.你还有什么问题吗？</p>
<p>　　外企的这个问题看上去可有可无，其实很关键，外企不喜欢说“没有问题”的人，因为其很注重员工的个性和创新能力。外企不喜欢求职者问个人福利之类的问题，如果有人这样问：贵公司对新入公司的员工有没有什么培训项目，我可以参加吗？或者说贵公司的晋升机制是什么样的？外企将很欢迎，因为体现出你对学习的热情和对公司的忠诚度以及你的上进心。</p>
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
</body></html>