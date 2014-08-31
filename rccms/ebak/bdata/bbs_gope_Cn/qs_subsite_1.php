<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_subsite`;");
E_C("CREATE TABLE `qs_subsite` (
  `s_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `s_effective` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `s_domain` varchar(120) NOT NULL,
  `s_sitename` varchar(100) NOT NULL,
  `s_districtname` varchar(100) NOT NULL,
  `s_tpl` varchar(100) NOT NULL,
  `s_logo` varchar(100) NOT NULL,
  `s_filter_notice` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `s_filter_jobs` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `s_filter_resume` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `s_filter_ad` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `s_filter_links` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `s_filter_news` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `s_filter_explain` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `s_filter_jobfair` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `s_filter_simple` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>