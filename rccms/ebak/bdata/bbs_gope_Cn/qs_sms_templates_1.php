<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_sms_templates`;");
E_C("CREATE TABLE `qs_sms_templates` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=gbk");
E_D("replace into `qs_sms_templates` values('1','set_applyjobs','{sitename}������:{personalfullname}��������������ְλ{jobsname}�����¼{sitedomain}�鿴');");
E_D("replace into `qs_sms_templates` values('2','set_invite','{sitename}��������{companyname}�����������������룬���¼{sitedomain}�鿴');");
E_D("replace into `qs_sms_templates` values('3','set_order','{sitename}������������{oid}�Ѿ���ӳɹ������ʽΪ��{paymenttpye}��Ӧ�����{amount}�����¼{sitedomain}�鿴');");
E_D("replace into `qs_sms_templates` values('4','set_payment','{sitename}����������ֵ�ɹ���ϵͳ��Ϊ����ͨ�������¼{sitedomain}�鿴');");
E_D("replace into `qs_sms_templates` values('5','set_editpwd','{sitename}�����������������޸ĳɹ���������Ϊ��{newpassword}');");
E_D("replace into `qs_sms_templates` values('6','set_jobsallow','{sitename}��������ְλ({jobsname})�Ѿ�ͨ����ˣ����¼{sitedomain}�鿴');");
E_D("replace into `qs_sms_templates` values('7','set_jobsnotallow','{sitename}��������ְλ({jobsname})δͨ����ˣ����޸ĺ��ٴ��ύ��ˣ����¼{sitedomain}�鿴');");
E_D("replace into `qs_sms_templates` values('8','set_licenseallow','{sitename}��������������ҵ��������֤ͨ�������¼{sitedomain}�鿴');");
E_D("replace into `qs_sms_templates` values('9','set_licensenotallow','{sitename}�������������ҵ��֤δͨ�����������ϴ�Ӫҵִ�գ����¼{sitedomain}�鿴');");
E_D("replace into `qs_sms_templates` values('10','set_addrecommend','{sitename}������������ְλ�Ѿ��ɹ��Ƽ������¼{sitedomain}�鿴');");
E_D("replace into `qs_sms_templates` values('11','set_addmap','{sitename}�����������ѳɹ���ͨ��ҵ���ӵ�ͼ�����¼{sitedomain}�鿴');");
E_D("replace into `qs_sms_templates` values('12','set_resumeallow','{sitename}�����������ļ�����ͨ����ˣ����¼{sitedomain}�鿴');");
E_D("replace into `qs_sms_templates` values('13','set_resumenotallow','{sitename}�����������ļ���δͨ����ˣ����޸ĺ��ٴ��ύ��ˣ����¼{sitedomain}�鿴');");

require("../../inc/footer.php");
?>