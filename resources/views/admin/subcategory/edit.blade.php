@extends('admin.layout.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sub category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"><label><b>Sub category Edit</b></label></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title"><label><b>Sub Category Edit</b></label></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- form start -->
              <form action="{{route('subcategory.update',$data['id'])}}" method="post"  role="button" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                  <label>Category Name</label>
                  <select class="form-control select2" name="category" id="category_id" style="width: 100%;" value="{{$data->category_id}}" required>
                    @foreach($category as $cat)
                    <option value="{{$cat->id}}" @if($data->category==$cat->id) selected @endif>{{$cat->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="mb-2"><label>Subcategory Name</label>
                  <input type="text" placeholder="Enter subcategory" class="form-control" value="{{$data['subcategory']}}" name="subcategory" id="subcategory" required>
                </div>

                <div class="form-group">
                  <label for="logo">Logo</label>
                  <input type="hidden" name="old_image" value="{{$data->logo}}" />
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="logo" class="custom-file-input" id="logo">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>  
                </div>
                @if($data->logo != "")
                <img src="{{asset($data->logo)}}" width="100px" class="mt-2" height="100px"/>
                @endif  
                </div>

                <button type="submit" name="update" class="btn btn-primary">Edit</button>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.row -->
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection           
