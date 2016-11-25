@extends('layouts.app')

@section('content')
<div class="container">
 <div style="margin-left: 585px; margin-top: 260px; z-index:1; position: absolute;"><img src="images/JH.png" width="75%" height="75%"></div>
    <div>
    <table><tr><td>
        <div class="myoff">
                    <font size="6" color="#424242"> <b>CONTACT US</b> </font><br><br>
                    <font color="#424242"> Call us or fill out this form to request <br>
                    estimates, or information about our<br>
                    services.  <br><br></font>
        </div></td>

        <td><div class="myoff2"><br><br>
                    <font size="6" color="#424242"> <b>FLOTTEC</b> </font><br><br>
                    <font color="#424242"> 433 S. Hill Street<br>
                    Jackson Heights, NY 11372<br><br>
                    Phone Number: +00 0 0000 0000<br>
                    Email: service@flottec.com
                    <br><br></font>
        </div></td></tr></table>

        <div class="ml55">
            <div>
                <div>
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                  <font color="#9e9e9e">
                    <table><tr>
                        <td><div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" >Name:</label><br>

                            <div>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="input contactinput">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div></td><td>&emsp;&emsp;&emsp;</td>

                        <td><div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label for="name">&emsp; Company</label><br>

                            <div class="col-md-6">
                                <input id="company" type="text" name="company" value="{{ old('company') }}" required class="input contactinput">

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div></td></tr>

                        <tr><td><div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address">Address:</label><br>

                            <div>
                                <input id="address" type="text" name="address" required class="input contactinput">

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div></td><td>&emsp;&emsp;&emsp;</td>

                        <td><div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">&emsp; E-mail</label><br>

                            <div class="col-md-6">
                                <input id="email" type="email" name="email" required class="input contactinput">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div></td></tr>

                      </table>
                      <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                            <label for="question" >Question or Enquiry:</label><br>

                            <div>
                                <input id="question" type="text" name="question" value="{{ old('question') }}" required autofocus class="input contactarea">

                                @if ($errors->has('question'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      </font>
                        <br>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn-blue med">
                                    SEND
                                </button>
                                <br><br>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


