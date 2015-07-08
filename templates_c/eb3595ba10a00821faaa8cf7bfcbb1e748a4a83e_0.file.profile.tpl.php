<?php /* Smarty version 3.1.27, created on 2015-07-08 12:31:16
         compiled from "/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/profile.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14571787559cfbf4ce3d27_76892442%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb3595ba10a00821faaa8cf7bfcbb1e748a4a83e' => 
    array (
      0 => '/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/profile.tpl',
      1 => 1436351473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14571787559cfbf4ce3d27_76892442',
  'variables' => 
  array (
    'images' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559cfbf4e416a4_33433015',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559cfbf4e416a4_33433015')) {
function content_559cfbf4e416a4_33433015 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14571787559cfbf4ce3d27_76892442';
echo $_smarty_tpl->getSubTemplate ('header_reserved.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Perfil <small>Informações do Utilizador</small>
                        </h1> 
                    </div>
                </div>
                <!-- /.row -->

				<div class="row">
                <div class="col-sm-3 wow fadeInLeft">
                    <img class="img-responsive" src="<?php echo ('../').($_smarty_tpl->tpl_vars['images']->value['image_url']);?>
" alt="" style="margin-top: 25%; height: 200px ">
                </div>
                <div class="col-sm-3"><h3 id="subtitleVerde">Informação Básica:</h3>
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_verde">
                            <i class="fa" ></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id = "subsubtitle">Nome:</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['users']->value['username'];?>
</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_verde">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id = "subsubtitle">Apelido:</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['users']->value['user_surname'];?>
</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_verde">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id = "subsubtitle">E-mail:</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['users']->value['user_email'];?>
</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_verde">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id = "subsubtitle">Contacto:</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['users']->value['user_phone'];?>
</p>
                        </div>
                    </div>
				</div>
				
				<div class="col-sm-3"><h3 id="subtitleVermelho">Projetos:</h3>
					<div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_vermelho">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id = "subsubtitle">Trabalhos efetuados:</h4>
                            <p>website da empresa XPTO</p>
                        </div>
                    </div>
					
					<div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_vermelho">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id = "subsubtitle">Trabalhos a desenvolver:</h4>
                            <p>website da empresa asdf</p>
                        </div>
                    </div>
					
					<div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_vermelho">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id = "subsubtitle">Deadlines de trabalhos próximos:</h4>
                            <p>07-07-2015</p>
                        </div>
                    </div>
				</div>
				
				<div class="col-sm-3"><h3 id= "subtitleLaranja">Emprego:</h3>
					<div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_laranja">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id = "subsubtitle">Cargo:</h4>
                            <p>Programador</p>
                        </div>
                    </div>
					
					<div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_laranja">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id = "subsubtitle">Páginas de trabalho:</h4>
                            <p>asana.com - asana.com/....</p>
                        </div>
                    </div>
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