{include file='header_reserved.tpl'}

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Utilizadores <small>Gerir os utilizadores da base de dados</small>
                        </h1> 
                    </div>
                </div>
                <!-- /.row -->

				<div class="row">
                <div class="col-sm-12">
					<form name="submit" type="submit" method="post" action="../actions/register.php"><h3 id="subtitleVerde">Novo Utilizador:</h3>
                        <div class="form-group">Nome:
                            <input name="user_name" style="width: 50%;" type="text" id="fname" class="form-control" placeholder="Nome" required>
                        </div>
                        <div class="form-group">Apelido:
                            <input name="user_surname" style="width: 50%;" type="text" id="lname" class="form-control" placeholder="Apelido" required>
                        </div>
                        <div class="form-group">Username:
                            <input name="user_username" style="width: 50%;" type="text" id="username" class="form-control" placeholder="username" required>
                        </div>
						<div class="form-group">Password:
                            <input name="user_password" style="width: 50%;" type="password" id="password" class="form-control" placeholder="password" required>
                        </div>
                        <div class="form-group">E-mail:
                            <input name="user_email" style="width: 50%;" type="email" id="email" class="form-control" placeholder="e-mail" required>
                        </div>
						<div class="form-group">Telemóvel:
                            <input name="user_phone" style="width: 50%;" type="tel" id="phone" class="form-control" placeholder="telemóvel" required>
                        </div>
						<div class="form-group">User Role:
                            <select name="userrole_id">
								<option value="0">Head-Admin</option>
								<option value="1">Admin</option>
								<option value="2">Head-Member</option>
								<option value="3">Member</option>
							</select>
                        </div>
						<div class="form-group">ID imagem:
                            <input name="userimage_id" style="width: 50%;" type="text" id="image_id" class="form-control" placeholder="id">
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Inserir</button>
					</form>
				</div>
            </div>
				
				
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
		
		{include file='footer_reserved.tpl'}