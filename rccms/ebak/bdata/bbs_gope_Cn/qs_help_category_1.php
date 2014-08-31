<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_help_category`;");
E_C("CREATE TABLE `qs_help_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint(5) unsigned NOT NULL,
  `categoryname` varchar(80) NOT NULL,
  `category_order` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk");
E_D("replace into `qs_help_category` values('1','0','账户管理','3');");
E_D("replace into `qs_help_category` values('2','0','我是企业','2');");
E_D("replace into `qs_help_category` values('3','0','我是个人','1');");
E_D("replace into `qs_help_category` values('4','1','注册与登录','0');");
E_D("replace into `qs_help_category` values('5','1','密码找回与重置','0');");
E_D("replace into `qs_help_category` values('6','1','账户状态','0');");
E_D("replace into `qs_help_category` values('7','1','资料与头像','0');");
E_D("replace into `qs_help_category` values('8','1','手机与邮箱认证','0');");
E_D("replace into `qs_help_category` values('9','2','职位发布与管理','0');");
E_D("replace into `qs_help_category` values('10','2','职位推广','0');");
E_D("replace into `qs_help_category` values('11','2','招聘管理','0');");
E_D("replace into `qs_help_category` values('12','2','招聘会','0');");
E_D("replace into `qs_help_category` values('13','2','充值与消费','0');");
E_D("replace into `qs_help_category` values('14','2','使用礼品卡','0');");
E_D("replace into `qs_help_category` values('15','2','资料与地图','0');");
E_D("replace into `qs_help_category` values('16','3','简历创建与管理','0');");
E_D("replace into `qs_help_category` values('17','3','求职管理','0');");

require("../../inc/footer.php");
?>