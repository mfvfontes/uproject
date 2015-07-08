<?php /* Smarty version 3.1.27, created on 2015-07-07 18:07:19
         compiled from "/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/faq.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1657303464559bf937e890d2_73985483%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '260ee7eecc38cfb1268ea131cee18c8c30159fbd' => 
    array (
      0 => '/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/faq.tpl',
      1 => 1436285238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1657303464559bf937e890d2_73985483',
  'variables' => 
  array (
    'faq' => 0,
    'cur_faq' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559bf938098301_50810587',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559bf938098301_50810587')) {
function content_559bf938098301_50810587 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1657303464559bf937e890d2_73985483';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown" id="title">Questões Frequentes</h2>
                <p class="text-center wow fadeInDown">Uma pequena lista das questões mais frequentemente colocadas</p>
            </div>
            <div class="row">
                <div class="col-sm-12">
				<?php
$_from = $_smarty_tpl->tpl_vars['faq']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cur_faq'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cur_faq']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cur_faq']->value) {
$_smarty_tpl->tpl_vars['cur_faq']->_loop = true;
$foreach_cur_faq_Sav = $_smarty_tpl->tpl_vars['cur_faq'];
?>
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_verde">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id="subsubtitle"><?php echo $_smarty_tpl->tpl_vars['cur_faq']->value['faq_question'];?>
</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['cur_faq']->value['faq_anwser'];?>
</p>
                        </div>
                    </div>
				<?php
$_smarty_tpl->tpl_vars['cur_faq'] = $foreach_cur_faq_Sav;
}
?>
                </div>
            </div>
        </div>
    </section>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>