@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tag Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tags.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <table class="table table-responsive">
                <tbody>
                    <tr><th>Title</th><td>{{ $tag->tag_title }}</td></tr>
                    <tr><th>Slug</th><td>{{ $tag->tag_slug }}</td></tr>
                    <tr><th>Description</th><td>{{ $tag->tag_description }}</td></tr>
                    <tr><th>Status</th><td>{{ ($tag->status == 1)?'Active':'Inactive' }}</td></tr>
                    <tr><th>Created At</th><td>{{ $tag->created_at }}</td></tr>
                    <tr><th>Updated At</th><td>{{ $tag->updated_at }}</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection