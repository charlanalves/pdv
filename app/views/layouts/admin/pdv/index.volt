




<div class="panel mb25 mt5">
    <div class="panel-heading">
      <span class="panel-title">Produto</span>
  </div>
  <div class="panel-body p20 pb10">
      <div class="tab-content pn br-n admin-form">
        <div class="tab-pane active" id="tab1_1">
          <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4" style="margin-top: 10px;">
                        <div  class="fileupload fileupload-new admin-form">
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
                        <div class="col-md-4">
                          <label class="field prepend-icon" >
                            <input type="number" placeholder="Qtd" min="1"  class="event-name gui-input br-light light" id="quantidade" name="quantidade">
                              <label class="field-icon" >
                               <i class="glyphicons glyphicons-cart_in"></i>
                              </label>
                          </label>
                          </div>
                            <div class="col-md-4">
                            <label class="field prepend-icon" >
                              <input type="text" placeholder="Vl Unit." readonly="readonly" class="event-name gui-input br-light light" id="valor" name="valor">
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

                    </div>

                </div>

        </div>

        <div class="col-md-6">
        <div class="panel">
            <div class="panel-body pn">
                <table id="produtosList" class="table admin-form theme-warning tc-checkbox-1 fs13 listaProdutos">
                    <thead>
                        <tr class="bg-light">
                            <th class="">Codigo</th>
                            <th class="">Imagem</th>
                            <th class="">Produto</th>
                            <th class="">Quantidade</th>
                            <th class="">Preço Unitario</th>
                            <th class="">Valor Total</th>

                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="panel-footer text-right">
            <div class="row">
              <div class="col-md-12 pull-right">
              <h2 style="margin-top:6px;"><strong>Total Venda:</strong> R$ <span class="text-success" id="totalVenda">0,00</span></h2>
              </div>
            </div>
            </div>
        </div>
        </div>

                </div>
</div>


</div>
</div>

<!-- dados pagamento modal -->
{{partial('pdv/pdvPagtoModal')}}
 

 <!-- dados cliente modal --> 

 {{partial('pdv/pdvClienteModal')}}


<style type="text/css">
  body {
    min-height: 600px;
  }
  #content{
    height: 300px;
  }
  .listaProdutos tbody{
     display:block;
    height:280px;
    overflow:auto;
  }

  .listaProdutos thead, .listaProdutos tbody tr{
    display:table;
    width:100%;
    table-layout:fixed;
    font-variant: all-small-caps; 
  }
  .popup-basic{
    max-width: 800px;
    min-height: 400px;
  }
  .formasPagto{
    height: 150px;
    overflow-y:auto;
    overflow-x:none;
    background: #ffc;
    border:1px solid #ccc;
  }
  .formasPagto ul{
    padding: 0px;
    margin: 0px;
  }
  .formasPagto ul li{
    border-bottom: dashed 1px #d4d4d4;
    margin-bottom:2px;
    padding: 3px;
  }
  .textoFechamento{
    font-size: 16px;
    background: #e8e8e8;
    padding:15px 0;
    text-align: center;
    background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 1%, rgba(255, 255, 255, 0.70) 100%);
    background-repeat: repeat-x;
    border-color: rgba(0, 0, 0, 0.07) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.66);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.4) inset;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
  }
  .textoFechamentoTroco{
    font-size: 16px;
    background: #828282;
    padding:15px 0;
    text-align: center;
    background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 1%, rgba(255, 255, 255, 0.70) 100%);
    background-repeat: repeat-x;
    border-color: rgba(0, 0, 0, 0.07) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.66);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.4) inset;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
  }
  .vlFechamento{
    font-size: 22px;
    background: #e8e8e8;
   margin-bottom: 0px;
   background: #e8e8e8 none repeat scroll 0 0;
    font-size: 25px;
    font-weight: bold;
    padding-top: 17px;
    border-color: rgba(0, 0, 0, 0.07) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.66);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.4) inset;
  }
  .vlFechamentoTroco{
    font-size: 22px;
    background: #e8e8e8;
    
   margin-bottom: 0px;
   background: #e8e8e8 none repeat scroll 0 0;
    font-size: 25px;
    font-weight: bold;
    padding-top: 17px;
    border-color: rgba(0, 0, 0, 0.07) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.66);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.4) inset;
  }
  .borderPagto{
    padding-left: 10px;
     border-color: rgba(255, 255, 255, 0.07) rgba(255, 255, 255, 0.1) rgba(255, 255, 255, 0.66);
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.4) inset;
    cursor: pointer;
  }
  .vlNegativo{
    color:#FF0000;
  }
  #modal-panel-dados-cliente label{
    color:#fff;
  }
</style>

<script>
var dinheiro = new Array();
var cartao = new Array();
var cheque = new Array();
var financeira = new Array();
var outros = new Array();
var aux = new Array();
var todosPagtos = new Array();
{% for pagto in tipoPagto %}
    todosPagtos[{{pagto['idcond_pagto']}}] = '{{pagto['descricao']}}';
    {% if pagto['pdvTipo'] == 1 %}
    aux = {'id':{{pagto['idcond_pagto']}}, 'desc':'{{pagto['descricao']}}'};
        dinheiro.push(aux);
    {% elseif pagto['pdvTipo'] == 2 %}
    aux = {'id':{{pagto['idcond_pagto']}}, 'desc':'{{pagto['descricao']}}'};
        cartao.push(aux);
    {% elseif pagto['pdvTipo'] == 3 %}
    aux = {'id':{{pagto['idcond_pagto']}}, 'desc':'{{pagto['descricao']}}'};
        cheque.push(aux);
    {% elseif pagto['pdvTipo'] == 4 %}
    aux = {'id':{{pagto['idcond_pagto']}}, 'desc':'{{pagto['descricao']}}'};
        financeira.push(aux);
    {% else %}
    aux = {'id':{{pagto['idcond_pagto']}}, 'desc':'{{pagto['descricao']}}'};
        outros.push(aux);
    {% endif %}
{% endfor %}

</script>
