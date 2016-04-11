 <div class="row admin-form theme-primary">
    <div class="col-md-12">
        <form method="get" action="{{url('job/searchJob')}}" >
            <div class="panel panel-primary panel-border top">
                <div class="panel-heading" style="padding: 8px 20px;">
                    <span class="panel-title" style="font-size: 18px; ">Busca</span>

                </div>
                <div class="panel-body">
                    <div class="section row">

                        <div class="col-md-3" style="padding-top:5px;">
                            <label class="field prepend-icon" for="office">
                                {{forms['office']}}
                                <label class="field-icon" for="office"><i class="fa fa-pencil"></i>
                                </label>
                            </label>
                        </div>
                        <!-- end section -->
                        <div class="col-md-3" style="padding-top:5px;">
                            <label class="field prepend-icon" for="location">
                                {{forms['location']}}
                                <label class="field-icon" for="location"><i class="fa fa-map-marker"></i>
                                </label>
                            </label>
                        </div>

                        <!-- end section -->

                        <div class="col-md-3" style="padding-top:5px;">
                            <label class="field prepend-icon" for="area">
                                {{forms['area']}}
                                <label class="field-icon" for="area"><i class="fa fa-suitcase"></i>
                                </label>
                            </label>
                        </div>
                        <!-- end section -->

                        <div class="col-md-3" style="padding-top:5px;">
                            <div class="section">
                                <label class="field select">
                                    {{ forms['contract'] }}
                                    <i class="arrow"></i>
                                </label>
                            </div>
                        </div>
                        <!-- end section -->

                    </div>
                    <div class="row">
                        <div class="col-md-2 col-xs-12 pull-right">
                            <button class="btn btn-primary btn-block" type="submit">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>