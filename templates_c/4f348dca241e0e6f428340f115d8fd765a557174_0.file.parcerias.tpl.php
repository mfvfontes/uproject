<?php /* Smarty version 3.1.27, created on 2015-07-08 14:32:08
         compiled from "/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/parcerias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1634111287559d184851b0d4_20496509%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f348dca241e0e6f428340f115d8fd765a557174' => 
    array (
      0 => '/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/parcerias.tpl',
      1 => 1436358726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1634111287559d184851b0d4_20496509',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559d18485e4cb8_71351961',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559d18485e4cb8_71351961')) {
function content_559d18485e4cb8_71351961 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1634111287559d184851b0d4_20496509';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<section id="services" >
        <div class="container">

	<div class="section-header">
		<h2 class="section-title text-center wow fadeInDown">Parcerias</h2>
		<p class="text-center wow fadeInDown">Dê um impulso à sua empresa com uma parceria connosco </p>
	</div>
	<form id="main-partner-form" name="partner-form" method="post" action="../actions/add_partner.php" onsubmit="return validateForm_partner();">
	  <div class="form-group wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" id="name" name="name" class="form-control" id="exampleInputEmail1" style="max-width: 400px;min-width=200px" required>
	<label for="exampleInputEmail1">Organização</label>
    <input type="text" id="organization" name="institution" class="form-control" id="exampleInputEmail1" style="max-width: 400px;min-width=200px" required>
	 <label for="exampleInputEmail1" style="max-width: 400px;min-width=200px">Mensagem</label><br>
    <textarea type="text" id="text" name="text"
       cols="40" 
       rows="5" 
       style="max-width: 500px;min-width=200px" 
       name="Text1" 
       id="Text1" 
       value="" required></textarea><br>
		
  </div>
 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</section>
</div>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>