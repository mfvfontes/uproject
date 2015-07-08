<?php /* Smarty version 3.1.27, created on 2015-07-08 15:47:08
         compiled from "/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/permissions.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:141526937559d29dcbbfea7_96245429%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a0ea1a38e2f32d5b07f6c9135d85a637a71de0b' => 
    array (
      0 => '/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/permissions.tpl',
      1 => 1436363225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141526937559d29dcbbfea7_96245429',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559d29dccc7418_71673530',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559d29dccc7418_71673530')) {
function content_559d29dccc7418_71673530 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '141526937559d29dcbbfea7_96245429';
echo $_smarty_tpl->getSubTemplate ('header_reserved.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div>
                        <h1 class="page-header">
                            Permissões <small>Gerir permissões dos utilizadores</small>
                        </h1> 
                    </div>
                </div>
                <!-- /.row -->

				<div class="row">
					<form name="permissoes" method="post" action="../actions/permission_changer.php">
						<select name="user_username">Username:
							<?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$foreach_user_Sav = $_smarty_tpl->tpl_vars['user'];
?>
							<option><?php echo $_smarty_tpl->tpl_vars['user']->value['user_username'];?>

							<?php
$_smarty_tpl->tpl_vars['user'] = $foreach_user_Sav;
}
?>
						</select>
						<select name="userrole_id">
							<option value="0">Head-Admin</option>
							<option value="1">Admin</option>
							<option value="2">Head-Member</option>
							<option value="3">Member</option>
						</select>
						<button type="submit" name="submit" value="submit">Mudar</button>
					</form>
				</div>
				
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
		
<?php echo $_smarty_tpl->getSubTemplate ('footer_reserved.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>