@extends('admin.layout.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sub-subcategory</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"><label><b>Sub-subcategory</b></label></li>
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
            @if (session('status'))
            <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif
              <div class="card">
                <div class="card-header">
                <h3 class="card-title"><label><b>Sub-subcategory Create</b></label></h3>
              </div>
            <!-- /.card-header -->
            <div class="card-body">
                  <!-- form start -->
                        <form action="{{route('subsubcategory.store')}}" method="post"  role="button" >
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
                            <select class="form-control select2" name="subcategory" style="width: 100%;" id="subcategory_id" required></select>
                          </div>
  
                          <div class="mb-2"><label>Sub-subcategory Name</label>
                            <input type="text" placeholder="Enter subsubcategory" class="form-control" name="subsubcategory" id="subsubcategory" required></div>
                          
                        <button class="btn btn-primary" type="submit">submit</button>
                        </form>
                    </div>
                  <!-- /.card -->
              </div>
              <!-- /.row -->
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
      }

    });

    
</script>
@endsection