@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url("/products/$product->id") }}" enctype="multipart/form-data">
                        
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control" name="category" value="{{ $product->category }}" required>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('classification') ? ' has-error' : '' }}">
                            <label for="classification" class="col-md-4 control-label">Classification</label>

                            <div class="col-md-6">
                                <input id="classification" type="text" class="form-control" name="classification" value="{{ $product->classification }}" required>

                                @if ($errors->has('classification'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('classification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mineral') ? ' has-error' : '' }}">
                            <label for="mineral" class="col-md-4 control-label">Mineral</label>

                            <div class="col-md-6">
                                <input id="mineral" type="text" class="form-control" name="mineral" value="{{ $product->mineral }}" required>

                                @if ($errors->has('mineral'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mineral') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('chemical_description') ? ' has-error' : '' }}">
                            <label for="chemical_description" class="col-md-4 control-label">Chemical description</label>

                            <div class="col-md-6">
                                <textarea id="chemical_description" type="text" class="form-control" name="chemical_description" required>{{ $product->chemical_description }}</textarea>

                                @if ($errors->has('chemical_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('chemical_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('chemical_family') ? ' has-error' : '' }}">
                            <label for="chemical_family" class="col-md-4 control-label">Chemical family</label>

                            <div class="col-md-6">
                                <textarea id="chemical_family" type="text" class="form-control" name="chemical_family" required>{{ $product->chemical_family }}</textarea>

                                @if ($errors->has('chemical_family'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('chemical_family') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('english_sheet') ? ' has-error' : '' }}">
                            <label for="english_sheet" class="col-md-4 control-label">English safety sheet</label>

                            <div class="col-md-6">
                                <input id="english_sheet" type="file" class="form-control" value="{{ $product->safety_sheets->english_sheet }}" name="english_sheet">

                                @if ($errors->has('english_sheet'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('english_sheet') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('spanish_sheet') ? ' has-error' : '' }}">
                            <label for="spanish_sheet" class="col-md-4 control-label">Spanish safety sheet</label>

                            <div class="col-md-6">
                                <input id="spanish_sheet" type="file" class="form-control" value="{{ $product->safety_sheets->spanish_sheet }}" name="spanish_sheet">

                                @if ($errors->has('spanish_sheet'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('spanish_sheet') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tech_sheet') ? ' has-error' : '' }}">
                            <label for="tech_sheet" class="col-md-4 control-label">Technical sheet</label>

                            <div class="col-md-6">
                                <input id="tech_sheet" type="file" class="form-control" name="tech_sheet" value="{{ $product->tech_sheet->tech_sheet }}">

                                @if ($errors->has('tech_sheet'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tech_sheet') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
