<?php
/* Smarty version 3.1.29, created on 2017-11-14 19:24:03
  from "/Users/kindar/Documents/www/money/templates/cash.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0b34c3761442_88936027',
  'file_dependency' => 
  array (
    'e2189812a63fa702b40dbbd8976903c005acd36a' => 
    array (
      0 => '/Users/kindar/Documents/www/money/templates/cash.html',
      1 => 1510683835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a0b34c3761442_88936027 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="cashdisplay" style="display: none;">




	<div class="bs-component" style="margin-bottom: 15px;">
              <div class="btn-group btn-group-justified">
                <a onclick="CashAdd()" class="btn btn-default">اضافة</a>
                <a onclick="CashSub()" class="btn btn-default">خصم</a>
              </div>
            </div>


<div id="CashSub" style="display: none;">
<div class="col-md-4" ></div>
<div class="col-md-4" >
	<div class="form-group">
			<form action="cash.php" method="POST">
                  <label class="control-label" for="focusedInput">توضيح</label>
                  <input class="form-control" id="focusedInput" type="text" name="des">
                </div>
                <div class="form-group">
                  <label class="control-label">خصم من الحساب الكاش</label>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" name="out">
                    <span class="input-group-btn">
                    	<input type="submit" class="btn btn-default" type="button" value="خصم">
                    	<input type="hidden" name="go" value="bank">

                    </span>
                  </div>
                </div>
                </form>
</div>
<div class="col-md-4" ></div></div>

<div id="CashAdd" style="display: none;">
<div class="col-md-4" ></div>
<div class="col-md-4" >
	<div class="form-group">
			<form action="cash.php" method="POST">
                  <label class="control-label" for="focusedInput">توضيح</label>
                  <input class="form-control" id="focusedInput" type="text" name="des">
                </div>
                <div class="form-group">
                  <label class="control-label">اضافة دخل الى الكاش </label>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" name="in" >
                    <span class="input-group-btn">
                    	<input type="submit" class="btn btn-default" type="button" value="اضف">
                    	<input type="hidden" name="go" value="bank">

                    </span>
                  </div>
                </div>
                </form>
</div>
<div class="col-md-4" ></div>
</div>

<?php
$_from = $_smarty_tpl->tpl_vars['CashSum']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sum_0_saved_item = isset($_smarty_tpl->tpl_vars['sum']) ? $_smarty_tpl->tpl_vars['sum'] : false;
$_smarty_tpl->tpl_vars['sum'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['sum']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sum']->value) {
$_smarty_tpl->tpl_vars['sum']->_loop = true;
$__foreach_sum_0_saved_local_item = $_smarty_tpl->tpl_vars['sum'];
$_smarty_tpl->tpl_vars["sum_all_foreach"] = new Smarty_Variable($_smarty_tpl->tpl_vars['sum_all_foreach']->value+$_smarty_tpl->tpl_vars['sum']->value['in'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sum_all_foreach", 0);
$_smarty_tpl->tpl_vars["sub_all_foreach"] = new Smarty_Variable($_smarty_tpl->tpl_vars['sub_all_foreach']->value+$_smarty_tpl->tpl_vars['sum']->value['out'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sub_all_foreach", 0);
$_smarty_tpl->tpl_vars['sum'] = $__foreach_sum_0_saved_local_item;
}
if ($__foreach_sum_0_saved_item) {
$_smarty_tpl->tpl_vars['sum'] = $__foreach_sum_0_saved_item;
}
$_smarty_tpl->tpl_vars["account"] = new Smarty_Variable($_smarty_tpl->tpl_vars['sum_all_foreach']->value-$_smarty_tpl->tpl_vars['sub_all_foreach']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "account", 0);?>

<p class="bg-success col-md-12  col-xs-12 " style="
    height: 40px;
    font-size: 31px;
    font-weight: 900;
    font-family: sans-serif;
    text-align: center;">
    <?php echo $_smarty_tpl->tpl_vars['account']->value;?>
</p>

<table class="table table-striped table-hover " style="border:2px #fff solid;">
                <thead>
                  <tr>
                  <tr class="info"  style="border:2px #fff solid;">
                    <td>اضافة</td>
                    <td>خصم</td>
                    <td>توضيح</td>
                    <td>التاريخ</td>
                  </tr>

                </thead>
                <tbody >
<?php
$_from = $_smarty_tpl->tpl_vars['CashShow']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_bank_1_saved_item = isset($_smarty_tpl->tpl_vars['bank']) ? $_smarty_tpl->tpl_vars['bank'] : false;
$_smarty_tpl->tpl_vars['bank'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['bank']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['bank']->value) {
$_smarty_tpl->tpl_vars['bank']->_loop = true;
$__foreach_bank_1_saved_local_item = $_smarty_tpl->tpl_vars['bank'];
?> 

                  <?php if ($_smarty_tpl->tpl_vars['bank']->value['in'] != 0) {?><tr class="success" ><?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['bank']->value['out'] != 0) {?><tr class="danger"><?php }?>
                    <td><?php echo $_smarty_tpl->tpl_vars['bank']->value['in'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['bank']->value['out'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['bank']->value['desc'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['bank']->value['date'];?>
</td>
                  </tr>
                  <?php
$_smarty_tpl->tpl_vars['bank'] = $__foreach_bank_1_saved_local_item;
}
if ($__foreach_bank_1_saved_item) {
$_smarty_tpl->tpl_vars['bank'] = $__foreach_bank_1_saved_item;
}
?>


                </tbody>
              </table>

</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
