@extends('layouts.admin')




@section('content')

    <h1>posts</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Category</th>
                <td>Photo</td>
                <td>Title</td>
                <td>Body</td>
                <td>Created</td>
                <td>Updated</td>
            </tr>
        </thead>
        <tbody>
            @if($posts)

                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->category_id}}</td>
                        <td><img height="50" src="{{$post->photo ? asset('images/'.$post->photo->file) : 'http://placehold.it/50x50'}}" alt=""></td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

@stop