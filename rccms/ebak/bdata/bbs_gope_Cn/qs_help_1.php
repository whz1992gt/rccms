<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_help`;");
E_C("CREATE TABLE `qs_help` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(3) unsigned NOT NULL,
  `parentid` smallint(5) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `click` int(10) unsigned NOT NULL DEFAULT '1',
  `addtime` int(10) unsigned NOT NULL,
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`,`order`,`id`),
  KEY `focos_article_order` (`order`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `qs_help` values('1','4','1','ע�����¼','<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p>�����վ���Ϸ������ע�ᡱ�򡰵�¼���������ע�����¼</p>\r\n<p><img style=\"width:682px;height:75px;\" border=\"0\" alt=\"\" src=\"/data/images/2013/04/25/20130425094109_55656.jpg\" width=\"676\" height=\"75\" /></p>\r\n<p>����ע����̣�һ����������������ɡ� hr951.com�������������ֱ༭���ߣ�������±����а������������ۡ���������������ר������������������д�ñ��棬Ȼ������д��������ʱ�ڶ�Ӧ�ĵط�������ȥ���������Լ�������ע��ʱ�䣬���ע��ɹ��ʡ�</p>\r\n</td>\r\n<tr>\r\n<td height=\"20\"></td>\r\n</tr>\r\n</tbody>\r\n</table>','1','1366854102','100');");
E_D("replace into `qs_help` values('2','5','1','�����һ�������','<p><strong><span style=\"color:#e53333;\">�����¼ҳ�棬Ȼ��������������</span><span style=\"color:#e53333;\">��</span></strong></p>\r\n<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/04/25/20130425095131_98959.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style=\"color:#e53333;\">���������������û�������д���õ��������ύ���ɣ����ǻ�����̵�ʱ����Ϊ������</span></strong></p>\r\n<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/04/25/20130425095428_16061.jpg\" /></p>','1','1366855025','99');");
E_D("replace into `qs_help` values('3','8','1','�ֻ���������֤','ֻ����ȷ��д������ E-mail��ַ���ֻ����벢��������֤����Ƹ��ҵ���ܰ����ǵ���Ƹ�������߷��͵����ĵ��������У�hr951.com���ܼ�ʱ�����Ƽ����µ�ְλ��Ϣ��������������ʱ����������ͨ������E-mail����ȡ�����롣ǿ���Ƽ�����ע��ʱ��д��ʵ��Ч��E-mail��ַ���ֻ����벢������֤��ͬʱ����ְ����������ҵ��ĳһ��ְλʱҲ��ͨ���������Ϣ������ҵ�������У���������ҵ����Ƹ�ļ�ʱ�ƿء�','1','1366855475','98');");
E_D("replace into `qs_help` values('4','6','1','�˺�״̬','<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/05/07/20130507182831_31492.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/05/07/20130507184239_91845.jpg\" width=\"662\" height=\"94\" /></p>','1','1367922622','97');");
E_D("replace into `qs_help` values('5','10','2','ְλ�ƹ�','<p>��һ����</p>\r\n<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/05/10/20130510120313_28344.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p>�ڶ�����</p>\r\n<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/05/10/20130510120328_64854.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p>��������</p>\r\n<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/05/10/20130510120347_32447.jpg\" /></p>\r\n<p>&nbsp;</p>','1','1368158629','100');");

require("../../inc/footer.php");
?>