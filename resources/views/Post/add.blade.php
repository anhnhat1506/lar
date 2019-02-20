@extends('layouts.main')
@section('style')
    <style>
         .errors li{
             color:red;
         }
    </style>
@endsection
@section('content')
    <h1><a href="{{ url("post/all") }}">All posts</a></h1>
    <table class="table table-bordered">
        <thead>
            <tr class="success">
                <th>Tieu de post</th>
                <th>Noi dung post</th>
            </tr>
        </thead>
        <tbody>
            <tr class="info">
                <td><p>{{ $post->title }}</p></td>
                <td><p>{{ $post->content }}</p></td>
            </tr>
            
        </tbody>        
    </table>
        @foreach ($post->comments as $cmt)
            <div style="border:1px gray solid; margin:5px;">
                    <p>by: {{ $cmt->by }}</p>
                    <p>title: {{ $cmt->title }}</p>
                    <p>content: {{ $cmt->content }}<p>
            </div>       
        @endforeach
    <form action="{{ url("post/save_comment") }}" method="POST">
        @if($errors->any())
            <ul class="errors">
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
        @csrf
        <div class="form-group">
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <label for="title">Title comment</label>
            <input type="text" name="title" id="title" value="{{ old("title") }}" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="content">Content comment</label>
            <input type="text" name="content" id="content" value="{{ old("content") }}" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="by">Boi ai</label>
            <input type="text" name="by" id="by"  value="{{ old("by") }}"  class="form-control"/>
        </div>
        <button type="submit">Them comment</button>
    </form>
@endsection