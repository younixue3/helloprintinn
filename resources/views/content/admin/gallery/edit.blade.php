@extends('template/admin/master')
@section('title', 'Gallery')
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
                <form role="form" id="form_edit" action="{{url('dashboard/gallery/'.$data->id)}}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label>Textarea</label>
                      <textarea aria-valuenow="{{$data->description}}" class="form-control" name="description" rows="3" placeholder="Enter ..." style="height: 100px"></textarea>
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