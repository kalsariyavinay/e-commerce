@extends('admin.layout.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sub Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"><label><b>Sub Category</b></label></li>
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
              <h3 class="card-title"><label><b>Sub Category Create</b></label></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- form start -->
              <form action="{{route('subcategory.store')}}" method="post"  role="button" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Category Name</label>
                  <select class="form-control select2" name="category" style="width: 100%;" required>
                    @foreach($category as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="mb-2"><label>Subcategory Name</label>
                  <input type="text" placeholder="Enter subcategory" class="form-control" name="subcategory" id="subcate_id" required>
                </div>

                <div class="form-group">
                  <label for="banner">Logo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="logo" class="custom-file-input" id="logo" required>
                      <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" >Upload</span>
                    </div>
                  </div>
                </div>

                <button class="btn btn-primary" type="submit">submit</button>
              </form>
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