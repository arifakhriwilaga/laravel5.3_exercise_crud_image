@extends('layouts.layout')

@section('content')
<br>
<div class="col s4">
</div>
<div class="col s4">
 <table class="striped">
    <tr>
    	<td>ID</td><td>{{ $list_officer->id }}</td>
    </tr>
    <tr>
    	<td>Name</td><td>{{ $list_officer->name }}</td>
    </tr>
    <tr>
    	<td>Address</td><td>{{ $list_officer->address }}</td>
    </tr>
</table>
</div>
<div class="col s4">
</div>
@stop