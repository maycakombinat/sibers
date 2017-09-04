@extends('layouts.layout')

@section('content')
<div class="container">
	<form class="col-sm-offset-3 col-sm-6 col-sm-offset-3" action="{{route('createContact')}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="exampleInputEmail1">Имя</label>
			@if($errors->has('name'))<p style="color:red">{{$errors->first('name')}}</p>@endif
			<input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Фамилия</label>
			@if($errors->has('fname'))<p style="color:red">{{$errors->first('fname')}}</p>@endif
			<input type="text" class="form-control" id="exampleInputPassword1" name="fname">
		</div>
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
		<div class="form-group">
			<label for="exampleInputPassword1">Дата рождения</label>
			@if($errors->has('birsday'))<p style="color:red">{{$errors->first('birsday')}}</p>@endif
			<input type="text" class="form-control" id="datepicker" name="birsday">
		</div>
		<div class="form-group">
			<label for="exampleSelect1">Пол</label>
			@if($errors->has('gerder'))<p style="color:red">{{$errors->first('gerder')}}</p>@endif
			<select class="form-control" id="exampleSelect1" name="gerder">
				<option>Выберите пол</option>
				<option>Мужской</option>
				<option>Женский</option>
			</select>
		</div>
		<button type="submit" class="btn btn-default">Отправить</button>
	</form>	
</div>
@endsection