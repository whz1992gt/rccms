function tagso(templatedir,dir,jobslisturl,getarr)
{
	var  href="javascript:void(0);";
	get=getarr.split(",");
	var opthtm='';
	opthtm+='<div class="s1" style="background:#F6F9FB">';
	opthtm+='<div id="searcform">';
	opthtm+='<input name="resumetag" type="hidden" value="'+get[4]+'" />';
	opthtm+='<input name="category" type="hidden" value="'+get[0]+'" />';
	opthtm+='<input name="subclass" type="hidden" value="'+get[1]+'" />';
	opthtm+='<input name="district" type="hidden" value="'+get[2]+'" />';
	opthtm+='<input name="sdistrict" type="hidden" value="'+get[3]+'" />';	
	opthtm+='<input name="inforow" type="hidden" value="'+get[5]+'" />';
	opthtm+='<input name="page" type="hidden" value="1" />';
	opthtm+='</div>';
	//opthtm+='<div class="litit csel">��ǩ��</div>';
	opthtm+='<div class="zwss min">';
	opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">��ǩ��</span>';
	opthtm+='<ul class="link_bk min res_ul">';
	if (get[4]=='')
	{
		var scalename='';
		for(var i=0;i<QS_resumetag.length;i++)
		{
			arr    =QS_resumetag[i].split(",");
			if(get[4]==arr[0]){
				scalename=arr[1];
				opthtm+='<li class="hr"><span  id="resumetag-'+get[4]+'">'+scalename+'</span></li>';
			}
			else{
				opthtm+='<li><a href="'+href+'" id="resumetag-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
			}
		}
	}
	else
	{
		
		for(var i=0;i<QS_resumetag.length;i++)
		{
			arr    =QS_resumetag[i].split(",");
			if (arr[0]==get[4]){
				scalename=arr[1];
				opthtm+='<li class="hr"><span  id="resumetag-'+get[4]+'">'+scalename+'</span></li>';	
			}else{
				opthtm+='<li><a href="'+href+'" id="resumetag-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
			}
		}
		// if (scalename)
		// {
		// opthtm+='<li class="hr"><span  id="resumetag-'+get[4]+'">'+scalename+'</span></li>';	
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
	if (get[0]=='')
	{
		// opthtm+='<div class="litit csel">ְλ��</div>';
		opthtm+='<div class="zwss">';
		opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">ְλ��</span>';
		opthtm+='<ul class="link_bk res_ul">';
		var len=QS_jobs_parent.length;
		minlen=len>12?11:len;
		for(var i=0;i<minlen;i++)
		{
		arr    =QS_jobs_parent[i].split(",");
		if (arr[0]==get[0]){
				categoryname=arr[1];
				opthtm+='<li class="hr"><span  id="category-'+get[0]+'">'+categoryname+'</span></li>';
		}else{
				opthtm+='<li><a href="'+href+'" id="category-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
		}
		// opthtm+='<li><a href="'+href+'" id="category-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
		}
		if (len>12)
		{
			for(var i=minlen;i<len;i++)
			{
				arr    =QS_jobs_parent[i].split(",");
				if (arr[0]==get[0]){
					categoryname=arr[1];
					opthtm+='<li class="hr"><span  id="category-'+get[0]+'">'+categoryname+'</span></li>';
				}else{
					opthtm+='<li><a href="'+href+'" id="category-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
				}
			// opthtm+='<li class="hide"><a href="'+href+'" id="category-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
			}
			opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
		}
		opthtm+='</ul>';
		opthtm+='<div class="clear"></div>';
		opthtm+='</div>';	
		opthtm+='<div class="clear"></div>';
	}
	else
	{
		var categoryname='';
		opthtm+='<div class="zwss">';
		opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">ְλ��</span>';
		opthtm+='<ul class="link_bk res_ul">';
		for(var i=0;i<QS_jobs_parent.length;i++)
		{
			arr    =QS_jobs_parent[i].split(",");
			if (arr[0]==get[0]){
				categoryname=arr[1];
				opthtm+='<li class="hr"><span  id="category-'+get[0]+'">'+categoryname+'</span></li>';
			}else{
				opthtm+='<li><a href="'+href+'" id="category-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
			}
		}
		opthtm+='</ul>';
		opthtm+='<div class="clear"></div>';
		opthtm+='</div>';	
		opthtm+='<div class="clear"></div>';
		if(!categoryname){
			alert('��������');
		}
		// opthtm+='<div class="litit csel">ְλ��</div>';
		// opthtm+='<div class="zwss">';
		// opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">ְλ��</span>';
		// opthtm+='<ul class="link_bk res_ul">';
		// if (categoryname)
		// {
		// 	subclassstr=QS_jobs[get[0]];
			// var b="";
			// if (subclassstr)
			// {
			// 	b="<span>��</span>";
			// }
		// opthtm+='<li class="hr"><span  id="category-'+get[0]+'">'+categoryname+'</span></li>';
		// }
		// else
		// {
		// 	alert('��������');
		// }
		// opthtm+='</ul>';
		// opthtm+='<div class="clear"></div>';
		// opthtm+='</div>';	
		// opthtm+='<div class="clear"></div>';
		subclassstr=QS_jobs[get[0]];
		if (subclassstr)//���������
		{
				if (get[1]=='')
				{
					arrsubclass=subclassstr.split("|");
					var len=arrsubclass.length;
					if (len>0)
					{
							// opthtm+='<div class="litit csel">ְλ���ࣺ</div>';
							opthtm+='<div class="zwss">';
							opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">רҵ��</span>';
							opthtm+='<ul class="link_bk res_ul">';		
							// opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">ְλ���ࣺ</span>';
							minlen=len>12?11:len;
							for(var i=0;i<minlen;i++)
							{
							arr    =arrsubclass[i].split(",");
							opthtm+='<li><a href="'+href+'" id="subclass-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
							}
							if (len>12)
							{
								for(var i=minlen;i<len;i++)
								{
								arr    =arrsubclass[i].split(",");
								opthtm+='<li class="hide"><a href="'+href+'" id="subclass-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
								}
								opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
							}
							opthtm+='</ul>';
							opthtm+='<div class="clear"></div>';
							opthtm+='</div>';	
							opthtm+='<div class="clear"></div>';
					}
				}
				else
				{
					var subclassname='';
					arrsubclass=subclassstr.split("|");
					opthtm+='<div class="zwss">';
					opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">רҵ��</span>';
					opthtm+='<ul class="link_bk res_ul">';
					// opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">ְλ���ࣺ</span>';
					for(var i=0;i<arrsubclass.length;i++)
					{
						arr    =arrsubclass[i].split(",");
						if (arr[0]==get[1]){
							subclassname=arr[1];
							opthtm+='<li class="hr"><span  id="subclass-'+get[1]+'">'+subclassname+'</span></li>';
						}else{
							opthtm+='<li><a href="'+href+'" id="subclass-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
						}
					}
					// if(subclassname)
					// {
					// 	// opthtm+='<div class="litit csel">ְλ���ࣺ</div>';
					// 	opthtm+='<div class="zwss">';
					// 	opthtm+='<ul class="link_bk res_ul">';
					// 	opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">ְλ���ࣺ</span>';
					// 	opthtm+='<li class="hr"><span  id="subclass-'+get[1]+'">'+subclassname+'</span></li>';
					// 	opthtm+='</ul>';
					// 	opthtm+='<div class="clear"></div>';
					// 	opthtm+='</div>';	
					// 	opthtm+='<div class="clear"></div>';
					// }
					opthtm+='</ul>';
					opthtm+='<div class="clear"></div>';
					opthtm+='</div>';	
					opthtm+='<div class="clear"></div>';
				}
		}
	}
	if(get[2] == ''){
			sdistrictstr=QS_city[14];
			arrsubclass=sdistrictstr.split("|");
			var len=arrsubclass.length;
			if (len>0)
			{
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
	// if (get[2]=='')
	// {
	// 	// opthtm+='<div class="litit csel">������</div>';
	// 	opthtm+='<div class="zwss">';
	// 	opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">������</span>';
	// 	opthtm+='<ul class="link_bk min res_ul">';
	// 	var len=QS_city_parent.length;
	// 	minlen=len>12?11:len;
	// 	for(var i=0;i<minlen;i++)
	// 	{
	// 		arr    =QS_city_parent[i].split(",");
	// 		if (arr[0]==get[2]){
	// 				districtname=arr[1];
	// 				opthtm+='<li class="hr"><span  id="district-'+get[2]+'">'+districtname+'</span></li>';
	// 		}else{
	// 				opthtm+='<li><a href="'+href+'" id="district-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	// 		}
	// 	// opthtm+='<li><a href="'+href+'" id="district-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	// 	}
	// 	if (len>12)
	// 	{
	// 		for(var i=minlen;i<len;i++)
	// 		{
	// 			arr    =QS_city_parent[i].split(",");
	// 			if (arr[0]==get[2]){
	// 				districtname=arr[1];
	// 				opthtm+='<li class="hr"><span  id="district-'+get[2]+'">'+districtname+'</span></li>';
	// 			}else{
	// 				opthtm+='<li><a href="'+href+'" id="district-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	// 			}
	// 		// opthtm+='<li class="hide"><a href="'+href+'" id="district-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	// 		}
	// 		opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
	// 	}
	// 	opthtm+='</ul>';
	// 	opthtm+='<div class="clear"></div>';
	// 	opthtm+='</div>';
	// 	opthtm+='<div class="clear"></div>';
	// }
	// else
	// {
	// 	var districtname='';
	// 	opthtm+='<div class="zwss">';
	// 	opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">������</span>';
	// 	opthtm+='<ul class="link_bk res_ul">';
	// 	for(var i=0;i<QS_city_parent.length;i++)
	// 	{
	// 		arr    =QS_city_parent[i].split(",");
	// 		if (arr[0]==get[2]){
	// 			districtname=arr[1];
	// 			opthtm+='<li class="hr"><span  id="district-'+get[2]+'">'+districtname+'</span></li>';
	// 		}else{
	// 			opthtm+='<li><a href="'+href+'" id="district-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	// 		}
	// 	}
	// 	opthtm+='</ul>';
	// 	opthtm+='<div class="clear"></div>';
	// 	opthtm+='</div>';	
	// 	// opthtm+='<div class="litit csel">������</div>';
	// 	// opthtm+='<div class="zwss">';
	// 	// opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">������</span>';
	// 	// opthtm+='<ul class="link_bk res_ul">';
	// 	// if (districtname)
	// 	// {
	// 	// 	sdistrictstr=QS_city[get[2]];
	// 	// 	// var b="";
	// 	// 	// if (sdistrictstr)
	// 	// 	// {
	// 	// 	// 	b="<span>��</span>";
	// 	// 	// }
	// 	// opthtm+='<li class="hr"><span  id="district-'+get[2]+'">'+districtname+'</span></li>';
	// 	// }
	// 	// else
	// 	// {
	// 	// 	alert('��������');
	// 	// }
	// 	// opthtm+='</ul>';
	// 	// opthtm+='<div class="clear"></div>';
	// 	// opthtm+='</div>';	
	// 	opthtm+='<div class="clear"></div>';
	// 	sdistrictstr=QS_city[get[2]];
	// 	if (sdistrictstr)//���������
	// 	{
	// 			if (get[3]=='')
	// 			{
	// 				arrsubclass=sdistrictstr.split("|");
	// 				var len=arrsubclass.length;
	// 				if (len>0)
	// 				{
	// 						// opthtm+='<div class="litit csel">�������ࣺ</div>';
	// 						opthtm+='<div class="zwss min"  style="width:100%;">';
	// 						opthtm+='<ul class="link_bk res_ul">';	
	// 						opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">�������ࣺ</span>';
	// 						minlen=len>12?11:len;
	// 						for(var i=0;i<minlen;i++)
	// 						{
	// 						arr    =arrsubclass[i].split(",");
	// 						opthtm+='<li><a href="'+href+'" id="sdistrict-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	// 						}
	// 						if (len>12)
	// 						{
	// 							for(var i=minlen;i<len;i++)
	// 							{
	// 							arr    =arrsubclass[i].split(",");
	// 							opthtm+='<li class="hide"><a href="'+href+'" id="sdistrict-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	// 							}
	// 							opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
	// 						}
	// 						opthtm+='</ul>';
	// 						opthtm+='<div class="clear"></div>';
	// 						opthtm+='</div>';	
	// 						opthtm+='<div class="clear"></div>';
	// 				}
	// 			}
	// 			else
	// 			{
	// 				arrsubclass=sdistrictstr.split("|");
	// 				opthtm+='<div class="zwss min" style="width:100%">';
	// 				opthtm+='<ul class="link_bk res_ul">';
	// 				opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">�������ࣺ</span>';
	// 				for(var i=0;i<arrsubclass.length;i++)
	// 				{
	// 					arr    =arrsubclass[i].split(",");
	// 					if (arr[0]==get[3]){
	// 						subclassname=arr[1];
	// 						opthtm+='<li class="hr"><span  id="sdistrict-'+get[3]+'">'+subclassname+'</span></li>';
	// 					}else{
	// 						opthtm+='<li><a href="'+href+'" id="sdistrict-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	// 					}
	// 				}
	// 				opthtm+='</ul>';
	// 				opthtm+='<div class="clear"></div>';
	// 				opthtm+='</div>';	
	// 				opthtm+='<div class="clear"></div>';
	// 				// if(subclassname)
	// 				// {
	// 				// 	// opthtm+='<div class="litit csel">�������ࣺ</div>';
	// 				// 	// opthtm+='<div class="zwss" style="width:100%">';
	// 				// 	// opthtm+='<ul class="link_bk res_ul">';
	// 				// 	// opthtm+='<span class="res_s_s" style="color:#000000;float:left;font-size:12px;line-height:28px;padding-right:10px;padding-left:20px;">�������ࣺ</span>';
	// 				// 	opthtm+='<li class="hr"><span  id="sdistrict-'+get[3]+'">'+subclassname+'</span></li>';
	// 				// 	opthtm+='</ul>';
	// 				// 	opthtm+='<div class="clear"></div>';
	// 				// 	opthtm+='</div>';	
	// 				// 	opthtm+='<div class="clear"></div>';
	// 				// }
	// 			}
	// 	}
	// }
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
	var selopt=get[0]+get[1]+get[2]+get[3]+get[4];
	if (selopt!='')
	{
		selbox=$("#myselbox .optcentet");
		if (get[4])	{
		var optval=$('#resumetag-'+get[4]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="resumetag-'+get[4]+'" title="���ȡ��"><u>��ǩ:</u>'+optval+'</a>');
		}
		if (get[0])	{
		var optval=$('#category-'+get[0]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="category-'+get[0]+'" title="���ȡ��"><u>ְλ:</u>'+optval+'</a>');
		}
		if (get[1])	{
		var optval=$('#subclass-'+get[1]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="subclass-'+get[1]+'" title="���ȡ��"><u>ְλ����:</u>'+optval+'</a>');
		}
		if (get[2])	{
		var optval=$('#district-'+get[2]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="district-'+get[2]+'" title="���ȡ��"><u>����:</u>'+optval+'</a>');
		}
		if (get[3])	{
		var optval=$('#sdistrict-'+get[3]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="sdistrict-'+get[3]+'" title="���ȡ��"><u>��������:</u>'+optval+'</a>');
		}
		selbox.append('<div class="clear"></div>');
		$("#jobsearchbox").css('padding-bottom',0);
		$("#myselbox").show();
		//ɾ������
		$(".clearopt").click(function () {
			var opt=$(this).attr('id');
			opt=opt.split("-");
		$("#searcform input[name="+opt[0]+"]").val('');
		if (opt[0]=="category") $("#searcform input[name='subclass']").val('');//ȡ�����࣬ͬʱȡ������
		if (opt[0]=="district") $("#searcform input[name='sdistrict']").val('');//ȡ�����࣬ͬʱȡ������
			setTimeout(function() {
		search_location();
		}, 1);
		});
		//ɾ������
		$(".clearall").click(function () {
		$("#searcform input[type='hidden']").val('');
		$("#searcform input[name='key']").val('');
		setTimeout(function() {
		search_location();
		}, 1);
		});	
	}
	//����Ŀѡ��
	$(".opt").click(function (){
	var opt=$(this).attr('id');
	    opt=opt.split("-");
	$("#searcform input[name="+opt[0]+"]").val(opt[1]);
	setTimeout(function() {
	search_location();
	}, 1);
	});
	function search_location()
	{
		$("body").append('<div id="pageloadingbox">ҳ�������....</div><div id="pageloadingbg"></div>');
		$("#pageloadingbg").css("opacity", 0.5);
		var category=$("#searcform input[name=category]").val();
		var subclass=$("#searcform input[name=subclass]").val();
		var district=$("#searcform input[name=district]").val();
		var sdistrict=$("#searcform input[name=sdistrict]").val();
		var resumetag=$("#searcform input[name=resumetag]").val();
		var inforow=$("#searcform input[name=inforow]").val();
		var page=$("#searcform input[name=page]").val();
		$.get(dir+"plus/ajax_search_location.php", {"act":"QS_resumetag","category":category,"subclass":subclass,"district":district,"sdistrict":sdistrict,"resumetag":resumetag,"inforow":inforow,"page":page},
			function (data,textStatus)
			 {
				 window.location.href=data;
			 },"text"
		);
	}
}