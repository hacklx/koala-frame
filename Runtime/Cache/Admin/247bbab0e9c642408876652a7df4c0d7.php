<?php if (!defined('THINK_PATH')) exit();?><table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  <tr>
    <th>标识 : </th>
    <td><input name="name" value="<?php echo ($_info['name']); ?>" type="text" class="easyui-textbox" style="height:30px;" data-options="required:false"></td>
  </tr>
  <tr>
    <th>名称 : </th>
    <td><input name="title" value="<?php echo ($_info["title"]); ?>" type="text" class="easyui-textbox" style="height:30px;" data-options="required:false"></td>
  </tr>
  <tr>
    <th>表名 : </th>
    <td><input name="table_name" value="<?php echo ($_info["table_name"]); ?>" type="text" class="easyui-textbox" style="height:30px;" data-options="required:false"></td>
  </tr>
  <tr>
    <th>允许子模型 : </th>
    <td><select name="is_extend" class="easyui-combobox" style="height:30px;" data-options="value:'<?php echo ($_info["is_extend"]); ?>',multiple:false,required:false,editable:false">
        <option value="1" >是</option>
        <option value="0" >否</option>
      </select></td>
  </tr>
  <tr>
    <th>继承的模型 : </th>
    <td><select name="extend" class="easyui-combobox" style="height:30px;" data-options="value:'<?php echo ($_info["extend"]); ?>',url:'<?php echo U("Admin/Function/get_extend_model");?>&r_type=json',valueField:'id',textField:'title',multiple:false,required:false,editable:false">
      </select></td>
  </tr>
  <tr>
    <th>列表类型 : </th>
    <td><select name="list_type" class="easyui-combobox" style="height:30px;" data-options="value:'<?php echo ($_info["list_type"]); ?>',multiple:false,required:false,editable:false">
        <option value="0" >普通</option>
        <option value="1" >树形</option>
      </select></td>
  </tr>
  <tr>
    <th>状态 : </th>
    <td><select name="status" class="easyui-combobox" style="height:30px;" data-options="value:'<?php echo ($_info["status"]); ?>',multiple:false,required:false,editable:false">
        <option value="0" >禁用</option>
        <option value="1" >启用</option>
      </select></td>
  </tr>
</table>
<input name="id" type="hidden" value="<?php echo I('get.id');?>" />