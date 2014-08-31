<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_members_log`;");
E_C("CREATE TABLE `qs_members_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_uid` int(10) NOT NULL,
  `log_username` varchar(60) NOT NULL,
  `log_addtime` int(10) NOT NULL,
  `log_value` varchar(255) NOT NULL,
  `log_ip` varchar(20) NOT NULL,
  `log_utype` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `log_type` smallint(5) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`log_id`),
  KEY `log_username` (`log_username`),
  KEY `log_addtime` (`log_addtime`),
  KEY `type_addtime` (`log_type`,`log_addtime`),
  KEY `utype_addtime` (`log_utype`,`log_addtime`),
  KEY `uid_addtime` (`log_uid`,`log_addtime`)
) ENGINE=MyISAM AUTO_INCREMENT=11183 DEFAULT CHARSET=gbk");
E_D("replace into `qs_members_log` values('11176','7196','k11545h','1386525902','�ƹ㵽�ڣ��Զ�ɾ����ְλID:4290������ID��283','127.0.0.1','1','3006');");
E_D("replace into `qs_members_log` values('11177','7203','g7uhhlo','1386525902','�ƹ㵽�ڣ��Զ�ɾ����ְλID:4307������ID��280','127.0.0.1','1','3006');");
E_D("replace into `qs_members_log` values('11178','7200','tclp54g','1386525902','�ƹ㵽�ڣ��Զ�ɾ����ְλID:4304������ID��279','127.0.0.1','1','3006');");
E_D("replace into `qs_members_log` values('11179','7198','qqsx1vu','1386525902','�ƹ㵽�ڣ��Զ�ɾ����ְλID:4311������ID��278','127.0.0.1','1','3006');");
E_D("replace into `qs_members_log` values('11180','7198','qqsx1vu','1390283867','�ƹ㵽�ڣ��Զ�ɾ����ְλID:4296������ID��272','127.0.0.1','1','3006');");
E_D("replace into `qs_members_log` values('11181','7881','ovv2012','1390284580','����Ա�ں�̨�޸ĵ�¼����','127.0.0.1','1','1004');");
E_D("replace into `qs_members_log` values('11182','7881','ovv2012','1390284583','�ɹ���¼','127.0.0.1','2','1001');");

require("../../inc/footer.php");
?>