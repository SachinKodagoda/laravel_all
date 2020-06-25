@extends('layouts.master')

@section('title','Show')

@section('content')
    <h2>{{ $post->title}}</h2>
    <p>{!! $post->description !!}</p>
    <div class="btn-group">
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">EDIT</a>
        <a href="/posts/" class="btn btn-success">BACK</a>
    </div>

@endsection
