<script>
  var modeloId = '{{id}}';
</script>

<div class="col-md-12">
    <div class="panel panel-visible" id="spy3">
        <div class="panel-heading">
            <div class="panel-title hidden-xs">
                Historico de envio de emails <br />
                Modelo: {{modelo}}</div>
        </div>
        <div class="panel-body pn">
            <table id="datatable3" class="table table-hover table-striped dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="datatable3_info" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Lido</th>
                        <th>Click</th>
                        <th>Enviado</th>
                        <th>Ultima atualizaçao</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
</div>
<style>
.enviado {
  /* background-color: #e1e71b !important; */
}
.aguardando{
  background-color: #00B6E2 !important;
}
.invalido{
  background-color: #F0C8C0 !important;
}
</style>
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
