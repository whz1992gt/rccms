<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_promotion`;");
E_C("CREATE TABLE `qs_promotion` (
  `cp_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cp_available` tinyint(1) NOT NULL DEFAULT '1',
  `cp_promotionid` int(10) unsigned NOT NULL,
  `cp_uid` int(10) unsigned NOT NULL,
  `cp_jobid` int(10) unsigned NOT NULL,
  `cp_days` int(10) unsigned NOT NULL,
  `cp_starttime` int(10) unsigned NOT NULL,
  `cp_endtime` int(10) unsigned NOT NULL,
  `cp_val` varchar(160) NOT NULL,
  PRIMARY KEY (`cp_id`),
  KEY `cp_uid` (`cp_uid`),
  KEY `cp_endtime` (`cp_endtime`)
) ENGINE=MyISAM AUTO_INCREMENT=285 DEFAULT CHARSET=gbk");
E_D("replace into `qs_promotion` values('249','1','2','6448','4202','20','1371114716','1372842716','');");
E_D("replace into `qs_promotion` values('250','1','2','6448','4205','10','1371114737','1371978737','');");
E_D("replace into `qs_promotion` values('251','1','3','6448','4202','20','1371115434','1372843434','');");
E_D("replace into `qs_promotion` values('252','1','3','6448','4203','20','1371115457','1372843457','');");
E_D("replace into `qs_promotion` values('182','1','3','6835','3912','30','1369356742','1371948742','');");
E_D("replace into `qs_promotion` values('243','1','1','7126','4197','15','1370920004','1372216004','');");
E_D("replace into `qs_promotion` values('244','1','2','7126','4197','10','1370920010','1371784010','');");
E_D("replace into `qs_promotion` values('114','1','4','6462','3591','60','1368253688','1373437688','#f00');");
E_D("replace into `qs_promotion` values('212','1','1','7005','4107','30','1370047861','1372639861','');");
E_D("replace into `qs_promotion` values('263','1','1','6558','3676','30','1371433345','1374025345','');");
E_D("replace into `qs_promotion` values('262','1','4','7157','4226','7','1371430552','1372035352','#0f0');");
E_D("replace into `qs_promotion` values('176','1','1','6777','3812','30','1369222099','1371814099','');");
E_D("replace into `qs_promotion` values('175','1','1','6777','3813','30','1369222093','1371814093','');");
E_D("replace into `qs_promotion` values('174','1','1','6817','3860','30','1369221985','1371813985','');");
E_D("replace into `qs_promotion` values('173','1','1','6817','3863','30','1369221976','1371813976','');");
E_D("replace into `qs_promotion` values('172','1','2','6819','3892','30','1369221934','1371813934','');");
E_D("replace into `qs_promotion` values('171','1','1','6819','3875','30','1369221886','1371813886','');");
E_D("replace into `qs_promotion` values('170','1','1','6819','3894','30','1369221873','1371813873','');");
E_D("replace into `qs_promotion` values('169','1','1','6820','3895','30','1369221855','1371813855','');");
E_D("replace into `qs_promotion` values('168','1','4','6822','3896','30','1369221821','1371813821','#f00');");
E_D("replace into `qs_promotion` values('167','1','2','6822','3898','30','1369221806','1371813806','');");
E_D("replace into `qs_promotion` values('166','1','1','6822','3896','30','1369221789','1371813789','');");
E_D("replace into `qs_promotion` values('271','1','4','7186','4278','7','1371529839','1372134639','#ee1d24');");
E_D("replace into `qs_promotion` values('270','1','3','7186','4276','10','1371529449','1372393449','');");
E_D("replace into `qs_promotion` values('269','1','1','7181','4264','15','1371518896','1372814896','');");
E_D("replace into `qs_promotion` values('233','1','3','6816','4171','30','1370688530','1373280530','');");
E_D("replace into `qs_promotion` values('284','1','2','7197','4295','221','1371652172','1390746572','');");
E_D("replace into `qs_promotion` values('193','1','4','5790','1763','30','1369647765','1372239765','#00f');");
E_D("replace into `qs_promotion` values('191','1','1','5790','1763','30','1369647731','1372239731','');");
E_D("replace into `qs_promotion` values('192','1','1','5790','1631','30','1369647752','1372239752','');");
E_D("replace into `qs_promotion` values('189','1','1','6842','3918','30','1369478516','1372070516','');");
E_D("replace into `qs_promotion` values('188','1','1','6842','3927','30','1369478503','1372070503','');");
E_D("replace into `qs_promotion` values('187','1','1','6842','3926','30','1369478496','1372070496','');");
E_D("replace into `qs_promotion` values('211','1','1','7005','4103','30','1370047803','1372639803','');");
E_D("replace into `qs_promotion` values('253','1','3','6448','4206','20','1371115472','1372843472','');");
E_D("replace into `qs_promotion` values('254','1','1','7116','4162','30','1371117539','1373709539','');");
E_D("replace into `qs_promotion` values('255','1','1','7116','4158','30','1371117690','1373709690','');");
E_D("replace into `qs_promotion` values('256','1','1','7133','4208','15','1371127343','1372423343','');");
E_D("replace into `qs_promotion` values('257','1','4','7133','4208','7','1371127369','1371732169','#f00');");
E_D("replace into `qs_promotion` values('121','1','1','6261','3524','60','1368414129','1373598129','');");
E_D("replace into `qs_promotion` values('120','1','1','6261','3520','60','1368414106','1373598106','');");
E_D("replace into `qs_promotion` values('232','1','3','6816','4172','30','1370688522','1373280522','');");
E_D("replace into `qs_promotion` values('119','1','1','6261','3521','60','1368414085','1373598085','');");
E_D("replace into `qs_promotion` values('224','1','1','7097','4137','15','1370432268','1371728268','');");
E_D("replace into `qs_promotion` values('234','1','3','6816','4170','30','1370688537','1373280537','');");
E_D("replace into `qs_promotion` values('219','1','2','6720','3749','30','1370318652','1372910652','');");
E_D("replace into `qs_promotion` values('218','1','1','7069','4134','15','1370316395','1371612395','');");
E_D("replace into `qs_promotion` values('216','1','1','7045','4121','15','1370260899','1371556899','');");
E_D("replace into `qs_promotion` values('231','1','2','7108','4154','10','1370657827','1371521827','');");
E_D("replace into `qs_promotion` values('239','1','4','7123','4193','30','1370853491','1373445491','#00f');");
E_D("replace into `qs_promotion` values('236','1','2','7123','4195','30','1370853176','1373445176','');");
E_D("replace into `qs_promotion` values('215','1','1','7033','4118','15','1370251714','1371547714','');");
E_D("replace into `qs_promotion` values('227','1','2','7104','4148','10','1370516855','1371380855','');");
E_D("replace into `qs_promotion` values('248','1','2','6448','4203','20','1371114685','1372842685','');");
E_D("replace into `qs_promotion` values('247','1','1','6443','3569','30','1371095798','1373687798','');");
E_D("replace into `qs_promotion` values('260','1','1','7137','4217','15','1371211373','1372507373','');");
E_D("replace into `qs_promotion` values('259','1','1','7099','4140','15','1371195954','1372491954','');");
E_D("replace into `qs_promotion` values('258','1','1','7134','4210','15','1371173728','1372469728','');");
E_D("replace into `qs_promotion` values('186','1','2','6843','3929','30','1369389164','1371981164','');");
E_D("replace into `qs_promotion` values('184','1','3','6835','3910','30','1369356770','1371948770','');");
E_D("replace into `qs_promotion` values('183','1','3','6835','3911','30','1369356755','1371948755','');");
E_D("replace into `qs_promotion` values('181','1','2','6836','3909','30','1369281583','1371873583','');");
E_D("replace into `qs_promotion` values('180','1','1','6836','3909','30','1369281562','1371873562','');");
E_D("replace into `qs_promotion` values('268','1','1','7175','4260','15','1371464535','1372760535','');");
E_D("replace into `qs_promotion` values('267','1','1','7162','4239','30','1371439217','1374031217','');");
E_D("replace into `qs_promotion` values('266','1','2','7161','4232','10','1371436026','1372300026','');");
E_D("replace into `qs_promotion` values('230','1','1','7108','4154','15','1370657821','1371953821','');");
E_D("replace into `qs_promotion` values('177','1','1','6777','3811','30','1369222104','1371814104','');");
E_D("replace into `qs_promotion` values('178','1','4','6777','3813','30','1369222118','1371814118','#00f');");
E_D("replace into `qs_promotion` values('217','1','1','7046','4122','30','1370310502','1372902502','');");
E_D("replace into `qs_promotion` values('223','1','1','7082','4135','15','1370395512','1371691512','');");
E_D("replace into `qs_promotion` values('197','1','1','6860','3942','30','1369705279','1372297279','');");
E_D("replace into `qs_promotion` values('198','1','1','6528','3636','30','1369705489','1372297489','');");
E_D("replace into `qs_promotion` values('199','1','1','6528','3626','30','1369705496','1372297496','');");
E_D("replace into `qs_promotion` values('200','1','2','6528','3636','30','1369705510','1372297510','');");
E_D("replace into `qs_promotion` values('226','1','1','7104','4148','15','1370516847','1371812847','');");
E_D("replace into `qs_promotion` values('261','1','1','7157','4226','15','1371430528','1372726528','');");
E_D("replace into `qs_promotion` values('203','1','3','6843','3930','30','1369804879','1372396879','');");
E_D("replace into `qs_promotion` values('204','1','4','5687','1265','30','1369819843','1372411843','#f00');");
E_D("replace into `qs_promotion` values('205','1','1','6958','4069','30','1369825045','1372417045','');");
E_D("replace into `qs_promotion` values('206','1','1','6962','4079','30','1369878283','1372470283','');");
E_D("replace into `qs_promotion` values('207','1','4','6962','4089','30','1369878404','1372470404','#00f');");
E_D("replace into `qs_promotion` values('265','1','2','7161','4233','10','1371436012','1372300012','');");
E_D("replace into `qs_promotion` values('235','1','2','7121','4190','15','1370850801','1372146801','');");
E_D("replace into `qs_promotion` values('210','1','1','6053','2448','30','1369898520','1372490520','');");
E_D("replace into `qs_promotion` values('220','1','1','6720','3749','30','1370318665','1372910665','');");
E_D("replace into `qs_promotion` values('264','1','1','6558','3669','30','1371433352','1374025352','');");
E_D("replace into `qs_promotion` values('222','1','2','6720','3746','30','1370318718','1372910718','');");
E_D("replace into `qs_promotion` values('228','1','1','7107','4149','15','1370519600','1371815600','');");
E_D("replace into `qs_promotion` values('229','1','1','7109','4151','15','1370572269','1371868269','');");
E_D("replace into `qs_promotion` values('238','1','2','7123','4194','30','1370853413','1373445413','');");
E_D("replace into `qs_promotion` values('240','1','4','7123','4192','30','1370853503','1373445503','#00f');");
E_D("replace into `qs_promotion` values('241','1','1','7124','4196','15','1370864957','1372160957','');");
E_D("replace into `qs_promotion` values('242','1','2','7124','4196','10','1370864963','1371728963','');");

require("../../inc/footer.php");
?>