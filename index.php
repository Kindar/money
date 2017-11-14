<?php
if(!isset($_COOKIE['kindarme'])){header("Refresh:0; url=http://www.kindar.me");}else {
require 'libs/Smarty.class.php';
require 'libs/db.php';
$smarty = new Smarty;

## Start Bank
$BankShow = money_get($table = 'bank');
$BankSum = money_sum($table = 'bank');
$smarty->assign("BankSum", $BankSum);
$smarty->assign("BankShow", $BankShow);
## End Bank

## Start Cash
$CashShow = money_get($table = 'cash');
$CashSum = money_sum($table = 'cash');
$smarty->assign("CashSum", $CashSum);
$smarty->assign("CashShow", $CashShow);
## End Cash

$smarty->assign("CashSum", $CashSum);
$smarty->assign("BankSum", $BankSum);
$smarty->display('index.html');
}
