@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Profile</h1>
@stop

@section('content')
<div class="card card-warning">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card-header">
      <h3 class="card-title">
         <b>
            Profile
             </b>
        </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="updateprofile" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" autofocus required name="name" value="{{Auth::user()->name}}">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" autofocus required name="email" value="{{Auth::user()->email}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autofocus required name="password" min="8">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password Confirm</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" autofocus required name="password_confirmation" min="8">
          </div>
        <div class="form-group">
          <label for="exampleInputFile">Foto</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="form-control" id="exampleInputFile" autofocus accept=".jpg,.jpeg,.png" name="image_profile">
            </div>
          </div>
        </div>
        {{-- <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>



@stop
