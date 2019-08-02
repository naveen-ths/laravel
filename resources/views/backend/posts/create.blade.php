@extends('backend.layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Create New Item
        <small><a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('posts.index') }}">Posts</a></li>
        <li class="active">Create new post</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-body">
            {!! Form::open(array('route' => 'posts.store','method'=>'POST','enctype' => 'multipart/form-data')) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                        {!! $errors->first('title', '<p class="error-messages">:message</p>') !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        {!! Form::file('featured_image', array('class' => 'form-control')) !!}
                        {!! $errors->first('featured_image', '<p class="error-messages">:message</p>') !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
                        {!! $errors->first('description', '<p class="error-messages">:message</p>') !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>
@endsection