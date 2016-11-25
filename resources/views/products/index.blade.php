@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-left: 50px;">
        <div>
            <div><br>
                <div><font size="6" color="#424242"> <b>PRODUCTS</b> </font><br><br>
                 <font color="#424242"> Flottec has specialty and commodity chemicals to meet<br>
                 your needs. Please click on the category of products your<br>
                 are interested in for further information.   <br><br></font></div>
           

                    @if (session('success'))
                        <div class="alert alert-warning">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (Auth::user() && Auth::user()->type == 'admin')
                        <a class="btn btn-primary" href="{{ url("/products/create") }}">Create new</a> <hr>
                    @endif
                    
                    @if (count($products) > 0)
                    <table class="spacerows" cellspacing="0"><tr>
                        @foreach ($products as $i => $product)
                            @if (($i%3) == 0 && $i != 0 )
                                </tr><tr></tr><tr>
                                @endif<td><a class="aprod" STYLE="text-decoration: none" href="{{ url("/products/$product->id") }}">
                                
                                <div class="podu">
                                <img src="images/rocks.png">
                                <br>   
                                    <h2><b>{{ $product->category }}</b><h2>
                                </div>

                            </a></td><td>&emsp;&emsp;</td>
                        @endforeach
                        </tr></table>
                    @else
                        <p>There are no registered products yet</p>
                    @endif
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

