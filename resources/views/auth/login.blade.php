@extends('layouts.app')

@section('content')
<div class="container">
    <div><br><br>
        <div class="myoff">
                    <font size="6" color="#424242"> <b>LOG IN</b> </font><br><br>
                    <font color="#424242"> You are two steps away from being able to <br>
                    download our SDS/MSDS. Log in to <br>
                    continue. <br><br></font>
        </div>

        <div  class="ml55">
            <div>
                <div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                      <font color="#9e9e9e">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" >E-mail:</label><br>

                            <div>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password:</label><br>

                            <div>
                                <input id="password" type="password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      </font>

                        <br>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn-blue short">
                                    LOG IN
                                </button>
                                <br><br>
                                <a href="/register" class="ml60"> <font color="#9f9f99" >SIGN UP</font> </a>

                                <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


