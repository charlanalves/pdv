    <div class="row">
    <div class="col-md-12">

                <form method="POST" id="form" role="form" class="form-horizontal" action="{{ url('curriculum') }}" enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-md-12">
                        <div class="panel">

                            <div class="panel-heading">
                                <ul class="nav panel-tabs-border panel-tabs panel-tabs-left">
                                    <li class="active">
                                    <a href="#tab1" data-toggle="tab">Dados Gerais</a>
                                    </li>
                                      <li>
                                        <a href="#tab2" data-toggle="tab">Adicionais</a>
                                    </li>
                                    <li>
                                        <a href="#tab3" data-toggle="tab">Formação academica</a>
                                    </li>
                                    <li>
                                        <a href="#tab4" data-toggle="tab">Cursos complementares</a>
                                    </li>
                                    <li>
                                        <a href="#tab5" data-toggle="tab">Histórico profissional</a>
                                    </li>
                                    <li>
                                        <a href="#tab6" data-toggle="tab">Foto</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="panel-body">
                                <div class="tab-content pn br-n">
                                    <div id="tab1" class="tab-pane active">
                                     <div class="row">
                                        <div class="col-md-6">
                                            {{forms['idUser']}}
                                            {{forms['name']}}
                                        </div>
                                        <div class="col-md-6">
                                            {{forms['email']}}
                                        </div>
                                    </div>


                                    {{ partial('user/documents')}}
                                    {{ partial('address/form')}}
                                    <div class="tabContact col-md-6" >
                                        {{ partial('user/contact')}}
                                    </div>
                                      <div class="tabLanguage col-md-6" >
                                        {{ partial('user/language')}}
                                    </div>
                                    <br clear="all">
                                </div>
                                <div id="tab2" class="tab-pane ">
                                    {{ partial('user/additional')}}
                                    <br clear="all">
                                </div>
                                <div id="tab3" class="tab-pane tabAcademic">
                                    {{ partial('user/academic')}}
                                    <br clear="all">
                                </div>
                                <div id="tab4" class="tab-pane tabCourse">
                                    {{ partial('user/course')}}
                                    <br clear="all">
                                </div>
                                <div id="tab5" class="tab-pane tabHistory">
                                    {{ partial('user/professionalHistory')}}
                                    <br clear="all">
                                </div>
                                <div id="tab6" class="tab-pane">
                                    <div class="row">
                                        <div class="col-md-4 admin-form">
                                            <label class="field prepend-icon file">
                                                <span class="button btn-primary">Selecionar arquivo</span>
                                                <input type="file" onchange="document.getElementById('uploader2').value = this.value;" id="picture" name="picture" class="gui-file">
                                                <input type="text" placeholder="" id="uploader2" class="gui-input">
                                                <label class="field-icon"><i class="fa fa-upload"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>

                                    {% if img is not false %}
                                        <div class="row">
                                        <div class="col-md-4 admin-form">
                                        <br />
                                            <img src="{{img['server']}}" class="img-responsive" />
                                        </div>
                                    </div>
                                    {% endif %}
                                    <br clear="all">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <input type="submit" value="Salvar" class="saveAux" style="display:none;">

        </form>
    </div>
</div>
