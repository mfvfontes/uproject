{include file='header.tpl'}

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
                              {$contacts["contact_address"]}<br>
                              <abbr>Telefone:</abbr> {$contacts["contact_phone"]}
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
	
	{include file='footer.tpl'}