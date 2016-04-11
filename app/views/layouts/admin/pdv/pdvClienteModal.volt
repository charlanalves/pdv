<div class="popup-basic mfp-hide bg-none mfp-with-anim" id="modal-panel-dados-cliente">

          <div class="panel" >
            <div class="panel-heading">
              <span class="panel-icon">
                <i class="fa fa-money"></i>
              </span>
              <span class="panel-title"> Dados do cliente</span>
            </div>
            <div class="panel-body" style="background: #484D61 !important; border:none;">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                    {{formsEmpresaModal['cpf']}}
                    {{formsEmpresaModal['cdEmpresa']}}
                    </div>
                    <div class="col-md-6">
                    {{formsEmpresaModal['nome']}}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                    {{formsEmpresaModal['cep']}}
                    </div>
                    <div class="col-md-3">
                   {{formsEmpresaModal['cidade']}}
                    </div>
                    <div class="col-md-3">
                    {{formsEmpresaModal['uf']}}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                    {{formsEmpresaModal['bairro']}}
                    </div>
                    <div class="col-md-6">
                    {{formsEmpresaModal['rua']}}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                    {{formsEmpresaModal['numero']}}
                    </div>
                    <div class="col-md-6">
                    {{formsEmpresaModal['complemento']}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer text-right" style="background: #484D61 !important;  border:none;">
              <button type="button" class="btn btn-default">ESC - Cancelar</button>
              <button type="button" class="btn btn-success" onclick="finalizarVendaDoModal()">F12 - Finalizar venda</button>
            </div>
          </div>
        <button class="mfp-close" type="button" title="Close (Esc)">×</button></div>
