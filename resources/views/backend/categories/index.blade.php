@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Categories</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Item</a>
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
            <th>Category Image</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($categories as $key => $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->cat_title }}</td>
            <td>{{ $item->cat_description }}</td>
            <td><img src="/uploads/{{ $item->cat_image }}" height="30px" width="30px" /></td>
            <td>{{ ($item->status == 1)?'Active':'Inactive' }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('categories.show',$item->id) }}">Show</a>
                @can('Edit Category')
                <a class="btn btn-primary" href="{{ route('categories.edit',$item->id) }}">Edit</a>
                @endcan
                @can('Delete Category')
                {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $item->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @endcan
            </td>
        </tr>
        @endforeach
    </table>
    {!! $categories->render() !!}
</div>
@endsection
