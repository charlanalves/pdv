    var columnActive;
    var oTable;

    $(document).ready(function() {
       oTable = $('#datatable3').DataTable( {
            "ajax": "/permissions/list",
            "columns": [
                { "data": "idPermissions" },
                { "data": "resource" },
                { "data": "action" },
                { "data": "description" },
                { "data": "icon" },
                { "data": "ordem" },
                { "data": "menu" },
                { "data": "profiles_idProfiles" },
                { "data": "modules_idModules" },
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
            window.location = '/permissions/form/'+data['idPermissions'];
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
            delReg(rowDeleted['idPermissions']);
            $.magnificPopup.close();
        })


    } );

    function delReg(id){
        $.ajax({
            url: '/permissions/delete/'+id,
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
            window.location.href = "/permissions/form";
        })
    })