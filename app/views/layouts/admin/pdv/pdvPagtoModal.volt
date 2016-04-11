
        <div class="popup-basic mfp-hide bg-none mfp-with-anim" id="modal-panel-fechamento-venda">

                  <div class="panel" >
                    <div class="panel-heading">
                      <span class="panel-icon">
                        <i class="fa fa-money"></i>
                      </span>
                      <span class="panel-title"> Finalizar Venda</span>
                    </div>
                    <div class="panel-body" style="background: #484D61 !important; border:none;">
                      <div class="row">
                        <div class="col-md-3">
                        <div class="bg-dark pv20 text-white fw600 borderPagto" onclick="efetuarPagamento('Dinheiro', dinheiro)">F2 - Dinheiro</div>
                        <div class="bg-dark pv20 text-white fw600 borderPagto" onclick="efetuarPagamento('Cartão', cartao)">F3 - Cartão</div>
                        <div class="bg-dark pv20 text-white fw600 borderPagto" onclick="efetuarPagamento('Cheque', cheque)">F4 - Cheque</div>
                        <div class="bg-dark pv20 text-white fw600 borderPagto" onclick="efetuarPagamento('Financeira', financeira)">F5 - Financeira</div>
                        <div class="bg-dark pv20 text-white fw600 borderPagto" onclick="efetuarPagamento('Outros', outros)">F6 - Outros</div>
                        </div>
                        <div class="col-md-9">
                          <div class="row">
                            <div class="formasPagto">
                              <ul>
                                <li>
                                  <span>Dinheiro</span><span class="pull-right">0,00</span>
                                </li>
                            
                              </ul>
                            </div>

                          </div>
                          <br />
                          <div class="row">
                            <div class="col-md-4 textoFechamento ">
                              Valor Recebido
                            </div>
                            <div class="col-md-8 text-right vlFechamento vlRecebido">
                            0,00
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4 textoFechamento">
                            Valor a receber
                            </div>
                            <div class="col-md-8 text-right vlFechamento vlAReceber">
                            0,00
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4 textoFechamentoTroco">
                            Troco
                            </div>
                            <div class="col-md-8 text-right vlFechamentoTroco">
                            0,00
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel-footer text-right" style="background: #484D61 !important;  border:none;">
                      <button type="button" class="btn btn-default">ESC - Cancelar</button>
                      <button type="button" class="btn btn-success" onclick="dadosClienteModal()">F12 - Finalizar venda</button>
                    </div>
                  </div>
                <button class="mfp-close" type="button" title="Close (Esc)">×</button></div>