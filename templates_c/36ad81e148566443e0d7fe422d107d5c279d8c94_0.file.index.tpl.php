<?php /* Smarty version 3.1.27, created on 2015-07-07 20:12:56
         compiled from "/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2081317635559c16a86dd7e6_42344179%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36ad81e148566443e0d7fe422d107d5c279d8c94' => 
    array (
      0 => '/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/index.tpl',
      1 => 1436292773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2081317635559c16a86dd7e6_42344179',
  'variables' => 
  array (
    'news' => 0,
    'cur_news' => 0,
    'unfinished_projects' => 0,
    'cur_project' => 0,
    'finished_projects' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559c16a8922117_20220331',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559c16a8922117_20220331')) {
function content_559c16a8922117_20220331 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2081317635559c16a86dd7e6_42344179';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(../images/slider/test.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>U.Project</span> é a primeira incubadora júnior de ideias</h2>
                                    <p>O nosso projeto visa potenciar o empreendedorismo, inovação e criatividade dos alunos da Universidade do Porto.</p>
                                    <a class="btn btn-primary btn-lg" href="about_us.html">Ler Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(../images/slider/bg_innovation.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Junta-te à <span>U.Project</span> e desenvolve a tua ideia</h2>
                                    <p>Potencia, juntamente com outros alunos da UP, as ideias dos mesmos, produzindo conhecimento, projetos de inovação e empresas.</p>
                                    <a class="btn btn-primary btn-lg" href="about_us.html">Ler Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->
    <section id="services" >
        <div class="container">
			<section id="blog">
		        <div class="container">
		            <div class="section-header">
		                <h2 class="section-title text-center wow fadeInDown">Notícias</h2>
		                <p class="text-center wow fadeInDown">As mais recentes notícias da U. Project e das entidades parceiras</p>
		            </div>

		            <div class="row">
							<?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cur_news'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cur_news']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cur_news']->value) {
$_smarty_tpl->tpl_vars['cur_news']->_loop = true;
$foreach_cur_news_Sav = $_smarty_tpl->tpl_vars['cur_news'];
?>
		                <div class="col-sm-6">
		                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
		                        <article>
		                            <header class="entry-header">
		                                <div class="entry-thumbnail">
		                                    <img class="img-responsive" src="<?php echo ('../').($_smarty_tpl->tpl_vars['cur_news']->value['image_url']);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cur_news']->value['image_alt'];?>
">
		                                </div>
		                                <div class="entry-date" style="color:#009957"><p><?php echo '<?=';?>$new["news_date"]<?php echo '?>';?></p></div>
		                                <h2 class="entry-title"><a href="#"><p><?php echo $_smarty_tpl->tpl_vars['cur_news']->value['news_title'];?>
</p></a></h2>
		                            </header>
		                            <div class="entry-content">
		                                <P><?php echo $_smarty_tpl->tpl_vars['cur_news']->value['news_text'];?>
</P>
		                            </div>
		                        </article>
		                    </div>
		                </div><!--/.col-sm-6-->
						<?php
$_smarty_tpl->tpl_vars['cur_news'] = $foreach_cur_news_Sav;
}
?>
		             </div>
		        </div>
			</section>
		</div>
	</section>

			<section id="blog">
		        <div class="container">
		            <div class="section-header">
		                <h2 class="section-title text-center wow fadeInDown" style="color: #156AEC">Projetos a decorrer</h2>
		                <p class="text-center wow fadeInDown">Os atuais projetos da U.Project</p>
		            </div>

		            <div class="row">
						<?php
$_from = $_smarty_tpl->tpl_vars['unfinished_projects']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cur_project'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cur_project']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cur_project']->value) {
$_smarty_tpl->tpl_vars['cur_project']->_loop = true;
$foreach_cur_project_Sav = $_smarty_tpl->tpl_vars['cur_project'];
?>
		                <div class="col-sm-6">
		                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
		                        <article class="media clearfix">
		                            <div class="entry-thumbnail pull-left">
		                                <img class="img-responsive" src="<?php echo ('../').($_smarty_tpl->tpl_vars['cur_project']->value['image_url']);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cur_project']->value['image_alt'];?>
">
		                            </div>
		                            <div class="media-body">
		                                <header class="entry-header">
		                                    <div class="entry-date" style="color:#009957"><?php echo $_smarty_tpl->tpl_vars['cur_project']->value['project_startdate'];?>
</div>
		                                    <h2 class="entry-title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['cur_project']->value['project_name'];?>
</a></h2>
		                                </header>

		                                <div class="entry-content">
		                                    <p><?php echo $_smarty_tpl->tpl_vars['cur_project']->value['project_description'];?>
</p>
		                                </div>
		                            </div>
		                        </article>
		                    </div>
		                </div>
						<?php
$_smarty_tpl->tpl_vars['cur_project'] = $foreach_cur_project_Sav;
}
?>
		            </div>
		        </div>
		    </section>

			<section id="blog">
		        <div class="container">
		            <div class="section-header">
		                <h2 class="section-title text-center wow fadeInDown">Portefólio</h2>
		                <p class="text-center wow fadeInDown">A coleção de projetos da U.Project</p>
		            </div>

		            <div class="row">
		                <?php
$_from = $_smarty_tpl->tpl_vars['finished_projects']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cur_project'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cur_project']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cur_project']->value) {
$_smarty_tpl->tpl_vars['cur_project']->_loop = true;
$foreach_cur_project_Sav = $_smarty_tpl->tpl_vars['cur_project'];
?>
		                <div class="col-sm-6">
		                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
		                        <article class="media clearfix">
		                            <div class="entry-thumbnail pull-left">
		                                <img class="img-responsive" src="<?php echo ('../').($_smarty_tpl->tpl_vars['cur_project']->value['image_url']);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cur_project']->value['image_alt'];?>
">
		                            </div>
		                            <div class="media-body">
		                                <header class="entry-header">
		                                    <div class="entry-date" style="color:#009957"><?php echo $_smarty_tpl->tpl_vars['cur_project']->value['project_startdate'];?>
</div>
		                                    <h2 class="entry-title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['cur_project']->value['project_name'];?>
</a></h2>
		                                </header>

		                                <div class="entry-content">
		                                    <p><?php echo $_smarty_tpl->tpl_vars['cur_project']->value['project_description'];?>
</p>
		                                </div>
		                            </div>
		                        </article>
		                    </div>
		                </div>
						<?php
$_smarty_tpl->tpl_vars['cur_project'] = $foreach_cur_project_Sav;
}
?>
		            </div>

		        </div>
		    </section>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>