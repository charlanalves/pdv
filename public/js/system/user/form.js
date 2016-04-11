    var columnActive;
    var oPayments;

    $(document).ready(function() {

        $(".save").click(function(){
            $(".saveAux").click();
        })



       oPayments = $('#paymentsTable').DataTable();
       $('#acessLogTable').DataTable();
       $('#jobTable').DataTable();

        $('#paymentsTable tbody').on( 'click', '.repeat', function () {
            var data = $(this).attr('rel');
            alert(data);
        });

    } );

    function verifyTransaction(id){
        $.ajax({
            url: '/transaction/verify/'+id,
            type:'GET',
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
