<div class="panel mb25 mt5">
    <div class="panel-heading">
      <span class="panel-title">Produto</span>
  </div>
  <div class="panel-body p20 pb10">
      <div class="tab-content pn br-n admin-form">
        <div class="tab-pane active" id="tab1_1">

        <div class="row">
            <div class="col-md-4">
                <div data-provides="fileupload" class="fileupload fileupload-new admin-form">
                  <div class="fileupload-preview thumbnail mb20">
                    <img style="height: 100%; width: 100%; display: block;" src="" alt='Produto' id="imgProduto">
                </div>
             </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                     <label class="field prepend-icon" >
                     <input type="hidden" id="cd_produto"/>
                      <input type="text" placeholder="Nome" readonly="readonly" class="event-name gui-input br-light light" id="nome" name="nome">
                        <label class="field-icon" >
                         <i class="fa fa-tag"></i>
                        </label>
                    </label>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-12">
                    <label class="field prepend-icon" >
                      <input type="text" placeholder="Descrição" readonly="readonly" class="event-name gui-input br-light light" id="descricao" name="descricao">
                        <label class="field-icon" >
                         <i class="fa fa-tag"></i>
                        </label>
                    </label>
                    </div>
                </div>
                <br />
                <div class="row">
                <div class="col-md-4">
                  <label class="field prepend-icon" >
                    <input type="number" placeholder="Quantidade" min="1"  class="event-name gui-input br-light light" id="quantidade" name="quantidade">
                      <label class="field-icon" >
                       <i class="glyphicons glyphicons-cart_in"></i>
                      </label>
                  </label>
                  </div>
                    <div class="col-md-4">
                    <label class="field prepend-icon" >
                      <input type="text" placeholder="Valor Unitario" readonly="readonly" class="event-name gui-input br-light light" id="valor" name="valor">
                        <label class="field-icon" >
                         <i class="fa fa-money"></i>
                        </label>
                    </label>
                    </div>
                    <div class="col-md-4">
                    <label class="field prepend-icon" >
                      <input type="text" placeholder="Total"  readonly="readonly" class="event-name gui-input br-light light" id="total" name="total">
                        <label class="field-icon" >
                         <i class="fa fa-money"></i>
                        </label>
                    </label>
                    </div>
                </div>
                 <br />
                <div class="row">
                    <div class="col-md-2 pull-right">
                        <button id="adicionarProduto" class="btn btn-success btn-block" type="button">Adicionar</button>
                    </div>
                </div>

            </div>

        </div>

        </div>
</div>


</div>
</div>


<div class="panel">
    <div class="panel-body pn">
        <table id="produtosList" class="table admin-form theme-warning tc-checkbox-1 fs13">
            <thead>
                <tr class="bg-light">
                    <th class="">Imagem</th>
                    <th class="">Produto</th>
                    <th class="">Quantidade</th>
                    <th class="">Preço Unitario</th>
                    <th class="">Valor Total</th>
                    <th class="text-right">Ação</th>

                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
