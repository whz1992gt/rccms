<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_members_points_rule`;");
E_C("CREATE TABLE `qs_members_points_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `operation` tinyint(1) NOT NULL DEFAULT '2',
  `value` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gbk");
E_D("replace into `qs_members_points_rule` values('1','ˢ��ְλ','jobs_refresh','2','0');");
E_D("replace into `qs_members_points_rule` values('2','����ְλ','jobs_add','1','5');");
E_D("replace into `qs_members_points_rule` values('3','ְλ��Ч����ÿ��','jobs_daily','2','0');");
E_D("replace into `qs_members_points_rule` values('4','������ͨ����','resume_download','2','10');");
E_D("replace into `qs_members_points_rule` values('5','���ظ߼��˲ż���','resume_download_advanced','2','20');");
E_D("replace into `qs_members_points_rule` values('6','������ͨ�˲���������','interview_invite','2','3');");
E_D("replace into `qs_members_points_rule` values('7','����߼��˲���������','interview_invite_advanced','2','6');");
E_D("replace into `qs_members_points_rule` values('8','�޸���Ƹ��Ϣ','jobs_edit','2','3');");
E_D("replace into `qs_members_points_rule` values('9','���ÿ�ͨ���ӵ�ͼ','company_map','2','10');");
E_D("replace into `qs_members_points_rule` values('10','�ϴ�Ӫҵִ�ղ���֤ͨ��','company_auth','1','15');");
E_D("replace into `qs_members_points_rule` values('11','��ע���Ա����','reg_points','1','100');");
E_D("replace into `qs_members_points_rule` values('12','��Աÿ���һ�ε�¼','userlogin','1','1');");
E_D("replace into `qs_members_points_rule` values('13','��Ա������֤ͨ��','verifyemail','1','6');");
E_D("replace into `qs_members_points_rule` values('14','��Ա�ֻ���֤ͨ��','verifymobile','1','6');");

require("../../inc/footer.php");
?>