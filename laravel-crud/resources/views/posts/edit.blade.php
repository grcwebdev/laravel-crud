@extends('layouts.main')

@section('title')
  All My Posts
@endsection

@section('content')
<form action="/posts/title" method="POST">
  {{ csrf_field() }}
  {{ method_field('PUT')}}
  <h1>Edit a post</h1>
  <hr>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name ="title" class="form-control" id="title" placeholder="Enter title" value="{{$post->title}}">
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea class="form-control" name="content" id="content" placeholder="{{$post->content}}"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection