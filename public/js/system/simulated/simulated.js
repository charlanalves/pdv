$(function() {
    $('.answers [type="radio"]').click(function(){
        var name = $(this).attr('name')
        answer(name, $('[name="'+name+'"]:checked').val());
        $('[name="'+name+'"]').parent().parent().addClass('disabled');
        $('[name="'+name+'"]').attr('disabled', 'disabled');
    })

    $('.loadmore').click(function(){
        location.reload(true);
    })
})

function answer(name, selected){
    $.ajax({
        url:'/simulated/computing',
        type:'POST',
        dataType:'json',
        data:({
            name : name,
            selected : selected
        })
        , success:function(result) {
            if (result.status == '1'){
                $('[rel="answer'+result.answer+'"]').css('background','#bbf098');
                if (result.answer != selected){
                    $('[rel="answer'+selected+'"]').css('background','#f7c1c1');
                }
            }else{
                alert('ocorreu um erro.')
            }
        }
    })
}