<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_mail_templates`;");
E_C("CREATE TABLE `qs_mail_templates` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=gbk");
E_D("replace into `qs_mail_templates` values('1','set_reg','<p>��ϲ���Ϊ<strong><a href=\"{sitedomain}\" target=\"_blank\">{sitename}</a></strong>�Ļ�Ա<br />\r\n����û����ǣ�<strong>{username}</strong><br />\r\n��������ǣ�<strong>{password}</strong></p>\r\n<p><span style=\"color:#e53333;\">�ɻ���Ƹ��������רҵ����Ƹ��վ��<a href=\"http://www.hr951.com\">http://www.hr951.com</a>����ͨ����Ƹ������Ƹ������Ƹ��Ϊ���˲���������ļ���羫Ӣ��Ϊ��������ְͨ����׷Ѱְҵ���룡</span></p>\r\n<p><span style=\"color:#e53333;\">������ѯ��0951-6884155</span><br />\r\n���ʼ���ϵͳ�Զ�����������ظ���<br />\r\n</p>');");
E_D("replace into `qs_mail_templates` values('2','set_applyjobs','�װ��Ļ�Ա��<br />\r\n<strong>{personalfullname}</strong> ��������������ְλ:<strong>{jobsname}</strong><br />\r\n���¼<a href=\"{sitedomain}\" target=\"_blank\">��Ա����</a>��ϸ�鿴��<br />\r\n����Ϣ��ϵͳ�Զ����ͣ�����ظ���');");
E_D("replace into `qs_mail_templates` values('3','set_invite','�װ��Ļ�Ա��<br />\r\n<strong>{companyname}</strong>  ���㷢������������<br />\r\n���¼<a href=\"{sitedomain}\" target=\"_blank\">��Ա����</a>��ϸ�鿴��<br />\r\n����Ϣ��ϵͳ�Զ����ͣ�����ظ���');");
E_D("replace into `qs_mail_templates` values('4','set_order','�װ��Ļ�Ա��<br />\r\n��Ķ�������ӳɹ����뼰ʱ��������ţ�{oid}�����ʽΪ��{paymenttpye}��Ӧ�����Ϊ��{amount} Ԫ��<br />\r\n�����ϵͳ��Ϊ���Զ���ͨ��ط���<br />\r\n���¼<a href=\"{sitedomain}\" target=\"_blank\">��Ա����</a>��ϸ�鿴��<br />\r\n����Ϣ��ϵͳ�Զ����ͣ�����ظ���');");
E_D("replace into `qs_mail_templates` values('5','set_payment','�װ��Ļ�Ա��<br />\r\n���Ѿ�����ɹ���ϵͳ��Ϊ����ͨ����<br />\r\n���¼<a href=\"{sitedomain}\" target=\"_blank\">��Ա����</a>��ϸ�鿴��<br />\r\n����Ϣ��ϵͳ�Զ����ͣ�����ظ���');");
E_D("replace into `qs_mail_templates` values('6','set_editpwd','�װ��Ļ�Ա��<br />\r\n���Ѿ��ɹ��޸����룬������Ϊ��{newpassword}��<br />\r\n����Ϣ��ϵͳ�Զ����ͣ�����ظ���');");
E_D("replace into `qs_mail_templates` values('7','set_jobsallow','�װ��Ļ�Ա��<br />\r\n��ϲ���㷢����ְλ({jobsname})�Ѿ�ͨ����ˣ�<br />\r\n���¼<a href=\"{sitedomain}\" target=\"_blank\">��Ա����</a>��ϸ�鿴��<br />\r\n����Ϣ��ϵͳ�Զ����ͣ�����ظ���');");
E_D("replace into `qs_mail_templates` values('8','set_jobsnotallow','�װ��Ļ�Ա��<br />\r\n�ܱ�Ǹ���㷢����ְλ({jobsname})δͨ����ˣ����޸ĺ��ٴ��ύ��ˣ�<br />\r\n���¼<a href=\"{sitedomain}\" target=\"_blank\">��Ա����</a>��ϸ�鿴��<br />\r\n����Ϣ��ϵͳ�Զ����ͣ�����ظ���');");
E_D("replace into `qs_mail_templates` values('9','set_licenseallow','�װ��Ļ�Ա��<br />\r\n��ϲ��������ҵ��������֤ͨ����<br />\r\n���¼<a href=\"{sitedomain}\" target=\"_blank\">��Ա����</a>��ϸ�鿴��<br />\r\n����Ϣ��ϵͳ�Զ����ͣ�����ظ���');");
E_D("replace into `qs_mail_templates` values('10','set_licensenotallow','�װ��Ļ�Ա��<br />\r\n�ܱ�Ǹ�������ҵ��֤δͨ�����������ϴ�Ӫҵִ�գ�<br />\r\n���¼<a href=\"{sitedomain}\" target=\"_blank\">��Ա����</a>��ϸ�鿴��<br />\r\n����Ϣ��ϵͳ�Զ����ͣ�����ظ���');");
E_D("replace into `qs_mail_templates` values('11','set_addmap','�װ��Ļ�Ա��<br />\r\n��ϲ�����ѳɹ���ͨ��ҵ���ӵ�ͼ��<br />\r\n���¼<a href=\"{sitedomain}\" target=\"_blank\">��Ա����</a>��ϸ�鿴��<br />\r\n����Ϣ��ϵͳ�Զ����ͣ�����ظ���');");
E_D("replace into `qs_mail_templates` values('12','set_resumeallow','�װ��Ļ�Ա��<br />\r\n��ϲ�����ļ�����ͨ����ˣ�<br />\r\n���¼<a href=\"{sitedomain}\" target=\"_blank\">��Ա����</a>��ϸ�鿴��<br />\r\n����Ϣ��ϵͳ�Զ����ͣ�����ظ���');");
E_D("replace into `qs_mail_templates` values('13','set_resumenotallow','�װ��Ļ�Ա��<br />\r\n�ܱ�Ǹ�����ļ���δͨ����ˣ����޸ĺ��ٴ��ύ��ˣ�<br />\r\n���¼<a href=\"{sitedomain}\" target=\"_blank\">��Ա����</a>��ϸ�鿴��<br />\r\n����Ϣ��ϵͳ�Զ����ͣ�����ظ���');");
E_D("replace into `qs_mail_templates` values('14','set_reg_title','��ϲ���Ϊ{sitename}�Ļ�Ա');");
E_D("replace into `qs_mail_templates` values('15','set_applyjobs_title','{personalfullname}��������������ְλ:{jobsname}');");
E_D("replace into `qs_mail_templates` values('16','set_invite_title','{companyname}������μ�����');");
E_D("replace into `qs_mail_templates` values('17','set_order_title','��ֵ������ӳɹ�');");
E_D("replace into `qs_mail_templates` values('18','set_payment_title','��ֵ�ɹ���ϵͳ��Ϊ����ͨ����');");
E_D("replace into `qs_mail_templates` values('19','set_editpwd_title','�����޸ĳɹ���');");
E_D("replace into `qs_mail_templates` values('20','set_jobsallow_title','��ϲ����������ְλ({jobsname})�Ѿ�ͨ����ˣ�');");
E_D("replace into `qs_mail_templates` values('21','set_jobsnotallow_title','�ܱ�Ǹ���㷢����ְλ({jobsname})δͨ����ˣ�');");
E_D("replace into `qs_mail_templates` values('22','set_licenseallow_title','��ϲ�������ҵ��Ϣ����֤ͨ����');");
E_D("replace into `qs_mail_templates` values('23','set_licensenotallow_title','�ܱ�Ǹ�������ҵ��Ϣδ��֤ͨ����');");
E_D("replace into `qs_mail_templates` values('24','set_addmap_title','��ϲ�����ѳɹ���ͨ��ҵ���ӵ�ͼ��');");
E_D("replace into `qs_mail_templates` values('25','set_resumeallow_title','��ϲ�����ļ�����ͨ����ˣ�');");
E_D("replace into `qs_mail_templates` values('26','set_resumenotallow_title','�ܱ�Ǹ����ļ���δͨ����ˣ�');");

require("../../inc/footer.php");
?>