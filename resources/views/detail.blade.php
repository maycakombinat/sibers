@extends('layouts.layout')

@section('content')
<div class="container">
@foreach($data as $dat)
	<div class="col-sm-offset-4 col-sm-4 col-sm-offset-4 profile">
		<p>Имя: <strong>{{$dat->name}}</strong></p>
		<p>Фамилия: <strong>{{$dat->fname}}</strong></p>
		<p>Логин: <strong>{{$dat->username}}</strong></p>
		<p>Пол: <strong>{{$dat->gerder}}</strong></p>
		<p>Дата рождения: <strong>{{$dat->birsday}}</strong></p>
	</div>
@endforeach	
</div>
@endsection 