@extends('clayout')
@section ('idata')
<br>
<br>
<br>
<table class="table table-sm table-dark" id="myTable" style="font-family:Georgia, Garamond, Serif;color:black;font-style:italic;">
  <thead>
    <tr style="color:white;">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($data as $tdata)
    <tr>
      <th scope="row" class="table-dark">{{$tdata->id}}</th>
      <td class="table-primary">{{$tdata->name}}</td>
      <td class="table-info"><img src="{{url($tdata->image)}}" style="height:200px; width:200px"></td>
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