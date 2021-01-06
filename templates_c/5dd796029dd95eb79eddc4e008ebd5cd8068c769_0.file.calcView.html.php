<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-02 15:58:02
  from 'C:\xampp\htdocs\php_kalkultor_obiektowosc_i_kontroler_gl\app\calc\calcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff089fa25d1a7_30236914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dd796029dd95eb79eddc4e008ebd5cd8068c769' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_kalkultor_obiektowosc_i_kontroler_gl\\app\\calc\\calcView.tpl',
      1 => 1609599480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff089fa25d1a7_30236914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13925250955ff089fa24c062_46962902', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6045026495ff089fa24cd29_25155749', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.tpl");
}
/* {block 'footer'} */
class Block_13925250955ff089fa24c062_46962902 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_13925250955ff089fa24c062_46962902',
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
class Block_6045026495ff089fa24cd29_25155749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6045026495ff089fa24cd29_25155749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Main -->
<div id="main">
    <div class="row gtr-uniform">
        <div class="col-6 col-12-xsmall">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_root;?>
calcCompute" >
                <div class="field">
                    <label for="id_value">Kwota kredytu</label>
                    <input type="text" name="value" id="id_value" value="<?php echo $_smarty_tpl->tpl_vars['frm']->value->value;?>
"/><br/>
                </div>
                <div class="field">
                    <label for="id_time">Okres(w latach)</label>
                    <input type="text" name="time" id="id_time" value="<?php echo $_smarty_tpl->tpl_vars['frm']->value->time;?>
" /><br/>
                </div>
                <div class="field">
                    <label for="id_interest">Oprocentowanie</label>
                    <input type="text" name="interest" id="id_interest" value="<?php echo $_smarty_tpl->tpl_vars['frm']->value->interest;?>
"/><br/>
                </div>

                <ul class="actions">
                    <li><input type="submit"  value="Oblicz" /></li>
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


            <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
            <blockquote>
                <h4>Wynik</h4>
                <p class="res">
                    <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

                </p>
            </blockquote>
            <?php }?>
        </div>
    </div>

</div>
<!--</div>-->

<?php
}
}
/* {/block 'content'} */
}
