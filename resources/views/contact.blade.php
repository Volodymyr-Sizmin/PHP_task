@extends('layouts.app')

@section('content')
    <h3>If you have any questions, please do not hesitate to contact us</h3>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/contact/submit" method="POST">
        @csrf
        <div class="form-group">
            <label for="name"> Please enter your name</label>
            <input type="text" name="name" placeholder="John" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email"> Please enter your email</label>
            <input type="text" name="email" placeholder="example@example.com" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="name"> Please enter your message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>


@endsection
