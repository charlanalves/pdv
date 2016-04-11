var produtos = new vendaPdv();
var shortcutModal = false;
var shortcutModalEnd = false;

$(function() {

      $("#cep").mask("99999-999",{autoclear: false});


      shortcut.add("F2",function() {
        if (shortcutModal) {
          efetuarPagamento('Dinheiro', dinheiro);
        } else {
          novaVenda();
        }
      });
      shortcut.add("F3",function() {
        if (shortcutModal) {
          efetuarPagamento('Cartão', cartao);
        } else {
          consultarProduto();
        }
      });
      shortcut.add("F4",function() {
        if (shortcutModal) {
          efetuarPagamento('Cheque', cheque);
        } else {
          adicionarProduto();
        }
      });
      shortcut.add("F5",function() {
        if (shortcutModal) {
          efetuarPagamento('Financeira', financeira);
        } else {
          removerItem();
        }
      });
      shortcut.add("F6",function() {
         if (shortcutModal) {
          efetuarPagamento('Outros', outros);
        } else {
          alert("Finalizar Venda");
        }
      });
      // shortcut.add("F10",function() {
      //    alert("Abrir Caixa");
      // });
      // shortcut.add("F11",function() {
      //    alert("Sanguia");
      // });
      shortcut.add("F12",function() {
        if (shortcutModal) {
          dadosClienteModal();
        } else if (shortcutModalEnd){
          finalizarVendaDoModal();
        } else {
          finalizarVenda();
        }

      });



    $('#cpf').blur(function() {
        $('#nome').focus();
        $.ajax({
            url : base+'pdv/buscarDadosCliente',
            type : 'POST',
            dataType : 'json',
            data: {cpf: $('#cpf').val() },
            success : function(response) {
                if (response.status) {
                  $('#cdEmpresa').val(response.data.cd_empresa);
                  $('#nome').val(response.data.nome);
                  $('#cep').val(response.end.cep);
                  $('#cidade').val(response.end.cidade);
                  $('#uf').val(response.end.uf);
                  $('#rua').val(response.end.rua);
                  $('#numero').val(response.end.numero);
                  $('#bairro').val(response.end.bairro);
                  $('#complemento').val(response.end.complemento);
                } else {
                  $('#modal-panel-dados-cliente').find('input').removeAttr('disabled');
                  $('#modal-panel-dados-cliente').find('select').removeAttr('disabled');
                }
                $('#nome').focus();
            },
            error : function (response) {
                 sweetAlert("Oops...", response.responseText, "error");
            }
        });
    });

    $("#cep").blur(function() {
      $.ajax({
          url : base+'pdv/buscarCep',
          type : 'POST',
          dataType : 'json',
          data: {cep: $('#cep').val() },
          success : function(response) {
              if (response.status) {
                $('#cidade').val(response.end.cidade);
                $('#uf').val(response.end.uf);
                $('#rua').val(response.end.rua);
                $('#bairro').val(response.end.bairro);
                if (response.cepUnico){
                  $('#cidade').attr('disabled', '');
                  $('#uf').attr('disabled', '');
                  $('#bairro').focus();
                } else {
                  $('#cidade').attr('disabled', '');
                  $('#uf').attr('disabled', '');
                  $('#bairro').attr('disabled', '');
                  $('#rua').attr('disabled', '');
                  $('#numero').focus();
                }
              } else {
                $('#cidade').focus();
                $('#cidade').val('');
                $('#uf').val('');
                $('#rua').val('');
                $('#bairro').val('');
                $('#modal-panel-dados-cliente').find('input').removeAttr('disabled');
                $('#modal-panel-dados-cliente').find('select').removeAttr('disabled');
              }
          },
          error : function (response) {
               sweetAlert("Oops...", response.responseText, "error");
          }
      });
    });

    $('#finalizarVenda').click(function() {
      finalizarVenda();
    })

    $('#quantidade').change(function(){
      var valor = $('#valor').val();
      var quantidade = $('#quantidade').val();
      var total = 0;
      valor = formatedToNumber(valor);
      total = parseFloat(valor) * parseFloat(quantidade);
      $('#total').val(number_format(total,2,',','.'));
    })

    var buscarProdutos = new Bloodhound({
           datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nome'),
           queryTokenizer: Bloodhound.tokenizers.whitespace,
           minLength: 3,
           remote: {
             url: base+'produto/busca/?produto=%QUERY',
             minLength: 3,
             wildcard: '%QUERY'
           }
        });


    $('#remote .typeahead').typeahead(null, {
       name: 'produtos',
       display: 'nome',
       hint: true,
       highlight: true,
       minLength: 3,
       limit: 20,
       source: buscarProdutos,
       templates: {
        empty: [
          '<div class="empty-message">',
            'Nenhum produto encontrado',
          '</div>'
        ].join('\n'),
        suggestion: Handlebars.compile('<div class="row">'+
          '<div class="col-md-2"> <img style="width:60px; height:auto;" src="{{imagem}}"/> </div>'+
          '<div class="col-md-10"><strong>{{nome}}</strong></div></div>')
      }
    }).bind('typeahead:selected', function(obj, data) {
      if (data.cdProduto != undefined) {
          $('#imgProduto').attr('src', data.imagem);
          $('.typeahead').typeahead('val','')

          buscarDadosProduto(data.cdProduto);

      }
    });
});


function vendaPdv(){
    this.item = new Array();
    this.pagto = new Array();
    this.vlTotalVenda = totalVenda;
    this.remover = removerProduto;
    this.editar = editarProduto;
    this.imprimir = imprimirProdutos;
    this.imprimirPagto  = imprimirPagto;
    this.limparCamposProduto = limparCamposProduto;
    this.validarPagto = validarPagto;
    this.salvar = produto;
}

function produto(codigo, quantidade, precoUn, vlTotal, img, nome, descricao){
    this.codigo         = codigo;
    this.quantidade     = quantidade;
    this.precoUn        = precoUn;
    this.vlTotal        = vlTotal;
    this.img            = img;
    this.nome           = nome;
    this.descricao      = descricao;
    this.inserir        = inserirProduto;
    this.verificarRegistro = verificarRegistroDuplicado;
}

function formaPagamento(condPagto, valor) {
      this.condPagto = condPagto;
      this.valor = valor;
      this.inserir = inserirPagto;
}

function inserirPagto() {
    this.valor = parseFloat(formatedToNumber(this.valor));
    this.condPagto = this.condPagto;
    produtos.pagto.push(this);
    produtos.imprimirPagto();
    return true;
}

function imprimirPagto() {
  var layout = '';
  var totalPagto = 0;
  var totalVenda = 0;
  for (var i in this.pagto){
      var j = parseFloat(i) + 1;
      layout = layout + '<li>'+
                          '<span>'+j+' | '+todosPagtos[this.pagto[i].condPagto]+'</span><span class="pull-right">'+number_format(this.pagto[i].valor,2,",",".")+'</span>'+
                        '</li>';
      totalPagto += parseFloat(formatedToNumber(this.pagto[i].valor));
  }
  for (var i in this.item){
     totalVenda += parseFloat(formatedToNumber(this.item[i].vlTotal));
  }

  $('.formasPagto > ul').html(layout);
  $('.vlRecebido').html(number_format(totalPagto,2,",","."));
  $('.vlAReceber').html(number_format(totalVenda,2,",","."));
  if (totalPagto-totalVenda < 0) {
    $('.vlFechamentoTroco').addClass('vlNegativo');  
  } else {
    $('.vlFechamentoTroco').removeClass('vlNegativo');  
  }
  $('.vlFechamentoTroco').html(number_format(totalPagto-totalVenda,2,",","."));
}

function validarPagto() {
  var totalPagto = 0;
  var totalVenda = 0;
  for (var i in this.pagto){
      totalPagto += parseFloat(formatedToNumber(this.pagto[i].valor));
  }
  for (var i in this.item){
     totalVenda += parseFloat(formatedToNumber(this.item[i].vlTotal));
  }

  if (totalPagto-totalVenda < 0) {
    return false;
  } else {
    return true; 
  }
}

function inserirProduto() {
    if (this.verificarRegistro()){
      return true;
    }
    this.vlTotal = formatedToNumber(this.vlTotal);
    this.precoUn = formatedToNumber(this.precoUn);
    this.vlTotal = parseFloat(this.precoUn) * parseFloat(this.quantidade) ;
    this.precoUn = parseFloat(this.precoUn);

    produtos.item.push(this);
    return true;
}

function verificarRegistroDuplicado()
{
  for (var i in produtos.item){
    if (produtos.item[i].codigo == this.codigo) {
      produtos.item[i].precoUn = formatedToNumber(this.precoUn);
      produtos.item[i].quantidade = parseFloat(produtos.item[i].quantidade) + parseFloat(this.quantidade);
      produtos.item[i].vlTotal = produtos.item[i].quantidade * parseFloat(formatedToNumber(this.precoUn));
      produtos.imprimir();
      produtos.limparCamposProduto();
      return true;
    }
  }
  return false;
}

function removerProduto(item) {
  for (var i in produtos.item){
    if (produtos.item[i].codigo == item) {
      produtos.item.splice(i, 1);
      produtos.imprimir();
      return true;
    }
  }
    return false;
}

function editarProduto(id) {

    this.remover(id);
}

function limparCamposProduto(){
    $('#nome').val('');
    $('#descricao').val('');
    $('#valor').val('');
    $('#quantidade').val('');
    $('#total').val('');
    $('#imgProduto').attr('src', '');
}


function imprimirProdutos(){
    var layout = '';
    var totalVenda = 0;
    for (var i in this.item){
        layout = layout + '<tr>'+
                   ' <td class="">'+this.item[i].codigo+'</td>'+
                   ' <td class="w100">'+
                   '     <img src="'+this.item[i].img+'" title="user" class="img-responsive mw40 ib mr10">'+
                   ' </td>'+
                   ' <td class="">'+this.item[i].nome+'</td>'+
                   ' <td class="">'+this.item[i].quantidade+'</td>'+
                   ' <td class="">'+number_format(this.item[i].precoUn,2,",",".")+'</td>'+
                   ' <td class="">'+number_format(this.item[i].vlTotal,2,",",".")+'</td>'+
                '</tr>';
               totalVenda += parseFloat(formatedToNumber(this.item[i].vlTotal));
    }

    $('#produtosList > tbody').html(layout);
    $('#totalVenda').html(number_format(totalVenda,2,",","."));
    
}

function totalVenda() {
    var totalVenda = 0;
    for (var i in this.item){
        totalVenda += parseFloat(formatedToNumber(this.item[i].vlTotal));
    }
    return number_format(totalVenda,2,",",".");
}

function buscarDadosProduto (codigo)
{
    $.ajax({
        url : base+'produto/buscaProdutoPorId/?produto='+codigo,
        type : 'GET',
        dataType : 'json',
        success : function(response) {
             $('#nome').val(response.nomefiber);
             $('#descricao').val(response.descricao);
             $('#cd_produto').val(response.cd_produto);
             $('#valor').val(response.preco);
             $('#quantidade').val(1);
             $('#total').val(response.preco);
             $('#cd_produto').val(response.cd_produto);
             $('#remote .typeahead').val('');
             $('#quantidade').focus();
        },
        error : function (response) {
             sweetAlert("Oops...", response.responseText, "error");
        }
    });
}

function finalizarVenda() {
  if (produtos.item.length == 0) {
    swal(
      'Atenção',
      'Nenhum produto adicionado a venda.',
      'error'
    )
    return false;
  }
  shortcut.remove("esc");
  shortcut.add("esc",function() {
        $('.sweet-cancel').click();       
    });

  produtos.imprimirPagto()
  $.magnificPopup.open({
    removalDelay: 500,
    closeOnBgClick: false,
    enableEscapeKey: false,
    items: {
      src: '#modal-panel-fechamento-venda'
    },
    callbacks: {
      beforeOpen: function(e) {
        shortcutModal = true;
        var Animation = 'mfp-flipInY';
        this.st.mainClass = Animation;
        this.wrap.removeAttr('tabindex');
      },
      beforeClose: function(e) {
        shortcutModal = false;
      }
    },
    midClick: false
  });
}

function efetuarPagamento(nomeTipo, options) {
  var auxOptions = '';
  if (options.length == 1){
    auxOptions = '<input type="hidden" name="inputTipo" id="inputTipo" value="'+options[0].id+'" />';
  } else {
    auxOptions = '<select name="inputTipo" id="inputTipo" >';
    for (i=0; i < options.length; i ++) {
      auxOptions = auxOptions+'<option value="'+options[i].id+'">'+options[i].desc+'</option>';
    } 
    auxOptions = auxOptions+'</select> <br /><br />';
  }
    swal({
      title: nomeTipo,
      html: '<p>'+auxOptions+'<input style="position: relative; z-index: 9999;" class="inputValor" name="inputValor">',
      showCancelButton: true,
      closeOnConfirm: true,
      allowOutsideClick: false
    },
    function() {
       var pagto = new formaPagamento($('#inputTipo').val(), $('.inputValor').val());
      pagto.inserir();

      shortcut.remove("esc");
      shortcut.remove("enter");
    })

    var cfgCulture = 'pt-BR';
    $.preferCulture(cfgCulture);
 
    shortcut.add("esc",function() {
        $('.sweet-cancel').click();       
    });
    shortcut.add("enter",function() {
        $('.sweet-confirm').click();       
    });
  $('.inputValor').maskMoney();
    
}

function dadosClienteModal() {
  if (!produtos.validarPagto()){
    swal(
      'Atenção',
      'O valor da compra esta superior ao pago',
      'error'
    )
    return false;
  }
  shortcutModalEnd = true;
  shortcutModal = false;
  $.magnificPopup.open({
    removalDelay: 500,
    closeOnBgClick: false,
    enableEscapeKey: false,
    items: {
      src: '#modal-panel-dados-cliente'
    },
    callbacks: {
      beforeOpen: function(e) {
        shortcutModalEnd = true;
        shortcutModal = false;
        var Animation = 'mfp-flipInY';
        this.st.mainClass = Animation;
        this.wrap.removeAttr('tabindex');
      },
      beforeClose: function(e) {
        shortcutModalEnd = false;
      }
    },
    midClick: false
  });
}

function finalizarVendaDoModal(){
  if (!produtos.validarPagto()){
    swal(
      'Atenção',
      'O valor da compra esta superior ao pago',
      'error'
    )
    return false;
  } else {
    swal({
        title: 'Aguarde, Finalizando venda e emitindo nota fiscal.',
        showCancelButton: false,
        showConfirmButton: false,
        confirmButtonText: 'Submit',
        closeOnConfirm: false,
        allowOutsideClick: false
      });

    $.ajax({
        url : base+'pdv/finalizarVenda',
        type : 'POST',
        dataType : 'json',
        data: {'venda' : JSON.stringify(produtos),
            cdEmpresa : $('#cdEmpresa').val(),
            nome : $('#nome').val(),
            cep : $('#cep').val(),
            cpf : $('#cpf').val(),
            cidade : $('#cidade').val(),
            uf : $('#uf').val(),
            rua : $('#rua').val(),
            numero : $('#numero').val(),
            bairro : $('#bairro').val(),
            complemento : $('#complemento').val()
                },
        success : function(response) {
            if (response.status) {
                swal({
                    title: 'Venda finalizada com sucesso.',
                    showCancelButton: false,
                    showConfirmButton: true,
                    confirmButtonText: 'Imprimir Nota fiscal',
                    closeOnConfirm: false,
                    allowOutsideClick: false
                  });
                shortcutModal = false;
                shortcutModalEnd = false;
            } else {
                sweetAlert("Oops...", response.erro, "error"); 
            }
        },
        error : function (response) {
             sweetAlert("Oops...", response.responseText, "error");
        }
    });
  }
}

function adicionarProduto() {
    var nome = $('#nome').val();
    var codigo = $('#cd_produto').val();
    var descricao = $('#descricao').val();
    var valor = $('#valor').val();
    var quantidade = $('#quantidade').val();
    var total = $('#total').val();
    var img = $('#imgProduto').attr('src');

    if(codigo != '' && quantidade != '' && valor != '' && total != '' && valor != '-0.00') {
        var aux = new produto(codigo, quantidade, valor, total, img, nome, descricao);
        if(aux.inserir()) {
            produtos.imprimir();
            produtos.limparCamposProduto();
        }
    } else {
        sweetAlert("Oops...", 'Alguns campos podem estar invalidos', "error");
    }
    $('.buscaProduto').focus();
}


function novaVenda()
{
  if (produtos.item.length > 0) {
     swal({
  title: 'Tem certeza disso?',
  text: "Existem produtos nesse pedido",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sim, criar um novo pedido',
  cancelButtonText: 'Não',
  closeOnConfirm: false
},
    function(isConfirm) {
      if (isConfirm){
        location.reload();
      }
})
  } else {
    location.reload();
  }
}

function removerItem()
{
  if (produtos.item.length == 0) {
    swal(
      'Atenção',
      'Não existe produto na venda, para ser removido.',
      'error'
    )
    return false;
  }

      $(".inputItem").mask("99999",{autoclear: false});

  swal({
    title: 'Digite o codigo do item a ser removido',
    html: '<input style="position: relative; z-index: 9999;" class="inputItem" name="inputItem">',
    showCancelButton: true,
    closeOnConfirm: true,
    allowOutsideClick: false
  },
  function() {
    var remover = parseFloat($('.inputItem').val());
    removerProduto(remover);
  })
      $(".inputItem").mask("99999",{autoclear: false});

}

function consultarPedido()
{
   $('.buscaProduto').focus();
}