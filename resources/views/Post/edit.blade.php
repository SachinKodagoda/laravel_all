
@extends('layouts.master')
@section('title','Edit Post')
@section('content')
    <div class="form-cover">
        <form class="form-container" action="/posts/{{ $post->id }}" method="post">

            @method('PATCH')
            @include('includes.form')
            <div class="form-group">
                <label for="active_state">Activate State</label>
                <select name="active_state" class="form-control">
                    <option value="0" {{ $post->active_state == 0 ? 'selected' : ''}}>0</option>
                    <option value="1" {{ $post->active_state == 1 ? 'selected' : ''}}>1</option>
                </select>
            </div>
            <div class="btn btn-group">
                <button type="submit" class="btn btn-primary">UPDATE</button>
                <a href="/posts/{{ $post->id }}" class="btn btn-success">BACK</a>
            </div>
        </form>
    </div>

    <script src="{{ asset('/js/script.js')}}"></script>
@endsection

