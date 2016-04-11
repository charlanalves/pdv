<!DOCTYPE html>
<html>

<head>

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Fiber</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{ assets.outputCss('css_before') }}
    {{ assets.outputCss('header') }}




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>
<script>
    var base='{{ url() }}';
    </script>
<style>
/* scaffolding */
/* ----------- */


.container {
  max-width: 750px;
  margin: 0 auto;
  text-align: center;
}

.tt-menu,
.gist {
  text-align: left;
}


/* base styles */
/* ----------- */

.table-of-contents li {
  display: inline-block;
  *display: inline;
  zoom: 1;
}

.table-of-contents li a {
  font-size: 16px;
  color: #999;
}

p + p {
  margin: 30px 0 0 0;
}

/* site theme */
/* ---------- */

.title {
  margin: 20px 0 0 0;
  font-size: 64px;
}


.typeahead,
.tt-query,
.tt-hint {
  width: 396px;
  height: 30px;
  padding: 8px 12px;
  line-height: 30px;
  border: 2px solid #ccc;
  -webkit-border-radius: 8px;
     -moz-border-radius: 8px;
          border-radius: 8px;
  outline: none;
}

.typeahead {
  background-color: #fff;
}

.typeahead:focus {
  border: 2px solid #0097cf;
}

.tt-query {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
  color: #999
}

.tt-menu {
  width: 422px;
  max-height: 250px !important;
  overflow-y: auto !important;
  overflow-x: hidden !important;
  margin: 12px 0;
  padding: 8px 0;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-border-radius: 8px;
     -moz-border-radius: 8px;
          border-radius: 8px;
  -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
     -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
          box-shadow: 0 5px 10px rgba(0,0,0,.2);
}

.tt-suggestion {
  padding: 3px 3px;
  font-size: 12px;
  color:#666;
  line-height: 24px;
}

.tt-suggestion:hover {
  cursor: pointer;
  color: #fff;
  background-color: #0097cf;
}

.tt-suggestion.tt-cursor {
  color: #fff;
  background-color: #0097cf;

}

.tt-dataset{
     overflow-x: hidden !important;
}

.tt-suggestion p {
  margin: 0;
  padding:0;
}

.gist {
  font-size: 14px;
}

.tt-suggestion:nth-of-type(odd){
    background-color: #e9e9e9;
}

.tt-suggestion:nth-of-type(even){
    background-color: #fff;
}

.tt-suggestion:hover{
    color: #fff;
  background-color: #0097cf !important;
  background: #0097cf !important;
}

/* example specific styles */
/* ----------------------- */

#custom-templates .empty-message {
  padding: 5px 10px;
 text-align: center;
}

#multiple-datasets .league-name {
  margin: 0 20px 5px 20px;
  padding: 3px 0;
  border-bottom: 1px solid #ccc;
}

#scrollable-dropdown-menu .tt-menu {
  max-height: 150px;
  overflow-y: auto;
}

#rtl-support .tt-menu {
  text-align: right;
}
</style>

<body >

    <!-- Start: Main -->
    <div id="main" class="datatables-page">

        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top bg-info">
            <div class="navbar-branding">
                <a class="navbar-brand" href="{{url()}}"> <img src="{{url()}}img/logos/logo.png" width="150px" height="auto" /></a>
            </div>
        <!--     <ul class="nav navbar-nav navbar-right">
                <li>
                <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                </li>
            </ul> -->
             {% if ( busca is defined and busca == 1) %}
              <form class="navbar-form navbar-left navbar-search ml5" role="search">
                  <div class="form-group" id="remote">
                      <input type="text" class="form-control typeahead buscaProduto" style="width:400px;"  autocomplete="off" data-provide="typeahead" placeholder="Busca...">
                  </div>
              </form>
            {% endif %}
            <ul class="nav navbar-nav navbar-right">


                <li class="dropdown">
                <!-- {% if identity['picture'] %} -->
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
                    <!-- <img src="{{identity['picture']}}" style="max-width: 35px !important;" alt="Usuario" class="mw60 br64 mr15"> -->
                        <span>{{identity['name']}}
                        <br /> {{identity['unidadeNome']}}</span>
                        <span class="caret caret-tp hidden-xs"></span>
                    </a>
                <!-- {% endif %} -->
                    <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                    <li class="br-t of-h">
                            <a href="javascript:void(0)" onclick="alterarUnidadeNegocio()" class="fw600 p12 animated animated-short fadeInDown alterarUnidadeNegocio">
                                <span class="fa fa-retweet pr5 "></span> Alterar Unidade Negocio </a>
                        </li>
                        <li class="br-t of-h">
                            <a href="{{ url('system/logout') }}" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="fa fa-power-off pr5"></span> Sair </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary affix has-scrollbar">
            <div class="nano-content">


                <!-- sidebar menu -->
                <br />
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">Menu</li>

                     {% if ( hideMenu is defined == false) %}
                     <li class="active">
                        <a href="{{url()}}">
                            <span class="glyphicons glyphicons-home"></span>
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>
                    <div onclick="novaVenda()" class="bg-dark pv20 text-white fw600 borderPagto">F2 - Nova Venda</div>
                    <div onclick="consultarPedido()" class="bg-dark pv20 text-white fw600 borderPagto">F3 - Consultar Produto</div>
                    <div onclick="adicionarProduto();" class="bg-dark pv20 text-white fw600 borderPagto">F4 - Adicionar Item</div>
                    <div onclick="removerItem()" class="bg-dark pv20 text-white fw600 borderPagto">F5 - Remover Item</div>
                    <div onclick="" class="bg-dark pv20 text-white fw600 borderPagto">F6 - Conceder Desconto</div>
                    <div onclick="" class="bg-dark pv20 text-white fw600 borderPagto">F10 - Sangria</div>
                    <div onclick="" class="bg-dark pv20 text-white fw600 borderPagto">F11 - Fechar Caixa</div>
                    <div onclick="finalizarVenda()" class="bg-dark pv20 text-white fw600 borderPagto">F12 - Finalizar Venda</div>
                
                    {% else %}
                    <li class="active">
                        <a href="https://www.solinter.com.br/dashboard">
                            <span class="glyphicons glyphicons-home"></span>
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>
                    {% endif %}
                    <!--
                    {% for modules in menu %}
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="{{modules['icon']}}"></span>
                            <span class="sidebar-title">{{ modules['description'] }}</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                        {% for permissions in modules['itens'] %}
                            <li>
                                <a href="{{url(permissions['resource']~'/'~permissions['action'])}}" >
                                    <span class="{{permissions['icon']}}"></span>{{permissions['description']}}</a>
                            </li>
                        {% endfor %}
                        </ul>
                    </li>
                    {% endfor %}

                    -->


                </ul>

            </div>
        </aside>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- Start: Topbar-Dropdown -->
            <div id="topbar-dropmenu">
                <div class="topbar-menu row">
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-success">
                            <span class="metro-icon glyphicons glyphicons-inbox"></span>
                            <p class="metro-title">Messages</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-info">
                            <span class="metro-icon glyphicons glyphicons-parents"></span>
                            <p class="metro-title">Users</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-alert">
                            <span class="metro-icon glyphicons glyphicons-headset"></span>
                            <p class="metro-title">Support</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-primary">
                            <span class="metro-icon glyphicons glyphicons-cogwheels"></span>
                            <p class="metro-title">Settings</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-warning">
                            <span class="metro-icon glyphicons glyphicons-facetime_video"></span>
                            <p class="metro-title">Videos</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-system">
                            <span class="metro-icon glyphicons glyphicons-picture"></span>
                            <p class="metro-title">Pictures</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End: Topbar-Dropdown -->

            <!-- Start: Topbar -->
            <header id="topbar" class="affix">
                <div class="topbar-left">
                    <ol class="breadcrumb">

                        <li class="crumb-icon">
                            <a href="{{url()}}">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        {% for bread in bc %}
                          {% if loop.index == loop.length-1 %}
                            {% set backLink = url(bread['link']) %}
                          {% endif %}
                            <li class="{% if loop.last %} crumb-active {% else %} crumb-link {% endif %}">
                                <a href="{{ url(bread['link']) }}">{{bread['text']}}</a>
                            </li>
                        {% endfor %}
                    </ol>
                </div>
                <div class="topbar-right">
                {% if ( back is defined and back == 1) %}
                    <a class="btn btn-default btn-sm light fw600 ml10 back" href="{{backLink}}"><span class="fa fa-arrow-left pr5"></span> Voltar </a>
                {% endif %}
                {% if ( save is defined and save == 1) %}
                    <a class="btn btn-default btn-sm light fw600 ml10 save" href="#"><span class="fa fa-check pr5"></span> Salvar </a>
                {% endif %}
                {% if ( new is defined and new == 1) %}
                    <a class="btn btn-default btn-sm light fw600 ml10 new" href="#"><span class="fa fa-plus pr5"></span> Adicionar </a>
                {% endif %}
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">

            {{partial(page)}}

            </section>
            <!-- End: Content -->

        </section>

        <!-- Start: Right Sidebar -->
        <aside id="sidebar_right" class="nano">
            <div class="sidebar_right_content nano-content">
                <div class="tab-block sidebar-block br-n">
                    <ul class="nav nav-tabs tabs-border nav-justified hidden">
                        <li class="active">
                            <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                        </li>
                    </ul>
                    <div class="tab-content br-n">
                        <div id="sidebar-right-tab1" class="tab-pane active">

                            <h5 class="title-divider text-muted mb20"> Server Statistics <span class="pull-right"> 2013 <i class="fa fa-caret-down ml5"></i> </span> </h5>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                    <span class="fs11">DB Request</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                    <span class="fs11 text-left">Server Load</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                    <span class="fs11 text-left">Server Connections</span>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">132</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 13.2% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">212</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 25.6% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">82.5</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-danger mn"> <i class="fa fa-caret-down"></i> 17.9% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt40 mb20"> Server Statistics <span class="pull-right text-primary fw600">USA</span> </h5>
                            <div id="sidebar-right-map" class="hide-jzoom" style="width: 100%; height: 180px;"></div>

                        </div>
                        <div id="sidebar-right-tab2" class="tab-pane"></div>
                        <div id="sidebar-right-tab3" class="tab-pane"></div>
                    </div>
                    <!-- end: .tab-content -->
                </div>
            </div>
        </aside>
        <!-- End: Right Sidebar -->

    </div>
 <style>
.unidadeNegocio .radio{
      border:none;
 }

 .unidadeNegocio .radio:hover{
     color:#000;
 }
.unidadeNegocio .inativo{
    background-color:#FF8C69 !important;
    color:#FFFFFF !important;
 }
.unidadeNegocio .inativo .radio{
    color:#FFFFFF !important;
 }

.unidadeNegocio .inativo .radio:hover{
    color:#000 !important;
    background-color:#FF8C69;
 }
.unidadeNegocio .active{
    background-color:#006996;
    color:#666666;
 }

 .popup-basic-un {
    max-width:500px;
    margin: 40px auto;
    padding:10px;
 }

 .unidadeNegocio .multiselect-container.dropdown-menu {
    width: auto;
 }
 .unidadeNegocio .multiselect {
  width: 450px;
  text-align: left !important;
 }

 .unidadeNegocio {
  text-align: left;
  padding: 22px;
 }
 .unidadeNegocio .btn-group {
  letter-spacing:1px;
 }
 .unidadeNegocio select{
  width: 60%;
 }

.unidadeNegocio .multiselect-container.dropdown-menu {
  height: 250px !important;
  list-style-type: none;
  margin: 4px 0 0;
  overflow-x: hidden;
  padding: 0;
  position: absolute;
  width: 400px;
}
.unidadeNegocio .multiselect-search {
  text-transform: uppercase;
}

 </style>
    <!-- Admin Form Popup -->
        <div id="alterarUnidadeNegocio" class="popup-basic-un mfp-with-anim mfp-hide ">
          <div class="panel">
            <div class="panel-heading">
              <span class="panel-title">
                <i class="fa fa-retweet"></i>Alterar unidade de negocio</span>
            </div>
                    <div class="row">
                        <div class="col-md-12 unidadeNegocio">
                        <p>
                        Unidade de Negocio: <br />
                          <select class="form-control" id="selectUnidadeNegocio">
                            {{selectUnidadeNegocio}}
                          </select>
                        </p>
                        <br />
                        <p>
                        Usuario: <br />
                        <div id="divSelectUsuario">
                          <select class="form-control" id="selectUsuario">
                            {{selectUsuario}}
                          </select>
                        <div>
                        </p>
                        </div>
                      </div>



              <!-- end .form-body section -->

              <div class="panel-footer">




          <button type="button" id="btnAlterarUnidade" class="btn btn-info progress-button pull-right" >
            Alterar
          </button>




                <br clear="all" />
              </div>

              <!-- end .form-footer section -->
          </div>
          <!-- end: .panel -->
        </div>
        <!-- end: .admin-form -->

{{ assets.outputJs('footer') }}



<script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core
            Core.init();


        });
    </script>
{{ assets.outputJs('system') }}

{{ flash.output() }}
</body>

</html>
