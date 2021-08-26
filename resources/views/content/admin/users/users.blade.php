@extends('template/admin/master')
@section('title', 'Users')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" {{Auth::user()->level != 'admin' ? 'disabled' : ''}} class="btn btn-primary" data-toggle="modal" data-target="#modal-l">
                  <i class="fas fa-plus"></i> Add
                </button>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>E-Mail</th>                      
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $value)
                    <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->name}}</td>
                      <td>{{$value->email}}</td>                  
                      <td>{{$value->level}}</td>
                      <td>
                        <div class="btn-group">            
                          <a href="{{url('dashboard/users/'.$value->id.'/edit')}}">
                            <button type="button" {{Auth::user()->level != 'admin' ? 'disabled' : ''}} class="btn btn-warning">                              
                              <i class="fas fa-edit"></i>
                            </button>
                          </a>
                          <a onclick="return confirm('Are you sure to delete it?');" href="{{url('dashboard/users/'.$value->id.'/delete')}}">
                            <button type="button" {{Auth::user()->level != 'admin' ? 'disabled' : ''}}  class="btn btn-danger">
                              <i class="fas fa-trash-alt"></i>
                            </button>
                          </a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="ml-3 mt-4 pr-auto pl-auto">
                  {{ $data->links() }}
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <div class="modal fade" id="modal-l">
        <div class="modal-dialog modal-l">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Extra Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="form_create" action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                  @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" id="" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="email">E-Mail</label>
                      <input type="email" name="email" class="form-control" id="" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" id="" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label>Select</label>
                        <select name="level" class="form-control">
                          <option>Admin</option>
                          <option>Author</option>
                        </select>
                    </div>
                  </form>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" form="form_create" class="btn btn-primary">Save changes</button>
                </div>
    </section>
    <!-- /.content -->
    
  </div>
@endsection