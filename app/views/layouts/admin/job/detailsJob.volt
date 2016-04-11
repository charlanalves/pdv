{{ partial('job/searchJobBar')}}
<input type="hidden" id="idjob" value="{{job['idJob']}}">
    <div class="row">
        <div class="col-md-12">
            {% if job['status'] != 'D' %}
                <div class="panel panel-primary panel-border top">
            {% else %}
                <div class="panel panel-danger panel-border top">
            {% endif %}
                <div class="panel-heading">
                    <span class="panel-title">
                        {{job['office']}}
                    </span>
                    <div class="widget-menu pull-right">
                        <code class="bg-primary">{{job['jobContract_idJobContract']}}</code>
                        <code class="bg-success">
                            {% if job['salary'] <= 0.00 %}
                            a combinar
                            {% else %}
                            R$ {{job['salary']}}
                            {% endif %}
                        </code>
                          {% if job['status'] == 'D' %}
                            <code class="bg-danger">
                               Vaga Finalizada
                            </code>
                        {% endif %}
                    </div>

                </div>
                <div class="panel-body">
                    {% if job['confidential'] is false  %}
                        {% if job['employer'] is not empty  %}
                            <p><strong>Nome da empresa:</strong> {{ job['employer'] }}</p>
                        {% else %}
                                <p><strong>Nome da empresa:</strong> Não informado</p>
                        {% endif %}
                    {% else %}
                        <p><strong>Nome da empresa:</strong> Confidencial</p>
                    {% endif %}

                    {% if job['address']['city'] is not empty  %}
                        <p><strong>Cidade:</strong> {{ job['address']['city'] }}</p>
                    {% endif %}

                    {% if job['mandatoryRequirements'] is not empty  %}
                        <p><strong>Requisitos obrigatórios:</strong> {{ job['mandatoryRequirements'] }}</p>
                    {% endif %}

                    {% if job['desirableRequirements'] is not empty  %}
                        <p><strong>Requisitos desejáveis:</strong> {{ job['desirableRequirements'] }}</p>
                    {% endif %}

                    {% if job['benefits'] is not empty  %}
                        <p><strong>Benefícios:</strong> {{ job['benefits'] }}</p>
                    {% endif %}

                    {% if job['schedule'] is not empty  %}
                        <p><strong>Horário:</strong> {{ job['schedule'] }}</p>
                    {% endif %}

                    {% if job['jobContract_idJobContract'] is not empty  %}
                        <p><strong>Tipo de contrato:</strong> {{ job['jobContract_idJobContract'] }}</p>
                    {% endif %}

                    {% if job['operationalArea'] is not empty  %}
                        <p><strong>Área de atuação:</strong> {{ job['operationalArea'] }}</p>
                    {% endif %}

                    {% if job['description'] is not empty  %}
                        <p><strong>Detalhes:</strong> {{ job['description'] }}</p>
                    {% endif %}
                    <div class="row">
                        <div class="col-xs-6">
                        </div>
                        <div class="col-xs-6" style="text-align:right; padding-right: 22px;">
                                <div class="btn-group">
                                    <a class="btn btn-primary"  onclick="share('{{ host }}{{ url('job/detailsJob') }}/{{job['office']}}-{{job['idJob']}}')" href="javascript:void(0)">Compartilhar</a>
                                </div>
                                 <div class="btn-group enviarCurriculo">
                                        {% if job['status'] != 'D' %}
                                            {% if job['JobHasUser']|length == 0 %}
                                                <a class="btn btn-system" href="javascript:void(0)"
                                                {% if job['expectedSalary'] is true %}
                                                onclick="expectedSalary({{job['idJob']}})"
                                                {% else %}
                                                onclick="sendCv({{job['idJob']}})"
                                                {% endif %}
                                                ><span style="margin-right:5px;" class="glyphicons glyphicons-new_window"></span> Enviar currículo</a>
                                            {% else %}
                                                <a class="btn btn-system" href="javascript:void(0)"><span style="margin-right:5px;" class="glyphicons glyphicons-ok_2"></span> Currículo enviado</a>
                                            {% endif %}
                                        {% endif %}
                                </div>
                            </div>

                    </div>
            </div>
        </div>
    </div>

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
                    <a onclick="" class="button btn-primary  pull-right enviarCV">Enviar</a>
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
            Mensagem de erro.
            </div>
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

