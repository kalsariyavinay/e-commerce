@extends('admin.layout.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Subsubcategory</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Subsubcategory</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
<body>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><label><b>Edit</b></label></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- form start -->
                            <form action="{{route('subsubcategory.update',$data['id'])}}" method="post"  role="button" enctype="multipart/form-data">
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

                                 <div class="form-group">
                                  <label>Subcategory Name</label>
                                  <select class="form-control select2" value="{{$data['subcategory']}}" name="subcategory" style="width: 100%;" id="subcategory" ></select>
                                </div>

                                <div class="mb-2"><label>Sub-subcategory Name</label>
                                    <input type="text" placeholder="Enter subsubcategory" class="form-control" value="{{$data['subsubcategory']}}" name="subsubcategory" id="subsubcategory" required>
                                </div>

                                <button type="submit" name="update" class="btn btn-primary">Edit</button>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</body>
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
    $.post('{{ route('get_subcategory_ajax') }}',{_token:'{{ csrf_token() }}', cat_id:cat_id}, function(data)
      {
        $('#subcategory').html(null);
        for (var i = 0; i < data.length; i++) 
        {
          $('#subcategory').append($('<option>',
            {value: data[i].id,
              text: data[i].subcategory}));
        }
        $("#subcategory > option").each(function() 
        {
          if(this.value == '{{$data->subcategory}}')
          {$("#subcategory").val(this.value).change();
        }
      });
    }); 
  }
    
</script>
@endsection