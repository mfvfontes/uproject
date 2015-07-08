<?php /* Smarty version 3.1.27, created on 2015-07-08 15:35:35
         compiled from "/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/users.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1424794046559d2727a655f0_11140277%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '293326f6cfec448a9e4c43caec4c3bd23495e4c2' => 
    array (
      0 => '/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/users.tpl',
      1 => 1436362532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1424794046559d2727a655f0_11140277',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559d2727b5fbc1_26798160',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559d2727b5fbc1_26798160')) {
function content_559d2727b5fbc1_26798160 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1424794046559d2727a655f0_11140277';
echo $_smarty_tpl->getSubTemplate ('header_reserved.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Utilizadores <small>Gerir os utilizadores da base de dados</small>
                        </h1> 
                    </div>
                </div>
                <!-- /.row -->

				<div class="row">
                <div class="col-sm-12">
					<form name="submit" type="submit" method="post" action="../actions/register.php"><h3 id="subtitleVerde">Novo Utilizador:</h3>
                        <div class="form-group">Nome:
                            <input name="user_name" style="width: 50%;" type="text" id="fname" class="form-control" placeholder="Nome" required>
                        </div>
                        <div class="form-group">Apelido:
                            <input name="user_surname" style="width: 50%;" type="text" id="lname" class="form-control" placeholder="Apelido" required>
                        </div>
                        <div class="form-group">Username:
                            <input name="user_username" style="width: 50%;" type="text" id="username" class="form-control" placeholder="username" required>
                        </div>
						<div class="form-group">Password:
                            <input name="user_password" style="width: 50%;" type="password" id="password" class="form-control" placeholder="password" required>
                        </div>
                        <div class="form-group">E-mail:
                            <input name="user_email" style="width: 50%;" type="email" id="email" class="form-control" placeholder="e-mail" required>
                        </div>
						<div class="form-group">Telemóvel:
                            <input name="user_phone" style="width: 50%;" type="tel" id="phone" class="form-control" placeholder="telemóvel" required>
                        </div>
						<div class="form-group">User Role:
                            <select name="userrole_id">
								<option value="0">Head-Admin</option>
								<option value="1">Admin</option>
								<option value="2">Head-Member</option>
								<option value="3">Member</option>
							</select>
                        </div>
						<div class="form-group">ID imagem:
                            <input name="userimage_id" style="width: 50%;" type="text" id="image_id" class="form-control" placeholder="id">
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Inserir</button>
					</form>
				</div>
            </div>
				
				
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
		
		<?php echo $_smarty_tpl->getSubTemplate ('footer_reserved.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>