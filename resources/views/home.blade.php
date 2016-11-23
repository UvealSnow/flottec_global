@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    
        <div class="simple-ss" id="simple-ss"></div>
        <div>
        <br>

        <font color="black" size="5"><b>What We Do</b></font></font><br><br>
        <p style="white-space: pre-line;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
        id est laborum."
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
        dolores eos qui ratione voluptatem sequi nesciunt.”</p>
        </div>
        <br><br><br>
        <div>
        <table><tr>
        <td><div style="background-color: #1966cb; width: 35px ; height: 150px;"></div></td><td>&emsp;</td><td><font color="black" size="4"><b>Emergency
        Response </b></font></font><br><br><br>
        <p style="white-space: pre-line;">"Lorem ipsum dolor sit amet,
        consectetur adipiscing elit, sed
        do eiusmod tempor incididunt
        ut labore et dolore magna
        aliqua. Ut enim ad minim
        veniam”</p></td><td>&emsp;</td>

        <td><div style="background-color: #1966cb; width: 35px ; height: 150px;"></div></td><td>&emsp;</td><td><font color="black" size="4"><b>Global
        Network</b></font></font><br><br><br>
        <p style="white-space: pre-line;">"Lorem ipsum dolor sit amet,
        consectetur adipiscing elit, sed
        do eiusmod tempor incididunt
        ut labore et dolore magna
        aliqua. Ut enim ad minim
        veniam”</p></td><td>&emsp;</td>

        <td><div style="background-color: #1966cb; width: 35px ; height: 150px;"></div></td><td>&emsp;</td><td><font color="black" size="4"><b>Training</b></font></font><br><br><br>
        <p style="white-space: pre-line;">"Lorem ipsum dolor sit amet,
        consectetur adipiscing elit, sed
        do eiusmod tempor incididunt
        ut labore et dolore magna
        aliqua. Ut enim ad minim
        veniam”</p></td><td>&emsp;</td>
        </tr></table>
        </div>
    </div>
</div>

<style>
/* USUAL STUFF */
.content { max-width:800px;text-align:left; margin:auto; }

/* THE DIV */
.simple-ss {
  width:800px;
  height:250px;
  background-color:red;
  margin:auto;
  background-image:url("http://www.mediafire.com/convkey/4989/2l919s6cqg2vm826g.jpg");
  background-position:0;
  background-repeat:no-repeat;
  background-size:cover;

/* ANIMATING STUFF */
  animation-name: slide;
  animation-duration: 13s;
  animation-direction: normal;
  animation-timing-function: ease;
  animation-iteration-count: infinite;
}

/* NOTE CODEPEN AUTOGENERATING -PREFIXES */
@keyframes slide {
  0% {background-position:0 0;}
  16.66% {background-position:0 0;}
  33.32% {background-position:-800px 0;}
  49.98% {background-position:-800px 0;}
  66.64% {background-position:-1600px 0;}
  83.30% {background-position:-1600px 0;}
  100% {background-position:0 0;}
}
</style>


@endsection
