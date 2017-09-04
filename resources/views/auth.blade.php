@extends('layouts.layout')

@section('content')
<div class="container">
	<form class="col-sm-offset-3 col-sm-6 col-sm-offset-3" action="{{route('check')}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="exampleInputPassword1">Логин</label>
			@if($errors->has('username'))<p style="color:red">{{$errors->first('username')}}</p>@endif
			<input type="text" class="form-control" id="exampleInputPassword1" name="username">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Пароль</label>
			@if($errors->has('password'))<p style="color:red">{{$errors->first('password')}}</p>@endif
		<input type="password" class="form-control" id="exampleInputPassword1" name="password">
		</div>
		<button type="submit" class="btn btn-default">Отправить</button>
	</form>	
</div>
@endsection