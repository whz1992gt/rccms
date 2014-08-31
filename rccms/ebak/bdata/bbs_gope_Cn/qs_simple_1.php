<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_simple`;");
E_C("CREATE TABLE `qs_simple` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `audit` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pwd` varchar(60) NOT NULL,
  `pwd_hash` varchar(30) NOT NULL,
  `jobname` varchar(100) NOT NULL,
  `amount` smallint(3) unsigned NOT NULL DEFAULT '0',
  `comname` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `qq` varchar(30) NOT NULL,
  `address` varchar(180) NOT NULL,
  `detailed` text NOT NULL,
  `addtime` int(10) unsigned NOT NULL,
  `deadline` int(10) unsigned NOT NULL,
  `refreshtime` int(10) unsigned NOT NULL,
  `click` int(10) unsigned NOT NULL DEFAULT '1',
  `addip` varchar(80) NOT NULL,
  `subsite_id` int(10) DEFAULT NULL,
  `key` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tel` (`tel`),
  KEY `audit_refreshtime` (`audit`,`refreshtime`),
  KEY `audit_click` (`audit`,`click`),
  KEY `deadline` (`deadline`),
  FULLTEXT KEY `key` (`key`)
) ENGINE=MyISAM AUTO_INCREMENT=531 DEFAULT CHARSET=gbk");
E_D("replace into `qs_simple` values('91','1','f759cc19b644ea47feb451f6fc4d89cd','119de6','����ʦ','10','���������������','�ﶨ��','18295506537','22440562@qq.com','22440562','�ܵ꣺�����Ͻ���һ�ж����Ứ԰����17-1Ӫҵ�����ֵ��ַ���������Դ�Ͻֳ��й�԰/��ӳ������ҵ��','���������ַ:http://forshe.taobao.com\r\n���������������,����������ҵ7��,������������������������,��������������������ֱӪ������,Ա��20��,�ֳ�Ƹ���ݵ곤����:��н1600~2600+���+����+��׸ɹɷֺ�;����ʦ5��:��н1200~2200+���+����;����ѧͽ5��:��н400~1500Ԫ;ǰ̨�Ӵ�2��:��н1000~1600+���+����,������Ա���ɰ�ʳ��!��ӭ���ļ���,���ı���,�ɾ����������������!','1367047605','0','1367047605','9','182.54.6.167','0','����ʦ0 ���������������  ����00 ����00 ���00 ����00 �ܵ�00 ����00 �Ͻ�00 ��һ00 һ��00 �ж�00 ����00 ���00 ��԰00 ����00 Ӫҵ00 Ӫҵ��0 �ֵ�00 ��ַ00 ���00 ����00 ��԰00 ��ҵ00 ��ҵ��0 ��ַ00 ����00 ��ҵ00 ����00 ������0 ����00 ����00 ����00 ֱӪ00 ������0 ��Ƹ00 ���ݵ�0 ���ݵ곤 �곤00 ���00 ����00 ���00 �ɷ�00 �ֺ�00 ����ѧͽ ѧͽ00 ǰ̨00 ǰ̨�Ӵ� �Ӵ�00 ����00 ����00 ��Ա00 ʳ��00 ��ӭ00 ����00 �ı�00 �ɾ�00');");

require("../../inc/footer.php");
?>