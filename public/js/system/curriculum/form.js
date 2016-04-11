 var positionCourse;
 var positionAcademic;
 var positionHistory;
 var positionContact;

$("#birth").datepicker({
    prevText: '<i class="fa fa-chevron-left"></i>',
    nextText: '<i class="fa fa-chevron-right"></i>',
    showButtonPanel: false,
    dateFormat : 'dd-mm-yy',
});

$(document).ready(function() {
    $('#salaryInterest').setMask();
    $('.phone').setMask('phone');
    calendar();

});

function calendar(){
    $('.date').datepicker({
        prevText: '<i class="fa fa-chevron-left"></i>',
        nextText: '<i class="fa fa-chevron-right"></i>',
        showButtonPanel: false,
        dateFormat : 'dd-mm-yy',
    });
}

function addCourse(){
    positionCourse++;
    $.ajax({
        url:'/curriculum/addCourse/'+positionCourse,
        type:'POST',
        dataType:'html',
        success:function(resultado) {
            $('.tabCourse').append(resultado);
            calendar();
        }
    })
}

function addAcademic(){
    positionAcademic++;
    $.ajax({
        url:'/curriculum/addAcademic/'+positionAcademic,
        type:'POST',
        dataType:'html',
        success:function(resultado) {
            $('.tabAcademic').append(resultado);
            calendar();
        }
    })
}

function addHistory(){
    positionHistory++;
    $.ajax({
        url:'/curriculum/addHistory/'+positionHistory,
        type:'POST',
        dataType:'html',
        success:function(resultado) {
            $('.tabHistory').append(resultado);
            calendar();
        }
    })
}

function addContact(){
    positionContact++;
    $.ajax({
        url:'/curriculum/addContact/'+positionContact,
        type:'POST',
        dataType:'html',
        success:function(resultado) {
            $('.tabContact').append(resultado);
            $('.phone').setMask('phone');
        }
    })
}

function addLanguage(){
    positionLanguage++;
    $.ajax({
        url:'/curriculum/addLanguage/'+positionLanguage,
        type:'POST',
        dataType:'html',
        success:function(resultado) {
            $('.tabLanguage').append(resultado);
        }
    })
}

$(function() {

    positionCourse   = $('.countCourse').size();
    positionAcademic = $('.countAcademic').size();
    positionHistory = $('.countHistory').size();
    positionContact = $('.countContact').size();
    positionLanguage = $('.countLanguage').size();

    $(document).on('click', '.addCourse', function(){
        addCourse();
    })

    $(document).on('click', '.deleteCourse', function(){
        $(this).parents('.course').remove();
    })

    $(document).on('click', '.addAcademic', function(){
        addAcademic();
    })

    $(document).on('click', '.deleteAcademic', function(){
        $(this).parents('.academic').remove();
    })

    $(document).on('click', '.addHistory', function(){
        addHistory();
    })

    $(document).on('click', '.deleteHistory', function(){
        $(this).parents('.history').remove();
    })

    $(document).on('click', '.addContact', function(){
        addContact();
    })

    $(document).on('click', '.deleteContact', function(){
        $(this).parents('.contact').remove();
    })

    $(document).on('click', '.addLanguage', function(){
        addLanguage();
    })

    $(document).on('click', '.deleteLanguage', function(){
        $(this).parents('.language').remove();
    })

});

$(document).ready(function() {
    $('.summernote').summernote({
        height: 200,
    });
});

$(document).ready(function() {

    $(".save").click(function(){
        $(".saveAux").click();
    })

    $(".tm-input").each(function(){
      var rel = $(this).attr('rel');
      var prefilled = $(this).val().split(',');

      $(this).tagsManager({
        tagsContainer: '.'+rel,
        tagClass: 'tm-tag-info',
        prefilled: prefilled,
      })
    })

});