a:2:{s:6:"config";a:0:{}s:8:"template";a:1:{i:0;s:37:"../tpl_resume/default/resume-show.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�������ĸ��˼��� - ����������</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="�׺�CMS" />
<meta name="copyright" content="mandntwork.com" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/favicon.ico" />
<link href="/templates/mand/css/global.css" rel="stylesheet" type="text/css" />
<link href="/templates/tpl_resume/default/css/resume-style.css" rel="stylesheet" type="text/css">
<script src="/templates/mand/js/jquery.js" type='text/javascript' ></script>
<script src="/templates/mand/js/jquery.dialog.js" type='text/javascript' ></script>
<script type="text/javascript">
$(document).ready(function()
{
		var id="5814";
		var tsTimeStamp= new Date().getTime();
		$.get("/plus/ajax_click.php", { "id": id,"time":tsTimeStamp,"act":"resume_click"},
			function (data,textStatus)
			 {			
				$(".click").html(data);
			 }
		);
		$.get("/plus/ajax_contact.php", { "id": id,"time":tsTimeStamp,"act":"resume_contact"},
			function (data,textStatus)
			 {			
				$("#resume_contact").html(data);
				//���ؼ���
				$("#download").click(function(){
				var url="/user/user_download_resume.php?id="+id+"&act=download&t="+tsTimeStamp;
				dialog("���ؼ���","url:get?"+url,"500px","auto","");
				});	
				//��������
				$("#invited").click(function(){
				var url="/user/user_invited.php?id="+id+"&act=invited&t="+tsTimeStamp;
				dialog("��������","url:get?"+url,"500px","auto","");
				});	
				//��Ӷ��˲ſ�
				$(".add_resume_pool").click(function(){
				var url="/user/user_favorites_resume.php?id="+id+"&act=add&t="+tsTimeStamp;
				dialog("��ӵ��˲ſ�","url:get?"+url,"500px","auto","");				
				});	
			 }
		);
	$("#newbuddy").click(function(){
	dialog("��Ϊ����","url:get?/user/user_buddy.php?tuid=7888","350px","auto","");
	});
	$("#addpms").click(function(){
	var url="/user/user_pms.php?tuid=7888";
	dialog("���Ͷ���Ϣ","url:get?"+url,"400px","auto","");
	});
});
</script>
</head>
<body class="res-body">
<div class="res-warp">
  <div class="res-main">
    <div class="head">
  <table  border="0" align="center" cellpadding="0" cellspacing="0"  class="resume_show" style="border-bottom:0px;" >
  <tr>
    <td class="link_lan">&nbsp;&nbsp;<a href="http://test155.mandnt.com/">����������</a><span  style="color:#999999">&nbsp;&nbsp;(http://test155.mandnt.com)</span></td>
    <td   class="link_bku top_a">
	<a href="http://test155.mandnt.com/">��վ��ҳ</a> <a href="javascript:window.print();">��ӡ����</a>  <a href="javascript:void(0)"  class="add_resume_pool">��ӵ��˲ſ�</a>
	 <a href="javascript:void(0)" id="addpms">������Ϣ</a>
	<a href="javascript:void(0)" id="newbuddy">��Ϊ����</a>
	</td>
  </tr>
</table>
      <table cellpadding="0" cellspacing="0" style="width:100%">
          <td style="width:80%" class="title"><h1>�������ĸ��˼���</h1>
            <div class="res-info">����ʱ�䣺2014-07-24����Ա��ţ�17207 �����������<span class="click"></span> ��</div></td>
          <td style="text-align:right"><a href="http://test155.mandnt.com/"><img height="54" src="/data/images/logo.gif" width="150"></a></td>
        </tr>
      </table>
    </div>
    <div class="basic">
      <table cellpadding="0" cellspacing="0" style="width:100%">
        <tr>
          <td><table cellpadding="0" cellspacing="0" style="width:100%">
              <tr>
                <td class="td-l" style="width:65px"></td>
                <td class="td-r" style="width:30%"></td>
                <td class="td-l" style="width:65px"></td>
                <td class="td-r"></td>
              </tr>
              <tr>
                <td class="td-l">�ա�������</td>
                <td class="td-r">������</td>
                <td class="td-l">�ԡ�����</td>
                <td class="td-r">Ů</td>
              </tr>
              <tr>
                <td class="td-l">�ꡡ���䣺</td>
                <td class="td-r">21 ��</td>
                <td class="td-l">�����ߣ�</td>
                <td class="td-r">168CM</td>
              </tr>
              <tr>
                <td class="td-l">����״����</td>
                <td class="td-r">δ��</td>
                <td class="td-l">�������ڣ�</td>
                <td class="td-r">��������</td>
              </tr>
              <tr>
                <td class="td-l">���ѧ����</td>
                <td class="td-r">����</td>
                <td class="td-l">�������飺</td>
                <td class="td-r">�޾���</td>
              </tr>
              <tr>
                <td class="td-l">��ϵ��ַ��</td>
                <td class="td-r">����ʡ�����в�ɽ�����µ�·����ũ�ִ�ѧ��Է8311</td>
                <td class="td-l">���������</td>
                <td class="td-r"><span class="click"></span>��</td>
              </tr>
              <tr>
                <td class="td-l">ˢ��ʱ�䣺</td>
                <td class="td-r">2014-07-24</td>
                <td class="td-l">�����ȼ���</td>
                <td class="td-r">�߼�</td>
              </tr>
            
            </table></td>
          <td style="width:200px"><div style="height:200px"> <img height="158" src="/data/photo/thumb/no_photo.gif" width="130"> </div></td>
        </tr>
      </table>
    </div>
    <div id="resume">
      <div class="tit">��ְ����</div>
      <div class="c0 m-t">
        <table cellpadding=0 cellspacing=0 border=0>
          <tr>
            <td class=td1>���������ְλ��</td>
            <td class=td2></td>
          </tr>
        </table>
        <table cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td class="td1">������λ���ʣ�</td>
            <td class="td2">ʵϰ</td>
          </tr>
          <tr>
            <td class="td1">���������أ�</td>
            <td class="td2">����ʡ/������</td>
          </tr>
          <tr>
            <td class="td1">������н��</td>
            <td class="td2">2000~3000Ԫ/��</td>
          </tr>
          <tr>
            <td class="td1">�������µĸ�λ��</td>
            <td class="td2">����רԱ/����,��ƸרԱ/����,н�ʸ�������/רԱ,��Ч��������/רԱ</td>
          </tr>
          <tr>
            <td class="td1">�������µ���ҵ��</td>
            <td class="td2">���ز�����,��ҵ����/��ҵ����,����/��ѵ,�Ƶ�/����,��������/��ҵ��λ</td>
          </tr>
        </table>
      </div>
      <div class="tit">�����س�</div>
      <div class="c1">
        <table cellpadding=0 cellspacing=0 border=0>
          <tr>
            <th class=td1 width="80" align="right" style="text-align:right">�����س���</th>
            <td class=td2>Ӧ���ҵ������ѧ���������ί��<br />
���������Ϻã����޵ڶ�רҵӢ�<br />
����ʹ�ð칫�����<br />
д���������������Ϻá�
</td>
          </tr>
        </table>
      </div>
      <div class="tit">��������</div>
      <div class="c0">
        <table cellpadding="0" cellspacing="0" border="0">
		           <tr>
            <th colspan="2" class="td1" style="text-align:left"><strong>����ũ�ִ�ѧ </strong>(����)</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">��ֹ���£�</th>
            <td bgcolor="#FFFFFF" class="td2">2011��9����2015��7��&nbsp;</td>
          </tr>
          <tr>
            <th align="right" class="td1" >ѧУ���ƣ�</th>
            <td bgcolor="#FFFFFF" class="td2">����ũ�ִ�ѧ</td>
          </tr>
          <tr>
            <th align="right" class="td1">רҵ���ƣ�</th>
            <td bgcolor="#FFFFFF" class="td2">������Դ����</td>
          </tr>
          <tr>
            <th align="right" class="td1">���ѧ����</th>
            <td bgcolor="#FFFFFF" class="td2">����</td>
          </tr>
		           </table>
      </div>
      <div class="tit">��������</div>
      <div class="c0">
        <table  cellpadding="0" cellspacing="0" border="0">
		    	                   <tr>
            <th colspan="2"  class="td1" style="text-align:left"><strong>��ʯЬҵ���޹�˾</strong> - �ʼ�Ա</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">��ֹ���ڣ�</th>
            <td bgcolor="#FFFFFF" class="td2">2011��7����2011��8��&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ƣ�</th>
            <td bgcolor="#FFFFFF" class="td2">��ʯЬҵ���޹�˾</td>
          </tr>
          <tr>
            <th align="right" class="td1">����ְλ��</th>
            <td bgcolor="#FFFFFF" class="td2">�ʼ�Ա</td>
          </tr>
          <tr>
            <th align="right" class="td1">ҵ�����֣�</th>
            <td bgcolor="#FFFFFF" class="td2">�����¹������ڣ�ÿ�찴�涨�������׼ʱ�ϰ࣬û�г��ֳٵ����󣬼���Ь��Ҳϸ�����棬���ش�ʧ��</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ܣ�</th>
            <td bgcolor="#FFFFFF" class="td2">�ù�˾��һ�Ҵ���Ь������������ҵ,��Ʒ�󲿷����������Ǹ���,���������ɴ�8��˫.��˾��1985�괴������,����Գ���Ϊ����,������������ķ���,��Ʒ����Ӯ���˹����̵�������</td>
          </tr>
                       <tr>
            <th colspan="2"  class="td1" style="text-align:left"><strong>�����н�����</strong> - ����ָ����ʦ</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">��ֹ���ڣ�</th>
            <td bgcolor="#FFFFFF" class="td2">2012��7����2012��8��&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ƣ�</th>
            <td bgcolor="#FFFFFF" class="td2">�����н�����</td>
          </tr>
          <tr>
            <th align="right" class="td1">����ְλ��</th>
            <td bgcolor="#FFFFFF" class="td2">����ָ����ʦ</td>
          </tr>
          <tr>
            <th align="right" class="td1">ҵ�����֣�</th>
            <td bgcolor="#FFFFFF" class="td2">������亢���ǵ���ϰ�ල�빦��ָ����</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ܣ�</th>
            <td bgcolor="#FFFFFF" class="td2">˽�󣬹�ģ�Ϻã���Ҫ�����չ�Сѧ��ͯ���������չ���ѧϰ����ָ����</td>
          </tr>
                       <tr>
            <th colspan="2"  class="td1" style="text-align:left"><strong>���ݳ��繫˾</strong> - ��ʱ����Ա</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">��ֹ���ڣ�</th>
            <td bgcolor="#FFFFFF" class="td2">2013��10����2013��10��&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ƣ�</th>
            <td bgcolor="#FFFFFF" class="td2">���ݳ��繫˾</td>
          </tr>
          <tr>
            <th align="right" class="td1">����ְλ��</th>
            <td bgcolor="#FFFFFF" class="td2">��ʱ����Ա</td>
          </tr>
          <tr>
            <th align="right" class="td1">ҵ�����֣�</th>
            <td bgcolor="#FFFFFF" class="td2">�����ڼ��ڱ����������δ���Ա�����������˿ͣ����в�Ʒ���ܡ�����ƹ㣬���������������ڼ��ø��ݳ���������һ��</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ܣ�</th>
            <td bgcolor="#FFFFFF" class="td2">�Ĵ�������Ӽ������޹�˾ʼ����1958�꣬�Ӿ�����ҵ���ʵ���ҵ������Ϣ���ӵĶ�Ԫ��չ���ѳ�Ϊ�����������ѵ��ӡ����������з�������Ϊһ����ۺ��Ϳ����ҵ���ţ����������ȫ����������Ϣ�ҵ�����������ṩ��ͦ�������ݳ��繫˾�����ӹ�˾��</td>
          </tr>
                       <tr>
            <th colspan="2"  class="td1" style="text-align:left"><strong>���ݳ��繫˾</strong> - ��ʱ����Ա</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">��ֹ���ڣ�</th>
            <td bgcolor="#FFFFFF" class="td2">2013��10����2013��10��&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ƣ�</th>
            <td bgcolor="#FFFFFF" class="td2">���ݳ��繫˾</td>
          </tr>
          <tr>
            <th align="right" class="td1">����ְλ��</th>
            <td bgcolor="#FFFFFF" class="td2">��ʱ����Ա</td>
          </tr>
          <tr>
            <th align="right" class="td1">ҵ�����֣�</th>
            <td bgcolor="#FFFFFF" class="td2">�����ڼ��ڱ����������δ���Ա�����������˿ͣ����в�Ʒ���ܡ�����ƹ㣬���������������ڼ��ø��ݳ���������һ��</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ܣ�</th>
            <td bgcolor="#FFFFFF" class="td2">�Ĵ�������Ӽ������޹�˾ʼ����1958�꣬�Ӿ�����ҵ���ʵ���ҵ������Ϣ���ӵĶ�Ԫ��չ���ѳ�Ϊ�����������ѵ��ӡ����������з�������Ϊһ����ۺ��Ϳ����ҵ���ţ����������ȫ����������Ϣ�ҵ�����������ṩ��ͦ�������ݳ��繫˾�����ӹ�˾��</td>
          </tr>
            	            
		  </table>
      </div>
      <div class="tit">��ѵ����</div>
      <div class="c0">
        <table  border="0" align="center" cellpadding="7" cellspacing="1" bgcolor="#CCCCCC" class="resume_show">
          	      		  <tr>
            <th colspan="2" class="td1" style="text-align:left"><strong>�������繫˾</strong> - ����</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">��ֹ���ڣ�</th>
            <td class="td2" bgcolor="#FFFFFF">2013��9����2013��9��</td>
          </tr>
          <tr>
            <th align="right"  class="td1" >��ѵ������</th>
            <td class="td2" bgcolor="#FFFFFF">�������繫˾</td>
          </tr>
          <tr>
            <th align="right" class="td1">��ѵ�γ̣�</th>
            <td class="td2" bgcolor="#FFFFFF">����</td>
          </tr>
          <tr>
            <th align="right" class="td1">��ѵ������</th>
            <td class="td2" bgcolor="#FFFFFF">��ѵʦͨ��ppt�������۵Ļ��ڣ����������Լ�Ӧע������⡣Ȼ�����������һ������ȥ��ʾ��������˿͡�</td>
          </tr>
		     	                    </table>
      </div>
    </div>
    <div class="tit">��ϵ��ʽ</div>
    <div class="tips" id="resume_contact"></div>
  </div>
</div>
</div>
<div class="copyright"><a href="http://test155.mandnt.com">����������</a> ��Ȩ���� Copyright &copy; <a href="http://test155.mandnt.com"> http://test155.mandnt.com</a> All Right Reserved.</div>
</body>
</html>
