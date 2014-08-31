<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_article_category`;");
E_C("CREATE TABLE `qs_article_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint(5) unsigned NOT NULL,
  `categoryname` varchar(80) NOT NULL,
  `category_order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `admin_set` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `qs_article_category` values('1','0','资讯中心','0','资讯中心','','','1');");
E_D("replace into `qs_article_category` values('2','1','职业指导','0','','','','1');");
E_D("replace into `qs_article_category` values('3','1','简历指南','0','','','','1');");
E_D("replace into `qs_article_category` values('4','1','面试宝典','0','','','','1');");
E_D("replace into `qs_article_category` values('5','1','职场八卦','0','','','','1');");
E_D("replace into `qs_article_category` values('6','1','劳动法规','0','','','','1');");
E_D("replace into `qs_article_category` values('7','1','创业先锋','0','','','','1');");
E_D("replace into `qs_article_category` values('8','1','职场小测试','0','','','','0');");
E_D("replace into `qs_article_category` values('9','1','职场小智慧','0','','','','0');");
E_D("replace into `qs_article_category` values('10','1','职场策略','0','','','','0');");

require("../../inc/footer.php");
?>