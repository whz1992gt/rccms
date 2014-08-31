<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_pms`;");
E_C("CREATE TABLE `qs_pms` (
  `pmid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `msgtype` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `msgfrom` varchar(30) NOT NULL,
  `msgfromuid` int(10) unsigned NOT NULL,
  `msgtouid` int(10) unsigned NOT NULL,
  `msgtoname` varchar(30) NOT NULL,
  `message` varchar(250) NOT NULL,
  `dateline` int(10) NOT NULL,
  `new` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `replytime` int(10) NOT NULL,
  `replyuid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `msgfromuid` (`msgfromuid`),
  KEY `msgtouid` (`msgtouid`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=gbk");
E_D("replace into `qs_pms` values('1','1','','0','7573','zgzzlz','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1372326130','1','1372326130','0');");
E_D("replace into `qs_pms` values('2','1','','0','7682','98045100','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1372662569','1','1372662569','0');");
E_D("replace into `qs_pms` values('3','1','','0','7785','send66','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1373987913','1','1373987913','0');");
E_D("replace into `qs_pms` values('4','1','','0','7815','gong781007','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1374741704','1','1374741704','0');");
E_D("replace into `qs_pms` values('5','1','','0','7848','xx4564351','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1375591976','1','1375591976','0');");
E_D("replace into `qs_pms` values('6','1','','0','7849','e000001','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1375592889','1','1375592889','0');");
E_D("replace into `qs_pms` values('7','1','','0','7850','可乐视频向导','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1375857018','1','1375857018','0');");
E_D("replace into `qs_pms` values('8','1','','0','7851','45823652','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1375857573','2','1375857573','0');");
E_D("replace into `qs_pms` values('9','1','','0','7852','ceshi','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1376042642','1','1376042642','0');");
E_D("replace into `qs_pms` values('11','1','','0','7854','2440570','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1377168670','1','1377168670','0');");
E_D("replace into `qs_pms` values('12','1','','0','7855','dw236','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1377569467','1','1377569467','0');");
E_D("replace into `qs_pms` values('13','1','','0','7856','lokel','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1377573392','1','1377573392','0');");
E_D("replace into `qs_pms` values('14','1','','0','7857','ybm03','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1377851483','1','1377851483','0');");
E_D("replace into `qs_pms` values('15','1','','0','7858','871624348','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1378519903','1','1378519903','0');");
E_D("replace into `qs_pms` values('16','1','','0','7859','uji0661','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1379833198','1','1379833198','0');");
E_D("replace into `qs_pms` values('17','1','','0','7860','hjtjgkjqa164386','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1380163893','1','1380163893','0');");
E_D("replace into `qs_pms` values('18','1','','0','7861','t888666','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1380548853','1','1380548853','0');");
E_D("replace into `qs_pms` values('19','1','','0','7862','nyrencai','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1381535792','1','1381535792','0');");
E_D("replace into `qs_pms` values('20','1','','0','7863','nyguangyi3','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1381539939','1','1381539939','0');");
E_D("replace into `qs_pms` values('21','1','','0','7864','nyguangyi5','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1381540308','1','1381540308','0');");
E_D("replace into `qs_pms` values('22','1','','0','7865','uji254ei','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1381653544','1','1381653544','0');");
E_D("replace into `qs_pms` values('23','1','','0','7866','CED0E201310144116','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1381740476','1','1381740476','0');");
E_D("replace into `qs_pms` values('24','1','','0','7867','1111','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1381817511','1','1381817511','0');");
E_D("replace into `qs_pms` values('25','1','','0','7868','888666','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1381904443','1','1381904443','0');");
E_D("replace into `qs_pms` values('26','1','','0','7869','001','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1381930096','1','1381930096','0');");
E_D("replace into `qs_pms` values('27','1','','0','7870','测试','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1381982963','1','1381982963','0');");
E_D("replace into `qs_pms` values('28','1','','0','7871','8A791201310173095','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1381989320','1','1381989320','0');");
E_D("replace into `qs_pms` values('29','1','','0','7872','2F6C2201310178415','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1381989332','1','1381989332','0');");
E_D("replace into `qs_pms` values('30','1','','0','7873','test001','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1381994741','1','1381994741','0');");
E_D("replace into `qs_pms` values('31','1','','0','7874','fjkkldfde24675','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1381999195','1','1381999195','0');");
E_D("replace into `qs_pms` values('32','1','','0','7875','2DDA8201310179693','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1382021294','1','1382021294','0');");
E_D("replace into `qs_pms` values('33','1','','0','7876','5163B201310186653','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1382081527','1','1382081527','0');");
E_D("replace into `qs_pms` values('34','1','','0','7877','test','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1382185036','1','1382185036','0');");
E_D("replace into `qs_pms` values('35','1','','0','7878','grycb','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1382189934','1','1382189934','0');");
E_D("replace into `qs_pms` values('36','1','','0','7879','003','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1382320063','1','1382320063','0');");
E_D("replace into `qs_pms` values('37','1','','0','7880','1B174201310227738','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1382373405','1','1382373405','0');");
E_D("replace into `qs_pms` values('38','1','','0','7881','ovv2012','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1382413854','1','1382413854','0');");

require("../../inc/footer.php");
?>