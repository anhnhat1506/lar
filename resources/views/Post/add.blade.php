@extends('layouts.main')
@section('content')
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
            <div>
                    <p>{{ $cmt->title }}</p>
                    <p>{{ $cmt->content }}<p>
            </div>       
        @endforeach
    <form action="{{ url("post/save_comment") }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <label for="title">Title comment</label>
            <input type="text" name="title" id="title" value="" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="content">Content comment</label>
            <input type="text" name="content" id="content" value="" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="by">Boi ai</label>
            <input type="text" name="by" id="by" value="" class="form-control"/>
        </div>
        <button type="submit">Them comment</button>
    </form>
@endsection