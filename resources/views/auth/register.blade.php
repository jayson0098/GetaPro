@extends('layout.master')
@section('contents')
<div class="row">
  <form class="form-horizontal" action="{{ action('Auth\AuthController@postRegister') }}" method="POST">
  <br><br>
  <h3 align="center">GetaPro Registration</h3>
  <fieldset>
  <!-- Form Name -->
  <legend></legend>

  {!! csrf_field() !!}
  <!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">

  </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="email">Password</label>
  <div class="col-md-4">
  <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">

  </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="email">Confirm Password</label>
  <div class="col-md-4">
  <input id="password" name="password_confirmation" type="password" placeholder="Confirm Password" class="form-control input-md">

  </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="name">First Name</label>
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" placeholder="First Name" class="form-control input-md">

  </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="name">Last Name</label>
  <div class="col-md-4">
  <input id="lastname" name="lastname" type="text" placeholder="Last Name" class="form-control input-md">

  </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone</label>
  <div class="col-md-4">
  <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md">

  </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="name">Address</label>
  <div class="col-md-4">
  <input id="address" name="address" type="text" placeholder="Address" class="form-control input-md">

  </div>
  </div>

  <div class="form-group">
    <label for="select" class="col-md-4 control-label">Account Type</label>
       <div class="col-md-4">
        <select class="form-control" id="types_id" name="types_id">
            @foreach($datas as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
      </div>
    </div>

  <!-- Button -->
  <div class="form-group">
  <label class="col-md-4 control-label" for="reg"></label>
  <div class="col-md-4">
    <button id="reg" type="submit" name="reg" class="btn btn-primary">Register</button>
    <a href="/" class="btn btn-primary">Back to Login</a>
  </div>
  </div>

  </fieldset>
  </form>
</div>
@endsection
