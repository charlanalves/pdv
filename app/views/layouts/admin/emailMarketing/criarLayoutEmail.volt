<div class="row">
        <!-- begin: .tray-left -->
        

        <div class="col-md-12" >
        <form method="post" id="form" action="{{ url('emailmarketing/form') }}/{{cdTemplate}}" enctype="multipart/form-data">
          <div class="row">
              <div class="col-md-4">
                {{forms['nome']}}
              </div>
              <div class="col-md-4">
                {{forms['cdTemplate']}}
                {{forms['responderPara']}}
              </div>
              <div class="col-md-4">
                {{forms['enviadoPor']}}
              </div>

          </div>
          <div class="row">
              <div class="col-md-4">
                {{forms['assunto']}}
              </div>
              <div class="col-md-4">
                {{forms['enviadoPorNome']}}
              </div>
              <div class="col-md-4">
                {{forms['privado']}}
              </div>
          </div>
          <div class="panel">
            <div class="message-reply">
              {{forms['conteudo']}}
            </div>
          </div>
          <input type="submit" value="Salvar" class="saveAux" style="display:none;">
        </form>
        </div>
</div>

  <style>
  .note-editor .note-toolbar > .note-help,
  .note-editor .note-toolbar > .note-style {
    display: none;
  }
  </style>