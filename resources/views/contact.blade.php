@extends('layouts.app')

@section('content')
    <h3>If you have any questions, please do not hesitate to contact us</h3>

    <form action="/contact/submit" method="POST">
        @csrf
        <div class="form-group">
            <label for="name"> Please enter your name</label>
            <input type="text" name="name" placeholder="John" id="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="email"> Please enter your email</label>
            <input type="text" name="email" placeholder="example@example.com" id="email" class="form-control" value="{{ old('email') }}">

        </div>

        <div class="form-group">
            <label for="name"> Please enter your message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>

    <div>
        @if(!empty($data))
            <h2>All messages</h2>
            @foreach($data  as $element)
                <div class="alert alert-info">
                    <p>{{ $element->name  }}</p>
                    <p>{{ $element->email  }}</p>
                    <p>{{ $element->message  }}</p>
                    <p>{{ $element->created_at }}</p>
                </div>
            @endforeach
        @endif
    </div>
@endsection
