    $(document).ready(function() {
        $('#expectedSalary').setMask('decimal');
    })
    function expectedSalary(id) {
        $.magnificPopup.open({
            removalDelay: 500,
            items: {
                src: '#modal-form'
            },
            callbacks: {
                beforeOpen: function(e) {
                    this.st.mainClass = 'mfp-flipInY';
                }
            },
            midClick: true
        });
        $('.enviarCV').attr('onclick', 'sendCv('+id+')');
    }

    function modalConfirm(modal) {
        $.magnificPopup.open({
            removalDelay: 500,
            items: {
                src: modal
            },
            callbacks: {
                beforeOpen: function(e) {
                    this.st.mainClass = 'mfp-flipInY';
                }
            },
            midClick: true
        });
    }

    function sendCv(id){
        $.ajax({
            url: '/job/sendCv/',
            type:'POST',
            data: {
                expectedSalary : $('#expectedSalary').val(),
                id: id
            },
            dataType:'json',
            success:function(resultado) {
                if (resultado.status == 1){
                    modalConfirm('#modal-success');
                    $('.enviarCurriculo').html('<a class="btn btn-system" href="javascript:void(0)"><span style="margin-right:5px;" class="glyphicons glyphicons-ok_2"></span> Currículo enviado</a>');
                    $('.job'+id).html('<span style="margin-right:5px;" class="glyphicons glyphicons-ok_2"></span> Currículo enviado');
                    $('.job'+id).attr('onclick', 'javascript:void(0)');
                }else{
                    modalConfirm('#modal-error');
                    $('.msgError').html(resultado.msg);
                    $('.msgBtn').html(resultado.btn);
                }
            }
        })
    }

    function share(link){
        var aux = $('.facebook_share').attr('rel');
        $('.facebook_share').attr('href', aux+link);
        aux = $('.google_share').attr('rel');
        $('.google_share').attr('href', aux+link);
        aux = $('.twitter_share').attr('rel');
        $('.twitter_share').attr('href', aux+link);
        aux = $('.linkedin_share').attr('rel');
        $('.linkedin_share').attr('href', aux+link);
        aux = $('.pinterest_share').attr('rel');
        $('.pinterest_share').attr('href', aux+link);

        $.magnificPopup.open({
            removalDelay: 500,
            items: {
                src: '#modal-share'
            },
            callbacks: {
                beforeOpen: function(e) {
                    this.st.mainClass = 'mfp-flipInY';
                }
            },
            midClick: true
        });
    }