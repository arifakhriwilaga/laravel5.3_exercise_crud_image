@extends('layouts.layout')

@section('content')
  <br>
  <p>

<div class="col-xs-4">
</div>
<div class="col-xs-4">
<div class="well">

<!-- Open form edit -->
{!! Form::model($list_officer,['route'=> array('officer_	update', $list_officer->id), 'method'=>'PUT','files' => true]) !!}
<!-- Input name -->
{!! Form::text('input_name',$list_officer->name, array ('class' => 'form-control')) !!}
{!! $errors->first('input_name',null) !!}

<!-- Input title image -->
{!! Form::text('input_title_image',$list_officer->title_image, array ('class' => 'form-control')) !!}
{!! $errors->first('input_title_image',null) !!} 

<!-- Input description image -->
{!! Form::text('input_description_image',$list_officer->description_image, array ('class' => 'form-control')) !!}
{!! $errors->first('input_description_image',null) !!} 
{!! Form::text('input_image',$list_officer->image, array ('class' => 'form-control')) !!}
<img src="{{ asset('/image_upload/'.$list_officer->image) }}" width="200px" height="100px">

{!! Form::file('image') !!}
{!! Form::submit('Save') !!}

{!! Form::close() !!}
<!-- Close form -->
</div>
</div>
<div class="col-xs-4">
</div>
@stop