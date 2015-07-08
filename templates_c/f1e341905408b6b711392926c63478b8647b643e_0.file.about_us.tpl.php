<?php /* Smarty version 3.1.27, created on 2015-07-08 12:52:00
         compiled from "/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/about_us.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1425357890559d00d09f1ee8_33185446%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1e341905408b6b711392926c63478b8647b643e' => 
    array (
      0 => '/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/about_us.tpl',
      1 => 1436352718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1425357890559d00d09f1ee8_33185446',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559d00d0acd447_42450066',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559d00d0acd447_42450066')) {
function content_559d00d0acd447_42450066 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1425357890559d00d09f1ee8_33185446';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown" id="title">A Organização</h2>
                <p class="text-center wow fadeInDown">A nossa organização, a U.Project</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="../images/uproject_thumb_blue.png" alt="" style="margin-top: 25%">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_verde">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id="subsubtitle">O Objetivo:</h4>
                            <p>A U.Project tem por objetivo potenciar as ideias dos alunos da FEUP, produzindo conhecimento, projetos de inovação e empresas.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_vermelho">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id="subsubtitle">Os Co-Fundadores:</h4>
                            <p>
							Os co-fundadores desta organização são: <ul><li>Bruno Fernando Reis RibeiroSilva (Mestrado Integrado em Engenharia Metalúrgica e
							de Materiais);</li><li>Márcio Filipe Vilela Fontes (Mestrado Integrado em Engenharia Informática e Computação);</li></ul>
							</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_laranja">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id="subsubtitle">O Interior da Organização:</h4>
                            <p>
							Aqui desenvolvem novos conhecimentos e recebem uma
							preparação para o mundo empresarial e da produção industrial.
					        </p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_azul">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id="subsubtitle">Parcerias:</h4>
                            <p>A U.Project encontra-se em parceria com a FEUP, o Departamento de Engenharia Informática e o Colégio de Gaia.</p>
                        </div>
                    </div>
					
					<div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_verde">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id="subsubtitle">O Nosso Lema:</h4>
                            <p>Ambição, Trabalho e Sucesso</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>