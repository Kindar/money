<?php
/* Smarty version 3.1.29, created on 2017-11-14 19:04:46
  from "/Users/kindar/Documents/www/money/templates/loan.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0b303eaeb4b0_38430735',
  'file_dependency' => 
  array (
    'e5f9840e33a23b78a411796b4ef6c57c270494cf' => 
    array (
      0 => '/Users/kindar/Documents/www/money/templates/loan.html',
      1 => 1509230124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a0b303eaeb4b0_38430735 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="loandisplay" style="display: none;">


	<div class="bs-component" style="margin-bottom: 15px;">
              <div class="btn-group btn-group-justified">
                <a href="loan.php?id=<?php echo $_GET['id'];?>
&do=add" class="btn btn-default">اضافة</a>
                <a href="loan.php?id=<?php echo $_GET['id'];?>
&do=sub" class="btn btn-default">خصم</a>
              </div>
            </div>


<?php if ($_GET['do'] == "sub") {?>
<div class="col-md-4" ></div>

<div class="col-md-4" >
	
			<form action="loan.php" method="POST">
      <div class="form-group">
                  <label class="control-label" for="focusedInput">توضيح</label>
                  <input class="form-control" id="focusedInput" type="text" name="des">
                </div>
                <div class="form-group">
                  <label class="control-label">خصم من الدين</label>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" name="out">
                    <span class="input-group-btn">
                    	<input type="submit" class="btn btn-default" type="button" value="خصم">
                      <input type="hidden" name="bid" value="<?php echo $_GET['id'];?>
">
                    	<input type="hidden" name="go" value="loan">

                    </span>
                  </div>
                </div>
                </form>
</div>
<div class="col-md-4" ></div>

<?php }?>

<?php if ($_GET['do'] == "add") {?>
<div class="col-md-4" ></div>
<div class="col-md-4" >
	<div class="form-group">
			<form action="loan.php" method="POST">
                  <label class="control-label" for="focusedInput">توضيح</label>
                  <input class="form-control" id="focusedInput" type="text" name="des">
                </div>
                <div class="form-group">
                  <label class="control-label">اضافة الدين</label>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" name="in" >
                    <span class="input-group-btn">
                    	<input type="submit" class="btn btn-default" type="button" value="اضف">
                      <input type="hidden" name="bid" value="<?php echo $_GET['id'];?>
">
                    	<input type="hidden" name="go" value="loan">

                    </span>
                  </div>
                </div>
                </form>
</div>
<div class="col-md-4" ></div>

<?php }?>



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
$_from = $_smarty_tpl->tpl_vars['loanShow']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_loan_0_saved_item = isset($_smarty_tpl->tpl_vars['loan']) ? $_smarty_tpl->tpl_vars['loan'] : false;
$_smarty_tpl->tpl_vars['loan'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['loan']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['loan']->value) {
$_smarty_tpl->tpl_vars['loan']->_loop = true;
$__foreach_loan_0_saved_local_item = $_smarty_tpl->tpl_vars['loan'];
?> 
				
                  <?php if ($_smarty_tpl->tpl_vars['loan']->value['in'] != 0) {?><tr class="success" ><?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['loan']->value['out'] != 0) {?><tr class="danger"><?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['loan']->value['des'] == 'سحب كاش') {?><tr class="warning"><?php }?>
                    <td><?php echo $_smarty_tpl->tpl_vars['loan']->value['in'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['loan']->value['out'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['loan']->value['desc'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['loan']->value['date'];?>
</td>
                  </tr>
                  <?php
$_smarty_tpl->tpl_vars['loan'] = $__foreach_loan_0_saved_local_item;
}
if ($__foreach_loan_0_saved_item) {
$_smarty_tpl->tpl_vars['loan'] = $__foreach_loan_0_saved_item;
}
?> 


                </tbody>
              </table> 


</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
