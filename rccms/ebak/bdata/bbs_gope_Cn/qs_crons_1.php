<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_crons`;");
E_C("CREATE TABLE `qs_crons` (
  `cronid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `available` tinyint(1) unsigned NOT NULL,
  `admin_set` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `name` varchar(60) NOT NULL,
  `filename` varchar(60) NOT NULL,
  `lastrun` int(10) unsigned NOT NULL,
  `nextrun` int(10) unsigned NOT NULL,
  `weekday` tinyint(1) NOT NULL,
  `day` tinyint(2) NOT NULL,
  `hour` tinyint(2) NOT NULL,
  `minute` varchar(60) NOT NULL,
  PRIMARY KEY (`cronid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `qs_crons` values('1','1','1','ÿ����������ļ�','clear_all_cache.php','1390283867','1390582800','5','-1','1','0');");
E_D("replace into `qs_crons` values('2','1','1','��ʱ�ƹ�����','clear_promotion.php','1390283867','1390320000','-1','-1','0','0');");
E_D("replace into `qs_crons` values('3','1','1','ÿ������ͳ��','stat_category.php','1390283869','1390320000','-1','-1','0','0');");
E_D("replace into `qs_crons` values('4','1','1','ÿ�������Ա������־','clear_members_log.php','1389600980','1391270400','-1','1','0','0');");
E_D("replace into `qs_crons` values('5','1','1','ÿСʱ�������ְλ','clear_expired_jobs.php','1390284064','1390287660','-1','-1','-1','1');");
E_D("replace into `qs_crons` values('6','1','1','ÿ���������΢��Ƹ','clear_expired_simple.php','1390283945','1390330800','-1','-1','3','0');");
E_D("replace into `qs_crons` values('7','0','1','ÿ�����ɰٶȿ���ƽ̨����','make_baiduxml.php','0','0','-1','-1','3','');");

require("../../inc/footer.php");
?>