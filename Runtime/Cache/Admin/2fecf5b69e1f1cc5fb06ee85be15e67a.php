<?php if (!defined('THINK_PATH')) exit();?><div id="Link_Bar" class="Bar_tools">
<a class='easyui-linkbutton' href='JavaScript:void(0);' data-options="iconCls:'iconfont icon-viewlist',plain:true" onclick="Data_Reload('Link_Data_List');"><span>列表or刷新</span></a>
<a class='easyui-linkbutton' href='JavaScript:void(0);' data-options="iconCls:'iconfont icon-search',plain:true" onclick="Data_Search('Link_Search_From','Link_Data_List');"><span>搜索</span></a>
<?php if(Is_Auth('Admin/Link/add')): ?><a class='easyui-linkbutton' href='JavaScript:void(0);' data-options="iconCls:'iconfont icon-add',plain:true" onclick="Submit_Form('Link_Form','Link_Data_List','<?php echo U('add');?>','','新增数据','');"><span>新增</span></a><?php endif; ?>
</div>
<div style="display: none">
<form id="Link_Form" class="update_from" style="width:600px; height:320px;"></form>
</form>
  <form id="Link_Search_From" class="search_from">
	<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
    <tr>
			<th>友情图片 : </th>
			<td><input name="s_image" type="text" class="easyui-textbox" style="height:30px;"></td>
		</tr>    </table>
  </form>
</div>

<table id="Link_Data_List"></table>

<script type="text/javascript">
$(function() {
	$("#Link_Data_List").datagrid({
		url : "<?php echo U('Link/index');?>",
		fit : true,
		striped : true,
		border : false,
		pagination : true,
		pageSize : 20,
		pageList : [ 10, 20, 50 ],
		pageNumber : 1,
		sortName : 'id',
		sortOrder : 'desc',
		toolbar : '#Link_Bar',
		singleSelect : true,
		columns : [[
            {field : 'id',title : 'ID',width : 40,sortable:true},
            {field : 'image',title : '友情图片',width : 100,sortable:true},
			{field : 'operate',title : '操作',width : 200}
		]]
	});
})
</script>