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
              <li class="breadcrumb-item active"><label><b>Product</b></label></li>
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
                <h3 class="card-title"><label><b>Product Create</b></label></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- form start -->
                  <form action="{{route('product.store')}}" method="post"  role="button" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label>Category Name</label>
                      <select class="form-control select2" name="category" style="width: 100%;"  id="category_id" required>
                        @foreach($category as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Subcategory Name</label>
                      <select class="form-control select2" name="subcate_id" style="width: 100%;" id="subcategory_id" required></select>
                    </div>
                    
                    <div class="form-group">
                      <label>Subsub-category Name</label>
                      <select class="form-control select2" name="subsubcate_id" style="width: 100%;" id="subsubcategory_id" required></select>
                    </div>
                    
                    <div class="mb-2">
                      <label>Product Name</label>
                      <input type="text" placeholder="Enter product" class="form-control" name="product" id="product" required>
                    </div>
                    
                    <div class="mb-2">
                      <label>Price</label>
                      <input type="text" placeholder="Enter price" class="form-control" name="price" id="price" required>
                    </div>
                          
                    <div class="form-group">
                      <label for="logo">Logo</label>
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
                    
                    <button class="btn btn-primary" type="submit" >submit</button>
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

@section('script')
<script>
    $(document).ready(function(){
      get_subcategory_by_category();
    });
    $("#category_id").change(function(){
      get_subcategory_by_category();
    });
    function get_subcategory_by_category(){
      var cat_id = $("#category_id").val();
      $.post('{{ route('get_subcategory_ajax') }}',{_token:'{{ csrf_token() }}', cat_id:cat_id}, function(data){
        $('#subcategory_id').html(null);
        for (var i = 0; i < data.length; i++) {
          $('#subcategory_id').append($('<option>', {
            value: data[i].id,
            text: data[i].subcategory
          }));
        }
      }); 
      setTimeout(function() {
        get_subsubcategory_by_subcategory();
      }, 1000);
    }
    $("#subcategory_id").change(function(){
      get_subsubcategory_by_subcategory();
    });
    function get_subsubcategory_by_subcategory(){
      var sub_id = $("#subcategory_id").val();
      console.log(sub_id);
      $.post('{{ route('get_subsubcategory_ajax') }}',{_token:'{{ csrf_token() }}', sub_id:sub_id}, function(data){
        $('#subsubcategory_id').html(null);
        for (var i = 0; i < data.length; i++) {
          $('#subsubcategory_id').append($('<option>', {
            value: data[i].id,
            text: data[i].subsubcategory
          }));
        }
      });
      }
</script>
@endsection