@extends('layouts.app')

@section('title-block')Все сообщения@endsection

@section('content')
    <h1>Все сообщения формы /contacts/</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <p>{{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $el->id) }}" class="btn btn-warning">Подробнее</a>
        </div>
    @endforeach
@endsection
