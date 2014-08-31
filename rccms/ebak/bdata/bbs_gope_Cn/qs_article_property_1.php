<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_article_property`;");
E_C("CREATE TABLE `qs_article_property` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(30) NOT NULL,
  `category_order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `admin_set` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `qs_article_property` values('1','普通资讯','0','1');");
E_D("replace into `qs_article_property` values('2','头条资讯','0','1');");
E_D("replace into `qs_article_property` values('3','焦点新闻','0','1');");
E_D("replace into `qs_article_property` values('4','推荐资讯','0','1');");

require("../../inc/footer.php");
?>