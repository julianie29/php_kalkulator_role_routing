<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-06 18:02:48
  from 'C:\xampp\htdocs\php_kalkulator_role_routing\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff5ed38145d30_55618794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f471bfe0298e5878daea7dcea20cc632d2bb8f09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_kalkulator_role_routing\\app\\views\\LoginView.tpl',
      1 => 1609856862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff5ed38145d30_55618794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2053652085ff5ed3812e741_03255234', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7899474715ff5ed3812fe98_77455597', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_2053652085ff5ed3812e741_03255234 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2053652085ff5ed3812e741_03255234',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="copyright">
        <ul><li>Strona oparta na szablonie:  <a href="https://html5up.net">HTML5 UP</a></li><li> autor: Julia Niedziela</li></ul>
    </div>
<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_7899474715ff5ed3812fe98_77455597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7899474715ff5ed3812fe98_77455597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="main">
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_root;?>
login" >
                    <div class="field">
                        <label for="id_login">Login</label>
                        <input type="text" name="login" id="id_login" /><br/>
                    </div>
                    <div class="field">
                        <label for="id_pass">Hasło</label>
                        <input type="text" name="pass" id="id_pass" /><br/>
                    </div>
                    <ul class="actions">
                        <li><input type="submit"  value="Zaloguj" /></li>
                    </ul>
                </form>
            </div>


            <div class="col-6 col-12-xsmall">
                
                <?php if ($_smarty_tpl->tpl_vars['msg']->value->IsError()) {?>
                    <blockquote>
                        <h4>Wystąpiły błędy: </h4>
                        <ol class="err">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg']->value->getErrors(), 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                                <li><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ol>
                    </blockquote>
                <?php }?>


            </div>
        </div>

    </div>

<?php
}
}
/* {/block 'content'} */
}
