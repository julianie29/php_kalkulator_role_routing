<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-31 11:41:26
  from 'C:\xampp\htdocs\php_kalkultor_obiektowosc_i_kontroler_gl\app\calcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fedaad65c5e46_38936663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beef9388a8f9ca72d7401914f2a661360e7170c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_kalkultor_obiektowosc_i_kontroler_gl\\app\\calcView.tpl',
      1 => 1609411280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fedaad65c5e46_38936663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8425580555fedaad65ab448_68993562', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14604957945fedaad65ac2c1_42568857', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_8425580555fedaad65ab448_68993562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8425580555fedaad65ab448_68993562',
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
class Block_14604957945fedaad65ac2c1_42568857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14604957945fedaad65ac2c1_42568857',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Main -->
<div id="main">
    <div class="row gtr-uniform">
        <div class="col-6 col-12-xsmall">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/app/calc.php" >
                <div class="field">
                    <label for="id_value">Kwota kredytu</label>
                    <input type="text" name="value" id="id_value" /><br/>
                </div>
                <div class="field">
                    <label for="id_time">Okres(w latach)</label>
                    <input type="text" name="time" id="id_time" /><br/>
                </div>
                <div class="field">
                    <label for="id_interest">Oprocentowanie</label>
                    <input type="text" name="interest" id="id_interest" /><br/>
                </div>

                <ul class="actions">
                    <li><input type="submit"  value="Oblicz" /></li>
                </ul>
             </form>
        </div>


        <div class="col-6 col-12-xsmall">
            
            <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
            <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
            <blockquote>
                <h4>Wystąpiły błędy: </h4>
                <ol class="err">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            </blockquote>
            <?php }?>
            <?php }?>


            <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
            <?php if ($_smarty_tpl->tpl_vars['result']->value >= 0) {?>
            <blockquote>
                <h4>Wynik</h4>
                <p class="res">
                    <?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

                </p>
            </blockquote>
            <?php }?>
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
