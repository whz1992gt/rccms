function jobslist()
{
	var key=$('#key').val();
	if (key)
	{ 
		key_arr=key.split(" ");
		for (x in key_arr)
		{
		if (key_arr[x]) $('.striking').highlight(key_arr[x]);
		}
	}
	$(".list:odd").css("background-color","#F4F5FB");
	$(".titsub").hover(	function()	{$(this).addClass("titsub_h");},function(){$(this).removeClass("titsub_h");});
 	//ȫѡ��ѡ
	$("input[name='selectall']").unbind().click(function(){$("#formjobslist :checkbox").attr('checked',$(this).attr('checked'))});
	//����
	$(function(){
	var _wrap=$('#jobs_list_tip ul');
	var _interval=3000;
	var _moving;
	_wrap.hover(function(){
	clearInterval(_moving);
	},function(){
	_moving=setInterval(function(){
	var _field=_wrap.find('li:first');
	var _h=_field.height();
	_field.animate({marginTop:-_h+'px'},300,function(){
	_field.css('marginTop',0).appendTo(_wrap);
	})
	},_interval)
	}).trigger('mouseleave');
	});
}
//�Ա�ְλ
function jobscontrast(dir)
{
	$(".contrast").click(function()
	{
			var sltlength=$("#formjobslist .list input:checked").length;
			if (sltlength>4 || sltlength<2)
			{
			dialog("ϵͳ��ʾ","text:��ѡ�� 2-4��ְλ���жԱ�","300px","auto");
			}
			else
			{
			var jidArr=new Array();
			 $("#formjobslist .list :checkbox[checked]").each(function(index){jidArr[index]=$(this).val();});
			 
			 $("body").append('<div id="pageloadingbox">ҳ�������....</div><div id="pageloadingbg"></div>');
			$("#pageloadingbg").css("opacity", 0.5);
			var id=jidArr.join("-");
			$.get(dir+"plus/ajax_search_location.php", {"act":"QS_jobscontrast","id":id},
			function (data,textStatus)
			 {
				 window.location.href=data;
			 },"text"
		);
			}
	});
}
 //����
function apply_jobs(ajaxurl)
{
	$(".deliver").click(function()
	{
			var sltlength=$("#formjobslist input:checked").length;
			if ($("#formjobslist .list input:checked").length==0)
			{
			dialog("ϵͳ��ʾ","text:��ѡ��ְλ","300px","auto");
			}
			else
			{
				var jidArr=new Array();
				 $("#formjobslist .list :checkbox[checked]").each(function(index){jidArr[index]=$(this).val();});
				dialog("Ͷ����","url:get?"+ajaxurl+"user/user_apply_jobs.php?id="+jidArr.join("-")+"&act=app","500px","auto","");
			}
	});
	//��������ְλ
	$(".app_jobs").unbind().click(function(){
	dialog("Ͷ����","url:get?"+ajaxurl+"user/user_apply_jobs.php?id="+$(this).attr("id")+"&act=app","500px","auto","");
	});
}
function recommend_jobs(ajaxurl)
{
	$(".recommend").unbind().click(function()
	{
		dialog("�Ƽ�������","url:get?"+ajaxurl+"plus/ajax_recommend.php?job="+$(this).attr("url")+"&act=recommendjobs","400px","auto","");
	});
}
function favorites(ajaxurl)
{
	$(".add_favorites").unbind().click(function(){
	dialog("�����ղ�","url:get?"+ajaxurl+"user/user_favorites_job.php?id="+$(this).attr("id")+"&act=add","500px","auto","");
	});
	$(".collect").click(function()
	{
		var sltlength=$("#formjobslist input:checked").length;
		if ($("#formjobslist .list input:checked").length==0)
			{
			dialog("ϵͳ��ʾ","text:��ѡ��ְλ","300px","auto");
			}
			else
			{
				var jidArr=new Array();
				 $("#formjobslist .list :checkbox[checked]").each(function(index){jidArr[index]=$(this).val();});
				dialog("�����ղ�","url:get?"+ajaxurl+"user/user_favorites_job.php?id="+jidArr.join("-")+"&act=add","500px","auto","");
			}
	});
}
function moder(isList){ 
		 if (isList){
			$.cookie('jobslistastable', '1', {expires:30});
		} else {
			$.cookie('jobslistastable', '0', {expires:30});
		} director();
	}