@extends('layouts.master')
@section('title','Posts')
@section('navbar')
    @include('includes.navigation')
@endsection

@section('content')
    <a href="/posts?{{request('sort') ? 'sort='.request('sort') : ''}}" class="btn mr-2 {{ !request('active') ? 'btn-warning' : 'btn-dark' }}">ALL</a>
    <a href="/posts?{{request('sort') ? 'sort='.request('sort').'&' : ''}}active=1" class="btn mr-2 {{request('active') =='1' ? 'btn-warning' : 'btn-dark' }}">ACTIVE</a>
    <a href="/posts?{{request('sort') ? 'sort='.request('sort').'&' : ''}}active=2" class="btn mr-2 {{request('active') =='2' ? 'btn-warning' : 'btn-dark' }}">DEACTIVE</a>
    <a href="/posts?{{request('active') ? 'active='.request('active').'&' : ''}}sort=asc" class="btn mr-2 {{request('sort') =='asc' ? 'btn-warning' : 'btn-dark' }}">ASC</a>
    <a href="/posts?{{request('active') ? 'active='.request('active').'&' : ''}}sort=desc" class="btn mr-2 {{request('sort') =='desc' ? 'btn-warning' : 'btn-dark' }}">DESC</a>
    <br/><br/>
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
        @forelse($posts as $indexKey => $post)
            <tr>
                <td>{{ ++$indexKey }}</td>
                <td>{{ $post->title }}</td>
                <td>{!! $post->description !!}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/posts/{{ $post->id }}" class="btn btn-primary">MORE</a>
                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-success">EDIT</a>
                        <form action="/posts/{{ $post->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td>-</td>
                <td>-</td>
                <td>No Data Available</td>
                <td>-</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="pagination_cover">
        {{ $posts->appends(request()->input())->links()}}
    </div>

@endsection
