@extends('backend.layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Post Detail
        <small><a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('posts.index') }}">Posts</a></li>
        <li class="active">Edit post</li>
    </ol>
</section>
<section class="content">
    <!-- Default box -->
    <div class="box">
        <table class="table table-responsive">
            <tbody>
                <tr><th>Title</th><td>{{ $post->title }}</td></tr>
                <tr><th>Excerpt</th><td>{{ $post->excerpt }}</td></tr>
                <tr><th>Description</th><td>{{ $post->description }}</td></tr>
                <tr><th>Created At</th><td>{{ $post->created_at }}</td></tr>
                <tr><th>Updated At</th><td>{{ $post->updated_at }}</td></tr>
            </tbody>
        </table>
    </div>
</section>
@endsection