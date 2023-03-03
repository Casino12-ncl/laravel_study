@extends('layouts.app')

@section('title')
    Контакты
@endsection

@section('content')
    <h1>contact</h1>

   
    <form action="{{ route('contact-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Write your name</label>
            <input type="text" name="name" placeholder="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Write your email</label>
            <input type="text" name="email" placeholder="Email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="Subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Type your message">
            </textarea>
        </div>
        <div class="container mt-2">
            <button type="submit" class="btn btn-success">SEND</button>
        </div>
       
    </form>
@endsection
