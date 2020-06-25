
@extends('layouts.master')
@section('title','Edit Post')
@section('content')
    <div class="form-cover">
        <form class="form-container" action="/posts/{{ $post->id }}" method="post">

            @method('PATCH')
            @include('includes.form')
            <div class="form-group">
                <label for="active">Activate State</label>
                <select name="active" class="form-control">
                    <option value="1" {{ $post->active == 1 ? 'selected' : ''}}>Active</option>
                    <option value="2" {{ $post->active == 2 ? 'selected' : ''}}>Deactive</option>
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

