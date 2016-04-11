    var columnActive;
    var oTable;
    var l;

    $(document).ready(function() {

       oTable = $('#datatable3').DataTable( {
            "ajax": base+"emailmarketing/historicoGrid/"+modeloId,
            bFilter: true,
            bInfo: false,
            "bLengthChange": false,
            "columns": [
                { "data": "email" },
                { "data": "status" },
                { "data": "lido" },
                { "data": "clique"},
                { "data": "enviado"},
                { "data": "modificado"},
            ],
            "order": [[ 4, "desc" ]],
            "deferRender": true,
            "createdRow": function ( row, data, index ) {
            if ( data['class'] ) {
                $(row).addClass(data['class']);
                $(row).find('td').addClass(data['class']);
            }},

        } );

    })
