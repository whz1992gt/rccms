a:2:{s:6:"config";a:0:{}s:8:"template";a:1:{i:0;s:37:"../tpl_resume/default/resume-show.ini";}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����ĸ��˼��� - ����������</title>
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
		var id="188";
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
	dialog("��Ϊ����","url:get?/user/user_buddy.php?tuid=193","350px","auto","");
	});
	$("#addpms").click(function(){
	var url="/user/user_pms.php?tuid=193";
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
          <td style="width:80%" class="title"><h1>�����ĸ��˼���</h1>
            <div class="res-info">����ʱ�䣺2013-10-13����Ա��ţ�17207 �����������<span class="click"></span> ��</div></td>
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
                <td class="td-r">����</td>
                <td class="td-l">�ԡ�����</td>
                <td class="td-r">��</td>
              </tr>
              <tr>
                <td class="td-l">�ꡡ���䣺</td>
                <td class="td-r">25 ��</td>
                <td class="td-l">�����ߣ�</td>
                <td class="td-r">183CM</td>
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
                <td class="td-r">3-5��</td>
              </tr>
              <tr>
                <td class="td-l">��ϵ��ַ��</td>
                <td class="td-r">���������³�</td>
                <td class="td-l">���������</td>
                <td class="td-r"><span class="click"></span>��</td>
              </tr>
              <tr>
                <td class="td-l">ˢ��ʱ�䣺</td>
                <td class="td-r">2013-10-13</td>
                <td class="td-l">�����ȼ���</td>
                <td class="td-r">��ͨ</td>
              </tr>
            
            </table></td>
          <td style="width:200px"><div style="height:200px"> <img height="158" src="/data/photo/thumb/2013/10/13/1381637540537.png" width="130"> </div></td>
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
            <td class="td2">ȫְ</td>
          </tr>
          <tr>
            <td class="td1">���������أ�</td>
            <td class="td2">������</td>
          </tr>
          <tr>
            <td class="td1">������н��</td>
            <td class="td2">����</td>
          </tr>
          <tr>
            <td class="td1">�������µĸ�λ��</td>
            <td class="td2">����������ְλ</td>
          </tr>
          <tr>
            <td class="td1">�������µ���ҵ��</td>
            <td class="td2">������ҵ</td>
          </tr>
        </table>
      </div>
      <div class="tit">�����س�</div>
      <div class="c1">
        <table cellpadding=0 cellspacing=0 border=0>
          <tr>
            <th class=td1 width="80" align="right" style="text-align:right">�����س���</th>
            <td class=td2>��HR ERP ������� ���� �߶���������Ӫ����������˽�Ƶ�ﱸ�������˽⼯�Ź�˾��Ϣ�����衣
</td>
          </tr>
        </table>
      </div>
      <div class="tit">��������</div>
      <div class="c0">
        <table cellpadding="0" cellspacing="0" border="0">
		           <tr>
            <th colspan="2" class="td1" style="text-align:left"><strong>���Ĵ�ѧ </strong>(����)</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">��ֹ���£�</th>
            <td bgcolor="#FFFFFF" class="td2">2007��1����2011��1��&nbsp;</td>
          </tr>
          <tr>
            <th align="right" class="td1" >ѧУ���ƣ�</th>
            <td bgcolor="#FFFFFF" class="td2">���Ĵ�ѧ</td>
          </tr>
          <tr>
            <th align="right" class="td1">רҵ���ƣ�</th>
            <td bgcolor="#FFFFFF" class="td2">�������ѧ�뼼��</td>
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
            <th colspan="2"  class="td1" style="text-align:left"><strong>δ��ӹ�������</strong> - </th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">��ֹ���ڣ�</th>
            <td bgcolor="#FFFFFF" class="td2">��&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ƣ�</th>
            <td bgcolor="#FFFFFF" class="td2">δ��ӹ�������</td>
          </tr>
          <tr>
            <th align="right" class="td1">����ְλ��</th>
            <td bgcolor="#FFFFFF" class="td2"></td>
          </tr>
          <tr>
            <th align="right" class="td1">ҵ�����֣�</th>
            <td bgcolor="#FFFFFF" class="td2"></td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ܣ�</th>
            <td bgcolor="#FFFFFF" class="td2"></td>
          </tr>
                       <tr>
            <th colspan="2"  class="td1" style="text-align:left"><strong>������һ����Ϣ����˾</strong> - ��Ŀ����</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">��ֹ���ڣ�</th>
            <td bgcolor="#FFFFFF" class="td2">2011��6����2011��11��&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ƣ�</th>
            <td bgcolor="#FFFFFF" class="td2">������һ����Ϣ����˾</td>
          </tr>
          <tr>
            <th align="right" class="td1">����ְλ��</th>
            <td bgcolor="#FFFFFF" class="td2">��Ŀ����</td>
          </tr>
          <tr>
            <th align="right" class="td1">ҵ�����֣�</th>
            <td bgcolor="#FFFFFF" class="td2">����������ҵ�;Ƶ����Ϣ�����裬���繤��</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ܣ�</th>
            <td bgcolor="#FFFFFF" class="td2"></td>
          </tr>
                       <tr>
            <th colspan="2"  class="td1" style="text-align:left"><strong>�������й�</strong> - ʵʩ����</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">��ֹ���ڣ�</th>
            <td bgcolor="#FFFFFF" class="td2">2011��12����2012��4��&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ƣ�</th>
            <td bgcolor="#FFFFFF" class="td2">�������й�</td>
          </tr>
          <tr>
            <th align="right" class="td1">����ְλ��</th>
            <td bgcolor="#FFFFFF" class="td2">ʵʩ����</td>
          </tr>
          <tr>
            <th align="right" class="td1">ҵ�����֣�</th>
            <td bgcolor="#FFFFFF" class="td2"></td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ܣ�</th>
            <td bgcolor="#FFFFFF" class="td2"></td>
          </tr>
                       <tr>
            <th colspan="2"  class="td1" style="text-align:left"><strong>�úͼ���</strong> - ��Ϣ������</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">��ֹ���ڣ�</th>
            <td bgcolor="#FFFFFF" class="td2">2012��4����2013��6��&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ƣ�</th>
            <td bgcolor="#FFFFFF" class="td2">�úͼ���</td>
          </tr>
          <tr>
            <th align="right" class="td1">����ְλ��</th>
            <td bgcolor="#FFFFFF" class="td2">��Ϣ������</td>
          </tr>
          <tr>
            <th align="right" class="td1">ҵ�����֣�</th>
            <td bgcolor="#FFFFFF" class="td2"></td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ܣ�</th>
            <td bgcolor="#FFFFFF" class="td2"></td>
          </tr>
                       <tr>
            <th colspan="2"  class="td1" style="text-align:left"><strong>�úͼ���</strong> - ����</th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">��ֹ���ڣ�</th>
            <td bgcolor="#FFFFFF" class="td2">2013��6����2013��12��&nbsp;</td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ƣ�</th>
            <td bgcolor="#FFFFFF" class="td2">�úͼ���</td>
          </tr>
          <tr>
            <th align="right" class="td1">����ְλ��</th>
            <td bgcolor="#FFFFFF" class="td2">����</td>
          </tr>
          <tr>
            <th align="right" class="td1">ҵ�����֣�</th>
            <td bgcolor="#FFFFFF" class="td2"></td>
          </tr>
          <tr>
            <th align="right"  class="td1">��ҵ���ܣ�</th>
            <td bgcolor="#FFFFFF" class="td2"></td>
          </tr>
            	            
		  </table>
      </div>
      <div class="tit">��ѵ����</div>
      <div class="c0">
        <table  border="0" align="center" cellpadding="7" cellspacing="1" bgcolor="#CCCCCC" class="resume_show">
          	      		  <tr>
            <th colspan="2" class="td1" style="text-align:left"><strong>δ�����ѵ����</strong> - </th>
          </tr>
          <tr>
            <th width="80" align="right" class="td1">��ֹ���ڣ�</th>
            <td class="td2" bgcolor="#FFFFFF">��</td>
          </tr>
          <tr>
            <th align="right"  class="td1" >��ѵ������</th>
            <td class="td2" bgcolor="#FFFFFF">δ�����ѵ����</td>
          </tr>
          <tr>
            <th align="right" class="td1">��ѵ�γ̣�</th>
            <td class="td2" bgcolor="#FFFFFF"></td>
          </tr>
          <tr>
            <th align="right" class="td1">��ѵ������</th>
            <td class="td2" bgcolor="#FFFFFF"></td>
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
