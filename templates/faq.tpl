{include file='header.tpl'}
<section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown" id="title">Questões Frequentes</h2>
                <p class="text-center wow fadeInDown">Uma pequena lista das questões mais frequentemente colocadas</p>
            </div>
            <div class="row">
                <div class="col-sm-12">
				{foreach from=$faq item=cur_faq}
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left" id="bola_verde">
                            <i class="fa"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" id="subsubtitle">{$cur_faq['faq_question']}</h4>
                            <p>{$cur_faq['faq_anwser']}</p>
                        </div>
                    </div>
				{/foreach}
                </div>
            </div>
        </div>
    </section>
{include file='footer.tpl'}