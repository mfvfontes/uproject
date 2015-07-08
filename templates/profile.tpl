{include file='header_reserved.tpl'}
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
                    <img class="img-responsive" src="{'../'|cat:$images['image_url']}" alt="" style="margin-top: 25%; height: 200px ">
                </div>
                <div class="col-sm-3"><h3 id="subtitleVerde">Informação Básica:</h3>
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_verde">
                            <i class="fa" ></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id = "subsubtitle">Nome:</h4>
                            <p>{$users['username']}</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_verde">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id = "subsubtitle">Apelido:</h4>
                            <p>{$users['user_surname']}</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_verde">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id = "subsubtitle">E-mail:</h4>
                            <p>{$users['user_email']}</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_verde">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id = "subsubtitle">Contacto:</h4>
                            <p>{$users['user_phone']}</p>
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

    {include file='footer_reserved.tpl'}