    var columnActive;
    var oTable;
    var l;

    $(document).ready(function() {

       oTable = $('#datatable3').DataTable( {
            "ajax": base+"emailmarketing/list",
            bFilter: false,
            bInfo: false,
            "bLengthChange": false,
            "columns": [
                { "data": "cd_template" },
                { "data": "nome" },
                { "data": "assunto" },
                { "data": "criado"},
                { "data": "modificado"},
                { "data": "actions"},
            ],
            "deferRender": true,
            "columnDefs": [ {
                "targets": -1,
                "data": null,
                "defaultContent": '<div class="btn-group">'+
                                        '<button class="btn btn-info send" type="button"><i class="fa fa-envelope"></i>'+
                                       '</button>'+
                                       '<button class="btn btn-system visualizar" type="button"><i class="fa fa-eye"></i>'+
                                       '</button>'+
                                       '<button class="btn btn-warning dark historico" type="button"><i class="fa fa-book"></i>'+
                                       '</button>'+
                                       '<button class="btn btn-danger edit" type="button"><i class="fa fa-edit"></i>'+
                                       '</button>'+
                                       '<button class="btn btn-danger dark delete" type="button"><i class="fa fa-remove"></i>'+
                                       '</button>'+
                                   '</div>'
            } ]
        } );

        $('#datatable3 tbody').on( 'click', '.historico', function () {
            var data = oTable.row( $(this).parents('tr') ).data();
            window.location = base+'emailmarketing/historico/'+data['cd_template'];
        });

        $('#datatable3 tbody').on( 'click', '.visualizar', function () {
            var data = oTable.row( $(this).parents('tr') ).data();
            window.location = base+'emailmarketing/visualizarModelo/'+data['cd_template'];
        });

        $('#datatable3 tbody').on( 'click', '.edit', function () {
            var data = oTable.row( $(this).parents('tr') ).data();
            window.location = base+'emailmarketing/form/'+data['cd_template'];
        });

        $('#datatable3 tbody').on( 'click', '.delete', function () {
            columnActive = oTable.row( $(this).parents('tr') );
            $.magnificPopup.open({
                removalDelay: 500,
                items: {
                    src: '#modal-panel'
                },
                callbacks: {
                    beforeOpen: function(e) {
                        this.st.mainClass = 'mfp-with-fade';
                    }
                },
                midClick: true
            });
        });

        $('#datatable3 tbody').on( 'click', '.send', function () {
            $('.multiselect').addClass('hide');
            var data = oTable.row( $(this).parents('tr') ).data();
            $('#cdTemplate').val(data['cd_template']);
            $.magnificPopup.open({
              removalDelay: 500,
              items: {
                src: '#modal-form'
              },
              callbacks: {
                beforeOpen: function(e) {
                  var Animation = 'mfp-flipInY';
                  this.st.mainClass = Animation;
                }
              },
              midClick: true
            });
        })

        $('#modal-panel').on( 'click', '.cancel_delete', function () {
            $.magnificPopup.close();
        })

        $('#modal-panel').on( 'click', '.confirm_delete', function () {
            var rowDeleted = columnActive.data();
            delReg(rowDeleted['cd_template']);
            $.magnificPopup.close();
        })

        $('#cidade').multiselect({
            enableFiltering: true,
        });

        $('#uf').on('change', function(){
            $.ajax({
                url: base+'emailmarketing/buscarCidadePorEstado/'+$(this).val(),
                type:'GET',
                dataType:'json',
                success:function(resultado) {
                    if (resultado.status == true){
                        $('#cidade').html(resultado.data);
                        alterarSelect();
                    }else{
                        notify('Falhou', resultado.msg, 'danger');
                    }
                }
            })
            $('.multiselect').removeClass('hide');
        })


        $('.ladda-button').on('click', function(){

            l = Ladda.create(this);
            l.start();
            var cidades = $('#cidade').val();
            var email = $('#emailEnvio').val();
            var template = $('#cdTemplate').val();
            $('.ladda-label').html('Aguarde, Enviando emails');
            var atual = 0;
            var progress =0;
            if (cidades == undefined) {
                cidades = '';
            }
            $.ajax({
                url: base+'emailmarketing/enviarEmailMarketing/',
                type:'POST',
                data: {'cidade' : cidades,
                       'email' : email,
                       'template' : template
                   },
                dataType:'json',
                success:function(resultado) {
                    if (resultado.status == true) {
                        sweetAlert("Concluido com exito", resultado.msg, "success");
                    } else {
                        sweetAlert("Oops...", resultado.msg, "error");
                    }
                   l.stop();
                   $.magnificPopup.close();
                   $('#cdTemplate').val('');
                   $('#emailEnvio').val('');
                   $('.ladda-label').html('Enviar');
                }
            })
        })

    } );


    function delReg(id){
        $.ajax({
            url: base+'emailmarketing/delete/'+id,
            type:'DELETE',
            dataType:'json',
            success:function(resultado) {
                if (resultado.data == true){
                    notify('Sucesso', resultado.msg, 'warning');
                    columnActive.remove().draw( false );
                    columnActive = '';
                }else{
                    notify('Falhou', resultado.msg, 'danger');
                }
            }
        })
    }

    $(document).ready(function() {

        $(".new").click(function(){
            window.location.href = base+"emailmarketing/form";
        })






    })


function alterarSelect()
{
    $("#cidade").append();
    $("#cidade").multiselect('destroy');
    $('#cidade').multiselect({
        includeSelectAllOption: true,
        enableCaseInsensitiveFiltering: true,
        enableFiltering: true,
    });
}