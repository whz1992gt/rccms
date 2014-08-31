<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_payment`;");
E_C("CREATE TABLE `qs_payment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `listorder` int(10) unsigned NOT NULL DEFAULT '50',
  `typename` varchar(15) NOT NULL,
  `byname` varchar(50) NOT NULL,
  `p_introduction` varchar(100) NOT NULL,
  `notes` text,
  `partnerid` varchar(80) DEFAULT NULL,
  `ytauthkey` varchar(100) DEFAULT NULL,
  `fee` varchar(6) NOT NULL DEFAULT '0',
  `parameter1` varchar(50) DEFAULT NULL,
  `parameter2` varchar(50) DEFAULT NULL,
  `parameter3` varchar(50) DEFAULT NULL,
  `p_install` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `qs_payment` values('1','50','remittance','ת��/���','û�п�ͨ��������ѡ�����������ͷ�Ϊ���ֶ���ͨ','<br /><br />\r\n<div align=\"center\"><strong style=\" color:#FF6600; font-size:18px;\">�������֪ͨ���ǿͷ���Ϊ�㿪ͨ��ط���</strong></div>\r\n <br />\r\n<strong style=\"color:#FF0000\" >��ϵ�ͷ�</strong>\r\n  <br />\r\n�ͷ�QQ:000000000; �ͷ��绰��000-0000000\r\n<br />\r\n<br />\r\n<strong style=\"color:#FF0000\" >���ʽ</strong>\r\n<br />\r\n��������<br />\r\n  �˺ţ�000000000000000000000<br />\r\n������xxxxxxxxxxxxxxx<br />\r\n�����У�XXXXXXXXXXXXXX<br />\r\n---------------------------<br />\r\n  ��������<br />\r\n  �˺ţ�000000000000000000000<br />\r\n  ������xxxxxxxxxxxxxxx<br />\r\n�����У�XXXXXXXXXXXXXX\r\n<br />','remittance','','0','','','','2');");
E_D("replace into `qs_payment` values('2','50','chinabank','��������','ȫ��֧��ȫ��19�����е����ÿ�����ǿ�ʵ������֧��','�����������й��������С��������С��й��������С�ũҵ���С��������е���ʮ�ҽ��ڻ������Э�顣ȫ��֧��ȫ��19�����е����ÿ�����ǿ�ʵ������֧��������ַ��http://www.chinabank.com.cn��','','','0','','','','1');");
E_D("replace into `qs_payment` values('3','50','tenpay','�Ƹ�ͨ','�Ƹ�ͨ����Ѷ��˾������й����ȵ�����֧��ƽ̨','�Ƹ�֧ͨ��ȫ���������е�����֧�����û�Ҳ�����ȳ�ֵ���Ƹ�ͨ�����ܸ��ӱ�ݵĲƸ�ͨ���֧�����顣�Ƹ�ͨ�����֡��տ����������˻����ܣ����ʽ�ʹ�ø���','','','0','','','','2');");
E_D("replace into `qs_payment` values('4','50','alipay','֧����','ȫ�����ȵĶ���������֧��ƽ̨','֧������ȫ�����ȵĶ���������֧��ƽ̨��������Ϊ����û��ṩ��ȫ���ٵĵ���֧��/����֧��/��ȫ֧��/�ֻ�֧�����飬��ת���տ�/ˮ��ú�ɷ�/���ÿ�����/AA�տ���������Ӧ��','','','1.5','','','','2');");

require("../../inc/footer.php");
?>