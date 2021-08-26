@extends('template/admin/master')
@section('title', 'Users')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mt-4">
          <div class="col-10 offset-1 align-self-center">
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="form_edit" action="{{url('dashboard/users/'.$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input value="{{$data->name}}" type="text" name="name" class="form-control" id="" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input value="{{$data->email}}" type="email" name="email" class="form-control" id="" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label>Select</label>
                              <select name="level" class="form-control">
                                <option>Admin</option>
                                <option>Author</option>
                              </select>
                          </div>                  
                      </div>                  
                      <div class="card-footer">
                        <button type="submit" form="form_edit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
              </div>
          </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- /.content -->
  </div>
  
@endsection