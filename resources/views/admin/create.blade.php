@extends('admin.layouts')

@section('style')
@endsection

@section('page_heading')
 Dashboard
@endsection

@section('page_home_title')
 Admin
@endsection

@section('page_sub_title')
 Create
@endsection

@section('content')
<div class="card ">
    <div class="card-header">
      <h3 class="card-title">New Admin</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    @include('partials.errors')
    <form method="post" action="{{route('dashboard.store')}}">
        @csrf
      <div class="card-body">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="email" name="name" class="form-control" id="name" placeholder="Enter name">
          </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password_confarmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>


      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
@section('scripts')
@endsection
