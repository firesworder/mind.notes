@extends('layouts.app')

@section('title')
    Contacts
@endsection

@section('content')
    <h1>Contacts</h1>

    <form action="{{ @route('contacts-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" placeholder="Enter ur name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="text" name="email" placeholder="Enter ur email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input id="message" type="text" name="subject" placeholder="Enter ur message" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Enter ur message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
