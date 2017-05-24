@extends('layout')

@section('content')

<!--scripts para o calendario de anos-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<div class="panel panel-default">
    
	{{Form::open(['url'=>'users','method'=>'POST'])}}

			<div class="form-group col-md-4">
				{{Form::label('nome', 'Nome:')}}
				{{Form::text('name', null, ['placeholder'=>'Insira um nome', 'class'=>'form-control'])}}

			</div>			
		
			<div class="form-group col-md-4">
				{{Form::label('email', 'E-mail:')}}
				{{Form::text('email', null, ['placeholder'=>'Insira um e-mail', 'class'=>'form-control'])}}
			</div>

			<div class="form-group col-md-4">
				{{Form::label('login', 'Login:')}}
				{{Form::text('login', null, ['placeholder'=>'Login','class'=>'form-control'])}}
			</div>
	
			<div class="form-group col-md-2">
				{{Form::label('password', 'Senha:')}}
				{{Form::text('password', null, ['placeholder'=>'Senha','class'=>'form-control'])}}
			</div>

			<div class="form-group col-md-2">
				{{Form::label('year', 'Ano:')}}
					<input class="date-own form-control" name="year" placeholder="...informe o ano."
							required>

					<script type="text/javascript">
							$('.date-own').datepicker({
						minViewMode: 2,
						format: 'yyyy'
					});
				</script>
			</div>

			<div class="form-group col-md-8">
				{{Form::label('type', 'Tipo:')}}
				{{Form::text('type', null, ['placeholder'=>'Tipo do Usuário','class'=>'form-control'])}}
			</div>

			<div class="form-group col-md-6">
				<center>
					<label for="campo3">Tipo</label><br>
						<div class="form-group col-md-4">
							<center><label for="campo3">Administrador</label><br>
							<img type="image" src="{{asset('img/admin.png')}}" class="imgBtn5"/>
						</div>

						<div class="form-group col-md-4">
							<center><label for="campo3">Professor</label><br>
							<img type="image" src="{{asset('img/professor.png')}}"  class="imgBtn5"/>
						</div>

						<div class="form-group col-md-4">
							<center><label for="campo3">Aluno</label><br>
							<img type="image" src="{{asset('img/aluno.png')}}"  class="imgBtn5"/>
						</div>
				</center>
			</div>

			<div class="form-group col-md-12">
				<a class="btn btn-primary" href="/" role="button">Voltar</a>
				{{Form::submit('Salvar', array('class' => 'btn btn-success')) }}
			</div>
</div>
		

	{{Form::close()}}

@endsection
