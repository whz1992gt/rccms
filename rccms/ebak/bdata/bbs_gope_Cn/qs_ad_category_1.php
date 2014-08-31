<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_ad_category`;");
E_C("CREATE TABLE `qs_ad_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) NOT NULL,
  `type_id` int(10) unsigned NOT NULL,
  `categoryname` varchar(100) NOT NULL,
  `admin_set` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=gbk");
E_D("replace into `qs_ad_category` values('1','QS_indexfocus','2','首页图片轮番广告','1');");
E_D("replace into `qs_ad_category` values('2','QS_indextoptext','1','首页上方文字广告位','1');");
E_D("replace into `qs_ad_category` values('3','QS_indexcentreimg','2','首页中部格子广告','1');");
E_D("replace into `qs_ad_category` values('4','QS_newsbanner','2','资讯首页中间横幅','1');");
E_D("replace into `qs_ad_category` values('6','QS_indexfootimg','2','首页下方格子广告位','1');");
E_D("replace into `qs_ad_category` values('7','QS_indexfloat','5','首页对联广告','1');");
E_D("replace into `qs_ad_category` values('8','QS_alltopimg','2','全站顶部图片广告位468X60','1');");
E_D("replace into `qs_ad_category` values('9','QS_indexfootbanner','2','首页底部Banner 985X80','1');");
E_D("replace into `qs_ad_category` values('12','indexpic_bananer','2','首页上部长条广告','0');");
E_D("replace into `qs_ad_category` values('19','shouyezhiding','2','首页热门职位','0');");
E_D("replace into `qs_ad_category` values('14','mingqi','2','首页名企广告','0');");
E_D("replace into `qs_ad_category` values('16','indexpic_fangxia','2','首页急聘专区下面长条','0');");
E_D("replace into `qs_ad_category` values('17','zphtop','2','招聘会页面顶部横条','0');");
E_D("replace into `qs_ad_category` values('18','pinpai','2','首页品牌企业','0');");

require("../../inc/footer.php");
?>