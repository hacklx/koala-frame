<?php if (!defined('THINK_PATH')) exit();?><table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  <tr>
    <th>字段名:</th>
    <td><input class="easyui-textbox" style="height:30px;" type="text" name="name" value=""></td>
  </tr>
  <tr>
    <th>字段标题:</th>
    <td><input class="easyui-textbox" style="height:30px;" type="text" name="title" value=""></td>
  </tr>
  <tr>
    <th>数据类型:<span>(修改后将改变<strong>字段定义</strong>和<strong>字段参数</strong>) </span></th>
    <td><select class="easyui-combobox" style="height:30px;" name="type" data-options="editable:false,value:'num', onSelect:function(rec){field_setting(rec.value)}">
        <?php if(is_array(C("FIELD_LIST"))): $i = 0; $__LIST__ = C("FIELD_LIST");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["type"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select></td>
  </tr>
  <tr>
    <th>字段定义:</th>
    <td><input class="easyui-textbox" style="height:30px;" type="text" name="field" id="field" value="int(10) unsigned NOT NULL"></td>
  </tr>
  <tr>
    <th>字段参数:</th>
    <td colspan="2" id="extra" class="search_from"></td>
  </tr>
  <tr>
    <th>字段默认值:</th>
    <td><input class="easyui-textbox" style="height:30px;" type="text" name="value" value=""></td>
  </tr>
  <tr>
    <th>备注:</th>
    <td><textarea name="remark" class="easyui-textbox" data-options="multiline:true" style="width: 300px; height: 80px"></textarea></td>
  </tr>
  <tr>
    <th>字段排序(如果为0,即不显示):</th>
    <td> 列表
      <input class="easyui-textbox" style="height:30px;width: 70px" type="text" name="sort_l" value="<?php echo ($field_sort); ?>">
      搜索
      <input class="easyui-textbox" style="height:30px;width: 70px" type="text" name="sort_s" value="<?php echo ($field_sort); ?>">
      新增
      <input class="easyui-textbox" style="height:30px;width: 70px" type="text" name="sort_a" value="<?php echo ($field_sort); ?>">
      修改
      <input class="easyui-textbox" style="height:30px;width: 70px" type="text" name="sort_e" value="<?php echo ($field_sort); ?>"></td>
  </tr>
  <tr>
    <th>列表宽度:</th>
    <td><input class="easyui-textbox" style="height:30px;" type="text" name="l_width" value="100"></td>
  </tr>
  <tr>
    <th>验证规则:</th>
    <td><textarea name="validate_rule" class="easyui-textbox" data-options="multiline:true" style="width: 300px; height: 80px"></textarea></td>
  </tr>
  <tr>
    <th>完成规则:</th>
    <td><textarea name="auto_rule" class="easyui-textbox" data-options="multiline:true" style="width: 300px; height: 80px"></textarea></td>
  </tr>
  <tr>
    <th>状态:</th>
    <td><select class="easyui-combobox" style="height:30px;" name="status" data-options="value:'1',editable:false">
        <option value="0">禁用</option>
        <option value="1">启用</option>
      </select></td>
  </tr>
</table>
<input type="hidden" name="model_id" value="<?php echo ($model_id); ?>" />
<script type="text/javascript">
$(document).ready(function(){
field_setting('num')	
})

</script>