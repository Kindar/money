<?php
require 'libs/Smarty.class.php';
require 'libs/db.php';
$smarty = new Smarty;
$benefShow = money_get($table = 'benef');



if ($_POST['go'] == 'benef') {
$result = money_benef_add($_POST['name']);
header("Location: benef.php");
}



$smarty->assign("benefShow", $benefShow);
$smarty->display('benef.html');
