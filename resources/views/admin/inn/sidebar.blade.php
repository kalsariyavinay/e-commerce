  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('frontend/img/log.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('dashboard')}}" class="d-block">Mobile Market</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active">
              <i class="fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="fa fa-shopping-cart"></i>
            <p>
            Products
            <i class="right fas fa-angle-left"></i>
            </p>
            </a>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('product.index')}}" class="nav-link">
                    <p>Products</p>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a href="{{route('category.index')}}" class="nav-link">
                    <p>Category</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{route('subcategory.index')}}" class="nav-link">
                    <p>Sub Category</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{route('subsubcategory.index')}}" class="nav-link">
                    <p>SubSub Category</p>
                  </a>
                </li>
            </ul>
          </li>