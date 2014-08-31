<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_page`;");
E_C("CREATE TABLE `qs_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `systemclass` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pagetpye` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `alias` varchar(60) NOT NULL,
  `pname` varchar(12) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tpl` varchar(100) NOT NULL,
  `rewrite` varchar(200) NOT NULL,
  `url` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `caching` int(10) unsigned NOT NULL DEFAULT '0',
  `tag` varchar(60) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=gbk");
E_D("replace into `qs_page` values('1','1','1','QS_index','网站首页','index.php','zqindex.ini','','0','0','homepage','{sitename}：让每个人都能找到好工作！','{sitename}','{sitename}');");
E_D("replace into `qs_page` values('2','1','1','QS_jobs','招聘首页','jobs/','jobs.ini','jobs/','0','0','jobs','临沂招聘首页_临沂招聘信息_临沂企业招聘信息','{sitename}招聘首页汇聚了临沂大部分的招聘企业的招聘信息，欢迎更多的企业前来发布招聘信息和更多的求职者前来挑选工作。','临沂招聘单位，临沂招聘企业，临沂招聘信息');");
E_D("replace into `qs_page` values('3','1','2','QS_jobslist','招聘列表','jobs/jobs-list.php','jobs-list.ini','jobs/jobs-list-(\$category)-(\$subclass)-(\$district)-(\$sdistrict)-(\$settr)-(\$trade)-(\$wage)-(\$nature)-(\$scale)-(\$inforow)-(\$sort)-(\$key)-(\$page).htm','0','0','jobs','','','');");
E_D("replace into `qs_page` values('4','1','3','QS_jobsshow','招聘详细页','jobs/jobs-show.php','jobs-show.ini','j(\$id)','0','0','jobs','','','');");
E_D("replace into `qs_page` values('5','1','3','QS_jobscontrast','职位对比页面','jobs/jobs-contrast.php','jobs-contrast.ini','jobs/jobs-contrast-(\$id).htm','0','0','jobs','','','');");
E_D("replace into `qs_page` values('6','1','3','QS_companyshow','企业简介页','company/company-show.php','company-show.ini','c(\$id)','0','0','jobs','','','');");
E_D("replace into `qs_page` values('7','1','1','QS_login','会员登录','user/login.php','user/login.ini','','0','0','user','会员登录_{sitename}会员登录——{sitename}','{sitename}登录处。欢迎各企业单位与各界经验人才登录{sitename}招工作发布招聘信息。','{sitename}会员登录');");
E_D("replace into `qs_page` values('8','1','1','QS_resume','简历首页','resume/','resume.ini','resume/','0','0','resume','人才信息_{sitename}人才库_临沂人才——{sitename}','{sitename}汇集了银川大部分求职简历，是临沂最大的人才库，欢迎招聘企业前来查看和求职者前来填写简历，发布求职信息。','人才信息，{sitename}人才库，临沂人才，{sitename}简历');");
E_D("replace into `qs_page` values('9','1','2','QS_resumelist','简历列表','resume/resume-list.php','resume-list.ini','resume/resume-list-(\$category)-(\$subclass)-(\$district)-(\$sdistrict)-(\$experience)-(\$education)-(\$sex)-(\$photo)-(\$talent)-(\$inforow)-(\$sort)-(\$key)-(\$page).htm','0','0','resume','','','');");
E_D("replace into `qs_page` values('10','1','2','QS_resumetag','简历标签搜索','resume/resume-search.php','resumetag-search.ini','resume/resumetag-search-(\$category)-(\$subclass)-(\$district)-(\$sdistrict)-(\$resumetag)-(\$inforow)-(\$page).htm','0','0','resumetag','','','');");
E_D("replace into `qs_page` values('11','1','3','QS_resumeshow','简历详细页','resume/resume-show.php','resume-show.ini','r(\$id)','0','11','resume','','','');");
E_D("replace into `qs_page` values('12','1','2','QS_hrtoolslist','HR工具箱列表','hrtools/hrtools-list.php','hrtools-list.ini','hrtools/hrtools-list-(\$id).htm','0','11','hrtools','HR工具箱','','');");
E_D("replace into `qs_page` values('13','1','1','QS_news','资讯首页','news/','news.ini','news/','0','0','news','新闻资讯_职场资讯_职场指导——{sitename}','{sitename}资讯提供临沂最新职场资讯，帮助求职者了解职场规则，对求职者进行求职与面试指导。','新闻资讯，职场资讯，职场指导，求职指导，职场新闻，简历指导，面试指导，职场八卦，职场规则');");
E_D("replace into `qs_page` values('14','1','2','QS_newslist','资讯列表','news/news-list.php','news-list.ini','news/list-(\$id)-(\$page).html','0','11','news','','','');");
E_D("replace into `qs_page` values('15','1','3','QS_newsshow','资讯详细页','news/news-show.php','news-show.ini','n(\$id)','0','11','news','','','');");
E_D("replace into `qs_page` values('16','1','3','QS_explainshow','说明页详细页','explain/explain-show.php','explain-show.ini','explain/(\$id).html','0','11','explain','','','');");
E_D("replace into `qs_page` values('17','1','2','QS_noticelist','公告列表','notice/notice-list.php','notice-list.ini','notice/list-(\$id)-(\$page).html','0','11','notice','','','');");
E_D("replace into `qs_page` values('18','1','3','QS_noticeshow','公告详细页','notice/notice-show.php','notice-show.ini','notice(\$id)','0','11','notice','','','');");
E_D("replace into `qs_page` values('19','1','2','QS_jobfairlist','招聘会列表','jobfair/jobfair-list.php','jobfair-list.ini','jobfair/jobfair-list-(\$page).htm','0','11','jobfair','','','');");
E_D("replace into `qs_page` values('20','1','3','QS_jobfairshow','招聘会详细页','jobfair/jobfair-show.php','jobfair-show.ini','jobfair/jobfair-show-(\$id).htm','0','11','jobfair','','','');");
E_D("replace into `qs_page` values('21','1','2','QS_jobfairexhibitors','参会企业列表','jobfair/jobfair-exhibitors.php','jobfair-exhibitors.ini','jobfair/jobfair-exhibitors-(\$id)-(\$page).htm','0','11','jobfair','','','');");
E_D("replace into `qs_page` values('22','1','2','QS_simplelist','微招聘','simple/simple-list.php','simple/simple-list.ini','simple/simple-list-(\$key)-(\$keytype)-(\$page).htm','0','0','simple','微招聘','','');");
E_D("replace into `qs_page` values('23','1','3','QS_simpleshow','微招聘详细页','simple/simple-show.php','simple/simple-show.ini','simple/simple-show-(\$id).htm','0','11','simple','','','');");
E_D("replace into `qs_page` values('24','1','2','QS_map','地图搜索','jobs/map-search.php','map-search.ini','jobs/map-search-(\$id).htm','0','11','map','地图搜索','','');");
E_D("replace into `qs_page` values('25','1','2','QS_officebuilding','写字楼搜索','jobs/officebuilding-search.php','officebuilding-search.ini','jobs/officebuilding-search-(\$officebuildingid)-(\$sort)-(\$inforow)-(\$page).htm','0','0','officebuilding','','','');");
E_D("replace into `qs_page` values('26','1','2','QS_street','道路搜索','jobs/street-search.php','street-search.ini','jobs/street-search-(\$streetid)-(\$sort)-(\$inforow)-(\$page).htm','0','0','jobs','','','');");
E_D("replace into `qs_page` values('27','1','2','QS_jobtag','职位标签搜索','jobs/jobtag-search.php','jobtag-search.ini','jobs/jobtag-search-(\$category)-(\$subclass)-(\$district)-(\$sdistrict)-(\$jobtag)-(\$inforow)-(\$page).htm','0','0','jobs','','','');");
E_D("replace into `qs_page` values('28','1','1','QS_help','帮助首页','help/','help/index.ini','help/','0','11','help','在线帮助_{sitename}','{sitename}帮助页对企业和个人在使用网站过程中出现的问题进行了汇总并给出了解决办法。','帮助，{sitename}帮助，注册帮助，企业注册帮助，个人注册帮助');");
E_D("replace into `qs_page` values('29','1','2','QS_helplist','帮助列表','help/help-list.php','help/help-list.ini','help/help-list-(\$id)-(\$page).htm','0','11','help','','','');");
E_D("replace into `qs_page` values('30','1','3','QS_helpshow','帮助详细页','help/help-show.php','help/help-show.ini','help/help-show-(\$id).htm','0','11','help','','','');");
E_D("replace into `qs_page` values('31','1','2','QS_helpsearch','帮助搜索页','help/help-search.php','help/help-search.ini','help/help-search-(\$key)-(\$page).htm','0','0','help','','','');");
E_D("replace into `qs_page` values('32','1','2','QS_newssearch','资讯搜索页','news/news-search.php','news-search.ini','news/news-search-(\$key)-(\$page).htm','0','0','news','','','');");
E_D("replace into `qs_page` values('33','1','2','QS_companyjobs','企业职位列表页','company/company-jobs.php','company-jobs-list.ini','company/company-jobs-(\$id)-(\$page).htm','0','11','jobs','','','');");
E_D("replace into `qs_page` values('34','1','2','QS_companycomment','企业评论列表页','company/company-comment.php','company-comment.ini','company/company-comment-(\$id)-(\$page).htm','0','11','jobs','','','');");
E_D("replace into `qs_page` values('35','1','2','QS_companyimg','企业图片列表页','company/company-img.php','company-img.ini','company/company-img-(\$id)-(\$page).htm','0','11','jobs','','','');");
E_D("replace into `qs_page` values('36','1','2','QS_companynews','企业新闻列表页','company/company-news.php','company-news.ini','company/company-news-(\$id)-(\$page).htm','0','11','jobs','','','');");
E_D("replace into `qs_page` values('37','1','3','QS_companynewsshow','企业新闻详细页','company/company-news-show.php','company-news-show.ini','company/company-news-show-(\$id).htm','0','11','jobs','','','');");
E_D("replace into `qs_page` values('38','1','3','QS_companycommentshow','企业评论详细页','company/company-comment-show.php','company-comment-show.ini','company/company-comment-show-(\$id).htm','0','11','jobs','','','');");
E_D("replace into `qs_page` values('39','1','2','QS_companylist','企业列表','company/index.php','company-list.ini','company/company-list-(\$trade)-(\$inforow)-(\$page).htm','0','11','company','','','');");
E_D("replace into `qs_page` values('40','0','1','resumelist-photo','照片简历','resume/resume-photo.php','photo-list.ini','','0','5','resume-photo','','','');");
E_D("replace into `qs_page` values('41','0','1','jobslist1','招聘列表','jobs/jobs-lists.php','jobs-list1.ini','','0','0','jobs','','','');");

require("../../inc/footer.php");
?>