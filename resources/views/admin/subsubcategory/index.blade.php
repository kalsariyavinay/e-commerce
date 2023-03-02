@extends('admin.layout.app')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subsub category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Subsub category</li>
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
                    Subsub category List
                </h3>
                <a href="{{route('subsubcategory.create')}}" class="float-right btn btn-dark"><i class="fas fa-plus-circle"></i></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1"  class="table table-striped border">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th> 
                            <th>Subcategory</th>
                            <th>Subsub category</th>
                            <th>Slug</th>
                            <th>Date</th>
                            <th>Action Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subsubcategory as $key => $sub)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$sub->categorys->name}}</td>
                            <td>{{$sub->subcategorys->subcategory}}</td>
                            <td>{{$sub->subsubcategory}}</td>
                            <td>{{$sub->slug}}</td>
                            <td>{{$sub->created_at}}</td>
                            <td>
                              <a href="{{route('subsubcategory.edit',$sub->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                              <a href="{{route('subsubcategory.delete',$sub->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a> 
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
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