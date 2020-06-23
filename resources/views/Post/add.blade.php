@extends('layouts.master')
@section('content')
<div class="form-cover">
    <form class="form-container" action="{{ route('addPostLink') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3" id="description_editor"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">ADD</button>
    </form>
</div>
<script src="{{ asset('/js/script.js')}}"></script>
@endsection