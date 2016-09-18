@extends('layouts.layout')

@section('content')
  <br>
  <p>

<div class="col-xs-4">
</div>
<!-- Form Open -->

<div class="col-xs-6">
<div class="well">
{!! Form::open(['route' => 'officer_store', 'enctype' => 'multipart/form-data']) !!}
<!-- Input name -->
    <div class="form-group">  
        <input class="form-control" placeholder="Your Name" type="text" name="input_name">
    </div>

{!! $errors->first('input_name',null) !!}

<!-- Input title image -->
    <div class="form-group">
        <input class="form-control" placeholder="Title Image" type="text" name="input_title_image">
    </div>
{!! $errors->first('input_title_image') !!} 

<!-- Input description image -->
    <div class="form-group">
        <input class="form-control" placeholder="Description Image" type="text" name="input_description_image">	
    </div>
{!! $errors->first('input_description_image') !!}  

{!! Form::file('image') !!}

<br><br><br>
{!! Form::submit('Save') !!}
{!! Form::close() !!}
</div>
<!-- close form -->

</div>
<div class="col-xs-4">
</div>
@stop