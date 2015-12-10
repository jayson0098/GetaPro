@extends('template.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User Login</h1>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        Login
    </div>
    <div class="panel-body">
        <div class="col-lg-8">
            {!! Form::open(array('url' => 'checkUser','class'=>'form-horizontal')) !!}
            <div class="row">

                <div class="form-group">
                    {!! Form::label('email','Email:',['class'=>'control-label col-md-2']) !!}
                    <div class="col-md-6">
                        {!!Form::text('email', NULL, ['placeholder' => 'Email', 'id' => 'email', 'class' => 'form-control']) !!}
                        @if ($errors->has('email'))<p style="color:red;">{!!$errors->first('email')!!}</p>@endif
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('password','Password:',['class'=>'control-label col-md-2']) !!}
                    <div class="col-md-6">
                        {!! Form::password('password',['placeholder' => 'Password','class' => 'form-control'])!!}
                        @if ($errors->has('password'))<p style="color:red;">{!!$errors->first('password')!!}</p>@endif

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-9">
                    <div class="col-md-3 pull-right">
                        {!! Form::submit('Login',['class'=>'btn btn-primary']) !!}
                    </div>
                </div>
            </div>


            {!! Form::close() !!}
        </div>
    </div>
    <!-- /.panel-body -->
</div>
<!-- /.panel -->
@endsection