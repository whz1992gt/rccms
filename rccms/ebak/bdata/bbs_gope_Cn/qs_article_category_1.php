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
E_D("replace into `qs_article_category` values('1','0','��Ѷ����','0','��Ѷ����','','','1');");
E_D("replace into `qs_article_category` values('2','1','ְҵָ��','0','','','','1');");
E_D("replace into `qs_article_category` values('3','1','����ָ��','0','','','','1');");
E_D("replace into `qs_article_category` values('4','1','���Ա���','0','','','','1');");
E_D("replace into `qs_article_category` values('5','1','ְ������','0','','','','1');");
E_D("replace into `qs_article_category` values('6','1','�Ͷ�����','0','','','','1');");
E_D("replace into `qs_article_category` values('7','1','��ҵ�ȷ�','0','','','','1');");
E_D("replace into `qs_article_category` values('8','1','ְ��С����','0','','','','0');");
E_D("replace into `qs_article_category` values('9','1','ְ��С�ǻ�','0','','','','0');");
E_D("replace into `qs_article_category` values('10','1','ְ������','0','','','','0');");

require("../../inc/footer.php");
?>