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
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
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
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>


      </div>
      <!-- /.card-body -->

      <div class="card-header">
        permissiosn
      </div>
      <div class="card-body">
        <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" name="permissions[]" value="create_users"  type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                create
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" name="permissions[]" value="read_users" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                read
              </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" name="permissions[]" value="update_users" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              update
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" name="permissions[]" value="delete_users" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              delete
            </label>
        </div>
          </div>

      </div>


      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
@section('scripts')
@endsection
