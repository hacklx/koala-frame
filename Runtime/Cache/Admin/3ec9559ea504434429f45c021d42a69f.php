<?php if (!defined('THINK_PATH')) exit();?>    <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
    <tr>
      <th>字段名:</th>
      <td><input class="easyui-textbox" style="height:30px;" type="text" name="name" value="<?php echo ($_info['name']); ?>"></td>
    </tr>
    <tr>
      <th>字段标题:</th>
      <td><input class="easyui-textbox" style="height:30px;" type="text" name="title" value="<?php echo ($_info['title']); ?>"></td>
    </tr>
    <tr>
      <th>数据类型:</th>
      <td><select class="easyui-combobox" style="height:30px;" name="type" data-options="editable:false,value:'<?php echo ($_info['type']); ?>', onSelect:function(rec){field_setting(rec.value)}">
          <?php if(is_array(C("FIELD_LIST"))): $i = 0; $__LIST__ = C("FIELD_LIST");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["type"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select><br/<span>(修改后将改变<strong>字段定义</strong>和<strong>字段参数</strong>) </span>></td>
    </tr>
    <tr>
      <th>字段定义:</th>
      <td><input class="easyui-textbox" style="height:30px;" type="text" name="field" id="field" value="<?php echo ($_info['field']); ?>"></td>
    </tr>
    <tr>
      <th>字段参数:</th>
      <td colspan="2" id="extra" class="search_from"><?php echo ($form_data); ?></td>
    </tr>
    <tr>
      <th>字段默认值:</th>
      <td><input class="easyui-textbox" style="height:30px;" type="text" name="value" value="<?php echo ($_info['value']); ?>"></td>
    </tr>
    <tr>
      <th>备注:</th>
    <td><textarea name="remark" class="easyui-textbox" data-options="multiline:true" style="width: 300px; height: 80px"><?php echo ($_info['remark']); ?></textarea></td>
    </tr>
    <tr>
      <th>字段排序(如果为0,即不显示):</th>
      <td>
        列表 <input class="easyui-textbox" style="height:30px;width: 70px" type="text" name="sort_l" value="<?php echo ($_info['sort_l']); ?>">
        搜索 <input class="easyui-textbox" style="height:30px;width: 70px" type="text" name="sort_s" value="<?php echo ($_info['sort_s']); ?>">
        新增 <input class="easyui-textbox" style="height:30px;width: 70px" type="text" name="sort_a" value="<?php echo ($_info['sort_a']); ?>">
        修改 <input class="easyui-textbox" style="height:30px;width: 70px" type="text" name="sort_e" value="<?php echo ($_info['sort_e']); ?>"></td>
    </tr>
    <tr>
      <th>列表宽度:</th>
      <td><input class="easyui-textbox" style="height:30px;" type="text" name="l_width" value="<?php echo ($_info['l_width']); ?>"></td>
    </tr>
    <tr>
      <th>验证规则:</th>
    <td><textarea name="remark" class="easyui-textbox" data-options="multiline:true" style="width: 300px; height: 80px"><?php echo ($_info['rvalidate_ruleemark']); ?></textarea></td>
    </tr>
    <tr>
      <th>完成规则:</th>
    <td><textarea name="remark" class="easyui-textbox" data-options="multiline:true" style="width: 300px; height: 80px"><?php echo ($_info['auto_rule']); ?></textarea></td>
    </tr>
    <tr>
      <th>状态:</th>
      <td><select class="easyui-combobox" style="height:30px;" name="status" data-options="value:'<?php echo ($_info['status']); ?>'">
          <option value="0">禁用</option>
          <option value="1">启用</option>
        </select></td>
    </tr>
  </table>
  <input type="hidden" name="model_id" value='<?php echo ($_info["model_id"]); ?>' />
  <input type="hidden" name="id" value='<?php echo ($_info["id"]); ?>' />