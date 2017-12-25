@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Profile</h2></div>
                <div class="panel-body">
                    <table class="table table-responsive">
                        <tbody>
                            <tr><th>ID: </th><td>{{ $user->id }}</td></tr>
                            <tr><th>Name: </th><td>{{ $user->name }}</td></tr>
                            <tr><th>Email: </th><td>{{ $user->email }}</td></tr>
                            <tr><th>Created At: </th><td>{{ $user->created_at }}</td></tr>
                            <tr><th>Updated At: </th><td>{{ $user->updated_at }}</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection