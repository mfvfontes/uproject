{include file='header.tpl'}

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



{include file='footer.tpl'}