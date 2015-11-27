<?php if (!defined('THINK_PATH')) exit();?><div id="AuthRule_Bar" class="Bar_tools">
  <?php if(Is_Auth('Admin/AuthRule/index')): ?><a class='easyui-linkbutton' href='JavaScript:void(0);' data-options="iconCls:'iconfont icon-viewlist',plain:true" onclick="UpdateTabs('AuthRule','<?php echo U('index');?>','','iconfont icon-viewlist');"><span>列表</span></a><?php endif; ?>
  <?php if(Is_Auth('Admin/AuthRule/add')): ?><a class='easyui-linkbutton' href='JavaScript:void(0);' data-options="iconCls:'iconfont icon-add',plain:true" onclick="UpdateTabs('AuthRule','<?php echo U('add');?>','','iconfont icon-add');"><span>新增</span></a><?php endif; ?>
  <a class='easyui-linkbutton' href='JavaScript:void(0);' data-options="iconCls:'iconfont icon-edit',plain:true"><span>编辑</span></a>
</div>
<form id="AuthRule_Submit_From" class="update_from" action="<?php echo U('edit');?>">
    <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
      <tr>
        <th>上级菜单 : </th>
        <td><select name="pid" class="easyui-combotree" style="width:220px;height: 30px;" data-options="value:'<?php echo ($_info['pid']); ?>',url:'<?php echo U('Admin/Function/get_auth_rule');?>&pid=-1&r_type=json',multiple:false,required:false,editable:false">
          </select></td>
      </tr>
      <tr>
        <th>菜单名称 : </th>
        <td><input name="name" value="<?php echo ($_info['name']); ?>" type="text" class="easyui-textbox" style="height: 30px;" data-options="required:false"/></td>
      </tr>
      <tr>
        <th>菜单标题 : </th>
        <td><input name="title" value="<?php echo ($_info['title']); ?>" type="text" class="easyui-textbox" style="height: 30px;" data-options="required:false"></td>
      </tr>
      <tr>
        <th>图标 : </th>
        <td><input name="icon" value="<?php echo ($_info['icon']); ?>" type="text" class="easyui-textbox" style="height: 30px;" data-options="required:false"><span><br/>图标采用阿里巴巴矢量图标库[http://www.iconfont.cn/]（文件存储在Public\static\iconfont下，更改前查看iconfont.css文件）</span></td>
      </tr>
      <tr>
        <th>隐藏 : </th>
        <td><select name="is_hide" class="easyui-combobox" style="height: 30px;" data-options="value:'<?php echo ($_info['is_hide']); ?>',multiple:false,required:false,editable:false">
            <option value="1">是</option>
            <option value="0">否</option>
          </select></td>
      </tr>
      <tr>
        <th>状态 : </th>
        <td><select name="status" class="easyui-combobox" style="height: 30px;" data-options="value:'<?php echo ($_info["status"]); ?>',multiple:false,required:false,editable:false">
            <option value="1">启用</option>
            <option value="0">禁用</option>
          </select></td>
      </tr>
      <tr>
        <th>排序 : </th>
        <td><input name="sort" value="<?php echo ($_info["sort"]); ?>" type="text" class="easyui-numberbox" style="height: 30px;" style="height: 30px;" data-options="min:'0',max:'99',precision:'0',decimalSeparator:'.',groupSeparator:',',required:false"></td>
      </tr>
      <tr>
        <th>附加参数 : </th>
        <td><input name="condition" value="<?php echo ($_info["condition"]); ?>" type="text" class="easyui-textbox" data-options="required:false,multiline:true" style="width: 200px; height: 50px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;"><a class="easyui-linkbutton" href="JavaScript:void(0);" onclick="From_Submit('AuthRule')" data-options="iconCls:'iconfont icon-edit'"><span style="font-size: 14px; font-weight: 600;">更改</span></a></td>
      </tr>
    </table>
  <input name="id" type="hidden" value="<?php echo I('get.id');?>" />
</form>