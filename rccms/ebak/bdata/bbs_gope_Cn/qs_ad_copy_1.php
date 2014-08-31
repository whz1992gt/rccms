<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_ad_copy`;");
E_C("CREATE TABLE `qs_ad_copy` (
  `subsite_id` int(10) DEFAULT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(80) NOT NULL,
  `is_display` tinyint(4) NOT NULL DEFAULT '1',
  `category_id` smallint(5) NOT NULL,
  `type_id` smallint(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `note` varchar(230) NOT NULL,
  `show_order` int(10) unsigned NOT NULL DEFAULT '50',
  `addtime` int(10) unsigned NOT NULL,
  `starttime` int(10) unsigned NOT NULL,
  `deadline` int(11) NOT NULL DEFAULT '0',
  `text_content` varchar(250) NOT NULL,
  `text_url` varchar(250) NOT NULL,
  `text_color` varchar(60) NOT NULL,
  `img_path` varchar(250) NOT NULL,
  `img_url` varchar(250) NOT NULL,
  `img_explain` varchar(250) NOT NULL,
  `img_uid` int(10) NOT NULL DEFAULT '0',
  `code_content` text NOT NULL,
  `flash_path` varchar(250) NOT NULL,
  `flash_width` int(10) unsigned NOT NULL,
  `flash_height` int(10) unsigned NOT NULL,
  `floating_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `floating_width` int(10) unsigned NOT NULL,
  `floating_height` int(10) unsigned NOT NULL,
  `floating_url` varchar(250) NOT NULL,
  `floating_path` varchar(250) NOT NULL,
  `floating_left` varchar(10) NOT NULL,
  `floating_right` varchar(10) NOT NULL,
  `floating_top` int(11) NOT NULL,
  `video_path` varchar(250) NOT NULL,
  `video_width` int(10) unsigned NOT NULL,
  `video_height` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `alias_starttime_deadline` (`alias`,`starttime`,`deadline`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=gbk");
E_D("replace into `qs_ad_copy` values('1','2','QS_indexfocus','1','1','2','资讯','','50','1368068747','1365955200','0','','','','/data/comads/2013/04/15/1366011331708.gif','http://www.linyijobs.com','','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('0','3','QS_newsbanner','1','4','2','成辉广告','','50','1366856497','1365955200','0','','','','/data/comads/2013/04/15/1366012339290.gif','http://www.linyijobs.com','','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('0','4','QS_indexfootbanner','1','9','2','成辉广告','','50','1366856680','1365955200','0','','','','/data/comads/2013/04/15/1366012377633.gif','http://www.linyijobs.com','成辉广告，宁夏专业的资讯平台','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','5','QS_alltopimg','1','8','2','头部','','50','1368618610','1366041600','0','','','','/data/comads/2013/04/16/1366077510526.jpg','http://www.linyijobs.com','','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','6','QS_indexcentreimg','1','3','2','成辉广告','','50','1368059201','1366300800','0','','','','/data/comads/2013/04/19/1366338920824.gif','http://www.linyijobs.com','成辉广告','6365','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','8','QS_indexcentreimg','1','3','2','金徽','','50','1368059192','1366300800','0','','','','/data/comads/2013/04/19/1366339864977.gif','http://www.linyijobs.com','金徽酒业','6394','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','9','QS_indexcentreimg','1','3','2','优派莱斯','','50','1368059186','1366300800','0','','','','/data/comads/2013/04/19/1366340803428.gif','http://www.linyijobs.com','优派莱斯房地产诚聘','6378','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','10','QS_indexcentreimg','1','3','2','西夏啤酒','','50','1368059177','1366300800','0','','','','/data/comads/2013/04/19/1366341031621.gif','http://www.linyijobs.com','西夏啤酒诚聘','5687','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','11','QS_indexcentreimg','1','3','2','华泰龙','','50','1368059170','1366300800','1367856000','','','','/data/comads/2013/04/19/1366342506414.gif','http://www.linyijobs.com','华泰龙诚聘','6146','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','12','QS_indexfocus','1','1','2','QQ群','','49','1368059217','1366819200','0','','','','/data/comads/2013/04/25/1366852014818.gif','http://www.linyijobs.com','加入成辉QQ群，找工作、招聘更方便','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','13','QS_indexfocus','1','1','2','招聘会','','51','1368059052','1366819200','1369497600','','','','/data/comads/2013/05/07/1367916328201.jpg','http://www.linyijobs.com','成辉传媒2013年大型人才招聘会','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','15','QS_indexcentreimg','1','3','2','共享铸钢','','50','1368059155','1367856000','0','','','','/data/comads/2013/05/07/1367916641932.jpg','http://www.linyijobs.com','共享铸钢诚聘','6663','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','16','QS_indexcentreimg','1','3','2','共享装备','','50','1368059146','1367856000','0','','','','/data/comads/2013/05/07/1367916792194.jpg','http://www.linyijobs.com','共享装备诚聘','6528','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','17','QS_indexcentreimg','1','3','2','国芳百货','','50','1368059138','1367856000','0','','','','/data/comads/2013/05/07/1367917443312.jpg','http://www.linyijobs.com','国芳百货诚聘','6452','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','18','QS_indexcentreimg','1','3','2','活力九州','','50','1368059131','1367856000','0','','','','/data/comads/2013/05/07/1367918545938.jpg','http://www.linyijobs.com','活力九州诚聘','6536','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','19','QS_indexcentreimg','1','3','2','和丰汽贸','','50','1368059123','1367856000','0','','','','/data/comads/2013/05/07/1367919080489.gif','http://www.linyijobs.com','和丰汽车','5830','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','20','QS_indexcentreimg','1','3','2','统一','','50','1368059080','1367942400','0','','','','/data/comads/2013/05/08/1367982498836.gif','http://www.linyijobs.com','统一企业银川分公司','5845','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','21','QS_indexfocus','1','1','2','舞台','','50','1368068842','1368028800','0','','','','/data/comads/2013/05/09/1368068170998.jpg','http://www.linyijobs.com','有能力，成辉给您舞台','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','22','QS_indexfocus','1','1','2','求职 招聘','','50','1368083557','1368028800','0','','','','/data/comads/2013/05/09/1368068679779.jpg','http://www.linyijobs.com','求职 招聘上www.hr951.com','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','23','QS_indexfocus','1','1','2','求职招聘','','50','1368083615','1368028800','0','','','','/data/comads/2013/05/09/1368083615948.jpg','http://www.linyijobs.com','求职 招聘上成辉招聘网','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','25','QS_indexcentreimg','1','3','2','德兴酒行','','50','1368086159','1368028800','0','','','','/data/comads/2013/05/09/1368086096850.gif','http://www.linyijobs.com','德兴酒行诚聘英才','6720','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','26','QS_indexfocus','1','1','2','QQ群','','50','1368086796','1368028800','0','','','','/data/comads/2013/05/09/1368086796108.gif','http://www.linyijobs.com','欢迎加入成辉QQ群','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','51','QS_indexcentreimg','1','3','2','博文隆盛商贸','','49','1370046808','1370016000','1372694400','','','','/data/comads/2013/06/01/1370046746650.jpg','http://www.linyijobs.com','博文隆盛商贸 聘','6998','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','28','QS_indexcentreimg','1','3','2','金徽酒','','50','1368087713','1368028800','0','','','','/data/comads/2013/05/09/1368087686861.gif','http://www.linyijobs.com','金徽酒业诚聘','6394','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','29','QS_indexcentreimg','1','3','2','西夏佳酿','','50','1370253879','1368028800','0','','','','/data/comads/2013/05/09/1368089148813.gif','http://www.linyijobs.com','西夏啤酒诚聘精英','5687','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','30','QS_indexcentreimg','1','3','2','优派莱斯','','50','1370046866','1368028800','1369929600','','','','/data/comads/2013/05/09/1368089228628.gif','http://www.linyijobs.com','优派莱斯地产','6378','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','31','QS_indexcentreimg','1','3','2','和丰汽贸','','50','1368094610','1368028800','0','','','','/data/comads/2013/05/09/1368094610602.gif','http://www.linyijobs.com','和丰汽贸诚聘','5830','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','32','QS_indexcentreimg','1','3','2','活力九州','','50','1368149288','1368115200','0','','','','/data/comads/2013/05/10/1368149256268.jpg','http://www.linyijobs.com','活力九州诚聘业务精英','6536','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','33','QS_indexcentreimg','1','3','2','统一','','50','1368150902','1368115200','0','','','','/data/comads/2013/05/10/1368150902634.gif','http://www.linyijobs.com','统一企业招聘','5845','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','34','QS_indexcentreimg','1','3','2','共享铸钢','','50','1368151634','1368115200','0','','','','/data/comads/2013/05/10/1368151615966.jpg','http://www.linyijobs.com','共享铸钢 聘','6663','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','35','QS_indexcentreimg','1','3','2','共享装备','','50','1368151731','1368115200','0','','','','/data/comads/2013/05/10/1368151731591.jpg','http://www.linyijobs.com','共享装备 聘','6528','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','49','QS_indexfootbanner','1','9','2','免费注册会员','','50','1369226119','1369152000','0','','','','/data/comads/2013/05/22/1369226119247.jpg','http://www.linyijobs.com','免费注册 让机会寻找您','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','48','QS_indexcentreimg','1','3','2','明瑞房地产','','50','1369224484','1369152000','0','','','','/data/comads/2013/05/22/1369224484510.jpg','http://www.linyijobs.com','明瑞房地产 聘','6817','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','47','QS_indexcentreimg','1','3','2','青海柴达木能源','','50','1369224282','1369152000','0','','','','/data/comads/2013/05/22/1369224282497.jpg','http://www.linyijobs.com','柴达木能源 急聘','6819','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','46','QS_indexcentreimg','1','3','2','青海聚能电力','','50','1369223435','1369152000','0','','','','/data/comads/2013/05/22/1369223435705.jpg','http://www.linyijobs.com','聚能电力 聘','6822','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','45','QS_indexcentreimg','1','3','2','青海景洲房地产开发','','50','1369223264','1369152000','0','','','','/data/comads/2013/05/22/1369223265100.jpg','http://www.linyijobs.com','景洲房地产 诚聘','6822','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','43','QS_alltopimg','1','8','2','西宁 头部','','80','1368619557','1368547200','0','','','','/data/comads/2013/05/15/1368619557426.gif','http://www.linyijobs.com','','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','44','QS_indexcentreimg','1','3','2','苏宁电器','','50','1369222895','1369152000','0','','','','/data/comads/2013/05/22/1369222595398.gif','http://www.linyijobs.com','苏宁电器 西宁','6757','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','50','QS_indexfootbanner','1','9','2','个人简历','','50','1369226306','1369152000','0','','','','/data/comads/2013/05/22/1369226306413.gif','http://www.linyijobs.com','机会永远只会垂青有准备的人','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','52','QS_indexfocus','1','1','2','成辉人才6.15号招聘会','','51','1370232619','1370188800','1371312000','','','','/data/comads/2013/06/03/1370232544447.jpg','http://www.linyijobs.com','成辉人才6.15号招聘会','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('0','53','QS_indexfocus','1','1','2','套餐','','50','1371516256','1371484800','0','','','','/data/comads/2013/06/18/1371516256765.gif','http://www.linyijobs.com','没有最优惠，只有更优惠0951-6884155','0','','','0','0','1','0','0','','','','','0','','0','0');");

require("../../inc/footer.php");
?>