@extends('template/admin/master')
@section('title', 'Gallery')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
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
                      <th>Description</th>
                      <th>Image Content</th>
                      <th>Author</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $value)
                    <tr>
                      <td>{{$value->description}}</td>
                      <td>{{$value->image_content}}</td>
                      <td>{{$value->author_id}}</td>
                      <td>{{$value->created_at->format("d-M, yy")}}</td>
                      <td>
                        <div class="btn-group">
                          <a href="{{url('dashboard/gallery/'.$value->id.'/edit')}}">
                            <button type="button" class="btn btn-warning">                              
                              <i class="fas fa-edit"></i>
                            </button>
                          </a>
                          <a onclick="return confirm('Are you sure to delete it?');" href="{{url('dashboard/gallery/'.$value->id.'/delete')}}">
                            <button type="button" class="btn btn-danger">                              
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
    </section>
    <div class="modal fade" id="modal-xl">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Extra Large Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="form_create" action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
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
                    <label>Textarea</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Enter ..." style="height: 100px"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file_input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Submit</span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" form="form_create" class="btn btn-primary">Save changes</button>
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