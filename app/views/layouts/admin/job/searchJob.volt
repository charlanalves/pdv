{{ partial('job/searchJobBar')}}


{% for key in job.items %}
    <div class="row">
        <div class="col-md-12">
        {% if key.status != 'D' %}
            <div class="panel panel-primary panel-border top">
        {% else %}
            <div class="panel panel-danger panel-border top">
        {% endif %}
                <div class="panel-heading">
                    <span class="panel-title">
                       {{key.office}}
                    </span>
                    <div class="widget-menu pull-right">
                        <code class="bg-primary">{{key.JobContract.description}}</code>
                        <code class="bg-success">
                            {% if key.salary <= 0.00 %}
                            a combinar
                            {% else %}
                            R$ {{key.salary}}
                            {% endif %}
                        </code>
                        {% if key.status == 'D' %}
                            <code class="bg-danger">
                               Vaga Finalizada
                            </code>
                        {% endif %}
                    </div>

                </div>
                <div class="panel-body">
                     {% if key.confidential is false  %}
                        {% if key.employer is not empty  %}
                            <p><strong>Nome da empresa:</strong> {{ key.employer }}</p>
                        {% else %}
                                <p><strong>Nome da empresa:</strong> Não informado</p>
                        {% endif %}
                    {% else %}
                        <p><strong>Nome da empresa:</strong> Confidencial</p>
                    {% endif %}
                    <p><strong>Descrição: </strong>{{ key.description }}</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                        </div>
                        <div class="col-xs-12 col-md-6" style="text-align:right; padding-right: 22px;">
                                    {% if key.JobHasUser|length != 0 %}
                                    <div class="btn-group">
                                        <a class="btn btn-system" href="{{ url('job/detailsJob') }}/{{key.office}}-{{key.idjob}}">Currículo enviado</a>
                                    </div>
                                    {% endif %}
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="{{ url('job/detailsJob') }}/{{key.office}}-{{key.idjob}}">Mais detalhes</a>
                                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle " type="button" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul role="menu" class="dropdown-menu">
                                        <li>
                                            <a href="{{ url('job/detailsJob') }}/{{key.office}}-{{key.idJob}}"><span style="margin-right:8px;" class="fa fa-plus"></span>  Mais detalhes</a>
                                        </li>
                                        <li>
                                        {% if key.status != 'D' %}
                                            {% if key.JobHasUser|length == 0 %}
                                                <a class="job{{key.idJob}}" href="javascript:void(0)"
                                                {% if key.expectedSalary is true %}
                                                onclick="expectedSalary({{key.idJob}})"
                                                {% else %}
                                                onclick="sendCv({{key.idJob}})"
                                                {% endif %}><span style="margin-right:5px;" class="glyphicons glyphicons-new_window "></span> Enviar currículo</a>
                                            {% else %}
                                                <a href="#"><span style="margin-right:5px;" class="glyphicons glyphicons-ok_2"></span> Currículo enviado</a>
                                            {% endif %}
                                        {% else %}
                                            <a href="#"><span style="margin-right:5px;" class="glyphicons glyphicons-ok_2"></span> Vaga finalizada.</a>
                                        {% endif %}
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:void(0)" onclick="share('{{ host }}{{ url('job/detailsJob') }}/{{key.office}}-{{key.idJob}}')"><span style="margin-right:5px;" class="glyphicons glyphicons-share"></span> Compartilhar</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
{% else %}
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-danger panel-border top">
                <div class="panel-heading">
                    <span class="panel-title">Nenhuma vaga encontrada...</span>
                    <div class="widget-menu pull-right">
                    </div>

                </div>
                <div class="panel-body">
                    <p>Estamos trabalhando para que isso não aconteça novamente.</p>
                </div>
            </div>
        </div>
    </div>
{% endfor  %}

{% for name, uri in urlQuery %}
    {% if loop.first %}
        {% set queryUri = '?' ~ name  ~ '=' ~ uri %}
    {% else %}
        {% set queryUri = queryUri ~ '&' ~ name  ~ '=' ~ uri %}
    {% endif %}
    {% if loop.last %}
        {% set queryUri = queryUri ~ '&page='%}
    {% endif %}
{% else %}
    {% set queryUri = '?page='%}
{% endfor %}

{% if job.total_pages > 1 %}
    <ul class="paginator">
        {% for index in 1..job.total_pages %}
            {% if index == job.current %}
                <li>{{ index }}</li>
            {% else %}
                <li>{{ link_to("job/searchJob" ~ queryUri ~ index, index) }}</li>
            {% endif %}
        {% endfor %}
    </ul>
{% endif %}


    <div id="modal-form" class=" popup-basic admin-form mfp-with-anim mfp-hide">
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title"><i class="fa fa-rocket"></i>Enviar curriculo</span>
            </div>
                <div class="panel-body p25">
                    <div class="section row">
                        <div class="col-md-12">
                            <label for="expectedSalary" class="field prepend-icon">
                                <input type="text" name="expectedSalary" id="expectedSalary" class="gui-input" placeholder="Pretenção Salarial">
                                <label for="expectedSalary" class="field-icon"><i class="fa fa-money"></i>
                                </label>
                            </label>
                        </div>

                </div>
                <div class="panel-footer">
                    <a onclick="sendCv()" class="button btn-primary  pull-right enviarCV">Enviar</a>
                    <br clear="all">
                </div>
        </div>
    </div>
    </div>

    <div id="modal-success" class=" popup-basic admin-form mfp-with-anim mfp-hide">
        <div class="panel">
            <div class="panel-heading btn-system">
                <span class="panel-title"><i class="fa fa-location-arrow"></i>Curriculo enviado com sucesso</span>
            </div>
        </div>
    </div>

    <div id="modal-error" class=" popup-basic admin-form mfp-with-anim mfp-hide">
        <div class="panel">
            <div class="panel-heading btn-warning">
                <span class="panel-title"><i class="fa fa-times-circle"></i>Erro ao enviar seu curriculo</span>
            </div>
            <div class="panel-body p25">
                <p class="msgError"></p>
                <div class="msgBtn"></div>
            </div>
        </div>
    </div>
<style>
#glyphicons-icon-list .glyphicons, #glyphicon-icon-list .glyphicon, #imoon-icon-list .imoon, .fa-icon-list .fa {
    display: block;
    font-size: 44px;
    margin: 0 auto;
}
#glyphicons-icon-list li, #glyphicon-icon-list li, #imoon-icon-list li, .fa-icon-list li {
    height: auto;
}
.list a{
    color: #565656;
}
.list a:hover{
    color: #4a89dc;
    text-decoration: none;
}
</style>
        <div id="modal-share" class=" popup-basic admin-form mfp-with-anim mfp-hide">
        <div class="panel">
            <div class="panel-heading btn-warning">
                <span class="panel-title"><i class="glyphicons glyphicons-share"></i>Compartilhar</span>
            </div>
            <div class="panel-body p25">
            <ul id="glyphicons-icon-list" class="list">
                <li>
                    <a target="_BLANK" class="facebook_share" href="" rel="{{__FACEBOOK_SHARE__}}"><span class="glyphicons glyphicons-facebook"></span>Facebook</a>
                </li>
                <li>
                    <a target="_BLANK" class="google_share" href="" rel="{{__GOOGLE_SHARE__}}"><span class="glyphicons glyphicons-google_plus"></span>Google Plus</a>
                </li>
                <li>
                    <a target="_BLANK" class="twitter_share" href="" rel="{{__TWITTER_SHARE__}}"><span class="glyphicons glyphicons-twitter"></span>Twitter</a>
                </li>
                <li>
                    <a target="_BLANK" class="linkedin_share" href="" rel="{{__LINKEDIN_SHARE__}}"><span class="glyphicons glyphicons-linked_in"></span>Linked in</a>
                </li>
                <li>
                    <a target="_BLANK" class="pinterest_share" href="" rel="{{__PINTEREST_SHARE__}}"><span class="glyphicons glyphicons-pinterest"></span>Pinterest</a>
                </li>
            </div>
        </div>
    </div>
