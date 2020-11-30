@extends('layouts.app')

@section('title-block'){{$data->subject}}@endsection

@section('content')
    <h1>{{$data->subject}}</h1>
    <div class="alert alert-info">
        <h3>{{ $data->subject }}</h3>
        <p>{{ $data->email }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <p>{{ $data->message }}</p>
        <a href="{{ route('contact-update', $data->id) }}" class="btn btn-info">Редактировать</a>
        <a href="{{ route('delete-message', $data->id) }}" class="btn btn-danger">Удалить</a>
    </div>
@endsection
