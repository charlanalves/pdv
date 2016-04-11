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