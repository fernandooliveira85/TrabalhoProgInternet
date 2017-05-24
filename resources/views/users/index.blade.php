@extends('layout')

@section('content')

	
	@foreach($users as $user)

	
        <div class="panel-heading">
        	<span class="glyphicon glyphicon-user"></span>

				<h1><a href="/users/{{$user->id}}">{{$user->name}}</a></h1>
				<p>{{$user->email}}</p>
				<p>{{$user->password}}</p>
				<p>{{$user->login}}</p>
				<p>{{$user->type}}</p>
				<p>{{$user->year}}</p>

				<!-- EXCLUIR USUÁRIOS -->
				{{Form::open(['url'=>'users/'.$user->id,'method'=>'delete'])}}
					{{Form::hidden('user_id', $user->id)}}

					<div class="form-group">
							<a class="btn btn-primary" href="/users/{{$user->id}}/edit" role="button">Editar</a>

					        {{ Form::submit('Excluir Usuário', array('class' => 'btn btn-danger')) }}

					        <a class="btn btn-info" href="/" role="button">Desistir</a>
					</div>
				{{Form::close()}}				
		</div>


	@endforeach

	{{ $users->links() }}

@endsection