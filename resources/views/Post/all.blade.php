@extends('layouts.main')
@section('content')
    <table class="table table-bordered">
        <thead>
            <tr class="success">
                <th>Tiêu đề</th>
                <th>Nội dung tiêu đề</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $post)
                <tr class="info">
                    <td>{{ $post->title  }} - <div class="badge badge-pill badge-primary">{{ $post->comments()->count() }} comments</div></td>
                    <td>{{ $post->content }}</td>
                    <td>
                        @foreach ($post->comments as $comment)
                            <div style="border:1px gray solid;padding:5px;margin:5px; border-radius:5px; float:left">
                                <p style="border-bottom:2px solid black">{{ $comment->title }}</p>
                                <p>{{ $comment->content }}</p>
                            </div>                            
                        @endforeach
                        <a href="{{ url("post/add/".$post->id) }}" class="btn btn-info">{{ $post->comments()->count() }} comment</a>
                    </td>                   
                </tr>
            @endforeach
        </tbody> 
    </table>
@endsection