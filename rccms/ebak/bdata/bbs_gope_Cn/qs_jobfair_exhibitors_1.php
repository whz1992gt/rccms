<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_jobfair_exhibitors`;");
E_C("CREATE TABLE `qs_jobfair_exhibitors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `audit` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `etypr` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `companyname` varchar(200) NOT NULL,
  `company_id` int(10) unsigned NOT NULL DEFAULT '0',
  `company_addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `eaddtime` int(10) unsigned NOT NULL,
  `jobfairid` int(10) unsigned NOT NULL,
  `jobfair_title` varchar(200) NOT NULL,
  `jobfair_addtime` int(10) unsigned NOT NULL,
  `note` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `etypr` (`etypr`),
  KEY `uid` (`uid`),
  KEY `jobfairid` (`jobfairid`),
  KEY `eaddtime` (`eaddtime`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `qs_jobfair_exhibitors` values('2','1','1','6261','成辉招聘网','1068','1365573565','1366180884','2','2013年4月27日春节招聘会','1365131847','hr951 预定了招聘会 《2013年4月27日春节招聘会》 的展位，已成功扣除积分 0');");
E_D("replace into `qs_jobfair_exhibitors` values('3','1','1','6365','宁夏成辉文化传媒有限公司','1073','1366189343','1367980127','4','5.25号湖滨体育馆招聘会','1367980109','成辉广告 预定了招聘会 《5.25号湖滨体育馆招聘会》 的展位，已成功扣除积分 0');");
E_D("replace into `qs_jobfair_exhibitors` values('5','1','1','6827','童话餐饮文化传播有限公司','1161','1369190102','1369278653','4','5.25号湖滨体育馆招聘会','1368525126','tonghua123 预定了招聘会 《5.25号湖滨体育馆招聘会》 的展位，已成功扣除积分 0');");
E_D("replace into `qs_jobfair_exhibitors` values('6','1','1','6835','宁夏新日恒力钢丝绳股份有限公司','1166','1369277057','1369278660','4','5.25号湖滨体育馆招聘会','1368525126','新日恒力 预定了招聘会 《5.25号湖滨体育馆招聘会》 的展位，已成功扣除积分 0');");
E_D("replace into `qs_jobfair_exhibitors` values('7','1','1','6404','宁夏平和经贸有限公司','1080','1366592381','1369300382','4','5.25号湖滨体育馆招聘会','1368525126','平和经贸 预定了招聘会 《5.25号湖滨体育馆招聘会》 的展位，已成功扣除积分 0');");

require("../../inc/footer.php");
?>