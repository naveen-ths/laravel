@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Page Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pages.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <table class="table table-responsive">
                <tbody>
                    <tr><th>Title</th><td>{{ $page->title }}</td></tr>
                    <tr><th>Excerpt</th><td>{{ $page->excerpt }}</td></tr>
                    <tr><th>Description</th><td>{{ $page->description }}</td></tr>
                    <tr><th>Created At</th><td>{{ $page->created_at }}</td></tr>
                    <tr><th>Updated At</th><td>{{ $page->updated_at }}</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection