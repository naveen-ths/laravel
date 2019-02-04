@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Category Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <table class="table table-responsive">
                <tbody>
                    <tr><th>Title</th><td>{{ $category->cat_title }}</td></tr>
                    <tr><th>Description</th><td>{{ $category->cat_description }}</td></tr>
                    <tr><th>Status</th><td>{{ ($category->status == 1)?'Active':'Inactive' }}</td></tr>
                    <tr><th>Category Image</th><td><img src="/uploads/{{ $category->cat_image }}" height="30px" width="30px" class="thumbnail" /></td></tr>
                    <tr><th>Created At</th><td>{{ $category->created_at }}</td></tr>
                    <tr><th>Updated At</th><td>{{ $category->updated_at }}</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection