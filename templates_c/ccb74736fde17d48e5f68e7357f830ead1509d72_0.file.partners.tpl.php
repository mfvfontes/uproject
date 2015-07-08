<?php /* Smarty version 3.1.27, created on 2015-07-07 19:51:26
         compiled from "/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/partners.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:90270998559c119e166e02_09408586%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccb74736fde17d48e5f68e7357f830ead1509d72' => 
    array (
      0 => '/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/partners.tpl',
      1 => 1436291483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90270998559c119e166e02_09408586',
  'variables' => 
  array (
    'partners' => 0,
    'cur_partner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559c119e2ac808_22160977',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559c119e2ac808_22160977')) {
function content_559c119e2ac808_22160977 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '90270998559c119e166e02_09408586';
echo $_smarty_tpl->getSubTemplate ('header_reserved.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Parceiros <small>Parcerias com a U. Project</small>
                        </h1> 
                    </div>
                </div>
                <!-- /.row -->
			<div class="row">
			<?php
$_from = $_smarty_tpl->tpl_vars['partners']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cur_partner'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cur_partner']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cur_partner']->value) {
$_smarty_tpl->tpl_vars['cur_partner']->_loop = true;
$foreach_cur_partner_Sav = $_smarty_tpl->tpl_vars['cur_partner'];
?>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"></i><?php echo $_smarty_tpl->tpl_vars['cur_partner']->value['partner_name'];?>
</h3>
                            </div>
                            <div class="panel-body">
							<img class="img-responsive" src="<?php echo ('../').($_smarty_tpl->tpl_vars['cur_partner']->value['image_url']);?>
"</img>
									<h4><?php echo $_smarty_tpl->tpl_vars['cur_partner']->value['partner_info'];?>
</h4>
                            </div>
                        </div>
                    </div>
			<?php
$_smarty_tpl->tpl_vars['cur_partner'] = $foreach_cur_partner_Sav;
}
?>
                </div>
				

				
				
				
				
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->






	</div>
	<!-- /#page-wrapper -->




<?php echo $_smarty_tpl->getSubTemplate ('footer_reserved.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>