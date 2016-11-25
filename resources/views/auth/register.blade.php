@extends('layouts.app')

@section('content')
<div class="container">
    <div><br><br>
        <div class="myoff">
                    <font size="6" color="#424242"> <b>SIGN UP</b> </font><br><br>
                    <font color="#424242"> You are two steps away from being able to <br>
                    download our SDS/MSDS. Sign up to <br>
                    continue. <br><br></font>
        </div>

        <div class="col-md-8 col-md-offset-2" style="margin-left: 55px;">
            <div>
                <div>
                     <form class="form-horizontal" role="form" method="GET" action="{{ url('/return') }}">
                        {{ csrf_field() }}
                    <font color="#9e9e9e">
                    <table><tr>
                        <td><div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" >E-mail:</label><br>

                            <div>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div></td><td>&emsp;&emsp;&emsp;</td>

                        <td><div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label for="name">&emsp; Company</label><br>

                            <div class="col-md-6">
                                <input id="company" type="text" name="company" value="{{ old('company') }}" required>

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div></td></tr>

                        <tr><td><div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password:</label><br>

                            <div>
                                <input id="password" type="password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div></td><td>&emsp;&emsp;&emsp;</td>

                        <td><div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm">&emsp; Confirm Password</label><br>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div></td></tr>
                      </table></font>

                        <br>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn-blue" style="width: 380px;">
                                    SIGN UP
                                </button>
                                <br><br>
                                <a href="/login" style="margin-left: 168px;"> <font color="#9f9f99" >LOG IN</font> </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

