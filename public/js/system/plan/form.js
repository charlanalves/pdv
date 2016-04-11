    $(document).ready(function() {

        $(".save").click(function(){
            $(".saveAux").click();
        })

    })


    var positionPlanTable;

    function addPlanTable(){
        positionPlanTable++;
        $.ajax({
            url:'/plan/addPlanTable/'+positionPlanTable,
            type:'POST',
            dataType:'html',
            success:function(resultado) {
                $('.tabPlanTable').append(resultado);
            }
        })
    }

    $(function() {

    positionPlanTable   = $('.countPlanTable').size();

    $(document).on('click', '.addPlanTable', function(){
        addPlanTable();
    })

    $(document).on('click', '.deletePlanTable', function(){
        $(this).parents('.planTable').remove();
    })


});