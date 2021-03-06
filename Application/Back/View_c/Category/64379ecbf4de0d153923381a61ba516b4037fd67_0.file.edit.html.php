<?php
/* Smarty version 3.1.29, created on 2017-04-06 10:41:44
  from "D:\xampp\htdocs\my_blog\Application\Back\VIEW\Category\edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58e5ff48246ab6_00867360',
  'file_dependency' => 
  array (
    '64379ecbf4de0d153923381a61ba516b4037fd67' => 
    array (
      0 => 'D:\\xampp\\htdocs\\my_blog\\Application\\Back\\VIEW\\Category\\edit.html',
      1 => 1491468101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
  ),
),false)) {
function content_58e5ff48246ab6_00867360 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/public.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>分类管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">添加分类</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="post" class="form-x" action="index.php?p=Back&c=Category&a=dealEdit">
          <div class="form-group">
            <div class="label">
              <label for="sitename">分类名称</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="name" name="cate_name" size="50" placeholder="分类名称" data-validate="required:请填写您的分类名称" value="<?php echo $_smarty_tpl->tpl_vars['cate_row']->value['cate_name'];?>
"/>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="sitename">所属类别</label>
            </div>
            <div class="field">
              <select class="select" name="cate_pid" >
                  <option value="0" <?php if ($_smarty_tpl->tpl_vars['cate_row']->value['cate_pid'] == 0 || $_smarty_tpl->tpl_vars['cate_b']->value['b'] == "disabled") {?>disabled<?php }?>
                   <?php if ($_smarty_tpl->tpl_vars['cate_row']->value['cate_pid'] == 0) {?>selected="selected"<?php }?>>总类</option>
                  <?php
$_from = $_smarty_tpl->tpl_vars['cate_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['cate_row']->value['cate_pid'] == $_smarty_tpl->tpl_vars['row']->value['cate_id']) {?> selected="selected"<?php }?> <?php if ($_smarty_tpl->tpl_vars['cate_row']->value['cate_pid'] !== $_smarty_tpl->tpl_vars['row']->value['cate_id']) {?> <?php echo $_smarty_tpl->tpl_vars['cate_b']->value['b'];
}?> <?php if ($_smarty_tpl->tpl_vars['cate_row']->value['cate_id'] == $_smarty_tpl->tpl_vars['row']->value['cate_id']) {?>disabled<?php }?>><?php echo preg_replace('!^!m',str_repeat('-',(3*$_smarty_tpl->tpl_vars['row']->value['level'])),$_smarty_tpl->tpl_vars['row']->value['cate_name']);?>
</option>
                  <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
              <!--     && $cate_row.cate_pid ==0 -->
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="readme">分类描述</label>
            </div>
            <div class="field">
              <textarea name="cate_desc" class="input" rows="5" cols="50" placeholder="请填写分类描述" data-validate="required:请填写分类描述"><?php echo $_smarty_tpl->tpl_vars['cate_row']->value['cate_desc'];?>
</textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">排序</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="sort" name="cate_sort" size="50" placeholder="请填写排序编号" data-validate="required:请填写排序编号" value="<?php echo $_smarty_tpl->tpl_vars['cate_row']->value['cate_sort'];?>
" />
            </div>
          </div>
          <div class="form-button">
            <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['cate_row']->value['cate_id'];?>
 ">
            <button class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html><?php }
}
