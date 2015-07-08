{include file='header_reserved.tpl'}

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div>
                        <h1 class="page-header">
                            Permissões <small>Gerir permissões dos utilizadores</small>
                        </h1> 
                    </div>
                </div>
                <!-- /.row -->

				<div class="row">
					<form name="permissoes" method="post" action="../actions/permission_changer.php">
						<select name="user_username">Username:
							{foreach from=$users item=user}
							<option>{$user['user_username']}
							{/foreach}
						</select>
						<select name="userrole_id">
							<option value="0">Head-Admin</option>
							<option value="1">Admin</option>
							<option value="2">Head-Member</option>
							<option value="3">Member</option>
						</select>
						<button type="submit" name="submit" value="submit">Mudar</button>
					</form>
				</div>
				
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
		
{include file='footer_reserved.tpl'}