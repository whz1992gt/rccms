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
E_D("replace into `qs_ad_copy` values('1','2','QS_indexfocus','1','1','2','��Ѷ','','50','1368068747','1365955200','0','','','','/data/comads/2013/04/15/1366011331708.gif','http://www.linyijobs.com','','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('0','3','QS_newsbanner','1','4','2','�ɻԹ��','','50','1366856497','1365955200','0','','','','/data/comads/2013/04/15/1366012339290.gif','http://www.linyijobs.com','','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('0','4','QS_indexfootbanner','1','9','2','�ɻԹ��','','50','1366856680','1365955200','0','','','','/data/comads/2013/04/15/1366012377633.gif','http://www.linyijobs.com','�ɻԹ�棬����רҵ����Ѷƽ̨','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','5','QS_alltopimg','1','8','2','ͷ��','','50','1368618610','1366041600','0','','','','/data/comads/2013/04/16/1366077510526.jpg','http://www.linyijobs.com','','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','6','QS_indexcentreimg','1','3','2','�ɻԹ��','','50','1368059201','1366300800','0','','','','/data/comads/2013/04/19/1366338920824.gif','http://www.linyijobs.com','�ɻԹ��','6365','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','8','QS_indexcentreimg','1','3','2','���','','50','1368059192','1366300800','0','','','','/data/comads/2013/04/19/1366339864977.gif','http://www.linyijobs.com','��վ�ҵ','6394','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','9','QS_indexcentreimg','1','3','2','������˹','','50','1368059186','1366300800','0','','','','/data/comads/2013/04/19/1366340803428.gif','http://www.linyijobs.com','������˹���ز���Ƹ','6378','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','10','QS_indexcentreimg','1','3','2','����ơ��','','50','1368059177','1366300800','0','','','','/data/comads/2013/04/19/1366341031621.gif','http://www.linyijobs.com','����ơ�Ƴ�Ƹ','5687','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','11','QS_indexcentreimg','1','3','2','��̩��','','50','1368059170','1366300800','1367856000','','','','/data/comads/2013/04/19/1366342506414.gif','http://www.linyijobs.com','��̩����Ƹ','6146','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','12','QS_indexfocus','1','1','2','QQȺ','','49','1368059217','1366819200','0','','','','/data/comads/2013/04/25/1366852014818.gif','http://www.linyijobs.com','����ɻ�QQȺ���ҹ�������Ƹ������','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','13','QS_indexfocus','1','1','2','��Ƹ��','','51','1368059052','1366819200','1369497600','','','','/data/comads/2013/05/07/1367916328201.jpg','http://www.linyijobs.com','�ɻԴ�ý2013������˲���Ƹ��','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','15','QS_indexcentreimg','1','3','2','��������','','50','1368059155','1367856000','0','','','','/data/comads/2013/05/07/1367916641932.jpg','http://www.linyijobs.com','�������ֳ�Ƹ','6663','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','16','QS_indexcentreimg','1','3','2','����װ��','','50','1368059146','1367856000','0','','','','/data/comads/2013/05/07/1367916792194.jpg','http://www.linyijobs.com','����װ����Ƹ','6528','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','17','QS_indexcentreimg','1','3','2','�����ٻ�','','50','1368059138','1367856000','0','','','','/data/comads/2013/05/07/1367917443312.jpg','http://www.linyijobs.com','�����ٻ���Ƹ','6452','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','18','QS_indexcentreimg','1','3','2','��������','','50','1368059131','1367856000','0','','','','/data/comads/2013/05/07/1367918545938.jpg','http://www.linyijobs.com','�������ݳ�Ƹ','6536','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','19','QS_indexcentreimg','1','3','2','�ͷ���ó','','50','1368059123','1367856000','0','','','','/data/comads/2013/05/07/1367919080489.gif','http://www.linyijobs.com','�ͷ�����','5830','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('2','20','QS_indexcentreimg','1','3','2','ͳһ','','50','1368059080','1367942400','0','','','','/data/comads/2013/05/08/1367982498836.gif','http://www.linyijobs.com','ͳһ��ҵ�����ֹ�˾','5845','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','21','QS_indexfocus','1','1','2','��̨','','50','1368068842','1368028800','0','','','','/data/comads/2013/05/09/1368068170998.jpg','http://www.linyijobs.com','���������ɻԸ�����̨','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','22','QS_indexfocus','1','1','2','��ְ ��Ƹ','','50','1368083557','1368028800','0','','','','/data/comads/2013/05/09/1368068679779.jpg','http://www.linyijobs.com','��ְ ��Ƹ��www.hr951.com','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','23','QS_indexfocus','1','1','2','��ְ��Ƹ','','50','1368083615','1368028800','0','','','','/data/comads/2013/05/09/1368083615948.jpg','http://www.linyijobs.com','��ְ ��Ƹ�ϳɻ���Ƹ��','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','25','QS_indexcentreimg','1','3','2','���˾���','','50','1368086159','1368028800','0','','','','/data/comads/2013/05/09/1368086096850.gif','http://www.linyijobs.com','���˾��г�ƸӢ��','6720','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','26','QS_indexfocus','1','1','2','QQȺ','','50','1368086796','1368028800','0','','','','/data/comads/2013/05/09/1368086796108.gif','http://www.linyijobs.com','��ӭ����ɻ�QQȺ','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','51','QS_indexcentreimg','1','3','2','����¡ʢ��ó','','49','1370046808','1370016000','1372694400','','','','/data/comads/2013/06/01/1370046746650.jpg','http://www.linyijobs.com','����¡ʢ��ó Ƹ','6998','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','28','QS_indexcentreimg','1','3','2','��վ�','','50','1368087713','1368028800','0','','','','/data/comads/2013/05/09/1368087686861.gif','http://www.linyijobs.com','��վ�ҵ��Ƹ','6394','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','29','QS_indexcentreimg','1','3','2','���ļ���','','50','1370253879','1368028800','0','','','','/data/comads/2013/05/09/1368089148813.gif','http://www.linyijobs.com','����ơ�Ƴ�Ƹ��Ӣ','5687','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','30','QS_indexcentreimg','1','3','2','������˹','','50','1370046866','1368028800','1369929600','','','','/data/comads/2013/05/09/1368089228628.gif','http://www.linyijobs.com','������˹�ز�','6378','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','31','QS_indexcentreimg','1','3','2','�ͷ���ó','','50','1368094610','1368028800','0','','','','/data/comads/2013/05/09/1368094610602.gif','http://www.linyijobs.com','�ͷ���ó��Ƹ','5830','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','32','QS_indexcentreimg','1','3','2','��������','','50','1368149288','1368115200','0','','','','/data/comads/2013/05/10/1368149256268.jpg','http://www.linyijobs.com','�������ݳ�Ƹҵ��Ӣ','6536','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','33','QS_indexcentreimg','1','3','2','ͳһ','','50','1368150902','1368115200','0','','','','/data/comads/2013/05/10/1368150902634.gif','http://www.linyijobs.com','ͳһ��ҵ��Ƹ','5845','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','34','QS_indexcentreimg','1','3','2','��������','','50','1368151634','1368115200','0','','','','/data/comads/2013/05/10/1368151615966.jpg','http://www.linyijobs.com','�������� Ƹ','6663','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','35','QS_indexcentreimg','1','3','2','����װ��','','50','1368151731','1368115200','0','','','','/data/comads/2013/05/10/1368151731591.jpg','http://www.linyijobs.com','����װ�� Ƹ','6528','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','49','QS_indexfootbanner','1','9','2','���ע���Ա','','50','1369226119','1369152000','0','','','','/data/comads/2013/05/22/1369226119247.jpg','http://www.linyijobs.com','���ע�� �û���Ѱ����','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','48','QS_indexcentreimg','1','3','2','���𷿵ز�','','50','1369224484','1369152000','0','','','','/data/comads/2013/05/22/1369224484510.jpg','http://www.linyijobs.com','���𷿵ز� Ƹ','6817','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','47','QS_indexcentreimg','1','3','2','�ຣ���ľ��Դ','','50','1369224282','1369152000','0','','','','/data/comads/2013/05/22/1369224282497.jpg','http://www.linyijobs.com','���ľ��Դ ��Ƹ','6819','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','46','QS_indexcentreimg','1','3','2','�ຣ���ܵ���','','50','1369223435','1369152000','0','','','','/data/comads/2013/05/22/1369223435705.jpg','http://www.linyijobs.com','���ܵ��� Ƹ','6822','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','45','QS_indexcentreimg','1','3','2','�ຣ���޷��ز�����','','50','1369223264','1369152000','0','','','','/data/comads/2013/05/22/1369223265100.jpg','http://www.linyijobs.com','���޷��ز� ��Ƹ','6822','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','43','QS_alltopimg','1','8','2','���� ͷ��','','80','1368619557','1368547200','0','','','','/data/comads/2013/05/15/1368619557426.gif','http://www.linyijobs.com','','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('1','44','QS_indexcentreimg','1','3','2','��������','','50','1369222895','1369152000','0','','','','/data/comads/2013/05/22/1369222595398.gif','http://www.linyijobs.com','�������� ����','6757','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','50','QS_indexfootbanner','1','9','2','���˼���','','50','1369226306','1369152000','0','','','','/data/comads/2013/05/22/1369226306413.gif','http://www.linyijobs.com','������Զֻ�ᴹ����׼������','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('4','52','QS_indexfocus','1','1','2','�ɻ��˲�6.15����Ƹ��','','51','1370232619','1370188800','1371312000','','','','/data/comads/2013/06/03/1370232544447.jpg','http://www.linyijobs.com','�ɻ��˲�6.15����Ƹ��','0','','','0','0','1','0','0','','','','','0','','0','0');");
E_D("replace into `qs_ad_copy` values('0','53','QS_indexfocus','1','1','2','�ײ�','','50','1371516256','1371484800','0','','','','/data/comads/2013/06/18/1371516256765.gif','http://www.linyijobs.com','û�����Żݣ�ֻ�и��Ż�0951-6884155','0','','','0','0','1','0','0','','','','','0','','0','0');");

require("../../inc/footer.php");
?>