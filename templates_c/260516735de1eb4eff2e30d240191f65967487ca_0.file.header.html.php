<?php
/* Smarty version 3.1.29, created on 2017-11-14 19:09:21
  from "/Users/kindar/Documents/www/money/templates/header.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0b3151209d42_82832033',
  'file_dependency' => 
  array (
    '260516735de1eb4eff2e30d240191f65967487ca' => 
    array (
      0 => '/Users/kindar/Documents/www/money/templates/header.html',
      1 => 1510682956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0b3151209d42_82832033 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="utf-8">
    <title>Money</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="templates/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="templates/css/custom.min.css">
    <?php echo '<script'; ?>
>

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    <?php echo '</script'; ?>
>
  </head>
  <body>
<div class="col-md-12" >
<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav navbar-right">
            <li><a onclick="Loan()">الديون</a></li>
            <li><a onclick="Cash()">الكاش</a></li>
            <li><a onclick="Bank()">الحساب البنكي</a></li>
            <li><a onclick="Main()">الرئيسية</a></li>
          </ul>
        </div>
      </div>
    </div>
<br>
<br>
<br>
<?php }
}
