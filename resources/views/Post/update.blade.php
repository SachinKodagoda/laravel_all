@extends('layouts.master')
@section('content')
<div class="form-cover">
    <form class="form-container" action="{{ route('updatePost') }}" method="post">
        @csrf
        <input type="hidden" class="form-control" name="id" value="{{ $post->id }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3" id="description_editor_update">{!! $post->description !!}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">UPDATE</button>
    </form>
</div>
<script src="{{ asset('/js/script.js')}}"></script>
@endsection