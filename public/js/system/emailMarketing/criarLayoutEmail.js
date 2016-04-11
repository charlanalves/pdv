  jQuery(document).ready(function() {

    // Init Summernote
    $('#conteudo').summernote({
      height: 315, //set editable area's height
      focus: false, //set focus editable area after Initialize summernote
      callbacks: {
        onImageUpload : function(files, editor, welEditable) {
          console.log('onImageUpload');
             for(var i = files.length - 1; i >= 0; i--) {
                     sendFile(files[i], this);
            }
        }
    }
    });

    function sendFile(file, el) {
    var form_data = new FormData();
    form_data.append('file', file);
    $.ajax({
        data: form_data,
        type: "POST",
        url:   base+"upload/uploadEditor",
        cache: false,
        contentType: false,
        processData: false,
        dataType:'json',
        success: function(url) {
            $(el).summernote('editor.insertImage', url.img);
        }
    });
    }

    $(".save").click(function(){
        $(".saveAux").click();
    })
  });
