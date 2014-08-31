<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_personal_favorites`;");
E_C("CREATE TABLE `qs_personal_favorites` (
  `did` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `personal_uid` int(10) unsigned NOT NULL,
  `jobs_id` int(10) unsigned NOT NULL,
  `jobs_name` varchar(100) NOT NULL,
  `addtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`did`),
  KEY `personal_uid` (`personal_uid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `qs_personal_favorites` values('1','6447','3262','弱电技术安装人员','1366787180');");
E_D("replace into `qs_personal_favorites` values('2','6447','3155','机电类工程师','1366787412');");
E_D("replace into `qs_personal_favorites` values('3','6447','328','电梯安装工及学徒','1366788022');");
E_D("replace into `qs_personal_favorites` values('4','6447','2491','技术支持','1366788231');");
E_D("replace into `qs_personal_favorites` values('5','6447','2249','电梯维保人员','1366788427');");
E_D("replace into `qs_personal_favorites` values('6','6459','3524','市场推广主管','1366993415');");
E_D("replace into `qs_personal_favorites` values('7','7128','3715','铸造工','1371253016');");

require("../../inc/footer.php");
?>