@extends('admin.layout.app')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
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
                  Product List
                </h3>
                <a href="{{route('product.create')}}" class="float-right btn btn-dark"><i class="fas fa-plus-circle"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1"  class="table table-striped border">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Product Name</th>
                      <th>Slug</th>
                      <th>Sub-subcategory Name</th>
                      <th>Subcategory Name</th>
                      <th>Category Name</th>
                      <th>Price</th>
                      <th>Logo</th> 
                      <th>Date/Time</th>
                      <th>IsPublished</th>
                      <th>Today's Deals</th>
                      <th>Action Type</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $key => $item)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$item->product}}</td>
                      <td>{{$item->slug}}</td>
                      <td>{{$item->subsubcategorys->subsubcategory ?? ""}}</td>
                      <td>{{$item->subcategorys->subcategory ?? ""}}</td>
                      <td>{{$item->categorys->name ?? ""}}</td>
                      <td>{{$item->price}}</td>
                      <td><img src="{{asset($item->logo)}}" alt="" width="50px" height="50px"></td>
                      <td>{{$item->created_at}}</td>
                      <td>
                        @if($item->is_published == 1)
                        <a href="{{route('product.status_update',[$item->id,0])}}" class="btn btn-danger">Hide</a>
                        @else
                        <a href="{{route('product.status_update',[$item->id,1])}}" class="btn btn-success">Show</a>
                        @endif
                        </td>
                      <td>Panding</td>
                      <td>
                        <a href="{{route('product.edit',$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <a href="{{route('product.delete',$item->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>.
              <!-- /.card-body -->
              </div>

            <!-- /.card -->
            </div>

          <!-- /.col -->
          </div>

        <!-- /.row -->
        </div>

      <!-- /.container-fluid -->
      </div>

  </section>
  <!-- /.content -->
</div>
  
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