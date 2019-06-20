@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Posts</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Item</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Featured Image</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($posts as $key => $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->description }}</td>
            <td><img src="/uploads/{{ $item->featured_image }}" height="30px" width="30px" /></td>
            <td>
                <a class="btn btn-info" href="{{ route('posts.show',$item->id) }}">Show</a>
                @can('Edit Post')
                <a class="btn btn-primary" href="{{ route('posts.edit',$item->id) }}">Edit</a>
                @endcan
                @can('Delete Post')
                {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $item->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @endcan
            </td>
        </tr>
        @endforeach
    </table>
    {!! $posts->render() !!}
</div>
@endsection
