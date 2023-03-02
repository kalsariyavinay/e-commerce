@extends('admin.layout.app')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
                <h3 class="card-title">
                    Category List
                </h3>
                <a href="{{route('category.create')}}" class="float-right btn btn-dark"><i class="fas fa-plus-circle"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Banner</th>
                    <th>IsPublished</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 @foreach ($categorys as $key => $category)                     
                 <tr>
                   <td>{{$key+1}}</td>
                   <td>{{$category->name}}</td>
                   <td>{{$category->slug}}</td>
                   <td><img src="{{asset($category->banner)}}" alt="" width="50px" height="50px"></td>
                   <td>
                    @if($category->is_published == 1)
                    <a href="{{route('category.status_update',[$category->id,0])}}" class="btn btn-danger">Hide</a>
                    @else
                    <a href="{{route('category.status_update',[$category->id,1])}}" class="btn btn-success">Show</a>
                    @endif
                   </td>
                   <td>
                    <a href="{{route('category.remove',$category->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    <a href="{{route('category.edit',$category->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                   </td>
                 </tr>
                 @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection