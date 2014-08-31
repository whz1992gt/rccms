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
E_D("replace into `qs_page` values('1','1','1','QS_index','��վ��ҳ','index.php','zqindex.ini','','0','0','homepage','{sitename}����ÿ���˶����ҵ��ù�����','{sitename}','{sitename}');");
E_D("replace into `qs_page` values('2','1','1','QS_jobs','��Ƹ��ҳ','jobs/','jobs.ini','jobs/','0','0','jobs','������Ƹ��ҳ_������Ƹ��Ϣ_������ҵ��Ƹ��Ϣ','{sitename}��Ƹ��ҳ��������ʴ󲿷ֵ���Ƹ��ҵ����Ƹ��Ϣ����ӭ�������ҵǰ��������Ƹ��Ϣ�͸������ְ��ǰ����ѡ������','������Ƹ��λ��������Ƹ��ҵ��������Ƹ��Ϣ');");
E_D("replace into `qs_page` values('3','1','2','QS_jobslist','��Ƹ�б�','jobs/jobs-list.php','jobs-list.ini','jobs/jobs-list-(\$category)-(\$subclass)-(\$district)-(\$sdistrict)-(\$settr)-(\$trade)-(\$wage)-(\$nature)-(\$scale)-(\$inforow)-(\$sort)-(\$key)-(\$page).htm','0','0','jobs','','','');");
E_D("replace into `qs_page` values('4','1','3','QS_jobsshow','��Ƹ��ϸҳ','jobs/jobs-show.php','jobs-show.ini','j(\$id)','0','0','jobs','','','');");
E_D("replace into `qs_page` values('5','1','3','QS_jobscontrast','ְλ�Ա�ҳ��','jobs/jobs-contrast.php','jobs-contrast.ini','jobs/jobs-contrast-(\$id).htm','0','0','jobs','','','');");
E_D("replace into `qs_page` values('6','1','3','QS_companyshow','��ҵ���ҳ','company/company-show.php','company-show.ini','c(\$id)','0','0','jobs','','','');");
E_D("replace into `qs_page` values('7','1','1','QS_login','��Ա��¼','user/login.php','user/login.ini','','0','0','user','��Ա��¼_{sitename}��Ա��¼����{sitename}','{sitename}��¼������ӭ����ҵ��λ����羭���˲ŵ�¼{sitename}�й���������Ƹ��Ϣ��','{sitename}��Ա��¼');");
E_D("replace into `qs_page` values('8','1','1','QS_resume','������ҳ','resume/','resume.ini','resume/','0','0','resume','�˲���Ϣ_{sitename}�˲ſ�_�����˲š���{sitename}','{sitename}�㼯�������󲿷���ְ�����������������˲ſ⣬��ӭ��Ƹ��ҵǰ���鿴����ְ��ǰ����д������������ְ��Ϣ��','�˲���Ϣ��{sitename}�˲ſ⣬�����˲ţ�{sitename}����');");
E_D("replace into `qs_page` values('9','1','2','QS_resumelist','�����б�','resume/resume-list.php','resume-list.ini','resume/resume-list-(\$category)-(\$subclass)-(\$district)-(\$sdistrict)-(\$experience)-(\$education)-(\$sex)-(\$photo)-(\$talent)-(\$inforow)-(\$sort)-(\$key)-(\$page).htm','0','0','resume','','','');");
E_D("replace into `qs_page` values('10','1','2','QS_resumetag','������ǩ����','resume/resume-search.php','resumetag-search.ini','resume/resumetag-search-(\$category)-(\$subclass)-(\$district)-(\$sdistrict)-(\$resumetag)-(\$inforow)-(\$page).htm','0','0','resumetag','','','');");
E_D("replace into `qs_page` values('11','1','3','QS_resumeshow','������ϸҳ','resume/resume-show.php','resume-show.ini','r(\$id)','0','11','resume','','','');");
E_D("replace into `qs_page` values('12','1','2','QS_hrtoolslist','HR�������б�','hrtools/hrtools-list.php','hrtools-list.ini','hrtools/hrtools-list-(\$id).htm','0','11','hrtools','HR������','','');");
E_D("replace into `qs_page` values('13','1','1','QS_news','��Ѷ��ҳ','news/','news.ini','news/','0','0','news','������Ѷ_ְ����Ѷ_ְ��ָ������{sitename}','{sitename}��Ѷ�ṩ��������ְ����Ѷ��������ְ���˽�ְ�����򣬶���ְ�߽�����ְ������ָ����','������Ѷ��ְ����Ѷ��ְ��ָ������ְָ����ְ�����ţ�����ָ��������ָ����ְ�����ԣ�ְ������');");
E_D("replace into `qs_page` values('14','1','2','QS_newslist','��Ѷ�б�','news/news-list.php','news-list.ini','news/list-(\$id)-(\$page).html','0','11','news','','','');");
E_D("replace into `qs_page` values('15','1','3','QS_newsshow','��Ѷ��ϸҳ','news/news-show.php','news-show.ini','n(\$id)','0','11','news','','','');");
E_D("replace into `qs_page` values('16','1','3','QS_explainshow','˵��ҳ��ϸҳ','explain/explain-show.php','explain-show.ini','explain/(\$id).html','0','11','explain','','','');");
E_D("replace into `qs_page` values('17','1','2','QS_noticelist','�����б�','notice/notice-list.php','notice-list.ini','notice/list-(\$id)-(\$page).html','0','11','notice','','','');");
E_D("replace into `qs_page` values('18','1','3','QS_noticeshow','������ϸҳ','notice/notice-show.php','notice-show.ini','notice(\$id)','0','11','notice','','','');");
E_D("replace into `qs_page` values('19','1','2','QS_jobfairlist','��Ƹ���б�','jobfair/jobfair-list.php','jobfair-list.ini','jobfair/jobfair-list-(\$page).htm','0','11','jobfair','','','');");
E_D("replace into `qs_page` values('20','1','3','QS_jobfairshow','��Ƹ����ϸҳ','jobfair/jobfair-show.php','jobfair-show.ini','jobfair/jobfair-show-(\$id).htm','0','11','jobfair','','','');");
E_D("replace into `qs_page` values('21','1','2','QS_jobfairexhibitors','�λ���ҵ�б�','jobfair/jobfair-exhibitors.php','jobfair-exhibitors.ini','jobfair/jobfair-exhibitors-(\$id)-(\$page).htm','0','11','jobfair','','','');");
E_D("replace into `qs_page` values('22','1','2','QS_simplelist','΢��Ƹ','simple/simple-list.php','simple/simple-list.ini','simple/simple-list-(\$key)-(\$keytype)-(\$page).htm','0','0','simple','΢��Ƹ','','');");
E_D("replace into `qs_page` values('23','1','3','QS_simpleshow','΢��Ƹ��ϸҳ','simple/simple-show.php','simple/simple-show.ini','simple/simple-show-(\$id).htm','0','11','simple','','','');");
E_D("replace into `qs_page` values('24','1','2','QS_map','��ͼ����','jobs/map-search.php','map-search.ini','jobs/map-search-(\$id).htm','0','11','map','��ͼ����','','');");
E_D("replace into `qs_page` values('25','1','2','QS_officebuilding','д��¥����','jobs/officebuilding-search.php','officebuilding-search.ini','jobs/officebuilding-search-(\$officebuildingid)-(\$sort)-(\$inforow)-(\$page).htm','0','0','officebuilding','','','');");
E_D("replace into `qs_page` values('26','1','2','QS_street','��·����','jobs/street-search.php','street-search.ini','jobs/street-search-(\$streetid)-(\$sort)-(\$inforow)-(\$page).htm','0','0','jobs','','','');");
E_D("replace into `qs_page` values('27','1','2','QS_jobtag','ְλ��ǩ����','jobs/jobtag-search.php','jobtag-search.ini','jobs/jobtag-search-(\$category)-(\$subclass)-(\$district)-(\$sdistrict)-(\$jobtag)-(\$inforow)-(\$page).htm','0','0','jobs','','','');");
E_D("replace into `qs_page` values('28','1','1','QS_help','������ҳ','help/','help/index.ini','help/','0','11','help','���߰���_{sitename}','{sitename}����ҳ����ҵ�͸�����ʹ����վ�����г��ֵ���������˻��ܲ������˽���취��','������{sitename}������ע���������ҵע�����������ע�����');");
E_D("replace into `qs_page` values('29','1','2','QS_helplist','�����б�','help/help-list.php','help/help-list.ini','help/help-list-(\$id)-(\$page).htm','0','11','help','','','');");
E_D("replace into `qs_page` values('30','1','3','QS_helpshow','������ϸҳ','help/help-show.php','help/help-show.ini','help/help-show-(\$id).htm','0','11','help','','','');");
E_D("replace into `qs_page` values('31','1','2','QS_helpsearch','��������ҳ','help/help-search.php','help/help-search.ini','help/help-search-(\$key)-(\$page).htm','0','0','help','','','');");
E_D("replace into `qs_page` values('32','1','2','QS_newssearch','��Ѷ����ҳ','news/news-search.php','news-search.ini','news/news-search-(\$key)-(\$page).htm','0','0','news','','','');");
E_D("replace into `qs_page` values('33','1','2','QS_companyjobs','��ҵְλ�б�ҳ','company/company-jobs.php','company-jobs-list.ini','company/company-jobs-(\$id)-(\$page).htm','0','11','jobs','','','');");
E_D("replace into `qs_page` values('34','1','2','QS_companycomment','��ҵ�����б�ҳ','company/company-comment.php','company-comment.ini','company/company-comment-(\$id)-(\$page).htm','0','11','jobs','','','');");
E_D("replace into `qs_page` values('35','1','2','QS_companyimg','��ҵͼƬ�б�ҳ','company/company-img.php','company-img.ini','company/company-img-(\$id)-(\$page).htm','0','11','jobs','','','');");
E_D("replace into `qs_page` values('36','1','2','QS_companynews','��ҵ�����б�ҳ','company/company-news.php','company-news.ini','company/company-news-(\$id)-(\$page).htm','0','11','jobs','','','');");
E_D("replace into `qs_page` values('37','1','3','QS_companynewsshow','��ҵ������ϸҳ','company/company-news-show.php','company-news-show.ini','company/company-news-show-(\$id).htm','0','11','jobs','','','');");
E_D("replace into `qs_page` values('38','1','3','QS_companycommentshow','��ҵ������ϸҳ','company/company-comment-show.php','company-comment-show.ini','company/company-comment-show-(\$id).htm','0','11','jobs','','','');");
E_D("replace into `qs_page` values('39','1','2','QS_companylist','��ҵ�б�','company/index.php','company-list.ini','company/company-list-(\$trade)-(\$inforow)-(\$page).htm','0','11','company','','','');");
E_D("replace into `qs_page` values('40','0','1','resumelist-photo','��Ƭ����','resume/resume-photo.php','photo-list.ini','','0','5','resume-photo','','','');");
E_D("replace into `qs_page` values('41','0','1','jobslist1','��Ƹ�б�','jobs/jobs-lists.php','jobs-list1.ini','','0','0','jobs','','','');");

require("../../inc/footer.php");
?>