{include file='header.tpl'}
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
							{foreach from=$news item=cur_news}
		                <div class="col-sm-6">
		                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
		                        <article>
		                            <header class="entry-header">
		                                <div class="entry-thumbnail">
		                                    <img class="img-responsive" src="{'../'|cat:$cur_news['image_url']}" alt="{$cur_news['image_alt']}">
		                                </div>
		                                <div class="entry-date" style="color:#009957"><p><?=$new["news_date"]?></p></div>
		                                <h2 class="entry-title"><a href="#"><p>{$cur_news['news_title']}</p></a></h2>
		                            </header>
		                            <div class="entry-content">
		                                <P>{$cur_news['news_text']}</P>
		                            </div>
		                        </article>
		                    </div>
		                </div><!--/.col-sm-6-->
						{/foreach}
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
						{foreach from=$unfinished_projects item=cur_project}
		                <div class="col-sm-6">
		                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
		                        <article class="media clearfix">
		                            <div class="entry-thumbnail pull-left">
		                                <img class="img-responsive" src="{'../'|cat:$cur_project['image_url']}" alt="{$cur_project['image_alt']}">
		                            </div>
		                            <div class="media-body">
		                                <header class="entry-header">
		                                    <div class="entry-date" style="color:#009957">{$cur_project['project_startdate']}</div>
		                                    <h2 class="entry-title"><a href="#">{$cur_project['project_name']}</a></h2>
		                                </header>

		                                <div class="entry-content">
		                                    <p>{$cur_project['project_description']}</p>
		                                </div>
		                            </div>
		                        </article>
		                    </div>
		                </div>
						{/foreach}
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
		                {foreach from=$finished_projects item=cur_project}
		                <div class="col-sm-6">
		                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
		                        <article class="media clearfix">
		                            <div class="entry-thumbnail pull-left">
		                                <img class="img-responsive" src="{'../'|cat:$cur_project['image_url']}" alt="{$cur_project['image_alt']}">
		                            </div>
		                            <div class="media-body">
		                                <header class="entry-header">
		                                    <div class="entry-date" style="color:#009957">{$cur_project['project_startdate']}</div>
		                                    <h2 class="entry-title"><a href="#">{$cur_project['project_name']}</a></h2>
		                                </header>

		                                <div class="entry-content">
		                                    <p>{$cur_project['project_description']}</p>
		                                </div>
		                            </div>
		                        </article>
		                    </div>
		                </div>
						{/foreach}
		            </div>

		        </div>
		    </section>
{include file='footer.tpl'}