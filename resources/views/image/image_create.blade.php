@extends('layouts.layout')

@section('content')
  <br>
  <p>

<div class="col s4">
</div>
<div class="col s4">
{!! Form::open(['route' => 'officer_store']) !!}
<!-- Input name -->
{!! Form::label('name', 'Name') !!}
{!! Form::text('input_name') !!}
{!! $errors->first('input_name') !!}

<br>
<br>
<br>
<!-- Input address -->
{!! Form::label('address', 'Address') !!}
{!! Form::text('input_address') !!}
{!! $errors->first('input_address') !!}  

{!! Form::submit('Add Officer!') !!}
{!! Form::close() !!}
</div>
<div class="col s4">
</div>
@stop