<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-13 17:36:14
  from '/laravel/templates/admin/users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5e2e5edbe4d4_23518634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5d63cb7418ad84353970229dffb4717f377b0f4' => 
    array (
      0 => '/laravel/templates/admin/users.tpl',
      1 => 1600007734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5e2e5edbe4d4_23518634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20378484815f5e2e5ed4c0e7_88596389', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_20378484815f5e2e5ed4c0e7_88596389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20378484815f5e2e5ed4c0e7_88596389',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if ((isset($_GET['error']))) {?>
        <div class="alert alert-danger" role="alert"><?php ob_start();
echo $_GET['error'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</div>
    <?php }?>

    <?php if ((isset($_GET['message']))) {?>
        <div class="alert alert-success" role="alert"><?php ob_start();
echo $_GET['message'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</div>
    <?php }?>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Registered At</th>
            <th>Role</th>
            <th>Manage</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['created_at'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['user']->value['is_admin'] == 1) {?> admin <?php } else { ?> user <?php }?></td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] == $_SESSION['user']['id']) {?>
                        -
                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['is_admin'] == 1) {?>
                        <form action="/?action=adminChangeRole" method="POST">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" name="id">
                            <input type="hidden" value="0" name="admin">
                            <input type="submit" class="btn btn-primary" value="Make user">

                    <?php } else { ?>
                        <form action="/?action=adminChangeRole" method="POST">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" name="id">
                            <input type="hidden" value="1" name="admin">
                            <input type="submit" class="btn btn-success" value="Make admin">
                        </form>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] == $_SESSION['user']['id']) {?>
                        -
                    <?php } else { ?>
                      
                    <?php }?>
                </td>
                <td><a href="/?action=adminRemoveUser&userId=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="btn btn-danger">Delete</a></td>
            </form>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
    </table>
<?php
}
}
/* {/block "body"} */
}
