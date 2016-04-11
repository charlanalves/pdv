<div class="col-md-12">
    <div class="panel panel-visible" id="spy3">
        <div class="panel-heading">
            <div class="panel-title hidden-xs">
                Email Marketing</div>
        </div>
        <div class="panel-body pn">
            <table id="datatable3" class="table table-striped table-hover dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="datatable3_info" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Cod</th>
                        <th>Modelo</th>
                        <th>Assunto</th>
                        <th>Criado</th>
                        <th>Modificado</th>
                        <th>Ações</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
</div>

<div id="modal-panel" class="popup-basic bg-none mfp-with-anim mfp-hide ">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <span class="panel-icon"><i class="fa fa-remove"></i>
            </span>
            <span class="panel-title">Remover registro</span>
        </div>
        <div class="panel-body">
           <p>Realmente deseja remover esse registo?</p>
        </div>
        <div class="panel-footer text-right">
            <button class="btn btn-danger cancel_delete" type="button">Não</button>
            <button class="btn btn-primary confirm_delete" type="button">Sim</button>
        </div>
    </div>
</div>


<style>
    table{
        color:#000;
    }
    #accordion .panel-title{
      font-size: 14px;
      padding:0;
    }
    #accordion .panel-heading{
      padding: 15px 30px;
      background: #eee none repeat scroll 0 0;

    }
    #accordion .panel-default{
      margin-bottom: 0px;
      border: none;
    }
    #accordion .panel{
      border:none;
    }
    .multiselect-container .checkbox {
      padding:1px;
      border: none;
    }
    .multiselect-container .active a{
      background-color: transparent;
    }
        .multiselect-container .active a:hover{
      background-color: transparent;
    }

    .multiselect-container.dropdown-menu {
      height: 300px;
      list-style-type: none;
      margin: 4px 0 0;
      overflow-x: hidden;
      padding: 0;
      position: absolute;
      width: 400px;
    }
    .multiselect-search {
      text-transform: uppercase;
    }

   .ladda-button[data-style=contract][data-loading] {
      width: 35px;
    }

</style>

<!-- Admin Form Popup -->
        <div id="modal-form" class=" popup-basic admin-form mfp-with-anim mfp-hide">
          <div class="panel">
            <div class="panel-heading">
              <span class="panel-title">
                <i class="fa fa-rocket"></i>Enviar Email Marketing</span>
            </div>
            <!-- end .panel-heading section -->

    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
           <!-- <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Enviar para varios emails digitados
                    </a>
                </h4>
            </div> -->
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                   {{forms['cdTemplate']}}
                   {{forms['emailEnvio']}}
                </div>
            </div>
        </div>
        <!-- <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Enviar para contatos</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12">
                        {{forms['uf']}}
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          {{forms['cidade']}}
                        </div>
                      </div>
                    </div>
                </div>
            </div> -->
        </div>



              </div>
              <!-- end .form-body section -->

              <div class="panel-footer">




          <button type="button" class="btn ladda-button btn-info progress-button pull-right" data-style="expand-left">
            <span class="ladda-label">Enviar</span>
          <span class="ladda-spinner"></span><span class="ladda-spinner"></span><div style="width: 100px;" class="ladda-progress"></div></button>




                <br clear="all" />
              </div>
              <!-- end .form-footer section -->
            </form>
          </div>
          <!-- end: .panel -->
        </div>
        <!-- end: .admin-form -->