    var columnActive;
    var oTable;

    $(document).ready(function() {
       oTable = $('#datatable3').DataTable( {
            "ajax": "/plan/list",
            "columns": [
                { "data": "idPlan" },
                { "data": "description" },
                { "data": "value" },
                { "data": "days" },
                { "data": "profiles_idProfiles" },
                { "data": "actions"},
            ],
            "deferRender": true,
            "columnDefs": [ {
                "targets": -1,
                "data": null,
                "defaultContent": '<div class="btn-group">'+
                                       '<button class="btn btn-danger edit" type="button"><i class="fa fa-edit"></i>'+
                                       '</button>'+
                                       '<button class="btn btn-danger dark delete" type="button"><i class="fa fa-remove"></i>'+
                                       '</button>'+
                                   '</div>'
            } ]
        } );

        $('#datatable3 tbody').on( 'click', '.edit', function () {
            var data = oTable.row( $(this).parents('tr') ).data();
            window.location = '/plan/form/'+data['idPlan'];
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

        $('#modal-panel').on( 'click', '.cancel_delete', function () {
            $.magnificPopup.close();
        })

        $('#modal-panel').on( 'click', '.confirm_delete', function () {
            var rowDeleted = columnActive.data();
            delReg(rowDeleted['idPlan']);
            $.magnificPopup.close();
        })


    } );

    function delReg(id){
        $.ajax({
            url: '/plan/delete/'+id,
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
            window.location.href = "/plan/form";
        })
    })