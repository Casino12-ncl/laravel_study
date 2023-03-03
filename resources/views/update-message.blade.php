@extends('layouts.app')

@section('title')
    Update message
@endsection

@section('content')
    <h1>Update message</h1>

   
    <form action="{{ route('contact-update-submit', $data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Write your name</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Write your email</label>
            <input type="text" name="email" value="{{$data->email}}" placeholder="Email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject"  value="{{$data->subject}}" placeholder="Subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Type your message">{{$data->message}}
            </textarea>
        </div>
        <div class="container mt-2">
            <button type="submit" class="btn btn-success">UPDATE</button>
        </div>
       
    </form>
@endsection
