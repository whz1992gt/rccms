<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_ad_category`;");
E_C("CREATE TABLE `qs_ad_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) NOT NULL,
  `type_id` int(10) unsigned NOT NULL,
  `categoryname` varchar(100) NOT NULL,
  `admin_set` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=gbk");
E_D("replace into `qs_ad_category` values('1','QS_indexfocus','2','��ҳͼƬ�ַ����','1');");
E_D("replace into `qs_ad_category` values('2','QS_indextoptext','1','��ҳ�Ϸ����ֹ��λ','1');");
E_D("replace into `qs_ad_category` values('3','QS_indexcentreimg','2','��ҳ�в����ӹ��','1');");
E_D("replace into `qs_ad_category` values('4','QS_newsbanner','2','��Ѷ��ҳ�м���','1');");
E_D("replace into `qs_ad_category` values('6','QS_indexfootimg','2','��ҳ�·����ӹ��λ','1');");
E_D("replace into `qs_ad_category` values('7','QS_indexfloat','5','��ҳ�������','1');");
E_D("replace into `qs_ad_category` values('8','QS_alltopimg','2','ȫվ����ͼƬ���λ468X60','1');");
E_D("replace into `qs_ad_category` values('9','QS_indexfootbanner','2','��ҳ�ײ�Banner 985X80','1');");
E_D("replace into `qs_ad_category` values('12','indexpic_bananer','2','��ҳ�ϲ��������','0');");
E_D("replace into `qs_ad_category` values('19','shouyezhiding','2','��ҳ����ְλ','0');");
E_D("replace into `qs_ad_category` values('14','mingqi','2','��ҳ������','0');");
E_D("replace into `qs_ad_category` values('16','indexpic_fangxia','2','��ҳ��Ƹר�����泤��','0');");
E_D("replace into `qs_ad_category` values('17','zphtop','2','��Ƹ��ҳ�涥������','0');");
E_D("replace into `qs_ad_category` values('18','pinpai','2','��ҳƷ����ҵ','0');");

require("../../inc/footer.php");
?>