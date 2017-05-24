@extends('layout')

<style type="text/css">
	.link-show{
		color: #331189;
		cursor: pointer;
	}

</style>

@section('content')
	<div class="panel panel-default">
        <div class="panel-heading">
			<h1>{{$user->name}}</h1>

			<p>{{$user->id}}</p>
			<p>{{$user->email}}</p>
			<p>{{$user->password}}</p>
			<p>{{$user->login}}</p>
			<p>{{$user->type}}</p>
			<p>{{$user->year}}</p>

			<a class="btn btn-primary" href="/users" role="button">Voltar</a>

		</div>
	</div>

@endsection