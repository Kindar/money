<?php
require 'libs/Smarty.class.php';
require 'libs/db.php';
$smarty = new Smarty;
$BankShow = money_get($table = 'bank');
$BankSum = money_sum($table = 'bank');



if ($_POST['go'] == 'bank') {
$result = money_bank_add($_POST['in'],$_POST['out'],$_POST['des']);
header("Location: index.php");
}


if ($_POST['go'] == 'cash') {
$Bank_result = money_bank_add($_POST['in'],$_POST['out'],"سحب كاش");
$Cash_result = money_cash_add($_POST['out'],$_POST['in'],"سحب كاش");
header("Location: index.php");
}



$smarty->assign("BankSum", $BankSum);
$smarty->assign("BankShow", $BankShow);
$smarty->display('bank.html');
