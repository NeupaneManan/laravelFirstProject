@extends('backend.main')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Brand</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update brand</h3>
              </div>
            <!-- Error Message-->
              @if ($errors->any())
              @foreach ($errors->all() as $error)
              <div class="ml-3">
                <p style="color:red;">{{$error}}</p>
              </div>
              @endforeach
              @endif
              <!-- Error Message-->
               <!-- Success Message -->
              @if (session()->has('message'))
              <div class="alert alert-success">
              {{session()->get('message')}}
              </div>
              @endif
               <!-- success Message -->

              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/brand/update/{{$brand->id}}">
                @csrf 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title:</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"value="{{$brand->title}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description:</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="{{$brand->description}}">
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div> -->
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection