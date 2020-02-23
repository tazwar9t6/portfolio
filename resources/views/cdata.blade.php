@extends('clayout')
@section ('cdata')
<table class="table table-sm table-dark" id="myTable" style="font-family:Georgia, Garamond, Serif;color:black;font-style:italic;">
  <thead>
    <tr style="color:white;">
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($data2 as $tdata)
    <tr>
      <th scope="row" class="table-dark">{{$tdata->id}}</th>
      <td class="table-primary">{{$tdata->name}}</td>
      <td class="table-secondary">{{$tdata->email}}</td>
      <td class="table-success">{{$tdata->phone}}</td>
      <td class="table-info">{{$tdata->message}}</td>
      <td >
        <a class="btn btn-outline-info" href="{{url('/action/view'.$tdata->id)}}" role="button">VIEW</a>
        <a class="btn btn-outline-success" href="{{url('/action/edit'.$tdata->id)}}" role="button">EDIT</a>
        <a class="btn btn-outline-danger" href="{{url('/action/delete'.$tdata->id)}}" role="button">DELETE</a>
      </td>
    </tr>
    
    @endforeach
  </tbody>
</table>
@endsection