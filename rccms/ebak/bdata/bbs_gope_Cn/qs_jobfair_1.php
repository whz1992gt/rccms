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
E_D("replace into `qs_jobfair` values('6','0','1','1','1','1','0','2013年临沂大型青年人才招聘会','#ee1d24','1','综合','<span style=\"color:#333333;font-family:Verdana;font-size:14px;line-height:28px;text-align:left;\">大会将通过临沂电视台、临沂导视频道、《临沂市青年就业创业报》、《临沂日报》、《沂蒙晚报》、《齐鲁晚报》、《临沂广播电视报》、临沂广播电台、666招聘网、车载电视、中国电信、中国移动、中国联通、聚众传媒、就业卡等一切有效媒体广泛宣传。</span>','临沂市金沂蒙体育馆（新华一路与开阳路交汇处路东）','张经理','010-12345678','1路，5路','1385740800','1377532800','1383062400','100','1381756471','0','47');");

require("../../inc/footer.php");
?>