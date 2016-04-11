  <div class="row" >
  	<div class="col-md-2">
  	</div>
  	<div class="col-md-8" style="">
  		<div class="panel sort-disable mb50 panel-info">
  			<div class="panel-heading">
  				<span class="panel-title"> Abertura de caixa do dia {{dataAbertura}}</span>
  			</div>
  			<div class="panel-body" style="padding-top:0px; padding-bottom:0px;" >
  			<br />
  				<div class="row">
  					<div class="col-md-12">
  						<p><strong>Empresa:</strong> {{sessao['unidadeNome']}}</p>
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-md-12">
  						<p><strong>Usuario:</strong>  {{sessao['name']}}</p>
  					</div>
  				</div>
  				<form method="post" action="{{url('pdv/abrirCaixa')}}">
  				<div class="row">
  					<div class="col-md-4">
		  				{{forms['caixa']}}
  					</div>
  				</div>
  				<br />
  				<div class="col-md-2 pull-right">
					<button type="submit" class="btn btn-primary btn-block">Abrir caixa</button>
  				<br />
  				</div>
  				</form>
  			</div>
  		</div>
  	</div>
  	<div class="col-md-2">
  	</div>
  </div>
