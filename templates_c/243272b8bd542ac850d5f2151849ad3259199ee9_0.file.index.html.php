<?php
/* Smarty version 3.1.29, created on 2017-11-14 19:04:46
  from "/Users/kindar/Documents/www/money/templates/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0b303ea56be9_70306485',
  'file_dependency' => 
  array (
    '243272b8bd542ac850d5f2151849ad3259199ee9' => 
    array (
      0 => '/Users/kindar/Documents/www/money/templates/index.html',
      1 => 1509230057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:bank.html' => 1,
    'file:cash.html' => 1,
    'file:loan.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a0b303ea56be9_70306485 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php
$_from = $_smarty_tpl->tpl_vars['BankSum']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_banksum_0_saved_item = isset($_smarty_tpl->tpl_vars['banksum']) ? $_smarty_tpl->tpl_vars['banksum'] : false;
$_smarty_tpl->tpl_vars['banksum'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['banksum']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['banksum']->value) {
$_smarty_tpl->tpl_vars['banksum']->_loop = true;
$__foreach_banksum_0_saved_local_item = $_smarty_tpl->tpl_vars['banksum'];
$_smarty_tpl->tpl_vars["sum_all_foreach"] = new Smarty_Variable($_smarty_tpl->tpl_vars['sum_all_foreach']->value+$_smarty_tpl->tpl_vars['banksum']->value['in'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sum_all_foreach", 0);
$_smarty_tpl->tpl_vars["sub_all_foreach"] = new Smarty_Variable($_smarty_tpl->tpl_vars['sub_all_foreach']->value+$_smarty_tpl->tpl_vars['banksum']->value['out'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sub_all_foreach", 0);
$_smarty_tpl->tpl_vars['banksum'] = $__foreach_banksum_0_saved_local_item;
}
if ($__foreach_banksum_0_saved_item) {
$_smarty_tpl->tpl_vars['banksum'] = $__foreach_banksum_0_saved_item;
}
$_smarty_tpl->tpl_vars["bankaccount"] = new Smarty_Variable($_smarty_tpl->tpl_vars['sum_all_foreach']->value-$_smarty_tpl->tpl_vars['sub_all_foreach']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "bankaccount", 0);?>  

<?php
$_from = $_smarty_tpl->tpl_vars['CashSum']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cashsum_1_saved_item = isset($_smarty_tpl->tpl_vars['cashsum']) ? $_smarty_tpl->tpl_vars['cashsum'] : false;
$_smarty_tpl->tpl_vars['cashsum'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cashsum']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cashsum']->value) {
$_smarty_tpl->tpl_vars['cashsum']->_loop = true;
$__foreach_cashsum_1_saved_local_item = $_smarty_tpl->tpl_vars['cashsum'];
$_smarty_tpl->tpl_vars["sum_all_foreach_cash"] = new Smarty_Variable($_smarty_tpl->tpl_vars['sum_all_foreach_cash']->value+$_smarty_tpl->tpl_vars['cashsum']->value['in'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sum_all_foreach_cash", 0);
$_smarty_tpl->tpl_vars["sub_all_foreach_cash"] = new Smarty_Variable($_smarty_tpl->tpl_vars['sub_all_foreach_cash']->value+$_smarty_tpl->tpl_vars['cashsum']->value['out'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sub_all_foreach_cash", 0);
$_smarty_tpl->tpl_vars['cashsum'] = $__foreach_cashsum_1_saved_local_item;
}
if ($__foreach_cashsum_1_saved_item) {
$_smarty_tpl->tpl_vars['cashsum'] = $__foreach_cashsum_1_saved_item;
}
$_smarty_tpl->tpl_vars["cashaccount"] = new Smarty_Variable($_smarty_tpl->tpl_vars['sum_all_foreach_cash']->value-$_smarty_tpl->tpl_vars['sub_all_foreach_cash']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cashaccount", 0);?>

<!-- START Main-->
<div id="maindisplay" style="display: block;">

            <div class="row" style="text-align: center;">
          <div class="col-lg-4 col-xs-12">
<div class="panel panel-default"><div class="panel-body"> دائن </div> </div>
            <div class="bs-component">
              <div class="alert alert-dismissible alert-danger">
                <strong>----- </strong>
              </div>
            </div>
          </div>
       
          <div class="col-lg-4 col-xs-12">
          	<div class="panel panel-default"><div class="panel-body"> الحساب الجاري </div> </div>
            <div class="bs-component">
              <div class="alert alert-dismissible alert-success">
                <strong><?php echo $_smarty_tpl->tpl_vars['bankaccount']->value;?>
</strong>
              </div>
               <div class="alert alert-dismissible alert-warning">
                <strong><?php echo $_smarty_tpl->tpl_vars['cashaccount']->value;?>
</strong>
              </div>
            </div>
          </div>

         
          <div class="col-lg-4 col-xs-12">
          	<div class="panel panel-default"><div class="panel-body">  مدين </div> </div>
            <div class="bs-component">
              <div class="alert alert-dismissible alert-info">
                <strong>---- </strong>
              </div>
            </div>
          </div>
        </div>

</div>
<!-- End Main -->




<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:bank.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cash.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:loan.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
