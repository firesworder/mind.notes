@extends('layouts.app')

@section('title')Обновление записи@endsection

@section('content')
    <h1>Обновление записи</h1>

    <form action="{{ @route('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ $data->name }}" placeholder="Enter ur name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="text" name="email" value="{{ $data->email }}" placeholder="Enter ur email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input id="message" type="text" name="subject" value="{{ $data->subject }}" placeholder="Enter ur message" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Enter ur message" class="form-control">{{ $data->message }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection
