<?php
require 'libs/Smarty.class.php';
require 'libs/db.php';
$smarty = new Smarty;
$BankShow = money_get($table = 'cash');
$CashSum = money_sum($table = 'cash');


if ($_POST['go'] == 'bank') {
$result = money_cash_add($_POST['in'],$_POST['out'],$_POST['des']);
header("Location: index.php");
}


$smarty->assign("CashSum", $CashSum);
$smarty->assign("CashShow", $CashShow);
$smarty->display('cash.html');
