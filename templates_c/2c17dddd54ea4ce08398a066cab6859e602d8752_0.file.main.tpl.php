<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-05 15:28:52
  from 'C:\xampp\htdocs\php_kalkulator_role\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff477a4a4eb61_32416733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c17dddd54ea4ce08398a066cab6859e602d8752' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_kalkulator_role\\app\\views\\templates\\main.tpl',
      1 => 1609856927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff477a4a4eb61_32416733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html lang="pl">
<head>
    <title>Kalkulator kredytowy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper" class="fade-in">

    <!-- Intro -->
    <div id="intro">
        <h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Kalkulator kredytowy" : $tmp);?>
</h1>
        <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Darmowy kalkulator kredytowy, dzięki któremu w szybki i łatwy sposób obliczysz ratę swojego kredytu" : $tmp);?>
</p>
        <ul class="actions">
            <li><a href="#app_content" class="button icon solid solo fa-arrow-down scrolly">Przejdż do kalkulatora</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id="header">
        <a href="#app_content" class="logo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_logo']->value)===null||$tmp==='' ? "Kalkulator kredytowy" : $tmp);?>
</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li class="active"><a href="#app_content">Kalkulator</a></li>
        </ul>
    </nav>

        <div id="app_content" class="content">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16463099055ff477a4a4aac6_40783809', 'content');
?>


        </div>

        <div class="footer l-box is-center">
            <p>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15738926055ff477a4a4b862_08143544', 'footer');
?>

            </p>
        </div>

    </div>

<!-- Scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_16463099055ff477a4a4aac6_40783809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16463099055ff477a4a4aac6_40783809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_15738926055ff477a4a4b862_08143544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15738926055ff477a4a4b862_08143544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}