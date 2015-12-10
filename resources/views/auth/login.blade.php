@extends('layout.master')
@section('contents')
  <div class="row">
    <div class="row">
        <div class='col-md-3'></div>
        <div class="col-md-6" style="margin-top: 70px;">
            <div class="login-box well">
                    <form action="{{action('Auth\AuthController@postLogin')}}" method="POST">
                        {!! csrf_field() !!}
                        <legend>GetaPro Login</legend>
                        <div class="form-group">
                            <label for="username-email">E-mail</label>
                            <input value='' name="email" id="username-email" placeholder="GetaPro Email" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" value='' type="password" name="password" placeholder="Password" type="text" class="form-control" />
                        </div>
                        <div class="input-group">
                          <div class="checkbox">
                            <label>
                              <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-login-submit btn-block m-t-md" value="Login" />
                        </div>
                        <span class='text-center'><a href="/resetting/request" class="text-sm">Forgot Password?</a></span>
                        <div class="form-group">
                            <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                            <a href="{{action('Auth\AuthController@getRegister')}}" class="btn btn-success btn-block m-t-md">Create an account</a>
                        </div>
                    </form>

            </div>
        </div>
        <div class='col-md-3'></div>
    </div>
  </div>
@endsection
