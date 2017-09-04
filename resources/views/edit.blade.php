@extends('layouts.layout')
@section('content')
	<div class="panel-body">
		<div class="container">
			<div class="row">
				@if(Session::has('success'))
				<div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
					<div class="alert alert-success">
						{{Session::get('success')}}
					</div>
				</div>
				@endif
				<div class="wrapper">
					@if($data)
					<form class="form-signin" action="{{route('updateCon', $data['id'])}}" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							@if($errors->has('name'))<p style="color:red">{{$errors->first('name')}}</p>@endif
							<input type="text" class="form-control" id="name" name="name" value="{{$data['name']}}" placeholder="Имя">
						</div>
						<div class="form-group">
							@if($errors->has('fname'))<p style="color:red">{{$errors->first('fname')}}</p>@endif
							<input type="text" class="form-control" id="fname" name="fname" value="{{$data['fname']}}" placeholder="Фамилия">
						</div>
						<div class="form-group">
							@if($errors->has('username'))<p style="color:red">{{$errors->first('username')}}</p>@endif
							<input type="text" class="form-control" id="username" name="username" value="{{$data['username']}}" placeholder="Логин">
						</div>
						<div class="form-group">
							@if($errors->has('password'))<p style="color:red">{{$errors->first('password')}}</p>@endif
							<input type="password" class="form-control" id="password" name="password" value="{{$data['password']}}" placeholder="Пароль">
						</div>
						<div class="form-group">
							@if($errors->has('birsday'))<p style="color:red">{{$errors->first('birsday')}}</p>@endif
							<input type="text" class="form-control" id="datepicker" name="birsday" value="{{$data['birsday']}}" placeholder="Дата рождения">
						</div>
						<div class="form-group">
							@if($errors->has('gerder'))<p style="color:red">{{$errors->first('gerder')}}</p>@endif
							<select class="form-control" name="gerder" id="gerder">
							 	<option value="" disabled selected>Выберите пол</option>
							  	<option>Мужской</option>
							  	<option>Женский</option>
							</select>
						</div>
						<button type="submit" name="register" class="btn btn-lg btn-primary btn-block">Готово</button>
					</form>
					@endif	
					</div>
				</div>
			</div>	
        </div> <!-- ./container -->
	</div>
@endsection