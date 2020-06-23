@extends('layouts.master')
@section('content')
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">TITLE</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $indexKey => $post)
        <tr>
            <td>{{ ++$indexKey }}</td>
            <td>{{ $post->title }}</td>
            <td>{!! $post->description !!}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/post/update/{{ $post->id }}" class="btn btn-success">EDIT</a>
                    <a href="/post/delete/{{ $post->id }}" class="btn btn-danger">DELETE</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $posts->appends(request()->input())->links()}}
@endsection
