<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_jobfair`;");
E_C("CREATE TABLE `qs_jobfair` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subsite_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `display` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `predetermined_status` tinyint(1) NOT NULL,
  `predetermined_web` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `predetermined_tel` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `predetermined_point` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `color` varchar(7) NOT NULL,
  `weight` tinyint(1) NOT NULL DEFAULT '0',
  `industry` varchar(200) NOT NULL,
  `introduction` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `bus` varchar(200) NOT NULL,
  `holddates` int(10) unsigned NOT NULL,
  `predetermined_start` int(10) unsigned NOT NULL DEFAULT '0',
  `predetermined_end` int(10) unsigned NOT NULL DEFAULT '0',
  `number` varchar(200) NOT NULL,
  `addtime` int(10) NOT NULL,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  `click` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `qs_jobfair` values('6','0','1','1','1','1','0','2013�����ʴ��������˲���Ƹ��','#ee1d24','1','�ۺ�','<span style=\"color:#333333;font-family:Verdana;font-size:14px;line-height:28px;text-align:left;\">��Ὣͨ�����ʵ���̨�����ʵ���Ƶ�����������������ҵ��ҵ�������������ձ���������������������³�����������ʹ㲥���ӱ��������ʹ㲥��̨��666��Ƹ�������ص��ӡ��й����š��й��ƶ����й���ͨ�����ڴ�ý����ҵ����һ����Чý��㷺������</span>','�����н����������ݣ��»�һ·�뿪��·���㴦·����','�ž���','010-12345678','1·��5·','1385740800','1377532800','1383062400','100','1381756471','0','47');");

require("../../inc/footer.php");
?>