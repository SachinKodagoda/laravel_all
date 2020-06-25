@extends('layouts.master')
@section('title','Add Post')

@section('navbar')
    @include('includes.navigation')
@endsection

@section('content')
    <div class="form-cover">
        <form class="form-container" action="{{ route('post_store') }}" method="post">
            @include('includes.form')
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>
    <script src="{{ asset('/js/script.js')}}"></script>
@endsection
