@extends('layouts.layout')

@section('content')
  <br>
  <p>

<div class="col-xs-4">
</div>
{!! Form::model($list_officer,['route'=> array('officer_update',$list_officer->id), 'method'=>'PUT','files' => true]) !!}
<div class="col-xs-4">
<!-- Input name -->
{!! Form::text('input_name',$list_officer->name, array ('class' => 'form-control')) !!}
{!! $errors->first('name',null) !!}

<!-- Input title image -->
{!! Form::text('title_image',null, array ('class' => 'form-control')) !!}
{!! $errors->first('title_image',null) !!} 

<!-- Input description image -->
{!! Form::text('description_image',null, array ('class' => 'form-control')) !!}
{!! $errors->first('description_image,null') !!}

{!! Form::text('description_image',$list_officer->image, array ('class' => 'form-control')) !!}
<img src="{{ asset('/image_upload/'.$list_officer->image) }}" width="200px" height="100px">

{!! Form::file('image') !!}
{!! Form::submit('Save') !!}
</div>
{!! Form::close() !!}
<div class="col-xs-4">
</div>
@stop