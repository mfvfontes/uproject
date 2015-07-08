{include file='header_reserved.tpl'}

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Parceiros <small>Parcerias com a U. Project</small>
                        </h1> 
                    </div>
                </div>
                <!-- /.row -->
			<div class="row">
			{foreach from=$partners item=cur_partner}
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"></i>{$cur_partner['partner_name']}</h3>
                            </div>
                            <div class="panel-body">
							<img class="img-responsive" src="{'../'|cat:$cur_partner['image_url']}"</img>
									<h4>{$cur_partner['partner_info']}</h4>
                            </div>
                        </div>
                    </div>
			{/foreach}
                </div>
				

				
				
				
				
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->






	</div>
	<!-- /#page-wrapper -->




{include file='footer_reserved.tpl'}