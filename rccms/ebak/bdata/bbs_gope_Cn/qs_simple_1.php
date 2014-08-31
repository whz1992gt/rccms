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
E_D("replace into `qs_simple` values('91','1','f759cc19b644ea47feb451f6fc4d89cd','119de6','美容师','10','美丽峰会美容连锁','孙定贵','18295506537','22440562@qq.com','22440562','总店：民族南街新一中东面汇丰花园西门17-1营业房；分店地址：金凤区正源南街城市公园/湖映康晨商业街','美丽峰会网址:http://forshe.taobao.com\r\n美丽峰会美容连锁,从事美容行业7年,是银川市新型美容连锁机构,现在银川兴庆区有两家直营连锁店,员工20人,现诚聘美容店长两名:底薪1600~2600+提成+奖金+年底干股分红;美容师5名:底薪1200~2200+提成+奖金;美容学徒5名:底薪400~1500元;前台接待2名:底薪1000~1600+提成+奖金,以上人员均可包食宿!欢迎您的加入,“改变您,成就您”就在美丽峰会!','1367047605','0','1367047605','9','182.54.6.167','0','美容师0 美丽峰会美容连锁  美容00 美丽00 峰会00 连锁00 总店00 民族00 南街00 新一00 一中00 中东00 东面00 汇丰00 花园00 西门00 营业00 营业房0 分店00 地址00 金凤00 城市00 公园00 商业00 商业街0 网址00 从事00 行业00 银川00 银川市0 新型00 机构00 现在00 直营00 连锁店0 诚聘00 美容店0 美容店长 店长00 提成00 奖金00 年底00 股分00 分红00 美容学徒 学徒00 前台00 前台接待 接待00 以上00 上人00 人员00 食宿00 欢迎00 加入00 改变00 成就00');");

require("../../inc/footer.php");
?>