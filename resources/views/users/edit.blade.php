@extends('layout')

@section('content')

	<div class="panel panel-default">
        <div class="panel-heading">
        	
			{{Form::open(['url'=>'users/'.$user->id,'method'=>'put'])}}
				<div class="row">
					<div class="col-md-4">
						{{Form::label('name', 'Nome:')}}
						{{Form::text('name', $user->name, ['placeholder'=>'Insira um nome'])}}
					</div>
				  
				  	<div class="col-md-4">
						{{Form::label('email', 'E-mail:')}}
						{{Form::text('email', $user->email, ['placeholder'=>'Insira um e-mail'])}}
					</div>
				  
				  	<div class="col-md-4">
						{{Form::label('login', 'Login:')}}
						{{Form::text('login', $user->login, ['placeholder'=>'Login'])}}
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						{{Form::label('password', 'Senha:')}}
						{{Form::text('password', $user->password, ['placeholder'=>'Senha'])}}
					</div>

					<div class="col-md-4">
						{{Form::label('type', 'Tipo:')}}
						{{Form::text('type', $user->type, ['placeholder'=>'Tipo do Usuário'])}}
					</div>

					<div class="col-md-4">
						{{Form::label('year', 'Ano:')}}
						{{Form::text('year', $user->year, ['placeholder'=>'Ano'])}}
					</div>
				</div>

				
		</div>
	</div>
			<a class="btn btn-primary" href="/users" role="button">Voltar</a>
			{{Form::submit('Salvar', array('class' => 'btn btn-success')) }}

			
		{{Form::close()}}

@endsection