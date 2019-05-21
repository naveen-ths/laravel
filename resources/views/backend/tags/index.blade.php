@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tags</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tags.create') }}"> Create New Item</a>
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
            <th>Slug</th>
            <th>Description</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($tags as $key => $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->tag_title }}</td>
            <td>{{ $item->tag_slug }}</td>
            <td>{{ $item->tag_description }}</td>
            <td>{{ ($item->status == 1)?'Active':'Inactive' }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('tags.show',$item->id) }}">Show</a>
                @can('Edit Tag')
                <a class="btn btn-primary" href="{{ route('tags.edit',$item->id) }}">Edit</a>
                @endcan
                @can('Delete Tag')
                {!! Form::open(['method' => 'DELETE','route' => ['tags.destroy', $item->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @endcan
            </td>
        </tr>
        @endforeach
    </table>
    {!! $tags->render() !!}
</div>
@endsection
