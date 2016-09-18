@extends('layouts.layout')

@section('content')
  <br>
  <p>

<div class="col s4">
</div>
{!! Form::model($list_officer,['route'=> array('officer_update',$list_officer->id), 'method'=>'PUT']) !!}
<div class="col s4">
<!-- Input name -->
{!! Form::label('name', 'Name') !!}
{!! Form::text('name',null) !!}
<!-- Input address -->
{!! Form::label('address', 'Address') !!}
{!! Form::text('address',null) !!}

{!! Form::submit('Save') !!}
</div>
{!! Form::close() !!}
<div class="col s4">
</div>
@stop