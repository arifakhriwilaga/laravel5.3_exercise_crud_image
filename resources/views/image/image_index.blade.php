@extends('layouts.layout')

@section('content')
<br>
<div class="col s6">
<div class="panel panel-default">
    <div class="panel-body">
  <a class="btn-floating cyan" href="officer-create">
    <i class="material-icons right">add</i>
  </a>
  <br>
  <p></p>

  <!--  flash message -->
<!--     @if(Session::has('error'))
      <div class="session-flash alert-danger">
          {{Session::get('error')}}
      </div>
    @endif -->
    @if(Session::has('message'))
    <span>{{Session::get('message')}}</span>
    @endif
    
  <table class="striped">
    <tr>
    	<th>ID</th>
    	<th>Name</th>
    	<th>Address</th>
        <th colspan="2">Action</th>
    </tr>
    @foreach ($list_officer as $list)
    <tr>
    	<td>{{ $list->id }}</td>
    	<td>{{ $list->name }}</td>
    	<td>{{ $list->address }}</td>
        <td>
            <a class="btn-floating green" href="officer-show/{{$list->id}}">
                <i class="material-icons right">info_outline</i>
            </a>
            <a class="btn-floating orange" href="officer-edit/{{$list->id}}">
                <i class="material-icons right">edit</i>
            </a>
            <a class="btn-floating red" href="officer-delete/{{$list->id}}">
                <i class="material-icons right">delete</i>
            </a>
        </td>
    </tr>
    @endforeach
  </table>
  </div>
  </div>
</div>
@stop

<!-- example link to changer a href
    {!! link_to('officer-edit/'.$list->id, 'Edit', array('class' => 'btn-floating orange')) !!}
-->