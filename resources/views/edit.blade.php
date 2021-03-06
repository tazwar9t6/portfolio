@extends('clayout')
@section('contact')
<section class="page-section" id="contact">
  <div class="container">

    <!-- Contact Section Heading -->
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">UPDATE INFORMATION</h2>

    <!-- Icon Divider -->
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i class="fas fa-star"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>

    <!-- Contact Section Form -->
    <div class="row">
      <div class="col-lg-8 mx-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
        <form  action="{{url('/update'.$data3->id)}}" method="POST"  novalidate="novalidate">
          @csrf
          <div class="control-group"> 
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Name</label>
              <input class="form-control" id="name" type="text" name="name" value="{{$data3->name}}" required="required" data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Email Address</label>
              <input class="form-control" id="email"name="email" type="email" value="{{$data3->email}}" required="required" data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Phone Number</label>
              <input class="form-control" id="phone" name="phone" type="tel" value="{{$data3->phone}}" required="required" data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" required="required" data-validation-required-message="Please enter a message.">{{$data3->message}}</textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-xl">UPDATE</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>
@endsection