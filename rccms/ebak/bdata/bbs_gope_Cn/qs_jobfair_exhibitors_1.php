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
E_D("replace into `qs_jobfair_exhibitors` values('2','1','1','6261','�ɻ���Ƹ��','1068','1365573565','1366180884','2','2013��4��27�մ�����Ƹ��','1365131847','hr951 Ԥ������Ƹ�� ��2013��4��27�մ�����Ƹ�ᡷ ��չλ���ѳɹ��۳����� 0');");
E_D("replace into `qs_jobfair_exhibitors` values('3','1','1','6365','���ĳɻ��Ļ���ý���޹�˾','1073','1366189343','1367980127','4','5.25�ź�����������Ƹ��','1367980109','�ɻԹ�� Ԥ������Ƹ�� ��5.25�ź�����������Ƹ�ᡷ ��չλ���ѳɹ��۳����� 0');");
E_D("replace into `qs_jobfair_exhibitors` values('5','1','1','6827','ͯ�������Ļ��������޹�˾','1161','1369190102','1369278653','4','5.25�ź�����������Ƹ��','1368525126','tonghua123 Ԥ������Ƹ�� ��5.25�ź�����������Ƹ�ᡷ ��չλ���ѳɹ��۳����� 0');");
E_D("replace into `qs_jobfair_exhibitors` values('6','1','1','6835','�������պ�����˿���ɷ����޹�˾','1166','1369277057','1369278660','4','5.25�ź�����������Ƹ��','1368525126','���պ��� Ԥ������Ƹ�� ��5.25�ź�����������Ƹ�ᡷ ��չλ���ѳɹ��۳����� 0');");
E_D("replace into `qs_jobfair_exhibitors` values('7','1','1','6404','����ƽ�;�ó���޹�˾','1080','1366592381','1369300382','4','5.25�ź�����������Ƹ��','1368525126','ƽ�;�ó Ԥ������Ƹ�� ��5.25�ź�����������Ƹ�ᡷ ��չλ���ѳɹ��۳����� 0');");

require("../../inc/footer.php");
?>