@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Post Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
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
    </div>
</div>
@endsection