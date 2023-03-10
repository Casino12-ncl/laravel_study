@extends('layouts.app')

@section('title'){{$data->subject}}@endsection

@section('content')
<h1>{{$data->subject}}</h1>

    <div class="alert alert-info">
        <p>{{$data->message}}</p>
        <p>{{$data->email}}</p>
        <p>{{$data->name}}</p>
        <p><small>{{$data->created_at}}</small></p>
        <a href="{{ route('update-message', $data->id)}}">
            <button class="btn btn-warning">Update</button></a>
            <a href="{{ route('contact-delete', $data->id)}}">
                <button class="btn btn-danger">Delete</button></a>

    </div>


@endsection

