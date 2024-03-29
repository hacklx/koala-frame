<?php if (!defined('THINK_PATH')) exit();?><div id="User_Bar" class="Bar_tools">
<a class='easyui-linkbutton' href='JavaScript:void(0);' data-options="iconCls:'iconfont icon-viewlist',plain:true" onclick="Data_Reload('User_Data_List');"><span>列表or刷新</span></a>
<a class='easyui-linkbutton' href='JavaScript:void(0);' data-options="iconCls:'iconfont icon-search',plain:true" onclick="Data_Search('User_Search_From','User_Data_List');"><span>搜索</span></a>
<?php if(Is_Auth('Admin/User/add')): ?><a class='easyui-linkbutton' href='JavaScript:void(0);' data-options="iconCls:'iconfont icon-add',plain:true" onclick="Submit_Form('User_Form','User_Data_List','<?php echo U('add');?>','','新增数据','');"><span>新增</span></a><?php endif; ?>
</div>
<div style="display: none">
<form id="User_Form" class="update_from" style="width:600px; height:320px;"></form>
</form>
  <form id="User_Search_From" class="search_from">
	<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
    <tr>
			<th>用户名 : </th>
			<td><input name="s_username" type="text" class="easyui-textbox" style="height:30px;"></td>
		</tr><tr>
			<th>昵称/姓名 : </th>
			<td><input name="s_nickname" type="text" class="easyui-textbox" style="height:30px;"></td>
		</tr><tr>
			<th>上次登录时间 : </th>
			<td><input name="s_last_login_time_min" type="text" class="easyui-datebox" style="height:30px;"> - <input name="s_last_login_time_max" type="text" class="easyui-datebox" style="height:30px;"></td>
		</tr><tr>
			<th>上次登录IP : </th>
			<td><input name="s_last_login_ip" type="text" class="easyui-textbox" style="height:30px;"></td>
		</tr><tr>
			<th>邮箱 : </th>
			<td><input name="s_email" type="text" class="easyui-textbox" style="height:30px;"></td>
		</tr><tr>
			<th>备注 : </th>
			<td><input name="s_remark" type="text" class="easyui-textbox" style="height:30px;"></td>
		</tr><tr>
			<th>创建时间 : </th>
			<td><input name="s_create_time_min" type="text" class="easyui-datebox" style="height:30px;"> - <input name="s_create_time_max" type="text" class="easyui-datebox" style="height:30px;"></td>
		</tr><tr>
			<th>更新时间 : </th>
			<td><input name="s_update_time_min" type="text" class="easyui-datebox" style="height:30px;"> - <input name="s_update_time_max" type="text" class="easyui-datebox" style="height:30px;"></td>
		</tr><tr>
			<th>状态 : </th>
			<td><select name="s_status" class="easyui-combobox" style="height:30px;" data-options="value:'',url:'<?php echo U("Admin/Function/get_config");?>&cname=USER_STATUS_TYPE|type|title&r_type=json',valueField:'type',textField:'title',multiple:false,required:false,editable:false"></select></td>
		</tr>    </table>
  </form>
</div>

<table id="User_Data_List"></table>

<script type="text/javascript">
$(function() {
	$("#User_Data_List").datagrid({
		url : "<?php echo U('User/index');?>",
		fit : true,
		striped : true,
		border : false,
		pagination : true,
		pageSize : 20,
		pageList : [ 10, 20, 50 ],
		pageNumber : 1,
		sortName : 'id',
		sortOrder : 'desc',
		toolbar : '#User_Bar',
		singleSelect : true,
		columns : [[
            {field : 'id',title : 'ID',width : 40,sortable:true},
            {field : 'username',title : '用户名',width : 150,sortable:true},
            {field : 'nickname',title : '昵称/姓名',width : 150,sortable:true},
            {field : 'last_login_time',title : '上次登录时间',width : 110,sortable:true},
            {field : 'last_login_ip',title : '上次登录IP',width : 100,sortable:true},
            {field : 'email',title : '邮箱',width : 150,sortable:true},
            {field : 'create_time',title : '创建时间',width : 110,sortable:true},
            {field : 'update_time',title : '更新时间',width : 110,sortable:true},
            {field : 'status',title : '状态',width : 60,sortable:true},
			{field : 'operate',title : '操作',width : 200}
		]]
	});
})
</script>