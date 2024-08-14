@extends('backend.main')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
                <a href="/product/create"class="btn btn-success">Add Product</a>
            </div>
            @if (session()->has('message'))
          <div class="alert alert-success">
          {{session()->get('message')}}
          </div>
          @endif

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Brand-ID</th>
                    <th>Category-Id</th>
                    <th>Stock</th>
                    <th>Quantity</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
        @foreach ($product as $p )
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->title}}</td>
            <td>{{$p->description}}</td>
            <td>{{$p->price}}</td>
            <td>
            <img src="{{ asset('product/' . $p->image) }}" alt="Product Image" style="width: 80px; height: auto;">
        </td>
            <td>{{$p->brand_id}}</td>
            <td>{{$p->category_id}}</td>
            <td>{{$p->stock}}</td>
            <td>{{$p->quantity}}</td>
            <td>{{$p->color}}</td>
            <td>{{$p->size}}</td>
            <td>
                <a href="/product/edit/{{$p->id}}" class="btn btn-primary btn-sm m-2">Edit</a>
                <a href="/product/delete{{$p->id}}" class="btn btn-danger btn-sm m-2">Delete</a>
            </td>

        </tr>
        @endforeach
    </tbody>
                </table>
              </div>
            </div>

         

</body>
</html>


@endsection