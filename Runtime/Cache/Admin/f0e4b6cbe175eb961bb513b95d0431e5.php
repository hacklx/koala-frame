<?php if (!defined('THINK_PATH')) exit();?><input name="model_id" type="hidden" value="<?php echo ($model_id); ?>" />
<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  <tr>
    <th>生成控制器文件:</th>
    <td><select name="build_action" class="easyui-combobox" style="height:30px;" data-options="editable:false">
        <option value="0">不生成</option>
        <option value="1">生成</option>
      </select></td>
  </tr>
  <tr>
    <th>生成模型文件:</th>
    <td><select name="build_model" class="easyui-combobox" style="height:30px;" data-options="editable:false">
        <option value="0">不生成</option>
        <option value="1">生成</option>
      </select></td>
  </tr>
  <tr>
    <th>生成菜单:</th>
    <td><select name="build_rule" class="easyui-combobox" style="height:30px;" data-options="editable:false">
        <option value="0">不生成</option>
        <option value="1">生成</option>
      </select></td>
  </tr>
  <tr>
    <th>生成列表文件:</th>
    <td><select name="build_tpl_index" class="easyui-combobox" style="height:30px;" data-options="editable:false">
        <option value="0">不生成</option>
        <option value="1">生成</option>
      </select></td>
  </tr>
  <tr>
    <th>生成新增文件:</th>
    <td><select name="build_tpl_add" class="easyui-combobox" style="height:30px;" data-options="editable:false">
        <option value="0">不生成</option>
        <option value="1">生成</option>
      </select></td>
  </tr>
  <tr>
    <th>生成更改文件:</th>
    <td><select name="build_tpl_edit" class="easyui-combobox" style="height:30px;" data-options="editable:false">
        <option value="0">不生成</option>
        <option value="1">生成</option>
      </select></td>
  </tr>
</table>