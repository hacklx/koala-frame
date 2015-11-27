<?php if (!defined('THINK_PATH')) exit();?><table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  <tr>
    <th>数据表:</th>
    <td><select class="easyui-combobox" style="height:30px;" name="table" data-options="editable:false">
        <?php if(is_array($tables)): $i = 0; $__LIST__ = $tables;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tb): $mod = ($i % 2 );++$i;?><option value="<?php echo ($tb); ?>"><?php echo ($tb); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select></td>
  </tr>
  <tr>
    <th>模型标识:</th>
    <td><input class="easyui-textbox"  style="height:30px;"type="text" name="name" value=""></td>
  </tr>
  <tr>
    <th>模型名称:</th>
    <td><input class="easyui-textbox" style="height:30px;" type="text" name="title" value=""></td>
  </tr>
</table>