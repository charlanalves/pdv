{% if pdf is true %}

    {{ assets.outputCss('css_before') }}
    {{ assets.outputCss('header') }}


    <style>
        body{
            width: 100%;
            margin:0px !important;
            padding:0px !important;
            background-color: #fff;
        }
        .content{
            width: 100%;
            margin:0px;
            padding:0px;
            margin-top:0px;
        }
        #cv{
            width: 100%;
        }
        .header{
            width: 100%;
        }
        .platform {margin: 0px; background-color: #fff; width: 100%;}
        .pull-right{
            float:right;
            width: 140px;
        }
         #cv .box-img {
            background-color: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.2);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            height: 130px;
            width: 130px;
            padding: 4px !important;
            float:left;
        }

        .name{
            float:left;
            width: 250px;
            padding-left: 10px;
            margin-top:-10px;
        }
        #cv .name-text {font-size: 18px; margin-bottom:10px; margin-top: 30px; line-height: 18px;}
        #cv .major-text {font-size: 14px; margin-bottom:10px; margin-top: 30px; line-height: 14px;}
        .end{
            width: 180px;
            font-size: 10px;
            margin-top:22px;
        }
        .col-md-3{
            float:left;
            width: 20%;
        }
        .col-md-9{
            float:left;
            width: 70%;
        }
        .date{
            float:right;
            width: 140px;
        }
        .text{
            float: left;
            width: 380px;

        }
    </style>
{% else %}
    <div class="pdfBlock">
        <a class="pdf" href="/curriculum/cv/{{curriculum.idUser}}/1" target="_blank"></a>
        <a class="dl" href="/curriculum/cv/{{curriculum.idUser}}/1" target="_blank">Download</a>
    </div>
{% endif %}
<div id="cv">
        <div class="innerLR">
            <div class="platform">
                <div class="header">
                    <div class="row">

                        <div class="span box-img">
                            {% for address in curriculum.Address %}
                            <img src="{{img['server']}}">
                            {% endfor %}
                        </div>

                        <div class="span margin-bottom-5 name">
                            <div class="name-text">{{curriculum.name}}</div>
                            <div class="major-text"><i>{{additional['nationality']}}, {{additional['maritalStatus']}} - {{additional['birth']}} Anos</i></div>
                        </div>

                        <div class="span pull-right end">
                            <div class="span">

                                <address class="margin-bottom-5">
                                    {% for address in curriculum.Address %}
                                    Rua: {{address.street}}, {{address.number}} <br />
                                    {{address.neighborhood}} - {{address.city}} / {{address.state}}
                                    {% endfor %}
                                </address>

                                <abbr>Email:</abbr>&nbsp;&nbsp;{{curriculum.email}}<br>

                                {% for contact in curriculum.Contact %}
                                <abbr>Tel:</abbr> {{contact.phone}} <span style="font-size:10px;">({{contact.type}})</span>
                                {% endfor %}
                            </div>


                            <!-- <a class="pdf" href="cv.pdf" target="_blank" rel="tooltip" data-original-title="Download PDF"></a> -->

                        </div>
                        <!--/contacts-->

                    </div>

                </div><!-- /header -->
                <div class="main">
                    <div class="row">
                        <div class="col-md-3 section-title">
                            Dados Pessoais
                        </div>
                        <div class="col-md-9">
                            {% for documents in curriculum.Documents %}
                            <div class="row">
                                <div class="col-md-6">
                                    CPF: {{documents.cpfCnpj}}<br />
                                    RG: {{documents.rg}}<br />
                                </div>
                                <div class="col-md-6">
                                    {% if documents.cnh|length > 0 %}
                                    CNH: {{documents.cnh}} ({{documents.typeCnh}})<br />
                                    {% endif %}
                                    {% if documents.oab|length > 0 %}
                                    OAB: {{documents.oab}} ({{documents.typeOab}})<br />
                                    {% endif %}
                                </div>
                            </div>
                            {% endfor %}
                        </div>
                    </div>
                    <div class="seperator"></div>

                    {% if additional['areaOfWork']|length > 1 %}
                    <div class="row">
                        <div class="col-md-3 section-title">
                            Área de Atuação
                        </div>
                        <div class="col-md-9">
                            <ul>
                                {% for area in additional['areaOfWork'] %}
                                <li>{{area}}</li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                    <div class="seperator"></div>
                    {% endif %}

                    {% if curriculum.Language|length > 0 %}
                    <div class="row">
                        <div class="col-md-3 section-title">
                            Idiomas
                        </div>
                        <div class="col-md-9">
                            <ul>
                                {% for language in curriculum.Language %}
                                <li> {{language.description}} &nbsp;&nbsp;&nbsp; <span style="font-size:10px;">({{language.level}})</span> </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                    <div class="seperator"></div>
                    {% endif %}

                    {% if professionalHistory is defined %}
                    <div class="row">
                        <div class="col-md-3 section-title">
                            Experiência profissional
                        </div>
                        <div class="col-md-9">
                            {% for professional in professionalHistory %}
                            <div class="clearfix">
                                <div class="row">
                                    <div class="span text">
                                        <div class="item-name">{{professional.business}}</div>
                                        <div class="item-desc">{{professional.office}}</div>
                                    </div>
                                    <div class="item-period pull-right span date">{{professional.init}} -
                                        {% if professional.end|length == 0 %}
                                        Data Atual
                                        {% else %}
                                        {{professional.end}}
                                        {% endif %}
                                    </div>
                                </div>
                                <div class="margin-top-10">
                                 {{professional.activity}}
                             </div>
                         </div>
                         {% if loop.last is false %}
                         <div class="inner-seperator"></div>
                         {% endif %}
                         {% endfor %}
                     </div>
                 </div>
                 <div class="seperator"></div>
                 {% endif %}
                 <!-- /experiencia profissional-->

                 <!-- /formacao academica-->
                 {% if academic is defined %}
                 <div class="row">
                    <div class="col-md-3 section-title">
                        Formação acadêmica
                    </div>
                    <div class="col-md-9">
                        {% for auxAcademic in academic %}
                        <div class="clearfix">
                            <div class="row">
                                <div class="span text">
                                    <div class="item-name">{{auxAcademic.course}} <span style="color:#333; font-size:10px; font-weight: bold;">({{auxAcademic.Literacy.description}})</span></div>
                                    <div class="item-desc">{{auxAcademic.institution}}</div>
                                </div>
                                <div class="item-period pull-right span date">{{auxAcademic.init}} -
                                    {% if auxAcademic.end|length == 0 %}
                                    Data Atual
                                    {% else %}
                                    {{auxAcademic.end}}
                                    {% endif %}
                                </div>
                            </div>
                            <div class="margin-top-10">
                             {{auxAcademic.obs}}
                         </div>
                     </div>
                     {% if loop.last is false %}
                     <div class="inner-seperator"></div>
                     {% endif %}
                     {% endfor %}
                 </div>
             </div>
             <div class="seperator"></div>
             {% endif %}
             <!-- /formacao academica-->


             <!-- /cursos-->
             {% if course is defined %}
             <div class="row">
                <div class="col-md-3 section-title">
                    Curso
                </div>
                <div class="col-md-9">
                    {% for auxCourse in course %}
                    <div class="clearfix">
                        <div class="row">
                            <div class="span text">
                                <div class="item-name">{{auxCourse.name}}</div>
                                <div class="item-desc">{{auxCourse.institution}}</div>
                            </div>
                            <div class="item-period pull-right span date">{{auxCourse.init}} -
                                {% if auxCourse.end|length == 0 %}
                                Data Atual
                                {% else %}
                                {{auxCourse.end}}
                                {% endif %}
                            </div>
                        </div>
                        <div class="margin-top-10">
                         {{auxCourse.description}}
                     </div>
                 </div>
                 {% if loop.last is false %}
                 <div class="inner-seperator"></div>
                 {% endif %}
                 {% endfor %}
             </div>
         </div>
         <div class="seperator"></div>
         {% endif %}

         <!-- /cursos-->

        <!-- /sobre mim-->
        {% if additional['aboutMe']|trim|length > 0 %}
        <div class="row">
            <div class="col-md-3 section-title">
                Sobre mim
            </div>
            <div class="col-md-9">
                <div class="clearfix">
                    <div class="margin-top-10">
                     {{additional['aboutMe']}}
                 </div>
             </div>
            </div>
        </div>
        <div class="seperator"></div>
        {% endif %}
     <!-- /sobre mim-->

     <!-- /objetivos profissionais-->
        {% if additional['careerGoal']|trim|length > 0 %}
        <div class="row">
            <div class="col-md-3 section-title">
                Objetivos profissionais
            </div>
            <div class="col-md-9">
                <div class="clearfix">
                    <div class="margin-top-10">
                     {{additional['careerGoal']}}
                 </div>
             </div>
            </div>
        </div>
        <div class="seperator"></div>
        {% endif %}
     <!-- /objetivos profissionais-->

     <!-- /informações adicionais-->
        {% if additional['additionalInformation']|trim|length > 0 %}
        <div class="row">
            <div class="col-md-3 section-title">
                Informações adicionais
            </div>
            <div class="col-md-9">
                <div class="clearfix">
                    <div class="margin-top-10">
                     {{additional['additionalInformation']}}
                 </div>
             </div>
            </div>
        </div>
        <div class="seperator"></div>
        {% endif %}
     <!-- /informações adicionais-->

     <div class="clearfix margin-bottom-10 pull-right">
        <a  href="https://vagajuridica.com.br" class="dotted">
            Vaga Juridica &copy; 2015
        </a>
    </div>

</div> <!-- /main -->
</div>
</div>
</div>