<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_setmeal`;");
E_C("CREATE TABLE `qs_setmeal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `display` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `apply` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `setmeal_name` varchar(200) NOT NULL,
  `days` int(10) unsigned NOT NULL DEFAULT '0',
  `expense` int(10) unsigned NOT NULL,
  `jobs_ordinary` int(10) unsigned NOT NULL DEFAULT '0',
  `download_resume_ordinary` int(10) unsigned NOT NULL DEFAULT '0',
  `download_resume_senior` int(10) unsigned NOT NULL DEFAULT '0',
  `interview_ordinary` int(10) unsigned NOT NULL DEFAULT '0',
  `interview_senior` int(10) unsigned NOT NULL DEFAULT '0',
  `talent_pool` int(10) unsigned NOT NULL DEFAULT '0',
  `added` varchar(255) NOT NULL,
  `show_order` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `qs_setmeal` values('1','1','0','��ѻ�Ա','15','0','3','3','1','5','1','15','','0');");
E_D("replace into `qs_setmeal` values('2','1','1','�¶Ȼ�Ա','30','600','10','30','5','30','5','3000','1�����ɻ��˲š��ܿ���5*8cm ����1���£��ϼ�4�ڣ�\r\n2�����ɻ���Ƹ������ҳ������Ƹ��ʾ1���£�','0');");
E_D("replace into `qs_setmeal` values('3','1','1','���Ȼ�Ա','90','1600','45','90','20','90','20','9000','1�����ɻ��˲š��ܿ���5*8cm����3���£��ϼ�12�ڣ�\r\n2�����Ǽ�ֵ1000Ԫ���ɻ��˲š��ܿ�1/8�ʰ�3��\r\n6�����ɻ���Ƹ������ҳLOGO��Ƹ��ʾ1���£������� Ƹ��ʾ2��','0');");
E_D("replace into `qs_setmeal` values('4','1','1','�����Ա','180','3000','30','180','45','180','45','18000','1�����ɻ��˲š��ܿ���5*8����6���£��ϼ�24��\r\n2�����Ǽ�ֵ2500Ԫ���ɻ��˲š��ܿ�1/8�ʰ�6��\r\n3�����ɻ���Ƹ������ҳLOGO��Ƹ��ʾ2����������Ƹ��ʾ3��','0');");
E_D("replace into `qs_setmeal` values('5','1','1','��Ȼ�Ա','360','6000','60','360','95','360','95','36000','1�����ɻ��˲š��ܿ���5*8����12���£��ϼ�48��\r\n2�����Ǽ�ֵ4000Ԫ���ɻ��˲š��ܿ�1/8�ʰ�12��\r\n3�����ɻ���Ƹ������ҳLOGO��Ƹ��ʾ3���£�������Ƹ��ʾ5����','0');");
E_D("replace into `qs_setmeal` values('6','1','1','VIP�ͻ����Զ���','0','0','0','0','0','0','0','0','���ײͰ����ɻ���Ƹ�������ɻ��˲š������ɻԹ�桷���ɻ�ר����Ƹ�ᣬ������Զ��ƿɲ���0951-6884155  13619587163���ж���','0');");

require("../../inc/footer.php");
?>