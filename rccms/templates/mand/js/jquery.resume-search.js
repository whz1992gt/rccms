function allaround(templatedir,dir,jobslisturl,getkey,getarr)
{
	var  href="javascript:void(0);";
	get=getarr.split(",");
	var opthtm='';
	opthtm+='<div class="s1">';
	opthtm+='<div class="litit keysel">�ؼ��֣�</div>';
	opthtm+='<div class="littxt">';
	opthtm+='<div class="keybox">';
	opthtm+='<div id="searcform" >';
	opthtm+='<div class="keyinputbox">';
	opthtm+='<input name="key" type="text" id="key" maxlength="25" value="'+getkey+'"/>';
	opthtm+='</div>';
	opthtm+='<input name="category" type="hidden" value="'+get[0]+'" />';
	opthtm+='<input name="subclass" type="hidden" value="'+get[1]+'" />';
	opthtm+='<input name="district" type="hidden" value="'+get[2]+'" />';
	opthtm+='<input name="sdistrict" type="hidden" value="'+get[3]+'" />';
	opthtm+='<input name="experience" type="hidden" value="'+get[4]+'" />';
	opthtm+='<input name="education" type="hidden" value="'+get[5]+'" />';
	opthtm+='<input name="sex" type="hidden" value="'+get[6]+'" />';
	opthtm+='<input name="photo" type="hidden" value="'+get[7]+'" />';
	opthtm+='<input name="talent" type="hidden" value="'+get[8]+'" />';
	opthtm+='<input name="inforow" type="hidden" value="'+get[9]+'" />';
	opthtm+='<input name="sort" type="hidden" value="" />';
	opthtm+='<input name="page" type="hidden" value="1" />';
	opthtm+='<div class="subinputbox"><input type="button" name=""  id="soall" value="��ȫ��" /></div>';
	if (get[0]+get[1]+get[2]+get[3]+get[4]+get[5]+get[6]+get[7]+get[8])
	{
	opthtm+='<div class="subinputbox1"><input type="button" name="" id="socat"  value="�ѱ���" /></div>';
	}
	opthtm+='</div>';
	opthtm+='</div>	';			
	//opthtm+='<div class="keymore link_greenu"><a href="'+href+'" id="advopen">��ʾ��������</a></div>';
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
	opthtm+='<div class="clear"></div>';
		// opthtm+='<div class="litit csel">ְλ��</div>';
		opthtm+='<div class="zwss">';
		opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">ְλ��</span>';
		opthtm+='<ul class="link_bks res_ul">';
		// opthtm+='<li class="res_zw"><a href="'+href+'"  class="clearopt" id="category-'+get[0]+'" style="color:#fff">����</a></li>';
		var len=QS_jobs_parent.length;
		minlen=len>18?17:len;
		for(var i=0;i<minlen;i++)
		{
		arr    =QS_jobs_parent[i].split(",");
		if(get[0]==arr[0]){ 
		opthtm+='<li class="hr"><span  id="category-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		}else{
		opthtm+='<li><a href="'+href+'" id="category-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
		} 
		}
		if (len>18)
		{
			for(var i=minlen;i<len;i++)
			{
			arr    =QS_jobs_parent[i].split(",");
		if(get[0]==arr[0]){ 
		opthtm+='<li class="hr"><span  id="category-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		}else{
		opthtm+='<li class="hide"><a href="'+href+'" id="category-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
		} 
			}
			opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
		}
		opthtm+='</ul>';
		opthtm+='<div class="clear"></div>';
		opthtm+='</div>';	
		opthtm+='<div class="clear"></div>'; 
		subclassstr=QS_jobs[get[0]];
		if (subclassstr)//���������
		{ 
					arrsubclass=subclassstr.split("|");
					var len=arrsubclass.length;
					if (len>0)
					{
						opthtm+='<div class="zwss">';
						opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">רҵ��</span>';
						opthtm+='<ul class="link_bks res_ul">';
							// opthtm+='<div class="litit csel"></div>';
							// opthtm+='<div class="sub-type zwss">';
							// opthtm+='<ul class="link_bks res_ul">';		
							minlen=len>12?11:len;
							for(var i=0;i<minlen;i++)
							{
							arr    =arrsubclass[i].split(",");
							if(get[1]==arr[0]){ 
		                    opthtm+='<li class="hr"><span  id="subclass-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		                    }else{
		                    opthtm+='<li><a href="'+href+'" id="subclass-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	                       	}  
							}
							if (len>12)
							{
								for(var i=minlen;i<len;i++)
								{
								arr    =arrsubclass[i].split(",");
							if(get[1]==arr[0]){ 
		                    opthtm+='<li class="hr"><span  id="subclass-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		                    }else{
		                    opthtm+='<li class="hide"><a href="'+href+'" id="subclass-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	                       	}  
								}
								opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
							}
							opthtm+='</ul>';
							opthtm+='<div class="clear"></div>';
							opthtm+='</div>';	
							opthtm+='<div class="clear"></div>'; 
		}
	}
		// opthtm+='<div class="litit csel">������</div>';
		// opthtm+='<div class="zwss">';
		// opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">������</span>';
		// opthtm+='<ul class="min res_ul">';
		// opthtm+='<li class="res_zw">����</a></li>';
		//I can't receiver it. but this is change the less way.

		// var len=QS_city_parent.length;
		// // alert(get[2]);
		// minlen=len>12?11:len;
		// for(var i=0;i<minlen;i++)
		// {
		// arr    =QS_city_parent[i].split(",");
		// if(get[2]==arr[0]){ 
		// opthtm+='<li class="hr"><span  id="district-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		// }else{
		//  opthtm+='<li><a href="'+href+'" id="district-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	 //    }  
		// }
		// if (len>12)
		// {
		// 	for(var i=minlen;i<len;i++)
		// 	{
		// 	arr    =QS_city_parent[i].split(",");
		// 	if(get[2]==arr[0]){ 
		//      opthtm+='<li class="hr"><span  id="district-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		//      }else{
		//      opthtm+='<li class="hide"><a href="'+href+'" id="district-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	 //          } 
		// 	}
		// 	opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
		// }
	// 	opthtm+='</ul>';
	// 	opthtm+='<div class="clear"></div>';
	// 	opthtm+='</div>';
	// 	opthtm+='<div class="clear"></div>';
	// 	sdistrictstr=QS_city[get[2]];
	// 	if (sdistrictstr)//���������
	// 	{
	// 				arrsubclass=sdistrictstr.split("|");
	// 				var len=arrsubclass.length;
	// 				if (len>0)
	// 				{
	// 						opthtm+='<div class="litit csel"></div>';
	// 						opthtm+='<div class="zwss sub-type">';
	// 						opthtm+='<ul class="link_bk res_ul">';		
	// 						minlen=len>12?11:len;
	// 						for(var i=0;i<minlen;i++)
	// 						{
	// 						arr    =arrsubclass[i].split(",");
	// 						if(get[3]==arr[0]){ 
	// 	                    opthtm+='<li class="hr"><span  id="sdistrict-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
	// 	                    }else{
	// 	                    opthtm+='<li><a href="'+href+'" id="sdistrict-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	//                        	}  
	// 						}
	// 						if (len>12)
	// 						{
	// 							for(var i=minlen;i<len;i++)
	// 							{
	// 							arr    =arrsubclass[i].split(","); 
	// 						if(get[3]==arr[0]){ 
	// 	                    opthtm+='<li class="hr"><span  id="sdistrict-'+arr[0]+'" class="opt">'+arr[1]+'</span></li>';
	// 	                    }else{
	// 	                    opthtm+='<li class="hide"><a href="'+href+'" id="sdistrict-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	//                        	}
	// 							}
	// 							opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
	// 						}
	// 						opthtm+='</ul>';
	// 						opthtm+='<div class="clear"></div>';
	// 						opthtm+='</div>';	
	// 						opthtm+='<div class="clear"></div>'; 
	// 	}
	// }
	// opthtm+='<div class="litit csel">�������飺</div>';
	opthtm+='<div class="zwss min" style="width:100%">';
	opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">���飺</span>';
	opthtm+='<ul class="min res_ul">';	
	// opthtm+='<li class="res_zw">����</a></li>';
	if (get[4]=='')
	{
		var name='';
		for(var i=0;i<QS_experience.length;i++)
		{
		arr    =QS_experience[i].split(",");
		if(arr[0]==get[4]){
			name=arr[1];
			opthtm+='<li class="hr"><span  id="experience-'+get[4]+'">'+name+'</span></li>';
		}else{
			opthtm+='<li><a href="'+href+'" id="experience-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
			}
		}
	}
	else
	{
		
		for(var i=0;i<QS_experience.length;i++)
		{
			arr    =QS_experience[i].split(",");
			if (arr[0]==get[4]){
				 name=arr[1];
				 opthtm+='<li class="hr"><span  id="experience-'+get[4]+'">'+name+'</span></li>';
			}else{
				opthtm+='<li><a href="'+href+'" id="experience-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
			}
		}
		// if (name)
		// {
		// opthtm+='<li class="hr"><span  id="experience-'+get[4]+'">'+name+'</span></li>';	
		// }
		// else
		// {
		// 	alert('��������');
		// }
	}
	opthtm+='</ul>';
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
	opthtm+='<div class="clear"></div>';	  
	opthtm+='<div class="advbox" id="advbox" style="display:block">';
	// opthtm+='<div class="litit csel">ѧ����</div>';
	opthtm+='<div class="zwss">';
	opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">ѧ����</span>';
	opthtm+='<ul class="res_ul">';
	if (get[5]=='')
	{
		var name='';
		for(var i=0;i<QS_education.length;i++)
		{
		arr    =QS_education[i].split(",");
		if (arr[0]==get[5]){
				name=arr[1];
				opthtm+='<li class="hr"><span  id="education-'+get[5]+'">'+name+'</span></li>';
			}else{
				opthtm+='<li><a href="'+href+'" id="education-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
			}
		// opthtm+='<li><a href="'+href+'" id="education-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
		}
	}
	else
	{		
		for(var i=0;i<QS_education.length;i++)
		{
			arr    =QS_education[i].split(",");
			if (arr[0]==get[5]){
				name=arr[1];
				opthtm+='<li class="hr"><span  id="education-'+get[5]+'">'+name+'</span></li>';
			}else{
				opthtm+='<li><a href="'+href+'" id="education-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
			}
		}
		if(!name){
			alert('��������');
		}
		// if (name)
		// {
		// opthtm+='<li class="hr"><span  id="education-'+get[5]+'">'+name+'</span></li>';	
		// for(var i=0;i<QS_education.length;i++)
		// {
		// arr    =QS_education[i].split(",");

		// opthtm+='<li><a href="'+href+'" id="education-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
		// }
		// }
		// else
		// {
		// 	alert('��������');
		// }
	}
	opthtm+='</ul>';
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
	opthtm+='<div class="clear"></div>';
	// opthtm+='<div class="litit csel">�Ա�</div>';
	opthtm+='<div class="zwss min">';
	opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">�Ա�</span>';
	opthtm+='<ul class="min res_ul">';
	if (get[6]=='')
	{
		var name='����';
		opthtm+='<li class="hr"><span  id="sex-'+get[6]+'">'+name+'</span></li>';
		opthtm+='<li><a href="'+href+'" id="sex-1"  class="opt">��</a></li>';
		opthtm+='<li><a href="'+href+'" id="sex-2"  class="opt">Ů</a></li>';	
	}
	else
	{
		if(name!=''){
			name
		}
		name=get[6]=="1"?"��":"Ů";
		//ugly
		// alert(get[6]);
		if(name=='��'){
			opthtm+='<li><a href="'+href+'" id="sex-" class="opt">����</a></li>';
			opthtm+='<li class="hr"><span  id="sex-'+get[6]+'">'+name+'</span></li>';
			opthtm+='<li><a href="'+href+'" id="sex-2"  class="opt">Ů</a></li>';
		}else{
			opthtm+='<li><a href="'+href+'" id="sex-" class="opt">����</a></li>';
			opthtm+='<li><a href="'+href+'" id="sex-1"  class="opt">��</a></span></li>';
			opthtm+='<li class="hr"><span  id="sex-'+get[6]+'">'+name+'</span></li>';	
		}
		// get[6] = '';
	}
	opthtm+='</ul>';
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
	opthtm+='<div class="clear"></div>';
	// opthtm+='<div class="litit csel">��Ƭ��</div>';
	opthtm+='<div class="zwss min">';
	opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">��Ƭ��</span>';
	opthtm+='<ul class="min res_ul">';
	if (get[7]=='')
	{
		var name='����';
		opthtm+='<li class="hr"><span  id="photo-'+get[7]+'">'+name+'</span></li>';
	opthtm+='<li><a href="'+href+'" id="photo-1"  class="opt">��</a></li>';
	opthtm+='<li><a href="'+href+'" id="photo-0"  class="opt">��</a></li>';
	}
	else
	{
		var name=get[7]=="1"?"��":"��";
		if(name=='��'){
			opthtm+='<li><a href="'+href+'" id="photo-" class="opt">����</a></li>';
			opthtm+='<li class="hr"><span  id="photo-'+get[7]+'">'+name+'</span></li>';
			opthtm+='<li><a href="'+href+'" id="photo-0"  class="opt">��</a></li>';
		}else{
			opthtm+='<li><a href="'+href+'" id="photo-" class="opt">����</a></li>';
			opthtm+='<li><a href="'+href+'" id="photo-1"  class="opt">��</a></li>';
			opthtm+='<li class="hr"><span  id="photo-'+get[7]+'">'+name+'</span></li>';	
		}
	
	}
	opthtm+='</ul>';
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
	opthtm+='<div class="clear"></div>';
	// opthtm+='<div class="litit csel">�ȼ���</div>';
	opthtm+='<div class="zwss min">';
	opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">�ȼ���</span>';
	opthtm+='<ul class="min res_ul">';
	if (get[8]=='')
	{
		var name='����';
		opthtm+='<li class="hr"><span  id="talent-'+get[8]+'">'+name+'</span></li>';
	opthtm+='<li><a href="'+href+'" id="talent-1"  class="opt">��ͨ</a></li>';
	opthtm+='<li><a href="'+href+'" id="talent-2"  class="opt">�߼�</a></li>';
	}
	else
	{
		var name=get[8]=="1"?"��ͨ":"�߼�";
		if(name=='��ͨ'){
			opthtm+='<li><a href="'+href+'" id="talent-" class="opt">����</a></li>';
			opthtm+='<li class="hr"><span  id="talent-'+get[8]+'">'+name+'</span></li>';
			opthtm+='<li><a href="'+href+'" id="talent-2"  class="opt">�߼�</a></li>';
		}else{
			opthtm+='<li><a href="'+href+'" id="talent-" class="opt">����</a></li>';
			opthtm+='<li><a href="'+href+'" id="talent-1"  class="opt">��ͨ</a></li>';
			opthtm+='<li class="hr"><span  id="talent-'+get[8]+'">'+name+'</span></li>';
		}
	
	}
	opthtm+='</ul>';
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
			if(get[2] == ''){
			sdistrictstr=QS_city[14];
			arrsubclass=sdistrictstr.split("|");
			var len=arrsubclass.length;
			if (len>0)
			{
				// opthtm+='<div class="litit csel"></div>';
				// opthtm+='<div class="zwss sub-type">';
				// opthtm+='<ul class="link_bk res_ul">';
				opthtm+='<div class="zwss">';
				opthtm+='<ul class="min res_ul">';	
				opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">��������������</span>';	
				minlen=len>12?11:len;
				for(var i=0;i<minlen;i++)
				{
				arr    =arrsubclass[i].split(",");
				if(get[3]==arr[0]){ 
	            opthtm+='<li class="hr"><span  id="sdistrict-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
	            }else{
	            opthtm+='<li><a href="'+href+'" id="sdistrict-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	           	}  
				}
				if (len>12)
				{
					for(var i=minlen;i<len;i++)
					{
					arr    =arrsubclass[i].split(","); 
				if(get[3]==arr[0]){ 
	            opthtm+='<li class="hr"><span  id="sdistrict-'+arr[0]+'" class="opt">'+arr[1]+'</span></li>';
	            }else{
	            opthtm+='<li class="hide"><a href="'+href+'" id="sdistrict-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	           	}
					}
					opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
				}
				opthtm+='</ul>';
				opthtm+='<div class="clear"></div>';
				opthtm+='</div>';	
				opthtm+='<div class="clear"></div>'; 
			}
		}
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
	opthtm+='<div class="bottomheight"></div>';
	opthtm+='<div class="myselbox" id="myselbox"><div class="left">��ѡ������</div><div class="optcentet"></div><div class="right"><div class="clearoptall"><a  href="'+href+'" class="clearall">�������</a></div></div><div class="clear"></div>';
	opthtm+='</div>';
	$("#resumesearchbox").html(opthtm);
	//�򿪸���ѡ��
	$(".more a").click(function ()
	{
		if ($(this).parent().prev().css('display')=='none')
		{
			$(this).parent().prevAll('.hide').css("display",'block');
			$(this).html('����').blur();
		}
		else
		{
			$(this).parent().prevAll('.hide').css("display",'none');
			$(this).html('����').blur();
		}
	
	});	
	//��ʾ��ѡ
	 var patrn=/^(�����룺���ܣ�)/i; 
		if (patrn.exec(getkey))
		{
			getkey='';
		}
	var selopt=getkey+get[0]+get[1]+get[2]+get[3]+get[4]+get[5]+get[6]+get[7]+get[8];
	if (selopt!='')
	{
		selbox=$("#myselbox .optcentet");
		if (getkey)	{
		selbox.append('<a href="'+href+'" class="clearopt" id="key-'+getkey+'" title="���ȡ��"><u>�ؼ���:</u>'+getkey+'</a>');
		}
		if (get[2])	{
		var optval=$('#district-'+get[2]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="district-'+get[2]+'" title="���ȡ��"><u>����:</u>'+optval+'</a>');
		}
		if (get[3])	{
		var optval=$('#sdistrict-'+get[3]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="sdistrict-'+get[3]+'" title="���ȡ��"><u>����:</u>'+optval+'</a>');
		}
		if (get[0])	{
		var optval=$('#category-'+get[0]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="category-'+get[0]+'" title="���ȡ��"><u>ְλ:</u>'+optval+'</a>');
		}
		if (get[1])	{
		var optval=$('#subclass-'+get[1]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="subclass-'+get[1]+'" title="���ȡ��"><u>ְλ����:</u>'+optval+'</a>');
		}
		if (get[4])	{
		var optval=$('#experience-'+get[4]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="experience-'+get[4]+'" title="���ȡ��"><u>��������:</u>'+optval+'</a>');
		}
		if (get[5])	{
		var optval=$('#education-'+get[5]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="education-'+get[5]+'" title="���ȡ��"><u>ѧ��:</u>'+optval+'</a>');
		}
		if (get[6])	{
		var optval=$('#sex-'+get[6]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="sex-'+get[6]+'" title="���ȡ��"><u>�Ա�:</u>'+optval+'</a>');
		}
		if (get[7])	{
		var optval=$('#photo-'+get[7]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="photo-'+get[7]+'" title="���ȡ��"><u>��Ƭ:</u>'+optval+'</a>');
		}
		if (get[8])	{
		var optval=$('#talent-'+get[8]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="talent-'+get[8]+'" title="���ȡ��"><u>�ȼ�:</u>'+optval+'</a>');
		}
		selbox.append('<div class="clear"></div>');
		$("#jobsearchbox").css('padding-bottom',0);
		$("#myselbox").show();
		//ɾ������
		$(".clearopt").click(function () {
		var patrn=/^(�����룺���ܣ�)/i; 
	 	var key=$("#key").val();
		if (patrn.exec(key)) $("#key").val('');
			var opt=$(this).attr('id');
			opt=opt.split("-");
		$("#searcform input[name="+opt[0]+"]").val('');
		if (opt[0]=="category") $("#searcform input[name='subclass']").val('');//ȡ�����࣬ͬʱȡ������
		if (opt[0]=="district") $("#searcform input[name='sdistrict']").val('');//ȡ�����࣬ͬʱȡ������
		flag=false;
		setTimeout(function() {
		search_location(jobslisturl);
		}, 1);
		});
		//ɾ������
		$(".clearall").click(function () {
		$("#searcform input[type='hidden']").val('');
		$("#searcform input[name='key']").val('');
		setTimeout(function() {
		search_location(jobslisturl);
		}, 1);
		});	
	}
	//�Ƿ���ʾ��������
	// if (get[5]+get[6]+get[7]+get[8])
	// {
	// 	$("#advbox").show();
	// }
	// //��������
	// if($("#advbox").css('display')=='none')
	// {
	// 	$(".keymore").css('background-position','40px -64px');
	// 	$(".keymore a").html("��ʾ��������");
	// }
	// else
	// {
	// 	$(".keymore").css('background-position','40px -98px');
	// 	$(".keymore a").html("���ظ�������");
	// }
	// //�򿪸�������
	// $("#advopen").click(function () {
	// if($("#advbox").css('display')=='none')
	// {
	// 	$(".keymore").css('background-position','40px -98px');
	// 	$(".keymore a").html("���ظ�������");
	// }
	// else
	// {
	// 	$(".keymore").css('background-position','40px -64px');
	// 	$(".keymore a").html("��ʾ��������");
	// }
	// $("#advbox").slideToggle(80);
	// });	
	//
	var flag=true;
	//����Ŀѡ��
	$(".opt").click(function (){
	var patrn=/^(�����룺���ܣ�)/i; 
	 	var key=$("#key").val();
		if (patrn.exec(key)) $("#key").val('');
	var opt=$(this).attr('id');
	    opt=opt.split("-");
	$("#searcform input[name="+opt[0]+"]").val(opt[1]);
	flag=false;
	setTimeout(function() {
	search_location(jobslisturl);
	}, 1);
	});
	//�ѱ���
	$("#socat").click(function () {
		//�ѱ���
	 	flag=false;
		setTimeout(function() {
		search_location(jobslisturl);
		}, 1);
	});
	

	
	$("#soall").click( function () {
		if (flag)//����ȫ�������ѡ��
		{			
			$("#searcform input[type='hidden']").val('');
		}
		var patrn=/^(�����룺���ܣ�)/i; 
	 	var key=$("#key").val();
		if (patrn.exec(key))
		{
			$("#key").val('');
		}
		search_location(jobslisturl);
	});
	
	$("#key").focus(function(){
		var patrn=/^(�����룺���ܣ�)/i; 
	 	var key=$("#key").val();
		if (patrn.exec(key))
		{
		$("#key").css('color','').val('');
		}  
	});
	$('#searcform input[name=key]').keydown(function(e){
	if(e.keyCode==13){
   search_location(jobslisturl)
	}
	});
	function search_location(jobslisturl)
	{ 
		$("body").append('<div id="pageloadingbox">ҳ�������....</div><div id="pageloadingbg"></div>');
		$("#pageloadingbg").css("opacity", 0.5);
		var key=$("#searcform input[name=key]").val();
		var category=$("#searcform input[name=category]").val();
		var subclass=$("#searcform input[name=subclass]").val();
		var district=$("#searcform input[name=district]").val();
		var sdistrict=$("#searcform input[name=sdistrict]").val();
		var experience=$("#searcform input[name=experience]").val();
		var education=$("#searcform input[name=education]").val();
		var sex=$("#searcform input[name=sex]").val();
		var photo=$("#searcform input[name=photo]").val();
		var talent=$("#searcform input[name=talent]").val();
		var inforow=$("#searcform input[name=inforow]").val();
		var sort_1=$("#searcform input[name=sort]").val();
		var page=$("#searcform input[name=page]").val();
		$.get(dir+"plus/ajax_search_location.php", {"act":jobslisturl,"key":key,"category":category,"subclass":subclass,"district":district,"sdistrict":sdistrict,"experience":experience,"education":education,"sex":sex,"photo":photo,"talent":talent,"inforow":inforow,"sort":sort_1,"page":page},
			function (data,textStatus)
			 {
				 window.location.href=data;
			 },"text"
		);
	}
}