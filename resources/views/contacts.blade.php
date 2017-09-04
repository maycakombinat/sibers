@extends('layouts.layout')
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Пол</th>
                <th>Дата рождения</th>
                <th>Профиль</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $dat)
            <tr>
                <td>{{$dat->name}}</td>
                <td>{{$dat->fname}}</td>
                <td>{{$dat->gerder}}</td>
                <td>{{$dat->birsday}}</td>
                <td>
                <a href="{{route('detail', $dat->id)}}" class="btn btn-primary btn-xs">Профиль</a>
                </td>
                <td>
                <a href="{{route('updateContact', $dat->id)}}" class="btn btn-primary btn-xs">Редактирование</a>
                </td>
                <td>
                <form action="{{route('del', $dat->id)}}" method="delete">
                <button type="submit" class="btn btn-danger btn-xs">Удалить</button>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-right">
        {{ $data->links() }}
    </div>
</div>
@endsection