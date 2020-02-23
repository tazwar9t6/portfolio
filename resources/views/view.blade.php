


@extends('clayout')
<br>
<br>
<br>
<br>
<br>
<h1>

  <table class="table table-sm table-dark" id="myTable" style="font-family:Georgia, Garamond, Serif;color:black;font-style:italic;">
    <thead>
      <tr style="color:white;">
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
     
      <tr>
        <th scope="row" class="table-dark">{{$data8->id}}</th>
        <td class="table-primary">{{$data8->name}}</td>
        <td class="table-secondary">{{$data8->email}}</td>
        <td class="table-success">{{$data8->phone}}</td>
        <td class="table-info">{{$data8->message}}</td>
      </tr>
    </tbody>
  </table>
  <a href="/admin/cdata" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back</a>
