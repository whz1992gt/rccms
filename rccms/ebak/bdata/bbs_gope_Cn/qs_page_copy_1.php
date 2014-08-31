<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_page_copy`;");
E_C("CREATE TABLE `qs_page_copy` (
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
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=gbk");
E_D("replace into `qs_page_copy` values('19','1','2','QS_jobfairlist','招聘会列表','jobfair/jobfair-list.php','jobfair-list.htm','jobfair/jobfair-list-(\$page).htm','0','11','jobfair','','','');");
E_D("replace into `qs_page_copy` values('20','1','3','QS_jobfairshow','招聘会详细页','jobfair/jobfair-show.php','jobfair-show.htm','jobfair/jobfair-show-(\$id).htm','0','11','jobfair','','','');");
E_D("replace into `qs_page_copy` values('21','1','2','QS_jobfairexhibitors','参会企业列表','jobfair/jobfair-exhibitors.php','jobfair-exhibitors.htm','jobfair/jobfair-exhibitors-(\$id)-(\$page).htm','0','11','jobfair','','','');");
E_D("replace into `qs_page_copy` values('24','1','2','QS_map','地图搜索','jobs/map-search.php','map-search.htm','jobs/map-search-(\$id).htm','0','11','map','地图搜索','','');");
E_D("replace into `qs_page_copy` values('25','1','2','QS_officebuilding','写字楼搜索','jobs/officebuilding-search.php','officebuilding-search.htm','jobs/officebuilding-search-(\$officebuildingid)-(\$sort)-(\$inforow)-(\$page).htm','0','0','officebuilding','','','');");

require("../../inc/footer.php");
?>