<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-13 17:06:04
  from '/laravel/templates/admin/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5e274c3644b5_95833662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cba142530b50babcc75512b6f85c629c7aaf6650' => 
    array (
      0 => '/laravel/templates/admin/products.tpl',
      1 => 1600005701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5e274c3644b5_95833662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12516156045f5e274c2ff471_49225084', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_12516156045f5e274c2ff471_49225084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12516156045f5e274c2ff471_49225084',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form action="/?action=adminAddProduct" method="POST" style="width: 400px" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Product Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Product name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price $</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Product price ($)" name="price">
        </div>
        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" class="form-control" id="file" name="image">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category_id">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Create Product</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Manage</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <tr>

            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" width="40" height="40"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['category_id'];?>
</td>
            <td>
                <button class="btn btn-warning">Update</button>
                <button class="btn btn-danger">Delete</button>
            </td>
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
