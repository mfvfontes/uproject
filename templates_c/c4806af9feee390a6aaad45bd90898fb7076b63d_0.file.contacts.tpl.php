<?php /* Smarty version 3.1.27, created on 2015-07-08 14:01:56
         compiled from "/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/contacts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1190918879559d113415bcb6_33166631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4806af9feee390a6aaad45bd90898fb7076b63d' => 
    array (
      0 => '/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/contacts.tpl',
      1 => 1436356809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1190918879559d113415bcb6_33166631',
  'variables' => 
  array (
    'contacts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559d1134282a57_58792218',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559d1134282a57_58792218')) {
function content_559d1134282a57_58792218 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1190918879559d113415bcb6_33166631';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<section id="contact">
        <div id="google-map" style="height:690px" data-latitude="41.1780" data-longitude="-8.5980"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3 style ="margin-top: 50px">Contatos</h3>

                            <address class="form-group wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                              <strong>U.Project</strong><br>
                              <?php echo $_smarty_tpl->tpl_vars['contacts']->value["contact_address"];?>
<br>
                              <abbr>Telefone:</abbr> <?php echo $_smarty_tpl->tpl_vars['contacts']->value["contact_phone"];?>

                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="../actions/sendemail.php" onsubmit="return validateForm_contact();">
							<div class="form-group wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                                <div class="form-group">
                                    <input name="name" type="text" id="name" class="form-control" placeholder="Nome" required>
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" id="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input name="institution" type="text" id="institution" class="form-control" placeholder="Instituição" required>
                                </div>
								<div class="form-group">
                                    <input name="subject" type="text" id="subject" class="form-control" placeholder="Assunto" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="5" placeholder="Mensagem" required></textarea>
                                </div>
                                <button value="Send" name="submit" type="submit" class="btn btn-primary">Enviar</button>
								</div>
                            </form>
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