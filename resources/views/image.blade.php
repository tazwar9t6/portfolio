@extends('layout')

@section('imageup')


   <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Image Upload</h2>
          
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

          
          <form action="{{route('image.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            
            <div class="form-group">
              <select name="reg" class="form-control">
                <label for="name">Name</label>
                @foreach($data as $row)
                <option value="{{$row->id}}">
                  {{$row->name}}
                </option>
                @endforeach
              </select>             
            </div>

            <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
        <input name="image" class="form-control"  type="file">
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
      </div>
    </div>
  </section>

  


@endsection

<button onclick="document.getElementById('myImage').src='img/download.jfif'">Turn on the light</button>

<img id="myImage" src="pic_bulboff.gif" style="width:100px">

<button onclick="document.getElementById('myImage').src='img/pic_bulboff.gif'">Turn off the light</button>

