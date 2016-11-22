@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
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
                        <a href="{{ url("/products/create") }}">Create new</a> <hr>
                    @endif
                    
                    @if (count($products) > 0)
                    <table><tr>
                        @foreach ($products as $product)
                            <td><a class="aprod" STYLE="text-decoration: none" href="{{ url("/products/$product->id") }}">
                                <div class="podu">
                                    <font color="424242"><b>{{ $product->category }}</b></font>
                                </div>
                            </a></td><td>&emsp;</td>
                        @endforeach
                        </tr></table>
                    @else
                        <p>There are no registered products yet</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

