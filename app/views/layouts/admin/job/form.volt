<div class="row">
    <div class="col-md-12">

                <form method="POST" id="form" role="form" class="form-horizontal" action="{{ url('job/form') }}/{{job}}">

                  <div class="row">
                    <div class="col-md-12">
                        <div class="panel">

                            <div class="panel-heading">
                                <ul class="nav panel-tabs-border panel-tabs panel-tabs-left">
                                    <li class="active">
                                    <a href="#tab1" data-toggle="tab">Dados Gerais</a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab">Dados Adicionais</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="panel-body">
                                <div class="tab-content pn br-n">
                                    <div id="tab1" class="tab-pane active">
                                     <div class="row">
                                        <div class="col-md-3">
                                            {{forms['idJob']}}
                                            {{forms['office']}}
                                        </div>
                                        <div class="col-md-3">
                                            {{forms['jobContract_idJobContract']}}
                                        </div>
                                        <div class="col-md-3">
                                            {{forms['status']}}
                                        </div>
                                        <div class="col-md-3">
                                            {{forms['expectedSalary']}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            {{forms['description']}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            {{forms['email']}}
                                        </div>
                                        <div class="col-md-3">
                                            {{forms['salary']}}
                                        </div>
                                        <div class="col-md-3">
                                            {{forms['schedule']}}
                                        </div>
                                        <div class="col-md-3">
                                            {{forms['confidential']}}
                                        </div>
                                    </div>

                                    {{ partial('address/form')}}
                                    <br clear="all">
                                </div>
                                <div id="tab2" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{forms['operationalArea']}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        {{forms['mandatoryRequirements']}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        {{forms['desireableRequirements']}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        {{forms['benefits']}}
                                    </div>
                                </div>

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
